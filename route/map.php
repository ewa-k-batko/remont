<?php
switch ($route) {
    case '/':
     return 'index/config/index';
        break;
            
    case '/rzut': 
        return 'projection/config/index';
        break;
    
   case '/kontakt':     
        return 'contact/config/contact';
        break; /**/
   case '/kontakt/formularz-wyslij-wiadomosc': 
   return 'contact/config/send';
        break;
       /*   return 'contact/config/contact';
        break;
  case '/ajax/kontakt/wyslij':
        return 'contact/config/send-ajax';
        break;*/
    case '/galeria':
        return 'gallery/config/list';
        break;
    case '/polityka-cookie':
        return 'index/config/cookie';
        break;
    
    default:
        return 'common/config/error404';
        break;
}