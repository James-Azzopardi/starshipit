<?php
namespace Starshipit\Contacts;

/**
 * Interface AuthorizationInterface
 * @package Starshipit\Contacts
 */
interface AuthorizationInterface
{
    /**
     * @param string $endpoint
     *
     * @return $this
     */
    public function setEndpoint($endpoint);

    /**
     * @return string|null
     */
    public function getEndpoint();
}

