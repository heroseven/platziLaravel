<?php
/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 10:04 PM
 */

namespace PlatziPHP;


class Post
{


    private $author;
    private $title;
    private $body;

    public function __construct(Author $author, $title, $body)
    {
        $this->author=$author;
        $this->title=$title;
        $this->body=$body;

    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }


    public function getAuthor(){
        $this->author->getLastName();
    }



}