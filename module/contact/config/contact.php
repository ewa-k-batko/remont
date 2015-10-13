<?php

if ($this instanceof Manager_Controller) {
    $this->config('common/config/basic');
    $this->storage->scripts->setCss('/css/contact.css');

    $this->storage->pageId = 'contact-page';
    $link = new Model_Link_Container();
    $link->setTitle('Kontakt');
    $this->storage->breadcrumbs->set(1, $link);
    $this->storage->metatags->setTitle('Formularz kontaktowy - ');
    $this->storage->metatags->setDescription('Kontakt.', 'append');
    //$event = new Manager_Event();
    //$event->setName('main')->setClass('Contact_Module_Main');
    
    
   $event = new Manager_Event();
    $event->setName('main')->setClass('Contact_Module_Main');
    
    
    
    $this->add($event);
    $event = new Manager_Event();
    $event->setName('aside')->setClass('Module_Module')->setTemplate('contact/view/aside.phtml');
    $this->add($event);
} else {
    throw new Manager_Config_Exception('błąd konfiguracji dla strony kontaktu');
}