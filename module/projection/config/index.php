<?php

if ($this instanceof Manager_Controller) {
    $this->config('common/config/basic');
    $this->storage->scripts->setCss('/css/projection.css');
    $this->storage->pageId = 'projection-page';
    $this->storage->metatags->setTitle('Rzuty projektu adaptacji - ');
    $this->storage->metatags->setDescription('rzuty w svg');
    $this->storage->metatags->setKeywords('projekt');
    $link = new Model_Link_Container();
    $link->setTitle('Rzuty projektu remontu i adapcji domu')->setRoot();
    $this->storage->breadcrumbs->set(0, $link);
    
    
    $event = new Manager_Event();
    $event->setName('fluid')->setClass('Projection_Module_Image');
    $this->add($event);
    
    
    /* nawigacja */
    
    $url = '/rzut,k,';

    $nav = new Model_Collection();

    $link = new Model_Link_Container();
    $link->setId(1)->setUrl($url . 'parter-inwent')->setTitle('Rzut parteru')->setClass('parter');
    $nav->append($link);

    $link = new Model_Link_Container();
    $link->setId(2)->setUrl($url . 'poddasze-inwent')->setTitle('Rzut poddasza')->setClass('poddasze');
    $nav->append($link);

    $link = new Model_Link_Container();
    $link->setId(3)->setUrl($url . 'piwnica')->setTitle('Rzut piwnicy')->setClass('piwnica');
    $nav->append($link);

   

   /* $link = new Model_Link_Container();
    $link->setId(4)->setUrl($url . 'front-polnoc' )->setTitle('Rzut frontu północnego')->setClass('front-polnoc');
    $nav->append($link);*/

    $link = new Model_Link_Container();
    $link->setId(5)->setUrl($url . 'front-polnoc-luk-inwent' )->setTitle('Rzut frontu północnego')->setClass('front-polnoc-luk');
    $nav->append($link);
    
    $link = new Model_Link_Container();
    $link->setId(6)->setUrl($url . 'front-poludnie-inwent' )->setTitle('Rzut frontu południowego')->setClass('front-poludnie-luk');
    $nav->append($link);
    
    $link = new Model_Link_Container();
    $link->setId(7)->setUrl($url . 'przekroj-wschod-inwent' )->setTitle('Rzut przekroju wschodniego')->setClass('przekroj-wschod');
    $nav->append($link);
    
     $link = new Model_Link_Container();
    $link->setId(8)->setUrl($url . 'przekroj-zachod-inwent')->setTitle('Rzut przekroju zachodniego')->setClass('przekroj-zachod');
    $nav->append($link);

    $this->storage->setParam('list-nav', $nav);
    
    
    
} else {
    throw new Manager_Config_Exception('błąd konfiguracji dla strony głównej');
}