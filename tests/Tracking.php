<?php
    require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
    require_once __DIR__ . '/../config.php'; // Get API_KEY and SUBSCRIPTION_KEY

    use Starshipit\Api;

    $authorization = new \Starshipit\Model\Authorization('https://api.starshipit.com/api/', API_KEY, SUBSCRIPTION_KEY, 'Custom API');

    $tracking_number = '';

    $tracking = Api::tracking($authorization)->get($tracking_number);

    echo '<pre>';
    print_r($tracking);

