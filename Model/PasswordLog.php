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
namespace Lof\CustomerPassword\Model;

use Lof\CustomerPassword\Api\Data\PasswordLogInterface;

/**
 * Class PasswordLog
 *
 * @package Lof\CustomerPassword\Model
 */
class PasswordLog extends \Magento\Framework\Model\AbstractModel implements PasswordLogInterface
{

    protected $_eventPrefix = 'lof_customer_password_log';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Lof\CustomerPassword\Model\ResourceModel\PasswordLog');
    }

    /**
     * Get passwordlog_id
     *
     * @return string
     */
    public function getPasswordlogId()
    {
        return $this->getData(self::PASSWORDLOG_ID);
    }

    /**
     * Set passwordlog_id
     *
     * @param  string $passwordlogId
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setPasswordlogId($passwordlogId)
    {
        return $this->setData(self::PASSWORDLOG_ID, $passwordlogId);
    }

    /**
     * Get customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * Set customer_id
     *
     * @param  string $customerId
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * Get customer_email
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->getData(self::CUSTOMER_EMAIL);
    }

    /**
     * Set customer_email
     *
     * @param  string $customerEmail
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setCustomerEmail($customerEmail)
    {
        return $this->setData(self::CUSTOMER_EMAIL, $customerEmail);
    }

    /**
     * Get admin_username
     *
     * @return string
     */
    public function getAdminUsername()
    {
        return $this->getData(self::ADMIN_USERNAME);
    }

    /**
     * Set admin_username
     *
     * @param  string $adminUsername
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setAdminUsername($adminUsername)
    {
        return $this->setData(self::ADMIN_USERNAME, $adminUsername);
    }

    /**
     * Get admin_id
     *
     * @return string
     */
    public function getAdminId()
    {
        return $this->getData(self::ADMIN_ID);
    }

    /**
     * Set admin_id
     *
     * @param  string $adminId
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setAdminId($adminId)
    {
        return $this->setData(self::ADMIN_ID, $adminId);
    }

    /**
     * Get admin_name
     *
     * @return string
     */
    public function getAdminName()
    {
        return $this->getData(self::ADMIN_NAME);
    }

    /**
     * Set admin_name
     *
     * @param  string $adminName
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setAdminName($adminName)
    {
        return $this->setData(self::ADMIN_NAME, $adminName);
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->getData(self::IP);
    }

    /**
     * Set ip
     *
     * @param  string $ip
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setIp($ip)
    {
        return $this->setData(self::IP, $ip);
    }

    /**
     * Get logged_at
     *
     * @return string
     */
    public function getLoggedAt()
    {
        return $this->getData(self::LOGGED_AT);
    }

    /**
     * Set logged_at
     *
     * @param  string $loggedAt
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     */
    public function setLoggedAt($loggedAt)
    {
        return $this->setData(self::LOGGED_AT, $loggedAt);
    }
}
