<?php

//Llamada al modelo
include_once "models/publications_model.php";

$pro = new publications_model();
$datos = $pro->get_publications();

//Llamada a la vista
include_once "views/publications_view.php";
?>