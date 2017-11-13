<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace tests;

/**
 * Par défaut, les classes de test doivent avoir un nom et nom
 * de fichier qui se termine par Test.php pour être reconnues par
 * PhpUnit (c'est configurable via un fichier xml)
 *
 * @author jean
 */
class PremierTest extends \PHPUnit\Framework\TestCase{
    private $compteur;
    
    /**
     * Méthode utilisée pour mettre en place l'environnement de test.
     * Elle sera déclenchée avant chaque test de la classe.
     */
    protected function setUp() {
        $this->compteur = 0;
    }
    /**
     * La méthode tearDown est là pour "détruire" l'environnement
     * de test, elle sera déclenchée après chaque test de la classe.
     */
    protected function tearDown() {
        
    }
    /**
     * Chaque méthode de test doit commencer, par défaut encore une fois,
     * par test pour être détectée par PhpUnit.
     */
    public function testPremier() {
        $this->assertEquals(true, true);
    }
    
    public function testIncrementCompteur() {
        $this->compteur++;
        $this->assertEquals(1, $this->compteur);
    }
    
    public function testDecrementCompteur() {
        $this->compteur--;
        $this->assertEquals(-1, $this->compteur);
    }
    
}
