<?php
namespace Starshipit\Model;

use Starshipit\Contacts\AuthorizationInterface;

/**
 * Class Authorization
 *
 * @package Starshipit\Afterpay
 */
class Authorization implements AuthorizationInterface
{
    /**
     * @var string
     */
    protected $endpoint;
    /**
     * @var string
     */
    protected $apiKey;
    /**
     * @var string
     */
    protected $subcriptionKey;
    /**
     * @var string
     */
    protected $user_agent;

    /**
     * Authorization constructor.
     * @param string      $endpoint
     * @param string|null $apiKey
     * @param string|null $subcriptionKey
     */
    public function __construct($endpoint, $apiKey = null, $subcriptionKey = null, $user_agent = null)
    {
        $this->setEndpoint($endpoint);
        $this->setApiKey($apiKey);
        $this->setSubscriptionKey($subcriptionKey);
        $this->setUserAgent($user_agent);
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     * @return $this
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionKey()
    {
        return $this->subcriptionKey;
    }

    /**
     * @param string $subcriptionKey
     * @return $this
     */
    public function setSubscriptionKey($subcriptionKey)
    {
        $this->subcriptionKey = $subcriptionKey;

        return $this;
    }


    /**
     * @param string $user_agent
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;

        return $this;
    }
    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }
}

