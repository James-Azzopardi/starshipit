<?php
namespace Starshipit\Traits;

use Starshipit\Contacts\AuthorizationInterface;

/**
 * Class AuthorizationTrait
 * @package Starshipit\Traits
 */
trait AuthorizationTrait
{
    /**
     * @var AuthorizationInterface
     */
    private $authorization;

    /**
     * @return AuthorizationInterface
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * @param AuthorizationInterface $authorization
     */
    public function setAuthorization(AuthorizationInterface $authorization)
    {
        $this->authorization = $authorization;
    }
}

