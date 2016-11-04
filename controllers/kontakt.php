<?php
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
