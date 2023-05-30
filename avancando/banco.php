<?php

require_once 'funcoesBanco.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 600
    ],
    '123.256.789-12' => [
        'titular' => 'Bernardo',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    500);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    100
);
unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>
<body>
        <h1>Contas Correntes</h1>

<dl>
    <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
    <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>

    <dd>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
    </dd>

    <?php } ?>
</dl>
</body>
</html>
