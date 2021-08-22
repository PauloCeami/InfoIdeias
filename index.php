<?php



function getSeculo($ano) {
    $sec = $ano/100+1;
    $s = explode(".", $sec);
    return $s[0];    
}


echo getSeculo(2021);