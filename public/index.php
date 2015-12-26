<?php
/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 26/12/15
 * Time: 12:15 PM
 */


use Illuminate\Http\Request;
use PlatziPHP\Http\Controllers;

require_once __DIR__.'/../vendor/autoload.php';


$request= Request::capture();
$controller= new Controllers\HomeController();
$controller->index($request);

//echo 'hola mundo';