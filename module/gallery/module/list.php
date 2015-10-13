<?php

class Gallery_Module_List extends Module_Abstract {

    function execute() {
        $this->out['list'] = array(
             'fiolek_bk-1300-a0-p.jpg',
            '_IGP7143_s.jpg',
            '_IGP7144_s.jpg',            
            '_IGP7149_s.jpg', 
             '_IGP7151_s.jpg',
            '_IGP7152_s.jpg',
            
            'g_350_8.jpg',
            'Schody_strychowe_nozycowe.jpg',
            'Schody_strychowe_Super_Termo_60_x_120.jpg'
            
            /*'_IGP7586-fundament.jpg',
            '_IGP7587-fundament.jpg',
             '_IGP7588-fundament.jpg',
            '_IGP7591-fundament.jpg',
            '_IGP7592-fundament.jpg',
            '_IGP7593-fundament.jpg',
            '_IGP7596-fundament.jpg',
            '_IGP7598-fundament.jpg',
            '_IGP7599-fundament.jpg',*/
           
            
           /* 'dach-dwuspadowy2780.jpg',
            'view_nnq8d3q0dlco7f_View.jpg',
            
            'lukarna-z-jednospadowym-daszkiem.jpg',
            
            'view_sc39rch0dk5ep7_View.jpg',
            'view_67eiqm00dk5ep7_View.jpg',
            'schody.jpg',
            
            'dcp276_fr1_gk.jpg',
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

/*
 * http://blog.designbywomen.pl/wp-content/uploads/2012/07/96_000000066_c6dc_orh550w550_CH0605-38.jpg
 * http://www.leba-kurort.pl/noclegi/ewa_ow/obr/8279_d.jpg
 * http://blog.designbywomen.pl/wp-content/uploads/2012/07/conservatory-dining_room.jpg
 * http://img28.staticclassifieds.com/images_tablicapl/93375145_4_644x461_ogrod-zimowy-oranzeria-zabudowa-uslugi-i-firmy.jpg
 * http://www.rostliny-semena.cz/galerie/conservatory-earlswood-4_1391727158.jpg
 * http://www.almos2.pl/files/foto/ogrodyzimowe/ogrody_zimowe_zabudowy_A1____1290461375_small.jpg
 * http://www.zielonyogrodek.pl/images/media2/27061ogrod_zimowy_fot._Anta.jpg
 * http://img3.oferia.pl/47f9df5ada988f994266e7b076c833d5_1000_1000_0_1.jpg
 * http://taras-balkon.pl/wp-content/gallery/ogrod-zimowy-2/ogrod_zimowy_kacperski.jpg
 * http://aluxim.cba.pl/galeria/ogrody/ogrody10.jpg
 * http://www.kreocen.pl/uploads/13819060727477.jpg
 * http://hammerbud.pl/wp-content/gallery/ogrod-zimowy/oz_1.jpg
 * http://www.gardenplanet.com.pl/grafiki/art1/weranda_nieporet2.jpg
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * https://www.google.pl/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0CAcQjRxqFQoTCMLS7qT8ksgCFYprcgodvEgN3A&url=http%3A%2F%2Fczytaj.tooba.pl%2FZimowy-ogrod-atrakcyjnym-miejscem-domu&bvm=bv.103627116,d.bGQ&psig=AFQjCNEtFDNn-2p6EggsCGtRMCCMXYJQJw&ust=1443297350093696
 * 
 * 
 * http://foto.favore.pl/2011/4/7/11/305823_1302168112154_o.jpg
 */
