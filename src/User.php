<?php
/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 06:20 PM
 */

namespace PlatziPHP;

class User {

    /**
     * @type
     */
    private $email;
    /**
     * @type string
     */

    private $firstname;

    /**
     * @type string
     */
    private $password;

    /**
     * @type string
     */

    protected $lastname;

    /**
     * User constructor.
     * @param string $email
     * @param string $password
     */

    public function __construct($email, $password)
    {
        $this->email=$email;
        $this->password=password_hash($password,PASSWORD_DEFAULT);
    }

    /**
     * @return string
     */

    public function getLastName(){
        return $this->lastname;
    }


    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }




}