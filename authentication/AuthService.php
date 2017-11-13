<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace authentication;

/**
 * Description of AuthService
 *
 * @author jean
 */
class AuthService {
    private $daoUser;
    
    public function __construct(IDaoUser $dao) {
        $this->daoUser = $dao;
    }
    
    public function signup($mail, $pass):bool {
        if($this->daoUser->getUserByMail($mail) == null) {
            $user = new User($mail, $pass);
            $this->daoUser->addUser($user);
//            if($user->getId() != null) {
                return true;
//            }
        } 
        return false;
    }
    
    public function login($mail, $pass) {
        return $this->daoUser->getUserByLogin($mail, $pass);
    }
}
