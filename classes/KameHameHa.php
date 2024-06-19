<?php

trait KameHameHa {
    private $maxEnergy;
    private $maxHealth;
    private $currentEnergy;
    private $dernierLance;

    public function setMaxEnergy($energy) {
        $this->maxEnergy = $energy;
        $this->currentEnergy = $energy;
    }

    public function setMaxHealth($health) {
        $this->pointsDeVie = $health;
        $this->maxHealth = $health;
    }

    public function lancerKameHameHa($cible) {
        if ($this->currentEnergy < 100) {
            throw new Exception("Le personnage {$this->nom} n'a pas assez d'énergie pour lancer un KaméHaméHa.");
        }

        $this->currentEnergy -= 100;

        $now = microtime(true);
        $this->dernierLance = $now;

        $baseDamage = 400;
        (int) $currentHealthPercentage = $this->pointsDeVie / $this->maxHealth;
        (int) $multiplier = 0.5 + (1.5 * (1 - $currentHealthPercentage));

        (int) $damage = $baseDamage * $multiplier;

        $message = "";

        $critChance = $this instanceof Saiyan ? 50 : 25;
        echo $critChance;
        if (rand(1, 100) <= $critChance) {
            $damage *= 2;
            $message .= "Critical hit! ";
        }

        $message .= "Damage dealt: " . round($damage) . ". ";
        $message .= $cible->blessure($damage);

        return $message;

    }
}
