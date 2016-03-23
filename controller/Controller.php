<?php

/**
 * Description of Controller
 *
 * @author John Espitia
 */
class Controller {

    private $_cubo;

    public function __construct($n) {
        $this->_cubo = new Cube($n);
    }

    public function setNCube($n) {
        $this->_cubo->setNCube($n);
    }

    public function update($x, $y, $z, $w) {
        return $this->_cubo->update($x, $y, $z, $w);
    }
    public function delete() {
        return $this->_cubo->deleteCube();
    }

    public function query($x1, $y1, $z1, $x2, $y2, $z2) {
        $cube_temp = $this->getCube();
        return $cube_temp[$x1][$y1][$z1] + $cube_temp[$x2][$y2][$z2];
    }

    public function getCube() {
        return $this->_cubo->getCube();
    }
    
    public function setCube($cube) {
        return $this->_cubo=$cube;
    }

}
