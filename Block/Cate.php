<?php

namespace Dtn\CategoryCustom\Block;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Data\CollectionFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Cate extends \Magento\Framework\View\Element\Template
{


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        parent::__construct($context);
    }

}