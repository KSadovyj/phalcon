<?php
 require_once 'simple_html_dom.php';

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $URL = 'http://midexpress.com.ua/smartfony-i-telefony.html';
        
        $html = file_get_html($URL);                           // получаемы контент каждой страницы
        $result = $html->find('div.grid_4 div.prodtitle a[title]');     // ищем объекты с нужными нам тегами
        
        $this->view->setVar('results', $result);
    }
}

