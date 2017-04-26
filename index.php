<?php
define('ROOT', __DIR__);
include __DIR__ . '/functions.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'kontakt':
            require __DIR__ . '/controllers/kontakt.php';
            break;
        case 'napistemi':
            require __DIR__ . '/controllers/napistemi.php';
            break;
        case 'secret':
            require __DIR__ . '/controllers/secret.php';
            break;
    }
} else {
    require __DIR__ . '/controllers/hlavni.php';
}
