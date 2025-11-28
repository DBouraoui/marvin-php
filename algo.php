<?php

if ($argc < 2) {
    echo "Erreur : aucun argument fourni.\n";
    exit(1);
}

$input = $argv[1];
$reversed = "";

// Boucle de la fin vers le début
for ($i = strlen($input) - 1; $i >= 0; $i--) {
    $reversed .= $input[$i];
}

echo $reversed . "\n";
