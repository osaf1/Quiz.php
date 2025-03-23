<?php


$random = rand(1, 100);
$attempts = 0;

echo "Welkom bij de raad-het-getal Quiz! Typ een getal tussen 1 en 100 of 'stop' om te stoppen.\n";

while (true) {
    
    $input = trim(fgets(STDIN)); 
    
   
    if (strtolower($input) === 'stop') {
        echo "Je hebt het spel gestopt. Het getal was: $random\n";
        break;
    }
    
    
    if (!is_numeric($input)) {
        echo "Ongeldige invoer. Typ een getal tussen 1 en 100 of 'stop'.\n";
        continue;
    }
    
    $guess = (int) $input;
    
    
    if ($guess < 1 || $guess > 100) {
        echo "Je hebt een ongeldig getal ingevoerd. Het spel wordt beëindigd.\n";
        break;
    }
    
    $attempts++;
    
    
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
