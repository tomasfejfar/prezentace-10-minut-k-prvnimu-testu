<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'World';
}

$title = 'Hello ' . $name;
require_once 'page.view.php';
