<?php
/**
 * Created by PhpStorm.
 * User: stephan
 * Date: 25/12/15
 * Time: 10:45 PM
 */

namespace PlatziPHP;


use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Email
{



    private $address;

    /**
     * Email constructor.
     * @param string $address
     */
    public function __construct($address)
    {

        if (!filter_var($address, FILTER_VALIDATE_EMAIL))
            throw new InvalidArgumentException(
                "Invalidate email address: [$address]"
            );
        $this->address=$address;

    }






}