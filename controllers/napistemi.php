<?php
$app['title'] = 'Napište mi';
if (count($_POST)) {
    var_dump($_POST);
}
require 'views/napistemi.php';
