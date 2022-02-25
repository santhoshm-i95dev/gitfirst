<?php
/**
 * Hello Employee Index Controller.
 * @category  Webkul
 * @package   Webkul_Hello
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace I95dev\Hello\Controller\Adminhtml\Employee;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Mapped eBay Order List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        echo __('Hello I95dev Team.');
    }

    /**
     * Check Order Import Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('I95dev_Hello::employee');
    }
}
