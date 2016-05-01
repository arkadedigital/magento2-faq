<?php
namespace Arkade\Faq\Block\Widget;

class FaqsList extends \Arkade\Faq\Block\FaqsList implements \Magento\Widget\Block\BlockInterface
{
    public function getTemplate()
    {
        if (is_null($this->_template)) {
            $this->_template = 'Arkade_Faq::list.phtml';
        }
        return $this->_template;
    }
}
