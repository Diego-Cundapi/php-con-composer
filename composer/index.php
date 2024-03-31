<?php 
require __DIR__. '/vendor/autoload.php'; //instalamos el vendor en mi archivo index para que pueda encontrar la clase 'Format'
echo Text\Format::upperText('hola');

echo upper('hola');
echo lower('OHLA');
?>