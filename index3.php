<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 01/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.

<?php

$posts2022 = [
  '30/10/2022' => [
    [
      'title' => 'Post 1',
      'author' => 'Gene Wild',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Ringo Starr',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
  ],
  '09/12/2022' => [
    [
      'title' => 'Post 3',
      'author' => 'Giga Robote',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ],
  '22/02/2022' => [
    [
      'title' => 'Post 4',
      'author' => 'Van Allen',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Ben Stifler',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Garrison Ford',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ]
];

var_dump($posts2022);

foreach ($posts2022 as $data => $info) { ?>
    <p> <?= $data ?> </p>
    <?php
    for ($i=0; $i < count($info) ; $i++) { ?>
      <p><?= $info[$i]["title"] ?></p>
      <p><?= $info[$i]["author"] ?></p>
      <p><?= $info[$i]["text"] ?></p>
      <br>
    <?php  } ?>
<?php  } ?>