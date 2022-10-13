<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60  -->

<?php
  $partiteAndata = [ 
    [ 
      "casa" => "Carpegna Prosciutto Pesaro",
      "puntiCasa" => 82,
      "ospite" => "Dolomiti Energia Trentino",
      "puntiOspite" => 106,
    ],
    [
      "casa" => "EA7 Milano",
      "puntiCasa" => 59,
      "ospite" => "Happy Casa Brindisi",
      "puntiOspite" => 74,
    ],
    [
      "casa" => "Tezenis Verona",
      "puntiCasa" => 75,
      "ospite" => "Banco di Sardegna Sassari",
      "puntiOspite" => 70,
    ]
  ];

  var_dump($partiteAndata);

  for ($i=0; $i < count($partiteAndata); $i++) {
?>
    <p style="font-size: 20px;">
      <?= $partiteAndata[$i]['casa'] ?> -
      <?= $partiteAndata[$i]['ospite'] ?> |
      <?= $partiteAndata[$i]['puntiCasa'] ?> -
      <?= $partiteAndata[$i]['puntiOspite'] ?>
    </p>
<?php } ?>