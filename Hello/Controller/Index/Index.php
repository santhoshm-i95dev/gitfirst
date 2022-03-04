<?php
/**
 * I95dev Software.
 *
 * @category  I95dev
 * @package   I95dev_Hello
 * @author    I95dev
 * @copyright Copyright (c) 2010-2017 I95dev Software Private Limited (https://I95dev.com)
 * @license   https://store.I95dev.com/license.html
 */
namespace I95dev\Hello\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * I95dev Hello Landing page Index Controller.
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Hello Landing page.
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        // Set title of page
        $resultPage->getConfig()->getTitle()->set(__('Sample module in Magento 2 by I95dev'));
        return $resultPage;
    }
}
