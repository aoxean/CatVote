<?php
$keuze = $_POST["keuze"];
$file = "resultaten.txt";

// Voeg stem toe
file_put_contents($file, $keuze . PHP_EOL, FILE_APPEND);

// Tel stemmen
$regels = file($file, FILE_IGNORE_NEW_LINES);
$tellingen = array_count_values($regels);

// Toon resultaten
foreach ($tellingen as $optie => $aantal) {
    echo "$optie: $aantal stemmen<br>";
}
?>
