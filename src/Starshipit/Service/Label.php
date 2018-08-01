<?php
namespace Starshipit\Service;

use Starshipit\Model\Authorization;
use Starshipit\Model\Label as LabelModel;
use Starshipit\Model\Order as OrderModel;
use Starshipit\Model\OrderDetails;
use Starshipit\Traits;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use JMS\Serializer\SerializerInterface;
use Starshipit\Exception\ApiException;
use GuzzleHttp\Psr7;

/**
 * Class Configuration
 *
 * @package CultureKings\Afterpay\Service\Merchant
 */
class Label
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
     * @return array
     */
    public function print(OrderModel $order)
    {
        echo '<pre>';
        try {
            $body = "{ 'order_id' : ".$order->getOrder()->getOrderId()." x}";
            echo $body;
            $result = $this->getClient()->post(
                'orders/shipment',
                [
                    'headers' => [
                        'Content-Type'              => 'application/json',
                        'StarShipIT-Api-Key'        => $this->getAuthorization()->getApiKey(),
                        'Ocp-Apim-Subscription-Key' => $this->getAuthorization()->getSubscriptionKey(),
                        'User-Agent'                => $this->getAuthorization()->getUserAgent(),
                    ],
                    'body' => $body,
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

        print_r((string) $result->getBody());
        // return $this->getSerializer()->deserialize(
        //     (string) $result->getBody(),
        //     LabelModel::class,
        //     'json'
        // );
    }
}

