<?php
class Projection_Module_Image extends Module_Abstract {
    function execute() {
        
        $this->in['k'] = $this->request->get('k');
        
        switch ($this->in['k']) {
           case 'przekroj-zachod':
            $this->template = 'projection/view/przekroj-zachod.phtml';
                break;
            case 'przekroj-wschod':
            $this->template = 'projection/view/przekroj-wschod.phtml';
                break;
            case 'front-polnoc':
            $this->template = 'projection/view/front_polnoc.phtml';
                break;
            case 'front-polnoc-luk':
            $this->template = 'projection/view/front_polnoc_luk_2.phtml';
                break;
            
            /* case 'wizualizacja': 
           default:           
             $this->template = 'projection/view/wizualizacja.phtml';
                break; */
            
            case 'front-poludnie-luk':
            $this->template = 'projection/view/front_poludnie_luk.phtml';
                break;
           case 'poddasze': 
           default:           
             $this->template = 'projection/view/poddasze.phtml';
                break;
             case 'poddasze-arch': 
           default:           
             $this->template = 'projection/view/poddasze-arch.phtml';
                break;
            case 'piwnica': 
           default:           
             $this->template = 'projection/view/piwnica.phtml';
                break; 
            
           case 'parter': 
           default:           
             $this->template = 'projection/view/parter.phtml';
                break; 
            case 'parter-arch': 
           default:           
             $this->template = 'projection/view/parter-arch.phtml';
                break;
            
    }     
       
        
        $this->out['list'] = $this->storage->getParam('list-nav');
        $this->storage->delParam('list-nav');
        
        if ($this->out['list'] instanceof Model_Collection) {
            try {
                $item = $this->out['list']->search('class', $this->in['k']);
                
                if ($item instanceof Model_Link_Container) {
                    $item->setActive($this->in['k']);
                }
            } catch (Exception $e) {
                
            }
        }        
        parent::execute();
    }
}
