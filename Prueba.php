<?php
/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 06:26 PM
 */



require_once 'vendor/autoload.php';

$user= new \PlatziPHP\Author('nbr920@gmail.com','1234');
//var_dump($user);

//echo $user;

$user->setLastname('vargas');

echo $user->getLastName();
echo PHP_EOL;