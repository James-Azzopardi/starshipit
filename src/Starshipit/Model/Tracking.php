<?php

namespace Starshipit\Model;

/**
 * Class Package
 * @package Starship\Model
 */
class Tracking
{
    /**
     * @var string
     */
    protected $success;
    /**
     * @var string
     */
    protected $errors;
    /**
     * @var string
     */
    protected $tracking;

    /**
     * @param string $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param array $errors
     * @return $this
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param string $order
     * @return $this
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }

    /**
     * @return string
     */
    public function getTracking()
    {
        return $this->tracking;
    }
}

