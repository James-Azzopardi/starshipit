<?php
    require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
    require_once __DIR__ . '/../config.php'; // Get API_KEY and SUBSCRIPTION_KEY

    use Starshipit\Api;

    $authorization = new \Starshipit\Model\Authorization('https://api.starshipit.com/api/', API_KEY, SUBSCRIPTION_KEY, 'Custom API');

    $order_id = '';

    $order = Api::order($authorization)->get($order_id);

    echo '<pre>';
    print_r($order);

    // If Not using Starshipit ID reference

    $order_number = '';

    $order = Api::order($authorization)->get_order_number($order_number);

    echo '<pre>';
    print_r($order);

