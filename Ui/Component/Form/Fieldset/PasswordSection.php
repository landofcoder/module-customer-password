<?php
/**
 * Landofcoder
 *
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customise this module for your needs.
 * Please contact us https://landofcoder.com/contacts.
 *
 * @category   Lof
 * @package    Lof_CustomerPassword
 * @copyright  Copyright (C) 2020 Landofcoder (https://landofcoder.com/)
 * @license    https://landofcoder.com/magento2-extension-license/
 */

//@codingStandardsIgnoreFile

namespace Lof\CustomerPassword\Ui\Component\Form\Fieldset;

use Lof\CustomerPassword\Helper\Data;
use Magento\Framework\View\Element\UiComponent\ContextInterface;

class PasswordSection extends \Magento\Ui\Component\Form\Fieldset
{
    /**
     * CustomerPassword data
     *
     * @var Data
     */
    protected $helper;

    /**
     * PasswordSection constructor.
     * @param ContextInterface $context
     * @param array $components
     * @param array $data
     * @param Data $helper
     */
    public function __construct(
        ContextInterface $context,
        $components = [],
        array $data = [],
        Data $helper
    ) {
        parent::__construct($context, $components, $data);
        $this->helper = $helper;
    }

    /**
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function prepare()
    {
        parent::prepare();
        if (!$this->helper->isEnablePasswordSection()) {
            $this->_data['config']['componentDisabled'] = true;
        }
    }
}
