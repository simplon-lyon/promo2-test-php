<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;

use PHPUnit\Framework\TestCase;
use premier\Calculator;

/**
 * Description of CalculatorTest
 *
 * @author jean
 */
class CalculatorTest extends TestCase {
    private $instance;
    
    protected function setUp() {
        $this->instance = new Calculator();
    }
    
    /*
     * Faire les tests de la calculette, il faut tester chaque
     * scénario possible pour chaque méthode 
     */
    
    public function testAddSuccess() {
        $this->assertEquals(4, $this->instance->add(2, 2));
    }
    
    public function testAddNegativeSuccess() {
        $this->assertEquals(0, $this->instance->add(2, -2));
    }
    
    public function testAddWithString() {
        $result = $this->instance->add(2, 'bloup');
        $this->assertEquals(2, $result);
    }
    
    public function testSubstractSuccess() {
        $this->assertEquals(0, $this->instance->substract(2, 2));
    }
    
    public function testMultiplySuccess() {
        $this->assertEquals(6, $this->instance->multiply(2, 3));
    }
    
    public function testDivideSuccess() {
        $this->assertEquals(1, $this->instance->divide(2, 2));
    }
    /**
     * @expectedException PHPUnit\Framework\Error\Error
     */
    public function testDivideByZero() {
        $this->instance->divide(2, 0);
    }
    
    
    
}
