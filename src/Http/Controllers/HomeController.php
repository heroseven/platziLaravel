<?php

/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 26/12/15
 * Time: 12:20 PM
 */



namespace PlatziPHP\Http\Controllers;

use Illuminate\Http\Request;
use PlatziPHP\Http\Views\View;


class HomeController
{


    public function index(Request $request)

    {


        $view= new View('home',[
            'message'=>'hello of the view'
        ]);

        $response=$view->render();

        $response->send();



    }







}