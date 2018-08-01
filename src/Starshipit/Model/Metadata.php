<?php

namespace Starshipit\Model;

/**
 * Class Metadata
 * @package Starshipit\Model
 */
class Metadata
{
    /**
     * @var string
     */
    protected $metafield_key;

    /**
     * @var string
     */
    protected $value;

    /**
     * @return string
     */
    public function getMetafieldKey()
    {
        return $this->metafield_key;
    }

    /**
     * @param string $MetafieldKey
     * @return $this
     */
    public function setMetafieldKey($metafield_key)
    {
        $this->metafield_key = $metafield_key;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $Value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}

