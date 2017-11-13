<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace premier;

/**
 * Description of Account
 *
 * @author jean
 */
class Account {
    private $calculator;
    
    public function __construct(Calculator $calc) {
        $this->calculator = $calc;
    }
    
    public function getSalary($brute) {
        $cotisation = $this->calculator->multiply($brute, 0.25);
        $net = $this->calculator->substract($brute, $cotisation);
        return $net;
    }
}
