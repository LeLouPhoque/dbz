<?php
require_once 'combat.php';

$goku = new Saiyan("Goku", 2000, 1500);
$cyborg18 = new Cyborg("Cyborg 18", 2000, 1500);
$rounds = combat($goku, $cyborg18);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Combat Saiyan vs Cyborg</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Combat Saiyan vs Cyborg</h1>

<div class="combat-log">
    <?php   foreach ($rounds as $round): ?>
        <div class="combat-round"><?= $round ?></div>
    <?php endforeach; ?>
</div>
<script src="scripts.js"></script>
</body>
</html>
