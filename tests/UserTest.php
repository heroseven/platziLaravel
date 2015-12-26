<?php

/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 07:56 PM
 */
class UserTest extends PHPUnit_Framework_TestCase{


    /**
     * @test
     */
    function it_should_be_able_to_contruct(){
        $user= new PlatziPHP\User('fake@gmail.com','fakepassword');;
        $this->assertInstanceOf(PlatziPHP\User::class,$user);
    }

    /**
     * @test
     */
    function it_should_have_a_lastname(){

        $user= new PlatziPHP\User('a','a');
        $user->setLastname('vargas schebesta');
        $this->assertEquals('vargas schebesta',$user->getLastName());
    }

}