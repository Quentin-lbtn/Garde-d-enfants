<?php

/*
* Le contrôleur est responsable de la réception des requètes utilisateurs.
* De plus, le contrôleur communique également avec le modèle et la vue
*/

require_once 'model/model.php'; // Charge le fichier model.php

class Controller {
	
	// Ici on appelle la méthode standard des contrôleurs : index
	public function pagetest($twig) {
        $model = new Model(); // Crée un objet Model
        $message = $model->getMessage(); // Appelle la méthode getMessage () du modèle 
        echo $twig->render('pagetest.twig',['message'=>'dgfgdfrtgdtf']);
    }
    public function partinscription($twig) {
        echo $twig->render('partinscription.twig');
    }
    public function proinscription($twig) {
        echo $twig->render('proinscription.twig');
    }
    public function kidsinscription($twig) {
        echo $twig->render('kidsinscription.twig');
    }
    public function accueil($twig) {
        echo $twig->render('accueil.twig');
    }

    public function moncompte($twig) {
        echo $twig->render('moncompte.twig');
    }
    public function informations($twig) {
        echo $twig->render('informations.twig');
    }
    public function localisation($twig) {
        echo $twig->render('localisation.twig');
    }
    public function financement($twig) {
        echo $twig->render('financement.twig');
    }
}
?>