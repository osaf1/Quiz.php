<?php
// Dit is een nieuwe wijziging


// Willekeurig getal tussen 1 en 100 genereren
$random = rand(2, 100);
$attempts = 0;

echo "Welkom bij de raad-het-getal quiz! Typ een getal tussen 1 en 100 of 'stop' om te stoppen.\n";

while (true) {
    // Vraag om invoer van de gebruiker
    $input = trim(fgets(STDIN));
    
    // Controleer of de gebruiker wil stoppen
    if (strtolower($input) === 'stop') {
        echo "Je hebt het spel gestopt. Het getal was: $random\n";
        break;
    }
    
    // Controleer of de invoer een geldig getal is
    if (!is_numeric($input)) {
        echo "Ongeldige invoer. Typ een getal tussen 1 en 100 of 'stop'.\n";
        continue;
    }
    
    $guess = (int) $input;
    
    // Controleer of de gebruiker een ongeldig getal heeft ingevoerd
    if ($guess < 1 || $guess > 100) {
        echo "Je hebt een ongeldig getal ingevoerd. Het spel wordt beëindigd.\n";
        break;
    }
    
    $attempts++;
    
    // Controleer of de gebruiker het juiste getal heeft geraden
    if ($guess === $random) {
        echo "Gefeliciteerd! Je hebt het juiste getal $random geraden in $attempts beurten.\n";
        break;
    } elseif ($guess < $random) {
        echo "Het getal is hoger. Probeer opnieuw: \n";
    } else {
        echo "Het getal is lager. Probeer opnieuw: \n";
    }
}

?>
