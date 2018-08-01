<?php
namespace Starshipit;

use Starshipit\Traits\ClientTrait;
use Exception;
use GuzzleHttp\Client;

/**
 * Class Ping
 * @package Starshipit\Ping
 */
class Ping
{
    use ClientTrait;

    /**
     * Ping constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->setClient($client);
    }

    /**
     * Attempt to access the ping endpoint and will return true on success.
     * @return bool
     */
    public function ping()
    {
        try {
            $this->getClient()->get('validate');
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}

