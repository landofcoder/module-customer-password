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
namespace Lof\CustomerPassword\Observer\Backend;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Event\ObserverInterface;
use Lof\CustomerPassword\Model\PasswordManagement;
use Lof\CustomerPassword\Helper\Data;

/**
 * Class CustomerSaveObserver
 *
 * @package Lof\CustomerPassword\Observer\Backend
 */
class CustomerSaveObserver implements ObserverInterface
{
    /**
     * @var PasswordManagement
     */
    protected $passwordManagement;

    /**
     * @var \Magento\Framework\Message\ManagerInterface
     */
    protected $messageManager;

    /**
     * Current customer
     */
    private $customer;

    /**
     * CustomerPassword data
     *
     * @var Data
     */
    protected $helper;

    /**
     * CustomerSaveObserver constructor.
     *
     * @param Context            $context
     * @param PasswordManagement $passwordManagement
     * @param Data               $helper
     */
    public function __construct(
        Context $context,
        PasswordManagement $passwordManagement,
        Data $helper
    ) {
        $this->passwordManagement = $passwordManagement;
        $this->messageManager = $context->getMessageManager();
        $this->helper = $helper;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!$this->helper->isEnablePasswordSection()) {
            return;
        }
        $this->customer = $observer->getData('customer');
        $customer = $observer->getData('request')->getParam('customer');

        try {
            $customerId = $this->customer->getId();
            $passwords = isset($customer['password_section']) ? $customer['password_section'] : '';

            $password = isset($passwords['password']) ? $passwords['password'] : '';
            if (empty($password)) {
                return;
            }
            if (!$customerId) {
                throw new \Magento\Framework\Exception\LocalizedException(
                    __('Customer ID should be specified.')
                );
            }
            $this->passwordManagement->changePasswordById($customerId, $password);
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
    }
}
