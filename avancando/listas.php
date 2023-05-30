<?php
    $idadeList = [21,23,53,14,23,12,24];

    list($idadeVinicius, $idadeJoao, $idadeBernardo) = $idadeList;

    for ($i = 0; $i < count($idadeList); $i++){
        echo $idadeList[$i] . PHP_EOL;
    }

?>