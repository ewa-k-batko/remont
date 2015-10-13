<?php

class Gallery_Module_List extends Module_Abstract {

    function execute() {
        $this->out['list'] = array(
            '_IGP7143_s.jpg',
            '_IGP7144_s.jpg',            
            '_IGP7149_s.jpg', 
             '_IGP7151_s.jpg',
            '_IGP7152_s.jpg',
            
            '_IGP7586-fundament.jpg',
            '_IGP7587-fundament.jpg',
             '_IGP7588-fundament.jpg',
            '_IGP7591-fundament.jpg',
            '_IGP7592-fundament.jpg',
            '_IGP7593-fundament.jpg',
            '_IGP7596-fundament.jpg',
            '_IGP7598-fundament.jpg',
            '_IGP7599-fundament.jpg',
            
            
            'dach-dwuspadowy2780.jpg',
            'view_nnq8d3q0dlco7f_View.jpg',
            
            'lukarna-z-jednospadowym-daszkiem.jpg',
            
            'view_sc39rch0dk5ep7_View.jpg',
            'view_67eiqm00dk5ep7_View.jpg',
            'schody.jpg',
            
            /*'dcp276_fr1_gk.jpg',
            'lukarna_2.jpg',
            'z12566321Q.jpg',
            'Z236_view2_1634_919_tl_normal.jpg',
            '2luk-g.jpg'*/
        );

           //shuffle($this->out['list']);
        $this->out['path'] = 'z/';


        $this->template = 'gallery/view/list.phtml';
        parent::execute();
    }

}
