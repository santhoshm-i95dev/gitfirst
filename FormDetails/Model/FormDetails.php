<?php
namespace I95dev\FormDetails\Model;

class FormDetails extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('I95dev\FormDetails\Model\ResourceModel\FormDetails');
    }
}
