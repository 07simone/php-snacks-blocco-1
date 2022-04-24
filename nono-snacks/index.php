<?php 

$string = "n,o,v,e";


$array = explode(",", $string);

var_dump ($array);

$risultato = [];

foreach ($array as $char){
    $risultato[$char] = $char;
}
var_dump($risultato)
?>