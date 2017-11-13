<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace authentication;

/**
 *
 * @author jean
 */
interface IDaoUser {
    function getUserByMail(string $mail);
    function getUserByLogin(string $mail, string $pass);
    function addUser(User $user);
}
