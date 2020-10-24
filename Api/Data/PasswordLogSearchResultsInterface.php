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
namespace Lof\CustomerPassword\Api\Data;

/**
 * Interface PasswordLogSearchResultsInterface
 *
 * @package Lof\CustomerPassword\Api\Data
 */
interface PasswordLogSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get PasswordLog list.
     *
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface[]
     */
    public function getItems();

    /**
     * Set customer_id list.
     *
     * @param  \Lof\CustomerPassword\Api\Data\PasswordLogInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
