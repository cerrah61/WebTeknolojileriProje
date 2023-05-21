<?php

if (isset($_POST['name'], $_POST['email']))
 {
	$name = $_POST['name'];
	$email = $_POST['email'];

	echo "Sayın $name mesajın için teşekkür ederim <br>";
	echo "Lütfen $email adresinizi doğrulayınız.";
} else {
	echo 'E-posta adresiniz ve mailinizi yazmalısınız.';
}