<?php

namespace Starshipit\Model;

/**
 * Class Address
 * @package Starshipit\Model
 */

class Address
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $building;

    /**
     * @var string
     */
    protected $street;

    /**
     * @var string
     */
    protected $suburb;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $post_code;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $delivery_instructions;


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $Phone
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param string $Building
     * @return $this
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $Company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $Street
     * @return $this
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return string
     */
    public function getSuburb()
    {
        return $this->suburb;
    }

    /**
     * @param string $Suburb
     * @return $this
     */
    public function setSuburb($suburb)
    {
        $this->suburb = $suburb;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $State
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->post_code;
    }

    /**
     * @param string $Postcode
     * @return $this
     */
    public function setPostcode($post_code)
    {
        $this->post_code = $post_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $Country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->delivery_instructions;
    }

    /**
     * @param string $DeliveryInstructions
     * @return $this
     */
    public function setDeliveryInstructions($delivery_instructions)
    {
        $this->delivery_instructions = $delivery_instructions;

        return $this;
    }
}

