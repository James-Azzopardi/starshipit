<?php
    namespace Starshipit\Service;

    use Starshipit\Model\Authorization;
    use Starshipit\Model\Tracking as TrackingModel;
    use Starshipit\Model\TrackingDetails;
    use Starshipit\Model\TrackingEvents;
    use Starshipit\Traits;
    use GuzzleHttp\ClientInterface;
    use GuzzleHttp\Exception\BadResponseException;
    use Starshipit\Model\ErrorResponse;
    use JMS\Serializer\SerializerInterface;
    use Starshipit\Exception\ApiException;
    use GuzzleHttp\Psr7;

    /**
     * Class Tracking
     */

    class Tracking
    {
        use Traits\AuthorizationTrait;
        use Traits\ClientTrait;
        use Traits\SerializerTrait;

        /**
         * Configuration constructor.
         *
         * @param ClientInterface     $client
         * @param Authorization       $authorization
         * @param SerializerInterface $serializer
         */

        public function __construct(ClientInterface $client, Authorization $authorization, SerializerInterface $serializer) {
            $this->setClient($client);
            $this->setAuthorization($authorization);
            $this->setSerializer($serializer);
        }

        /**
         * @param string $id
         * @return Model\Tracking|object
         */

        public function get($tracking_number)
        {
            try {
                $result = $this->getClient()->get(
                    sprintf('track?tracking_number=%s', $tracking_number),
                    [
                        'headers' => [
                            'Content-Type'              => 'application/json',
                            'StarShipIT-Api-Key'        => $this->getAuthorization()->getApiKey(),
                            'Ocp-Apim-Subscription-Key' => $this->getAuthorization()->getSubscriptionKey(),
                            'User-Agent'                => $this->getAuthorization()->getUserAgent(),
                        ],
                    ]
                );
            } catch (BadResponseException $exception) {
                throw new ApiException(
                    $this->getSerializer()->deserialize(
                        (string) Psr7\stream_for($exception->getResponse()->getBody())->getContents(),
                        ErrorResponse::class,
                        'json'
                    ),
                    $exception
                );
            }

            return $this->getSerializer()->deserialize(
                (string) $result->getBody(),
                TrackingModel::class,
                'json'
            );
        }
    }

