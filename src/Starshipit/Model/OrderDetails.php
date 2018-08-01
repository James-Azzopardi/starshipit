<?php

namespace Starshipit\Model;

/**
 * Class OrderDetails
 * @package Starshipit\Model
 */
class OrderDetails
{

    /**
     * @var int
     */
    protected $order_id;

    /**
     * @var string
     */
    protected $order_date;

    /**
     * @var int
     */
    protected $order_number;

    /**
     * @var string
     */
    protected $reference;

    /**
     * @var string
     */
    protected $carrier;

    /**
     * @var string
     */
    protected $carrier_name;

    /**
     * @var string
     */
    protected $carrier_service_code;

    /**
     * @var string
     */
    protected $shipping_method;

    /**
     * @var string
     */
    protected $signature_required;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var object
     */
    protected $sender_details;

    /**
     * @var object
     */
    protected $destination;

    /**
     * @var array
     */
    protected $items;

    /**
     * @var array
     */
    protected $packages;

    /**
     * @var array
     */
    protected $metadatas;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
      * @param string OrderId
      * @return $this
      */
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @param string $OrderDate
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param string $OrderNumber
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * @param string $Reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $Carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @param string $CarrierServiceCode
     * @return $this
     */
    public function setCarrierServiceCode($carrier_service_code)
    {
        $this->carrier_service_code = $carrier_service_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierServiceCode()
    {
        return $this->carrier_service_code;
    }

    /**
     * @param string $ShippingMethod
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * @param string $SignatureRequired
     * @return $this
     */
    public function setSignatureRequired($signature_required)
    {
        $this->signature_required = $signature_required;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureRequired()
    {
        return $this->signature_required;
    }

    /**
     * @param string $Currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $SenderDetails
     * @return $this
     */
    public function setSenderDetails($sender_details)
    {
        $this->sender_details = $sender_details;

        $this->sender_details = $sender_details;

        return $this;
    }

    /**
     * @return string
     */
    public function getSenderDetails()
    {
        return $this->sender_details;

        return $this->sender_details;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $Destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return string
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param string $Items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackages()
    {
        return $this->packages;
    }

    /**
     * @param string $Packages
     * @return $this
     */
    public function setPackages(array $packages)
    {
        $this->packages = $packages;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetadatas()
    {
        return $this->metadatas;
    }

    /**
     * @param string $Metadatas
     * @return $this
     */
    public function setMetadatas($metadatas)
    {
        $this->metadatas = $metadatas;

        return $this;
    }
}

