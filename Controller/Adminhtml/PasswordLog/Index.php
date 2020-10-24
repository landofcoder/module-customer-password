<?php
/**
 * Landofcoder
 *
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customise this module for your needs.
 * Please contact us https://landofcoder.com/contacts.
 *
 * @category  Landofcoder
 * @package   Lof_CustomerPassword
 * @copyright Copyright (C) 2020 Landofcoder (https://landofcoder.com/)
 * @license   https://landofcoder.com/magento2-extension-license/
 */
namespace Lof\CustomerPassword\Controller\Adminhtml\PasswordLog;

/**
 * Class Index
 *
 * @package Lof\CustomerPassword\Controller\Adminhtml\PasswordLog
 */
class Index extends \Lof\CustomerPassword\Controller\Adminhtml\AbstractPasswordLog
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu("Magento_Backend::system");
        $resultPage->getConfig()->getTitle()->prepend(__("Password Log"));
        return $resultPage;
    }
}
