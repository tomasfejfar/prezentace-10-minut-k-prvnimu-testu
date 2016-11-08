<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'kontakt':
            require 'controllers/kontakt.php';
            break;
        case 'napistemi':
            require 'controllers/napistemi.php';
            break;
    }
} else {
    require 'controllers/hlavni.php';
}
