<?php

/**
 * Modelo de aplicación, en esta parte del código se representa la capa de modelo
 *
 * @author John Espitia
 */
class Cube {

    private $_cube;

    function __construct($n) {
        for ($x = 1; $x <= $n; $x++) {
            for ($y = 1; $y <= $n; $y++) {
                for ($z = 1; $z <= $n; $z++) {
                    if (empty($this->_cube[$x][$y][$z])) {
                        $this->_cube[$x][$y][$z] = 0;
                    }
                }
            }
        }
    }

    function deleteCube() {
        $this->_cube = NULL;
    }

    public function update($x, $y, $z, $w) {
        $this->_cube[$x][$y][$z] = $w;
    }

    public function getCube() {
        for ($x = 1; $x <= sizeof($this->_cube); $x++) {
            for ($y = 1; $y <= sizeof($this->_cube[$x]); $y++) {
                for ($z = 1; $z <= sizeof($this->_cube[$y]); $z++) {
                    if (empty($this->_cube[$x][$y][$z])) {
                        $this->_cube[$x][$y][$z] = 0;
                    }
                }
            }
        }
        return $this->_cube;
    }

}
