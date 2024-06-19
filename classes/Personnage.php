<?php
abstract class Personnage {
    protected $nom;
    protected $idNotDead = true;
    protected $pointsDeVie;

    public function __construct($nom, $pointsDeVie) {
        $this->nom = $nom;
        $this->pointsDeVie = $pointsDeVie;
    }

    public function __toString() {
        return $this->nom;
    }

    public function blessure($puissance) {
        $message = "";

        if ($this->chanceDodge()) {
            $message .= "Dodge! ";
            return $message;
        }

        $this->pointsDeVie -= $puissance;
        if ($this->pointsDeVie <= 0) {
            $this->idNotDead = false;
            return "Le personnage {$this->nom} est mort.";
        }
        return "";
    }

    abstract protected function chanceDodge();

    public function getPointsDeVie() {
        return $this->pointsDeVie;
    }

    public function isNotDead() {
        return $this->idNotDead;
    }
}
