<?php
$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'php' => 'backend'
];

// foreach ($courses as $key => $value) {
//     echo "$key : $value <br>";
// }

array_key_exists('php', $courses); //* Devuele un true si existe la llave
in_array('javascript', $courses); //* Devuelve un true si existe el elemento


print_r(array_keys($courses)); //* imprime todas las llaves

print_r(array_values($courses)); //* imprime todos los valores