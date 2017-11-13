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
    
    public function __construct(authentication\IDaoUser $dao) {
        $this->daoUser = $dao;
    }
    
    public function signup($mail, $pass):bool {
        //fonction d'inscription, vérifie si l'utilisateur existe avant
        //de l'ajouter à la base
    }
    
    public function login($mail, $pass) {
        
    }
}
