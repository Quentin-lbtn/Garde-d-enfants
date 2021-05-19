<?php

/*
* Le contrôleur est responsable de la réception des requètes utilisateurs.
* De plus, le contrôleur communique également avec le modèle et la vue
*/

require_once 'model/model.php'; // Charge le fichier model.php

class Controller {
	
	// Ici on appelle la méthode standard des contrôleurs : index
	public function index() {
		$model = new Model(); // Crée un objet Model
		$message = $model->getMessage(); // Appelle la méthode getMessage () du modèle
		require_once 'view/view.php'; // Charge le fichier view.php
	}
}
?>