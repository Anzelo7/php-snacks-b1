<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.

<?php

$posts2021 = [
  '15/01/2021' => [
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
  '08/02/2021' => [
    [
      'title' => 'Post 3',
      'author' => 'Giga Robote',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ]
  ],
  '22/03/2021' => [
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