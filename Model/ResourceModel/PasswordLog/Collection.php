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
namespace Lof\CustomerPassword\Model\ResourceModel\PasswordLog;

/**
 * Class Collection
 *
 * @package Lof\CustomerPassword\Model\ResourceModel\PasswordLog
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Lof\CustomerPassword\Model\PasswordLog',
            'Lof\CustomerPassword\Model\ResourceModel\PasswordLog'
        );
    }
}
