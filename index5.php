<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
$studentiClasse = [
    [
      "nome" => "Mario",
      "cognome" => "Merola",
      "voti" => [5,6,8,4,7,5]
    ],
    [
      "nome" => "Gigi",
      "cognome" => "Delle Valle",
      "voti" => [5,6,6,7,6,8]
    ],
    [
      "nome" => "Franco",
      "cognome" => "Lo Scotto",
      "voti" => [7,8,9,8,9,9]
    ]
];

var_dump($studentiClasse);

for ($i=0; $i < count($studentiClasse) ; $i++) { ?>
  <div>
    <?= $studentiClasse[$i]['nome']?>
    <?= $studentiClasse[$i]['cognome']?>
    <br>
    <?= 'Media Voti: ' . $media = array_sum($studentiClasse[$i]['voti'])/count($studentiClasse[$i]['voti']) ?>
  </div>
  <br>
<?php } ?>