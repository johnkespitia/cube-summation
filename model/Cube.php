<?php

/**
 * Modelo de aplicación, en esta parte del código se representa la capa de modelo
 *
 * @author John Espitia
 */
class Cube {

//    private $_cube;

    function __construct($n) {
        session_start();
        if (empty($_SESSION['matriz'])) {
            for ($x = 1; $x <= $n; $x++) {
                for ($y = 1; $y <= $n; $y++) {
                    for ($z = 1; $z <= $n; $z++) {
                        if (empty($_SESSION['matriz'][$x][$y][$z])) {
                            $_SESSION['matriz'][$x][$y][$z] = 0;
                        }
                    }
                }
            }
        }
    }

    function setNCube($n) {
        for ($x = 1; $x <= $n; $x++) {
            for ($y = 1; $y <= $n; $y++) {
                for ($z = 1; $z <= $n; $z++) {
                    if (empty($_SESSION['matriz'][$x][$y][$z])) {
                        $_SESSION['matriz'][$x][$y][$z] = 0;
                    }
                }
            }
        }
    }

    function deleteCube() {
        $_SESSION['matriz'] = NULL;
        return true;
    }

    public function update($x, $y, $z, $w) {
        $_SESSION['matriz'][$x][$y][$z] = $w;
        return true;
    }

    public function getCube() {
        return $_SESSION['matriz'];
    }

}
