<?php

namespace Starshipit\Model;

/**
 * Class Item
 * @package Starshipit\Model
 */
class Item
{
    /**
     * @var int
     */
    protected $item_id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var string
     */
    protected $country_of_origin;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var int
     */
    protected $quantity_to_ship;

    /**
     * @var double
     */
    protected $weight;

    /**
     * @var double
     */
    protected $value;


    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * @param string $ItemId
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->item_id = $item_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $Description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $Sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->country_of_origin;
    }

    /**
     * @param string $CountryOfOrigin
     * @return $this
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->country_of_origin = $country_of_origin;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param string $Quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getQunatityToShip()
    {
        return $this->quantitiy_to_ship;
    }

    /**
     * @param string $QunatityToShip
     * @return $this
     */
    public function setQunatityToShip($quantitiy_to_ship)
    {
        $this->quantitiy_to_ship = $quantitiy_to_ship;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param string $Weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return double
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

