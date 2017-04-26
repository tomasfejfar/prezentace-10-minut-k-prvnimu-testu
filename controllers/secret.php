<?php
$app['title'] = 'Tajná stránka';
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$password = isset($_POST['password']) ? $_POST['password'] : null;
	$credentials = getUsernameAndPasswordFromDb($name);
	if ($credentials[0] === $name && $credentials[1] === $password) {
		$hideSecret = false;
	} else {
		die('nesedí');
	}
}
require_once ROOT . '/views/secret.view.php';
