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
namespace Lof\CustomerPassword\Model\ResourceModel;

/**
 * Class PasswordLog
 *
 * @package Lof\CustomerPassword\Model\ResourceModel
 */
class PasswordLog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('lof_customer_password_log', 'passwordlog_id');
    }
}
