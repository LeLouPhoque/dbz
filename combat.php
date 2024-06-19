<?php

require_once './classes/Personnages.php';

function combat($saiyan, $cyborg) {
    $rounds = [];

    $premier = (rand(0, 1) == 0) ? $saiyan : $cyborg;
    $deuxieme = ($premier === $saiyan) ? $cyborg : $saiyan;

    $rounds[] = "Le combat commence entre {$premier} et {$deuxieme}!.";

    $rounds[] = "{$premier} commence avec {$premier->getPointsDeVie()} points de vie";
    $rounds[] = "{$deuxieme} commence avec {$deuxieme->getPointsDeVie()} points de vie.";

    try {
        while ($premier->isNotDead() && $deuxieme->isNotDead()) {
            $rounds = fight($premier, $deuxieme, $rounds);
            $rounds = fight($deuxieme, $premier, $rounds);
        }
    } catch (Exception $e) {
        $rounds[] = 'Exception: ' . $e->getMessage();
    }

    return $rounds;
}

function fight($attacker, $defender, $rounds) {
    $message = $attacker->lancerKameHameHa($defender);
    $rounds[] = "{$attacker} lance un KaméHaméHa sur {$defender}";
    $rounds[] = "{$message}";

    if ($defender->isNotDead()) {
        $rounds[] = "{$defender} a maintenant {$defender->getPointsDeVie()} points de vie.";
    }

    return $rounds;
}

