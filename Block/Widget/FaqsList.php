<?php
namespace Fc\Faqs\Block\Widget;

class FaqsList extends \Fc\Faqs\Block\FaqsList implements \Magento\Widget\Block\BlockInterface
{
    public function getTemplate()
    {
        if (is_null($this->_template)) {
            $this->_template = 'Fc_Faqs::list.phtml';
        }
        return $this->_template;
    }
}
