<?php

$condition = false;
if ($condition) {
    echo 'Podmínka prošla!';
} else {
    echo 'Podmínka neprošla :( ';
}

die('Tady skončíme');
$name = $_GET['name'];
$title = 'Hello ' . $name;
require_once 'page.view.php';
