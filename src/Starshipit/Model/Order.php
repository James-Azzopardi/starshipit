<?php

namespace Starshipit\Model;

use Starshipit\Model;
/**
 * Class Order
 *
 * @package Starshipit\Model
 */
class Order
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
    protected $order;

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
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }
}

