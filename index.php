<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'World';
}

$hobby1 = 'trekking';
$hobby2 = 'učení';

$title = 'Hello ' . $name;
require_once 'page.view.php';
