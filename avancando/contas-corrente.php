<?php
        $conta1 = [
            'titular' => 'Bernardo',
            'saldo' => 1000
        ];

        $conta2 = [
            'titular' => 'Junior',
            'saldo' => 10000
        ];
        $conta3 = [
            'titular' => 'Rogerio',
            'saldo' => 300
        ];

        $contasCorrentes = [
            $conta1,
            $conta2,
            $conta3
        ];

        for($i=0; $i < count($contasCorrentes);$i++){
            echo $contasCorrentes[$i] ['titular']. PHP_EOL;
            echo $contasCorrentes[$i] ['saldo']. PHP_EOL;
        }

?>