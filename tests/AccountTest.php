<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;

require_once './premier/Calculator.php';
require_once './premier/Account.php';

use PHPUnit\Framework\TestCase;
use premier\Account;
use premier\Calculator;

/**
 * Description of AccountTest
 *
 * @author jean
 */
class AccountTest extends TestCase {
    private $instance;
    
    protected function setUp() {
        
//        $mock = $this->createMock(Calculator::class);
//        
//        $mock->method('multiply')->willReturn(10);
//        $mock->method('substract')->willReturn(5);
        
        $mock = $this->getMockBuilder(Calculator::class)
                ->getMock();
        
        $mock->expects($this->once())
                ->method('multiply')
                ->with(1000,0.25)
                ->willReturn(10);
        
        $mock->expects($this->once())
                ->method('substract')
                ->with(1000,10)
                ->willReturn(995);
                
        
        $this->instance = new Account($mock);
    }
    
    public function testGetSalary() {
        $result = $this->instance->getSalary(1000);
        $this->assertEquals($result, 995);
    }
}
