<?php
$app['title'] = 'Napište mi';
if (count($_POST)) {
    echo htmlspecialchars(strip_tags($_POST['name']));
    echo '<br>';
    echo htmlspecialchars(strip_tags($_POST['message']));
} else {
    require 'views/napistemi.php';
}
