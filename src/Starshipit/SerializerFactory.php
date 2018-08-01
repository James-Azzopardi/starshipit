<?php

    namespace Starshipit;

    use JMS\Serializer\Handler\HandlerRegistry;
    use JMS\Serializer\SerializerBuilder;
    use Starshipit\Handler\DateTimeHandler;
    /**
     * Class SerializerFactory
     * @package Starshipit\Factory
     */
    class SerializerFactory
    {
        /**
         * @return \JMS\Serializer\Serializer
         */
        public static function getSerializer()
        {
            return SerializerBuilder::create()
                ->configureHandlers(function (HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new DateTimeHandler());
                })
                ->addMetadataDir(__DIR__.'/Serializer')
                ->build();
        }
    }

