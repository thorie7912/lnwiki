<?php

namespace App\Controller;

use App\Model\ViewContext;

class IndexController extends ViewController
{
    public function __construct(ViewContext $viewContext)
    {
        parent::__construct($viewContext);
        
        $this->authNotRequired = [
            '',
            'index',
            'index/index',
        ];
    }
    
    public function indexAction(array $params)
    {
      var_dump($params);
        $this->view->render('index/index');
    }
}
