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

namespace Lof\CustomerPassword\Block\Adminhtml\System\Config\Fieldset;

use \Magento\Backend\Block\Template;
use \Magento\Framework\Data\Form\Element\Renderer\RendererInterface;

/**
 * Class Hint
 *
 * @package Lof\CustomerPassword\Block\Adminhtml\System\Config\Fieldset
 */
class Hint extends Template implements RendererInterface
{
    /**
     * @var \Magento\Framework\Module\ModuleList
     */
    private $moduleList;

    /**
     * Class constructor.
     *
     * @param Template\Context                     $context
     * @param \Magento\Framework\Module\ModuleList $moduleList
     * @param array                                $data
     */
    public function __construct(
        Template\Context $context,
        \Magento\Framework\Module\ModuleList $moduleList,
        array $data = []
    ) {
        $this->_template = 'Lof_CustomerPassword::system/config/fieldset/hint.phtml';
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $_element = $element;
        return $this->toHtml();
    }

    /**
     * @return mixed
     */
    public function getModuleVersion()
    {
        return $this->moduleList->getOne('Lof_CustomerPassword')['setup_version'];
    }
}
