var mig = mig || {};
mig.gallery = function (window, confApp) {
    "use strict";
    var jQuery = window.$j, root, confDef, conf,
            int = function (s) {
                return parseInt(s, 10);
            },
            confDef = {
                root: '.gallery-list',
                image: '.gallery-img',
                pos: 0
            },
            init = function () {
                if (!conf.screen) {
                    jQuery('body').append('<div class="screen"><a class="link prevout"/><a class="link prev"/><a class="link current"/><a class="link next"/><a class="link nextin"/></div>');
                    conf.body = jQuery('.body-page');
                    conf.screen = jQuery('.screen');
                    setNav();
                    conf.curr = conf.curr || {};
                    conf.pos = conf.pos || 0;

                    conf.list = root.find(conf.image);

                    root.delegate(conf.image, 'dblclick', function () {
                        makeStart(jQuery(this));
                    });

                }
            },
            setNext = function () {
                conf.posNext = conf.pos + 1 <= conf.list.length -1 ? conf.pos + 1 : -1;
            },
            setPrev = function () {
                conf.posPrev = conf.pos - 1 >= 0 ? conf.pos - 1 : -1;
            },
            setNav = function () {
                conf.prev = conf.screen.find('.prev');
                conf.prevout = conf.screen.find('.prevout');
                conf.current = conf.screen.find('.current');
                conf.next = conf.screen.find('.next');
                conf.nextin = conf.screen.find('.nextin');
                
                conf.prevout.html('').removeAttr( 'data-pos' );
                conf.nextin.html('').removeAttr( 'data-pos' );
            },
            setEven = function () {
                conf.prev.on('click',function (e) {
                    prevMake(jQuery(e.currentTarget));
                });
                conf.next.on('click',function (e) {
                    nextMake(jQuery(e.currentTarget));
                });
                conf.current.on('click',function (e) {
                    currentMake(jQuery(e.currentTarget));
                });
                conf.nextin.on('click',function (e) {
                    e.stopPropagation();
                });
                conf.prevout.on('click',function (e) {
                    e.stopPropagation();
                });
            },
            currentMake = function () {
                conf.body.fadeTo("slow", 1);
                //conf.screen.addClass('hide');
                conf.screen.hide();
                conf.prevout.html('');
                conf.prev.html('');
                conf.current.html('');
                conf.next.html('');
                conf.nextin.html('');
               
                conf.pos =0;
                setPrev();
                setNext();
                //stop eventy  na nav
                
                //@todozoptymalizowac
                root.delegate(conf.image, 'dblclick', function () {
                        makeStart(jQuery(this));
                    });
            },
            prevMake = function (curr) {

                conf.pos = int(curr.attr('data-pos'));
                setPrev();
                setNext();


                conf.nextin.removeClass('nextin').addClass('noshow').off();
                conf.next.removeClass('next').addClass('nextin').off();
                conf.current.removeClass('current').addClass('next').off();
                curr.removeClass('prev').addClass('current').off();

                conf.noshow = conf.screen.find('.noshow');


                if (conf.posPrev >= 0) {
                    var prevSrc = jQuery(conf.list[conf.posPrev]).attr('src');
                    console.debug(prevSrc, 'prevSrc');
                    //if (!conf.prevout.has('img')) {
                    conf.prevout.html(jQuery(new Image()).attr({'src': prevSrc}).addClass('new-img'));
                    // }
                    conf.prevout.removeClass('prevout').addClass('prev').attr({'data-pos': conf.posPrev}).off();
                    conf.noshow.removeClass('noshow').addClass('prevout').off();

                }

                setNav();
                setEven();
            },
            nextMake = function (curr) {
                conf.pos = int(curr.attr('data-pos'));
                setPrev();
                setNext();
                
                conf.prevout.removeClass('prevout').addClass('noshow').off();
                conf.prev.removeClass('prev').addClass('prevout').off();
                conf.current.removeClass('current').addClass('prev').off();
                curr.removeClass('next').addClass('current').off();

                conf.noshow = conf.screen.find('.noshow');

                console.debug(conf.posNext, 'conf.posNext');
                if (conf.posNext >= 0) {
                    var nextSrc = jQuery(conf.list[conf.posNext]).attr('src');
                    console.debug(nextSrc, 'nextSrc');
                    //if (!conf.prevout.has('img')) {
                    conf.nextin.html(jQuery(new Image()).attr({'src': nextSrc}).addClass('new-img'));
                    // }
                    conf.nextin.removeClass('nextin').addClass('next').attr({'data-pos': conf.posNext}).off();
                    conf.noshow.removeClass('noshow').addClass('nextin').off();
                }

                setNav();
                setEven();
            },
            makeStart = function (curr) {
                conf.curr.src = curr.attr('src');


                // console.debug(curr.attr('src'), 'init-curr');

                conf.pos = int(curr.attr('data-pos'));
                setPrev();
                setNext();



                conf.curr.prev = jQuery(conf.list[conf.posPrev]).attr('src');
                conf.curr.next = jQuery(conf.list[conf.posNext]).attr('src');
                conf.prev.attr({'data-pos': conf.posPrev});
                conf.next.attr({'data-pos': conf.posNext});

                conf.current.attr({'data-pos': conf.pos});
                console.debug(conf.list[conf.curr.pos], 'pos-5');


                console.debug(conf.curr.prev, 'conf-2-next');

                conf.prev.html(jQuery(new Image()).attr({'src': conf.curr.prev}).addClass('new-img'));
                conf.next.html(jQuery(new Image()).attr({'src': conf.curr.next}).addClass('new-img'));

                conf.current.html(jQuery(new Image()).attr({'src': conf.curr.src}).addClass('new-img'));

                conf.screen.show();

                conf.body.fadeTo("slow", 0.33);
                window.scrollTo(0, 0);

                setEven();

            };
    conf = jQuery.extend(confDef, confApp);
    root = jQuery(conf.root);
    init();





};



