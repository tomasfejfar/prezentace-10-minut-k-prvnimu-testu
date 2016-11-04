<?php



if (isset($_GET['page'])) {
    require 'controllers/kontakt.php';
} else {
    require 'controllers/hlavni.php';
}
