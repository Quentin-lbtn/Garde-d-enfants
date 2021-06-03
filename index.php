<?php
/*
* Index.php, c'est là que tout commence.
* Chargez simplement le contrôleur par défaut, qui dans ce cas est controller.php
*/
require_once 'vendor/autoload.php';
require_once 'route/Route.php';
require_once 'controller/controller.php'; // Charge le fichier controller.php
use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;
use Assetic\Asset\GlobAsset;
$js = new AssetCollection(array(
    new GlobAsset('assets/style.css'),
    new FileAsset('assets/style.css'),
));
echo "<div style='display: none'>".$js->dump()."</div>";

function loadClasses($class_name){
    $controllersPath = './controller/'.$class_name.'.php';

    if(file_exists($controllersPath)){
        require_once($controllersPath);
    } else {
        echo "erreur mon gars";
    }
}


require_once 'routes.php';
?>