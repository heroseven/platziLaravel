<?php

/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 10:49 PM
 */
class EmailTest extends PHPUnit_Framework_TestCase
{


    function test_email_is_valid(){


        $email= new PlatziPHP\Email('aaa@gmail.com');

        $this->assertInstanceOf(PlatziPHP\Email::class,$email);


    }


    function test_email_is_invalid(){



        $this->setExpectedException(
            InvalidArgumentException::class
        );
        $email= new PlatziPHP\Email('a@gasnnnom');




    }

}