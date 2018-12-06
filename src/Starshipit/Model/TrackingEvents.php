<?php

namespace Starshipit\Model;

/**
 * Class Package
 * @package Starship\Model
 */
class TrackingEvents
{
    /**
     * @var int
     */
    protected $event_datetime;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var double
     */
    protected $details;


    /**
     * @param string $EventDateTime
     * @return $this
     */
    public function setEventDatetime($event_datetime)
    {
        $this->event_datetime = $event_datetime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventDatetime()
    {
        return $this->event_datetime;
    }

    /**
     * @param string $Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }
}

