<?php

Route::get('/page-test', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->pagetest($twig);
});
Route::get('/partinscription', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->partinscription($twig);
});
Route::get('/proinscription', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->proinscription($twig);
});
Route::get('/kidsinscription', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->kidsinscription($twig);
});
Route::get('/', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->accueil($twig);
});
Route::get('/moncompte', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->moncompte($twig);
});
Route::get('/informations', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->informations($twig);
});
Route::get('/localisation', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->localisation($twig);
});
Route::get('/financement', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->financement($twig);
});
Route::get('/inscription', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->inscription($twig);
});
Route::get('/services', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->services($twig);
});
