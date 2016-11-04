<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'World';
}

$hobbies = [
    'trekking',
    'učení',
    'čaj',
];

$person = [
    'Tomáš',
    'Fejfar',
    'tomas.fejfar@gmail.com'
];

$title = 'Hello ' . $name;
require_once 'page.view.php';
