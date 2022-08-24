<?php

$firstAndLastName = $_POST['nameAndSurname'];
$email = $_POST['email'];
$message = $_POST['message'];

mail('riedladam.work@seznam.cz',
    'email from '.$firstAndLastName,
    $message
);