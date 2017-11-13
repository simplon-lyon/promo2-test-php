<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace authentication;

/**
 * Description of User
 *
 * @author jean
 */
class User {
    private $id;
    private $mail;
    private $pass;
    
    function __construct($mail, $pass, $id = null) {
        $this->id = $id;
        $this->mail = $mail;
        $this->pass = $pass;
    }

    function getId() {
        return $this->id;
    }

    function getMail() {
        return $this->mail;
    }

    function getPass() {
        return $this->pass;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }


}
