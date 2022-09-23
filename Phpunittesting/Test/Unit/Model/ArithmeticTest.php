<?php
namespace I95dev\Phpunittesting\Test\Unit\Model;

class ArithmeticTest extends \PHPUnit\Framework\TestCase
{
    protected $_objectManager;
    protected $_model;

    protected function setUp(): void
    {
        $this->_objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->_model = $this->_objectManager->getObject("I95dev\Phpunittesting\Model\Arithmetic");
    }


    public function testAdd()
    {
        $result = $this->_model->add(6, 5);
        $expectedResult = 11;
        $this->assertEquals($expectedResult, $result);
    }


    public function testSubtract()
    {
        $result = $this->_model->subtract(5, 2);
        $expectedResult = 3;
        $this->assertEquals($expectedResult, $result);
    }


    public function testMultiply()
    {
        $result = $this->_model->multiply(5, 10);
        $expectedResult = 50;
        $this->assertEquals($expectedResult, $result);
    }
    public function testDivide()
    {
        $result = $this->_model->divide(6, 2);
        $expectedResult = 3;
        $this->assertEquals($expectedResult, $result);
    }
}
