<?php

$condition = 0;
if ($condition) {
    echo 'Podmínka prošla!';
}

die('Tady skončíme');
$name = $_GET['name'];
$title = 'Hello ' . $name;
require_once 'page.view.php';
