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

$title = 'Hello ' . $name;
require_once 'page.view.php';
