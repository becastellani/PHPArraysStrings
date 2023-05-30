<?php

$array = [
    1 => 'a',
    '1' => 'b',
    2 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste'
];

foreach ($array as $item) {
    echo $item .    PHP_EOL;
}