<?php

/*
*   sort: Ordena un array.
*   
*   rsort: Ordena un array en orden inverso.
*   
*   ksort: Ordena un array por clave.
*   
*   krsort: Ordena un array por clave en orden inverso.
*   
*   array_slice: Extrae una parte de un array.
*   
*   array_chunk: Divide un array en fragmentos.
*   
*   array_shift: Quita un elemento del principio del array.
*   
*   array_pop: Extrae el último elemento del final del array.
*   
*   array_unshift: Añadir al inicio de un array uno a más elementos.
*   
*   array_push: Inserta uno o más elementos al final de un array.
*   
*   array_flip: Intercambia todas las claves de un array con sus valores asociados.
*/

$courses = [
    10023 => 'C',
    10 => 'JS',
    870 => 'Java',
    100 => 'Python',
    210 => 'PHP'
];

echo ('<pre>');
var_dump(sort($courses));
var_dump($courses);
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(rsort($courses));
var_dump($courses);
echo ('</pre>');
echo ('<br>');
$courses = [
    10023 => 'C',
    10 => 'JS',
    870 => 'Java',
    100 => 'Python',
    210 => 'PHP'
];
echo ('<br>');
echo ('<pre>');
var_dump(ksort($courses));
var_dump($courses);
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(krsort($courses));
var_dump($courses);
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(array_slice($courses, 2));
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(array_chunk($courses, 3));
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(array_shift($courses));
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(array_pop($courses));
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(array_unshift($courses, ['data_base' => 'MySQL']));
var_dump($courses);
echo ('</pre>');
echo ('<br>');
echo ('<pre>');
var_dump(array_push($courses, ['framework' => 'Laravel']));
var_dump($courses);
echo ('</pre>');
$courses = [
    'estructurado' => 'C',
    'frontend' => 'JS',
    'oo' => 'Java',
    'ia' => 'Python',
    'backend' => 'PHP'
];
echo ('<br>');
echo ('<pre>');
var_dump(array_flip($courses)); //Funciona solo si las Key son números
echo ('</pre>');
echo ('<br>');
