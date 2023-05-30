<?php

function sacar($conta, $valorASacar)
{


    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else{
        $conta['saldo'] -= 500;
    }
    return $conta;
}

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function depositar($conta, $valorADepositar){
    if($valorADepositar > 0)
    {
        $conta['saldo'] += $valorADepositar;

    }else
    {
        echo "Depositos devem ser positivos";
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}



function exibeConta(array $conta)
{
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular Saldo: $saldo</li>";
}