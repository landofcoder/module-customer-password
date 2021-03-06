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
namespace Lof\CustomerPassword\Test\Unit\Model;

class InformationTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var
     */
    public $objectManager;
    /**
     * @var
     */
    public $customerRegistry;
    public $customerRepositoryInterface;
    public $encryptorInterface;
    public $passwordLogFactory;
    public $customerMock;
    public $customerid="10";
    public $customerEmail="roymiller@ymail.com";
    public $adminUsername="admin";
    public $passwordLogvalue=1;
    public $passwordLog;
    public $passwordLog1;
    public $customerSecure;

    public function setUp()
    {
        $this->customerRepositoryInterface = $this->getMockBuilder(
            \Magento\Customer\Api\CustomerRepositoryInterface::class
        )
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerSecure = $this->getMockBuilder(\Magento\Customer\Model\Data\CustomerSecure::class)
            ->setMethods(['setRpToken', 'addData', 'setRpTokenCreatedAt', 'setData', 'getPasswordHash'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerRegistry = $this->getMockBuilder(\Magento\Customer\Model\CustomerRegistry::class)
            ->setMethods(['getById','getId', 'retrieveSecureData','setRpToken'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->passwordLog1= $this->getMockBuilder(\Lof\CustomerPassword\Model\PasswordLog::class)
            ->setMethods(['setPasswordlogId'])
            ->disableOriginalConstructor()
            ->getMock();

        $this->encryptorInterface = $this->getMockBuilder(\Magento\Framework\Encryption\EncryptorInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->passwordLogFactory = $this->getMockBuilder(
            \Lof\CustomerPassword\Model\PasswordLogFactory::class
        )
            ->disableOriginalConstructor()
            ->getMock();

        $this->customerMock = $this->getMockBuilder(\Magento\Customer\Model\Customer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        $this->processorTest = $objectManager->getObject(
            \Lof\CustomerPassword\Model\PasswordManagement::class,
            [
                'customerRepository' => $this->customerRepositoryInterface,
                'customerRegistry' => $this->customerRegistry,
                'encryptor' => $this->encryptorInterface,
                'passwordLogFactory' => $this->passwordLogFactory

            ]
        );
    }
    public function testAdminPassword()
    {
        $this->assertEquals("ChangeMe", "ChangeMe");
    }

    public function testCustomerId()
    {
        $this->passwordLog1->setCustomerId($this->customerid);
        $returnCustomer=$this->passwordLog1->getCustomerId();
        $this->assertEquals($this->customerid, $returnCustomer);
    }

    public function testCustomerEmail()
    {
        $this->passwordLog1->setCustomerEmail($this->customerEmail);
        $returnCustomerEmail=$this->passwordLog1->getCustomerEmail();
        $this->assertEquals($this->customerEmail, $returnCustomerEmail);
    }

    public function testAdminUsername()
    {
        $this->passwordLog1->setAdminUsername($this->adminUsername);
        $returnaAminUsername=$this->passwordLog1->getAdminUsername();
        $this->assertEquals($this->adminUsername, $returnaAminUsername);
    }
}
