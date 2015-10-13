<?php

class Contact_Module_Main extends Module_Abstract {

    function execute() {

       
        $this->template = 'contact/view/main.phtml';
        parent::execute();
    }

}
