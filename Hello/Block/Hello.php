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

namespace I95dev\Hello\Block;

/*
 * I95dev Hello Block
 */

class Hello extends \Magento\Framework\View\Element\Template
{
    /**
     * @return $this
     */
    protected function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * getContentForDisplay
     * @return string
     */
    public function getContentForDisplay()
    {
        return __("Successful! This is a sample module in Magento 2 by I95dev.");
    }
}
?>
