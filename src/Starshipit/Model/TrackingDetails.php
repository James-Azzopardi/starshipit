<?php

namespace Starshipit\Model;

/**
 * Class Package
 * @package Starship\Model
 */
class TrackingDetails
{
    /**
     * @var int
     */
    protected $order_number;

    /**
     * @var string
     */
    protected $order_status;

    /**
     * @var double
     */
    protected $carrier_name;

    /**
     * @var double
     */
    protected $carrier_service;

    /**
     * @var double
     */
    protected $tracking_number;

    /**
     * @var double
     */
    protected $shipment_date;

    /**
     * @var string
     */
    protected $tracking_status;

    /**
     * @var string
     */
    protected $carrier_service_code;

    /**
     * @var string
     */
    protected $last_updated_date;

    /**
     * @var string
     */
    protected $tracking_events;

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
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
    public function getOrderStatus()
    {
        return $this->order_status;
    }

    /**
     * @param string $OrderStatus
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->order_status = $order_status;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierName()
    {
        return $this->carrier_name;
    }

    /**
     * @param string $OrderStatus
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->carrier_name = $carrier_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getCarrierService()
    {
        return $this->carrier_service;
    }

    /**
     * @param string $CarrierService
     * @return $this
     */
    public function setCarrierService($carrier_service)
    {
        $this->carrier_service = $carrier_service;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * @param string $TrackingNumber
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->tracking_number = $tracking_number;

        return $this;
    }


    /**
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->shipment_date;
    }

    /**
     * @param string $ShipmentDate
     * @return $this
     */
    public function setShipmentDate($shipment_date)
    {
        $this->shipment_date = $shipment_date;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingStatus()
    {
        return $this->tracking_status;
    }

    /**
     * @param string $TrackingStatus
     * @return $this
     */
    public function setTrackingStatus($tracking_status)
    {
        $this->tracking_status = $tracking_status;

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
    public function getLastUpdatedDate()
    {
        return $this->last_updated_date;
    }

    /**
     * @param string $CarrierServiceCode
     * @return $this
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        $this->last_updated_date = $last_updated_date;

        return $this;
    }

    /**
     * @param string $TrackingEvents
     * @return $this
     */
    public function getTrackingEvents()
    {
        return $this->tracking_events;
    }

    /**
     * @param string $TrackingEvents
     * @return $this
     */
    public function setTrackingEvents($tracking_events)
    {
        $this->tracking_events = $tracking_events;

        return $this;
    }
}

