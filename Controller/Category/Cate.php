<?php

namespace Dtn\CategoryCustom\Controller\Category;

use Magento\Framework\App\Action\Action;

class Cate extends Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
?>