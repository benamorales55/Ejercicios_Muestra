<?php 
require 'index.html';

$dato = $_POST['dato'];
$cantidad = $_POST['cantidad'];

$i = 0;
while($i <= $cantidad){
    echo $dato . "<br/>";
    $i++;
}