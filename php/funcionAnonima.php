<?php

//* Es una funcion anonima que se manda a llamar dentro de una funcion
function Greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) { //? una funcion anomima se usa cuando se necesita logica 
    echo "Hola $name";
};

$en = function ($name) {
    echo "Hi $name";
};

Greet($en, 'pedro');
