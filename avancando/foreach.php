<?php

$contasCorrentes = [
            '141.341.231-3' => [
                'titular' => 'Bernardo',
                'saldo' => 1000
             ],

    '245.234.111-3' => [
                'titular' => 'Junior',
                'saldo' => 10000
            ],
    '742.112.222-3' => [
                'titular' => 'Rogerio',
                'saldo' => 300
                ]
];

$contasCorrentes['222.333.435-3'] = [
    'titular' => 'Claudia',
    'saldo' => 5433
];

foreach ($contasCorrentes as $cpf => $conta){
    echo "Cpf: ". $cpf . " ". "Nome do titular: ".$conta['titular'] .PHP_EOL;
    echo "Saldo: ".$conta['saldo'] .PHP_EOL;
}
?>