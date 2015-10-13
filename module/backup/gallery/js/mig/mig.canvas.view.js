var mig = mig || {};
mig.canvas = mig.canvas || {};
mig.canvas.view = function (window, confApp) {
    "use strict";
    var jQuery = window.$j, root, confDef, conf,
            int = function (s) {
                return parseInt(s, 10);
            };
    confDef = {
        root: '.svg-canvas'
    };
    conf = jQuery.extend(confDef, confApp);

    var canv = jQuery(conf.root),
            calculate = jQuery('.calculate'),
            desc = jQuery('.desc'),
            reseter = jQuery('.reseter'),
            start = jQuery('.start'),
            end = jQuery('.end'),
            zoom0ut = jQuery('.zoom-out'),
            zoomIn = jQuery('.zoom-in'),
            // menus = jQuery('.tools-link'),            
            txt = '',
            reset = function () {
                conf.X = 0;
                conf.Y = 0;
                conf.Xe = 0;
                conf.Ye = 0;

                conf.Xr = 0;
                conf.Yr = 0;

                conf.cnt = 0;
                start.css({top: conf.Y, left: conf.X});
                end.css({top: conf.Ye, left: conf.Xe});
                calculate.html('').css({top: conf.Y, left: conf.X, width: 0, height: 0});
                desc.html('');
                canv.css({transform: 'scale(' + 1 + ')', top: 0, left: 0});
            };


    jQuery('.switcher').click(function (e) {
        e.stopPropagation();
        var el = jQuery('.' + jQuery(this).attr('data-id-to-switch'));
        el.toggle();
        return false;
    });


    jQuery('svg *').click(function (e) {
        if (jQuery(this).attr('stroke') != 'red') {
            jQuery(this).attr({'stroke': 'red'});
        } else {
            jQuery(this).attr({'stroke': 'black'});
        }
    });



    /* jQuery('.menus').click(function (e) {                
     var el = jQuery('.' + jQuery(this).attr('data-id-to-switch'));
     el.toggle();                
     });*/



    reseter.click(function (e) {
        reset();
    });


    zoom0ut.click(function (e) {
        var cs = canv.css({transform: 'scale'});
        console.log(cs);
        canv.css({transform: 'scale(' + 1.2 + ')', top: '15%', left: '10%', 'z-index': 200});
    });
    zoomIn.click(function (e) {
        reset();
        canv.css({transform: 'scale(' + 0.7 + ')'});
    });


    //mouseover
    canv.click(function (e) {
        console.debug(e, 'e');

        conf.cnt++;

        if (conf.cnt == 1) {
            conf.X = e.pageX;

            conf.Y = e.pageY;
            start.css({top: conf.Y, left: conf.X});
            txt = 'x: ' + conf.X + ', y:' + conf.Y;
            calculate.html(txt).css({top: conf.Y - 80, left: conf.X - 80, width: '120px', height: '80px'});
            desc.html(txt);
        }

        if (conf.cnt == 2) {
            conf.Xe = e.pageX;
            conf.Ye = e.pageY;
            conf.Xr = Math.abs(conf.X - conf.Xe);
            conf.Yr = Math.abs(conf.Y - conf.Ye);
            end.css({top: conf.Ye - 5, left: conf.Xe - 5});
            txt = 'w: ' + conf.Xr + ', h:' + conf.Yr;
            desc.html(txt + '<span>' + 'p:' + ((conf.Xr * conf.Yr) / 10000) + '</span>');

            if (conf.Xr > 100 && conf.Yr > 40) {
                calculate.html(txt);
            } else {
                calculate.html('');
            }
            calculate.css({top: conf.Y, left: conf.X, width: conf.Xr + 'px', height: conf.Yr + 'px'});
        }

    });

};



