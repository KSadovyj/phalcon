<?php
 require_once 'simple_html_dom.php';

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $URL = 'http://midexpress.com.ua/smartfony-i-telefony.html';    // адрес страницы, на которой производится поиск названий товаров
        
        $html = file_get_html($URL);                           // получаемы контент каждой страницы
        
        preg_match_all('#<img alt="(.+?)" src#is',
          $html,
          $result, PREG_PATTERN_ORDER);
        
  
        $this->view->setVar('results', $result);
    }
}

