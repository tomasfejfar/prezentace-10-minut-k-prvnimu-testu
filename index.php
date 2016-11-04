<?php



if (isset($_GET['page'])) {
    echo 'Jsme na stránce ' . $_GET['page'];
    $hobbies = [
        'trekking',
        'učení',
        'čaj',
    ];

    $person = [
        'Jméno' => 'Tomáš',
        'Příjmení' => 'Fejfar',
        'Email' => 'tomas.fejfar@gmail.com'
    ];
    require_once 'page.view.php';
} else {
    echo 'Jsme na hlavní stránce';
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
    } else {
        $name = 'World';
    }
    $title = 'Hello ' . $name;
}
