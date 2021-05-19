<?php

/*
* Ici, dans Model, se trouve la partie logique de l'application.
* Dans cet exemple, nous avons une classe extrêmement simple qui ne renvoie qu'un seule
* message texte, mais c'est là que se feront les
* communications avec la base de données, par exemple, validations, etc.
*/

class Model {
	
	public function getMessage() {
		return "Message de model.php";
	}
}
?>