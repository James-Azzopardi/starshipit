<?php
    require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
    require_once __DIR__ . '/../config.php'; // Get API_KEY and SUBSCRIPTION_KEY

    use Starshipit\Api;

    $authorization = new \Starshipit\Model\Authorization('https://api.starshipit.com/api/', API_KEY, SUBSCRIPTION_KEY, 'Custom API');
    $order_details = new \Starshipit\Model\OrderDetails();
    $order         = new \Starshipit\Model\Order();

    $order_details->setOrderDate(new DateTime)
                  ->setOrderNumber(rand().'_001')
                  ->setReference('Online Order')
                  ->setShippingMethod('Express')
                  ->setSignatureRequired(false);

    $order_address = new \Starshipit\Model\Address();

    $order_address->setName('John Doe')
                  ->setPhone('0412456789')
                  ->setEmail('test@email.com.au')
                  ->setStreet('1 Test Address')
                  ->setSuburb('Suburb')
                  ->setState('VIC')
                  ->setPostcode('3000')
                  ->setCountry('Australia')
                  ->setCompany('')
                  ->setDeliveryInstructions('Leave at door');

    $order_items = new \Starshipit\Model\Item();

    $order_items->setDescription("Mobile Phone")
                ->setSku("123456")
                ->setQuantity(1)
                ->setWeight(0.4)
                ->setValue(125);

    $order_details->setDestination($order_address);
    $order_details->setItems(array($order_items));
    $order->setOrder($order_details);

    echo '<pre>';
    try {
        // Post Order
        $order = Api::order($authorization)->post($order);
        // Get Order
        $order = Api::order($authorization)->get($order->getOrder()->getOrderId());
        print_r($order);
    } catch(Exception $e) {
        print_r($e);
    }

