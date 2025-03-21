<?php
$naam = readline("Geef jouw naam: ");
$leeftijd = readline("Geef jouw leeftijd: ");
echo "Halllo $naam \n";
$controleLeeftijd = 21;
if ($leeftijd < $controleLeeftijd) {
  echo "Jij bent jonger dan $controleLeeftijd jaar.\n";
} else if ($leeftijd > $controleLeeftijd) {
  echo "Jij bent ouder dan $controleLeeftijd jaar.\n";
} else {
  echo "Jij bent precies $controleLeeftijd jaar.\n";
}
?>