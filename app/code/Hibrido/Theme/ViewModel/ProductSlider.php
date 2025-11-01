<?php
declare(strict_types=1);

namespace Hibrido\Theme\ViewModel;

use Magento\Catalog\Model\Product\Attribute\Source\Status;
use Magento\Catalog\Model\Product\Visibility;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class ProductSlider implements ArgumentInterface
{
    public function __construct(
        private CollectionFactory $productCollectionFactory
    ) {
    }

    /**
     * @return \Magento\Catalog\Model\ResourceModel\Product\Collection
     */
    public function getNewsProductsCollection()
    {
        $collection = $this->productCollectionFactory->create()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('status', ['in' => Status::STATUS_ENABLED])
            ->addAttributeToFilter('visibility', Visibility::VISIBILITY_BOTH);
        $collection->setPageSize(10);
        $collection->setOrder('created_at', 'desc');

        return $collection;
    }
}
