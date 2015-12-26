<?php

/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 10:10 PM
 */
class PostTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    function it_gives_us_the_author_name_in_post(){


        $author= new PlatziPHP\Author("fake@gmail.com","fake","AUTOR_DE_PLATZI");
        $author->setLastname('vargas');
        $post=new PlatziPHP\Post($author,'titulo','este es el body');

        $this->assertEquals('',$post->getAuthor());





    }
}