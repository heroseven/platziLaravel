<?php

/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 08:12 PM
 */
class AuthorTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */

    function it_should_construct(){


        $author= new \PlatziPHP\Author('faker@gmail.com','fake','AUTOR_DE_PLATZI');

        $this->assertInstanceOf(PlatziPHP\Author::class,$author);
    }

    function it_should_fail_when_no_key_is_given(){


    }
}