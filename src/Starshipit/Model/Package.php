<?php

namespace Starshipit\Model;

/**
 * Class Package
 * @package Starship\Model
 */
class Package
{
    /**
     * @var int
     */
    protected $package_id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var double
     */
    protected $weight;

    /**
     * @var double
     */
    protected $height;

    /**
     * @var double
     */
    protected $width;

    /**
     * @var double
     */
    protected $length;

    /**
     * @var string
     */
    protected $packaging_type;

    /**
     * @var string
     */
    protected $carrier_service_code;

    /**
     * @var string
     */
    protected $tracking_number;

    /**
     * @var string
     */
    protected $tracking_url;

    /**
     * @var string
     */
    protected $shipment_type;


    /**
     * @return string
     */
    public function getPackageId()
    {
        return $this->package_id;
    }

    /**
     * @param string $PackageId
     * @return $this
     */
    public function setPackageId($package_id)
    {
        $this->package_id = $package_id;

        return $this;
    }

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
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $Height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $Width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $Length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackagingType()
    {
        return $this->packaging_type;
    }

    /**
     * @param string $PackagingType
     * @return $this
     */
    public function setPackagingType($packaging_type)
    {
        $this->packaging_type = $packaging_type;

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
    public function getTrackingNumber()
    {
        return $this->$tracking_number;
    }

    /**
     * @param string $TrackingNumber
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->$tracking_number = $tracking_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->tracking_url;
    }

    /**
     * @param string $TrackingUrl
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->tracking_url = $tracking_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentType()
    {
        return $this->shipment_type;
    }

    /**
     * @param string $ShipmentType
     * @return $this
     */
    public function setShipmentType($shipment_type)
    {
        $this->shipment_type = $shipment_type;

        return $this;
    }
}

