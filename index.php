<?php
/*
* Index.php, c'est là que tout commence.
* Chargez simplement le contrôleur par défaut, qui dans ce cas est controller.php
*/
require_once 'controller/controller.php'; // Charge le fichier controller.php
$controller = new Controller(); // Crée un objet Controller
$controller->index(); // Appelle la méthode du contrôleur index ()
?>