<?php
/**
 * Grid Record Index Controller.
 * @category  I95dev
 * @package   I95dev_Grid
 * @author    I95dev
 * @copyright Copyright (c) 2010-2017 I95dev Software Private Limited (https://I95dev.com)
 * @license   https://store.I95dev.com/license.html
 */
namespace I95dev\Grid\Controller\Adminhtml\Grid;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Mapped eBay Order List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('I95dev_Grid::grid_list');
        $resultPage->getConfig()->getTitle()->prepend(__('Grid List'));
        return $resultPage;
    }

    /**
     * Check Order Import Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('I95dev_Grid::grid_list');
    }
}
