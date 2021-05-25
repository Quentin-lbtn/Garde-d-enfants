<?php

Route::get('/page-test', function(){
    $loader = new \Twig\Loader\FilesystemLoader('view');
    $twig = new \Twig\Environment($loader, [
    'cache' => false,
    ]);
    $controller = new Controller();
    $controller->index($twig);
});