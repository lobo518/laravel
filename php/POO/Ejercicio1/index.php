<?php

require_once "persona.php";
require_once "usuario.php";
require_once "administrador.php";

$usuario1 = new Usuario;

$usuario1->type = new Administrador;

echo $usuario1->type->Saludar();
$usuario1->Grita();
