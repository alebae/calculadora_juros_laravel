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