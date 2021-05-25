<?php

/*
* Le contrôleur est responsable de la réception des requètes utilisateurs.
* De plus, le contrôleur communique également avec le modèle et la vue
*/

require_once 'model/model.php'; // Charge le fichier model.php

class Controller {
	
	// Ici on appelle la méthode standard des contrôleurs : index
	public function index($twig) {
        $model = new Model(); // Crée un objet Model
        $message = $model->getMessage(); // Appelle la méthode getMessage () du modèle 
        echo $twig->render('pagetest.twig',['message'=>'dgfgdfrtgdtf']);
    }
}
?>