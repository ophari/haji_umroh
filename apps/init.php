<?php
require_once "../apps/core/Users.php";
require_once "../apps/core/Formulir.php";

$user = new User();
$user->Register();
$user->Login();


$formulir = new Formulir;
$formulir->Formulir();

