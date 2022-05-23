<?php
namespace I95dev\FormDetails\Model\ResourceModel;

class FormDetails extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('i95dev_User_List', 'id');
    }
}
