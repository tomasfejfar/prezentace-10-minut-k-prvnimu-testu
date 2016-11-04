<?php
echo 'Jsme na hlavní stránce';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = 'World';
}
$title = 'Hello ' . $name;
require_once 'hlavni.view.php';
