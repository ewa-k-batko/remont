<?php

if ($this instanceof Manager_Controller) {

    $this->layout = 'common/view/layout.phtml';
    self::$orderEvent = array('init', 'fluid', 'main', 'aside', 'brand', 'header', 'nav', 'footer');

    $this->storage->metatags->setTitle('Remont domu');
    $this->storage->metatags->setDescription('Projekt remontu domu.');
    $this->storage->metatags->setKeywords('projekt,dom,remont');

    $this->storage->scripts->setCss('/css/basic.css');


    /* $this->storage->scripts->setCss('/css/old/normalize.css');
      $this->storage->scripts->setCss('/css/old/grid.css');
      $this->storage->scripts->setCss('/css/old/theme.css');
     */

    $this->storage->scripts->setJs(Manager_Config::istatUrl() . 'js/modernizr.js', Manager_Helper_Scripts::SLOT_HEAD);
    $this->storage->scripts->setJs(Manager_Config::istatUrl() . 'js/jquery/jquery-1.11.2.min.js', Manager_Helper_Scripts::SLOT_FOOT);  
    //$this->storage->scripts->setJs(Manager_Config::istatUrl() . 'js/jquery/jquery.cookie.js', Manager_Helper_Scripts::SLOT_FOOT);  
    
    $this->storage->scripts->setJQuery();

    $link = new Model_Link_Container();
    $link->setTitle('Dom')->setUrl('/');
    $this->storage->breadcrumbs->set(0, (new Model_Link_Container())->setTitle('Dom')->setUrl('/'));

    /**
     * navigation start
     */
    $nav = new Model_Collection();
    $link = new Model_Link_Container();
    $link->setUrl('/')->setTitle('Strona główna')->setClass('front-page');
    $nav->append($link);
    $link = new Model_Link_Container();
        $link->setUrl('/rzut')->setTitle('Rzuty')->setClass('image-page');
    $nav->append($link);
    $link = new Model_Link_Container();
    $link->setUrl('/kontakt')->setTitle('Dojazd')->setClass('contact-page');
    $nav->append($link);
    $link = new Model_Link_Container();
    $link->setUrl('/galeria')->setTitle('Galeria ')->setClass('gallery-page');
    $nav->append($link);
    /**
     * navigation end
     */   

    $event = new Manager_Event();
    $event->setName('header')->setClass('Module_Module')->setTemplate('common/view/header.phtml')
            ->setOut(array('title' => 'Strona domowa szkółki'));
    $this->add($event);

    $event = new Manager_Event();
    $event->setName('nav')->setClass('Common_Module_Nav')->setTemplate('common/view/nav.phtml')
            ->setOut(array('title' => 'nawigacja serwisu',
                'cssClass' => 'main-service-nav',
                'list' => $nav));
    $this->add($event);
    $event = new Manager_Event();
    $event->setName('footer')->setClass('Module_Module')->setTemplate('common/view/footer.phtml');
    $this->add($event);
} else {
    throw new Manager_Config_Exception('błąd konfiguracji dla podtawowych elementow strony');
}