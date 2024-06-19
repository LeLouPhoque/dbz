<?php

require_once 'Personnage.php';
require_once 'KameHameHa.php';

class Saiyan extends Personnage {
    use KameHameHa;

    private $energie;

    public function __construct($nom, $pointsDeVie, $energie) {
        parent::__construct($nom, $pointsDeVie);
        $this->setMaxEnergy($energie);
        $this->setMaxHealth($pointsDeVie);
    }

    protected function chanceDodge() {
        return (rand(1, 100) <= 10);
    }
}

class Cyborg extends Personnage {
    use KameHameHa;

    private $energie;

    public function __construct($nom, $pointsDeVie, $energie) {
        parent::__construct($nom, $pointsDeVie);
        $this->setMaxEnergy($energie);
        $this->setMaxHealth($pointsDeVie);
    }

    protected function chanceDodge() {
        return (rand(1, 100) <= 25);
    }
}