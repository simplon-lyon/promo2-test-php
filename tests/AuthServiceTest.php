<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;

use authentication\AuthService;
use authentication\IDaoUser;
use authentication\User;
use PHPUnit\Framework\TestCase;

require './authentication/User.php';
require './authentication/IDaoUser.php';
require './authentication/AuthService.php';


/**
 * Description of AuthServiceTest
 *
 * @author jean
 */
class AuthServiceTest extends TestCase {
    private $instance;
    private $mock;
    
    protected function setUp() {
        $this->mock = $this->createMock(IDaoUser::class);
        
        $this->instance = new AuthService($this->mock);
    }
    
    public function testSignupSuccess() {
        $argMail = 'test@test.test';
        $argPass = 'pass';
        $this->mock->expects($this->once())
                ->method('getUserByMail')
                ->with($argMail)
                ->willReturn(null);
       
        $this->mock->expects($this->once())
                ->method('addUser')
                ->with(new User($argMail, $argPass));
        
        $this->assertEquals(
                $this->instance->signup($argMail, $argPass), 
                true);
    }
    
    
    public function testSignupUserExists() {
        $argMail = 'test@test.test';
        $argPass = 'pass';
        $this->mock->expects($this->once())
                ->method('getUserByMail')
                ->with($argMail)
                ->willReturn(new User('bloup', 'bloup'));
       
        $this->mock->expects($this->never())
                ->method('addUser');
                
        
        $this->assertEquals(
                $this->instance->signup($argMail, $argPass), 
                false);
    }
    
    
    
    public function testLoginSuccess() {
        $argMail = 'test@test.test';
        $argPass = 'pass';
        $this->mock->expects($this->once())
                ->method('getUserByLogin')
                ->with($argMail, $argPass)
                ->willReturn(true);
       
        
        $this->assertEquals(
                $this->instance->login($argMail, $argPass), 
                true);
    }
}
