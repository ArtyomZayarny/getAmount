<?php

function Amount($num,$text1,$text2,$text3){
    $arr = [$text1,$text2,$text3];
    $text ='';
    switch($num){
        case 1:
            $text = $arr[0];
            break;
        case 2:
            $text = $arr[1];
            break;
        default:
            $text = $arr[2];
            break;
    }

    return $text;
}

echo Amount(3,'яблоко','яблока','яблок');


?>






