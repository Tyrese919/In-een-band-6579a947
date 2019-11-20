<?php

$totaalBedrag = 0;

$euro = array(
  "Citizen of Glass" => 4.5,
  "Night" => 9,
  "New Eyes" => 5,
  "Strange Trails" => 10);

foreach ($euro as $key => $value) {
  echo "$key kost €$value".PHP_EOL;
    $totaalBedrag = $totaalBedrag + $value;
}

$aantalAlbums = count($euro);
$gemiddelde = $totaalBedrag / $aantalAlbums;

echo "Het totaalbedrag van alle albums is €$totaalBedrag".PHP_EOL;
echo "De gemiddelde prijs van alle albums is €$gemiddelde";
