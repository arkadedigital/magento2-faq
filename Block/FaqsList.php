<?php
namespace Arkade\Faq\Block;

use Arkade\Faq\Api\Data\FaqInterface;
use Arkade\Faq\Model\ResourceModel\Faq\Collection as FaqCollection;

class FaqsList extends \Magento\Framework\View\Element\Template implements
    \Magento\Framework\DataObject\IdentityInterface
{
    /**
     * @var \Arkade\Faq\Model\ResourceModel\Faq\CollectionFactory
     */
    protected $_faqCollectionFactory;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Arkade\Faq\Model\ResourceModel\Faq\CollectionFactory $faqCollectionFactory,
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Arkade\Faq\Model\ResourceModel\Faq\CollectionFactory $faqCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_faqCollectionFactory = $faqCollectionFactory;
    }

    /**
     * @return \Arkade\Faq\Model\ResourceModel\Faq\Collection
     */
    public function getFaqs()
    {
        // Check if faqs has already been defined
        // makes our block nice and re-usable! We could
        // pass the 'faqs' data to this block, with a collection
        // that has been filtered differently!

        /**
         * @todo check sort order is doing as it should
         * May need to be FaqInterface::SORT_ORDER_DESC
         */
        if (!$this->hasData('faqs')) {
            $faqs = $this->_faqCollectionFactory
                ->create()
                ->addFilter('is_active', 1)
                ->addOrder(
                FaqInterface::SORT_ORDER,
                FaqCollection::SORT_ORDER_ASC
            );
            $this->setData('faqs', $faqs);
        }
        return $this->getData('faqs');
    }

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return [\Arkade\Faq\Model\Faq::CACHE_TAG . '_' . 'list'];
    }

}
