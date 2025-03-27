<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizzeria Circulare Delicioso</title>
  <link rel="stylesheet" href="style.css"> <!-- Externe CSS file -->
</head>
<body>

<div class="container">
  <h1>Bestellen bij Circulare Delicioso</h1>

  <form method="POST" action="pizza.php">
    <div class="pizza-optie">
        <img src="spianata_piccante.jpg" alt="Pizza Spianata Piccante" width="180"><br>
        <input type="radio" id="spianata" name="pizza" value="Spianata" checked>
       <label for="spianata">
        Pizza Spianata Piccante €12,50
      </label>
    </div>

    <div class="pizza-optie">
        <img src="seppi.jpg" alt="Pizza Seppi" width="180"><br>
        <input type="radio" id="seppi" name="pizza" value="Seppi">
       <label for="seppi">
         Pizza Seppi €11,50
       </label>
    </div>

    <div class="pizza-optie">
        <img src="tirato.jpg" alt="Pizza Tirato" width="180"><br>
        <input type="radio" id="tirato" name="pizza" value="Tirato">
       <label for="tirato">
         Pizza Tirato €10,50
       </label>
    </div>

    <div class="extra-opties">
      <label>
        <input type="checkbox" name="extraOlijven"> Ik wil extra olijven bijbestellen (€1,50)
      </label><br>

      <label>
        <input type="checkbox" name="extraKaas"> Ik wil extra kaas bijbestellen (€1,50)
      </label><br>

      <label>
        <input type="checkbox" name="bezorgen"> Ik wil de pizza laten bezorgen (€3,50)
      </label><br>

    </div>

    <button type="submit">Bestellen!</button>
  </form>
</div>

</body>
</html>

<?php
$pizzaPrijzen = [
  "Spianata" => 12.50,
  "Seppi" => 11.50,
  "Tirato" => 10.50
];

$extraKosten = [
  "extraOlijven" => 1.50,
  "extraKaas" => 1.50,
  "bezorgen" => 3.50
];
$totaalPrijs = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST["pizza"])){
    $gekozenpizza = $_POST["pizza"];
    $totaalPrijs += $pizzaPrijzen[$gekozenpizza];
  }
  $extraBestelling = [];
  foreach ($extraKosten as $optie => $prijs){
    if (isset($_POST[$optie])){
      $totaalPrijs += $prijs;
      $extraBestelling[] = ucfirst(str_replace("extra", "Extra ", $optie)) . ": € " . number_format($prijs, 2);
    }
  }
  echo "<h1>Bedankt voor uw bestlling!</h1>";
  echo "<p>U heeft een pizza: <strong>$gekozenPizza</strong>(€ " . number_format($pizzaPrijzen[$gekozenPizza], 2) . ")</p>";


  if (!empty($extraBestelling)) {
    echo "<p>Extra bestelling:</p><ul>";
    foreach ($extraBestelling as $extra) {
       echo "<li>$extra</li>";
    }
    echo "</ul>";

  }
  if (isset($_POST["bezorgen"])) {
  echo "<p>U wilt de pizza laten bezorgen.</p>";
  echo "<p>Als de pizzabezorger komt moet u <strong>€ " . number_format($totaalPrijs, 2) . "</strong> betalen!</p>";
  } else {
    echo "<p>U komt de pizza zelf afhalen.</p>";
   echo "<p>U betaalt <strong>€ " . number_format($totaalPrijs, 2) . "</strong> aan onze kassa.</p>";
  }

}
?>