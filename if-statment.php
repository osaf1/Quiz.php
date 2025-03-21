<?php
echo "Geef jou naam:";
$naam = trim(fgets(STDIN));

echo "Geef jouw leeftijd: ";
$leeftijd = trim(fgets(STDIN));
echo "Hallo $naam \n";
$controleLeeftijd = 22;
if ($leeftijd < $controleLeeftijd) {
  echo "Jij bent jonger dan $controleLeeftijd jaar.\n";
} else if ($leeftijd > $controleLeeftijd) {
  echo "Jij bent ouder dan $controleLeeftijd jaar.\n";
} else {
  echo "Jij bent precies $controleLeeftijd jaar.\n";
}
?>