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
namespace Lof\CustomerPassword\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface PasswordLogRepositoryInterface
 *
 * @package Lof\CustomerPassword\Api
 */
interface PasswordLogRepositoryInterface
{
    /**
     * Save PasswordLog
     *
     * @param  \Lof\CustomerPassword\Api\Data\PasswordLogInterface $passwordLog
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Lof\CustomerPassword\Api\Data\PasswordLogInterface $passwordLog
    );

    /**
     * Retrieve PasswordLog
     *
     * @param  string $passwordlogId
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($passwordlogId);

    /**
     * Retrieve PasswordLog matching the specified criteria.
     *
     * @param  \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Lof\CustomerPassword\Api\Data\PasswordLogSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria
    );
}
