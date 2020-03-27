<?php
function validateJson($data){
    $accept = true;

    foreach($data as $d){
        if(validateNumber($d)){
            $accept = true;
        } else {
            $accept = false;
            break;
        }
    }

    return $accept;
}

function validateNumber($value){
    return $accept = ($value == '' || !(float)$value) ? false : true;
}

function jurosSimples($valor, $taxa, $parcelas) {
    $taxa = $taxa / 100;

    $m = $valor * (1 + $taxa * $parcelas);
    $valParcela = number_format($m / $parcelas, 2, ",", ".");

    return $valParcela;
}

function jurosComposto($valor, $taxa, $parcelas) {
    $taxa = $taxa / 100;

    $valParcela = $valor * pow((1 + $taxa), $parcelas);
    $valParcela = number_format($valParcela / $parcelas, 2, ",", ".");

    return $valParcela;
}