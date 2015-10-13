var mig = mig || {};
mig.switcher = mig.switcher || {};
mig.switcher.dom = function (window, confApp) {
    "use strict";
    var jQuery = window.$j, root, confDef, conf,
            int = function (s) {
                return parseInt(s, 10);
            };
    confDef = {
        list: []
    };
    conf = jQuery.extend(confDef, confApp);



    var init = function () {
        jQuery('.switcher').each(function (i) {
            conf.list.push(jQuery('.' + jQuery(this).attr('data-id-to-switch')));
            
        });
        
        jQuery('.switcher').click(function (e) {  
                e.stopPropagation();
                console.log(conf.list);
                //conf.list.each(function(){jQuery(this).hide();});
                for (var i; i<conf.list.length; i++) {
                    conf.list[i].hide();  
                    
                }
                
                
                
                
                var el = jQuery('.' + jQuery(this).attr('data-id-to-switch'));
                el.show();
                return false;
            });
            
            
       /* jQuery('.switcher').each(function (i) {

            var elm = {switcher: jQuery(this),
                switched: jQuery('.' + jQuery(this).attr('data-id-to-switch'))};
            
conf.list.push(elm);

            elm.switcher.click(function (e) {
                e.stopPropagation();
                
                console.log(jQuery(this));
                hider(jQuery(this));

                //var el = jQuery('.' + jQuery(this).attr('data-id-to-switch'));
              //  elm.switched.show();
                return false;

            });
            
            
        });*/

        

    },
            hider = function (elm) {
                
                console.log('hider');
               // console.log(conf.list);
                for (var i; i<conf.list.length; i++) {
                    
                    
                    console.debug(elm.attr('class'),   'elm');
                    console.debug(conf.list[i].switched.attr('class'), 'list');
                    
                    
                    if( elm.attr('class') == conf.list[i].switched.attr('class') ) {
                        
                        elm.show();
                    } else {
                      conf.list[i].switched.hide();  
                        
                    }
                    
                    
                }
               
            };


init();

};



