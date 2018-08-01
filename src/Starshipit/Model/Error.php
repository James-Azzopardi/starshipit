<?php

namespace Starshipit\Model;

/**
 * Class Error
 * @package Starshipit\Model
 */
class Error
{
    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $details;

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $Message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $Details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }
}

