<?php

use Usuario as GlobalUsuario;

abstract class Base
{
    protected $nombre;
    private function obtenerNombreClase()
    {
        return get_called_class();
    }

    public function login()
    {
        echo "Hola soy $this->nombre y vengo de {$this->obtenerNombreClase()}";
    }
}

class Usuario extends Base
{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}

class Admin extends Base
{
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}

class Invitado extends Base
{
    protected $nombre = "Invitado";
}

$usuario1 = new Usuario("Pedro");
$usuario1->login();
echo "<br>";
$usuario2 = new Admin("Sofia");
$usuario2->login();
echo "<br>";
$usuario3 = new Invitado();
$usuario3->login();
