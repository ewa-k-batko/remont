<?php

if ($this instanceof Manager_Controller) {
    $this->config('common/config/basic');
    $this->storage->scripts->setCss('/css/gallery.css');
    $this->storage->pageId = 'gallery-page';

    $link = new Model_Link_Container();
    $link->setTitle('Galeria inwestycji');
    $this->storage->breadcrumbs->set(1, $link);
    $this->storage->metatags->setTitle('Galeria - ');
    $this->storage->metatags->setDescription('Galeria zdjęć obiektu inwestycji.', 'append');
    $this->storage->metatags->setKeywords('zdjęcia,dom,');

    //$this->config('offer/config/nav');

    $event = new Manager_Event();
    $event->setName('fluid')->setClass('Gallery_Module_List');
    $this->add($event);

    
} else {
    throw new Manager_Config_Exception('błąd konfiguracji dla strony listy galerii');
}