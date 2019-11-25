<?php
namespace Dtn\CategoryCustom\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Catalog\Model\CategoryFactory;
use Magento\Catalog\Model\ProductFactory;

class Cate extends \Magento\Framework\View\Element\Template
{
    protected $_categoryFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    )
    {
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    public function getCategory($categoryId)
    {
        $category = $this->_categoryFactory->create();
        $category->load($categoryId);
        return $category;
    }
    public function getChildCategories($categoryId)
    {

        $_category = $this->_categoryFactory->create();

        $category = $_category->load($categoryId);

        //Get category collection
        $collection = $category->getCollection()
            ->addIsActiveFilter()
            ->addOrderField('name')
            ->addIdFilter($category->getChildren());
        return $collection;
    }

    public function getCategoryProducts($categoryId)
    {
        $products = $this->getCategory($categoryId)->getProductCollection()
                    ->addAttributeToSelect('*');
        return $products;
    }
}