// JavaScript Document
(function($){

   var defaults  = {
   
   } 

   var jmtab = function(container,options){
      this.options = $.extend({}, defaults, options);

      this.options.container = container;
      this.init(); 
   }


   jmtab.prototype = {
       init:function(){

             options = this.options;
             $(options.container).find(".jm-tabs-title li:eq(0)").addClass("first active"); 
             var panelwidth = $(options.container).find(".tabs_content").width();
             if(options.width == 'auto'){
              $(options.container).find(".jm-tab-panels-"+options.position+" .jm-tab-content").css({'width': panelwidth+'px'});       
             }
             if(options.height == 'auto'){
              var panelheight = $(options.container).find(".jm-tab-panels-"+options.position+" .jm-tab-content:eq(0)").height();
             }else{
              var panelheight = options.height;
             }

             if(options.animation == 'animMoveVer'){
              setTimeout(function(){
                   $(options.container).find(".tabs_content").css({'height':panelheight+'px'});            
                });
             }else{
               setTimeout(function(){
                   $(options.container).find('.jm-tab-panels-'+options.position).css({'height':panelheight+'px'}); 
                  });
             }

             $(options.container).find(".jm-tabs-title li").data("options")
             $(options.container).find(".jm-tabs-title li").each($.proxy(function(k,tab){

                $(tab).bind(options.event,$.proxy(function(){
                 
                  this.bindevent(tab);
                },this));

             },this));
            
           $(".jm-tabs-title .tab:first").trigger("tabclick");
           $(window).load ($.proxy(function (){
                   this.tabContent($(".jm-tabs-title .tab:first"),options)
                   
             },this));
       },
       bindevent:function(tab){
              
              ind = $(tab).index();
              $(this.options.container).find(".jm-tabs-title li").removeClass("first active"); 
              $(this.options.container).find(".jm-tabs-title li:eq("+ind+")").addClass("first active"); 
              
              this.tabContent(tab); 
              $(tab).trigger("tabclick"); 
       },
       tabContent:function(tab){
                ind = ind = $(tab).index();

                options = this.options;
                
                if(!options.skipanim){
                    if(options.animation == 'animMoveHor'){

                        var margin = $(options.container).find(".tabs_content").width();
                      //alert(margin); 
                      if(options.width == 'auto'){
                         $(options.container).find(".jm-tab-panels-"+options.position+" .jm-tab-content").css({width: margin+'px'});        
                      }
                      margin = margin * ind;
                      margin = margin * -1;

                      $(options.container).find(".jm-tab-panels-"+options.position).stop().animate({
                          marginLeft: margin + "px"
                      }, {
                          duration: options.duration
                      });  

                    }else if(options.animation == 'animMoveVer'){
                        var margin=0;
                      for (var i=0;i<ind;i++) {   
                          margin = margin + $(options.container).find(".jm-tab-content:eq("+i+")").height();
                      }
                      //alert(margin);
                      margin = margin * -1;
                      
                      $(options.container).find(".jm-tab-panels-"+options.position).stop().animate({
                          marginTop: margin + "px"
                      }, {
                         duration: options.duration     
                      });
                    }else if(options.animation == 'fadeIn'){
                       
                        $(options.container).find(".jm-tab-content").css('height','0px').css('overflow','hidden');
                         
                        $(options.container).find(".jm-tab-content:eq("+ind+")").css('height','auto');
                        var isTouch = 'ontouchstart' in window && !(/hp-tablet/gi).test(navigator.appVersion);
                        if (isTouch) {
                          setNiceSroll(ind);
                        }
                    }
                }else{
                     
                }
            //resize the height of the sub-panel
            if(options.height !== 'auto'){
               var panelheight = options.height+'px'; 
            }
            if(options.animation == 'animMoveVer'){
                    setTimeout(function(){
                    if(!panelheight) { 
                        var panelheight = ($(options.container).find(".jm-tab-panels-"+options.position+" .jm-tab-content:eq("+ind+")").height())+'px';
                     }
                    $(options.container).find(".tabs_content").animate({'height':panelheight},{queue:false, duration:1000}); 
                });
            }else{
                      setTimeout(function(){
                     if(!panelheight) { 
                        var panelheight = ($(options.container).find(".jm-tab-panels-"+options.position+" .jm-tab-content:eq("+ind+")").height())+'px';
                     }

                    $(options.container).find('.jm-tab-panels-'+options.position).animate({'height':panelheight},{queue:false, duration:1000}); 
                });
            }  
       }

   }
   $.fn.jmtab = function(options){
          new jmtab(this,options);
   };
   
})(jQuery)


