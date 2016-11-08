<?php
$app['title'] = 'Napište mi';
if (count($_POST)) {
    echo htmlspecialchars($_POST['name']);
    echo '<br>';
    echo htmlspecialchars($_POST['message']);
} else {
    require 'views/napistemi.php';
}
