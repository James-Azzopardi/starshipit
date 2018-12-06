[Starshipit API](https://developers.starshipit.com/)
=======================

PHP library to interface with the [Starshipit API](https://developers.starshipit.com/)

## Installation

The recommended way to install is via [Composer](http://getcomposer.org).


```bash
composer require james-azzopardi/starshipit dev-master
```

Don't forget to include Composer's auto-loader if you haven't already:

```php
require 'vendor/autoload.php';
```

## API
[API Documentation](https://developers.starshipit.com/docs/services/58e5bb041164fe12c0b94ff1/operations/create-order)

## Supported Methods

* [POST] Create Label
* [POST] Create Order
* [GET] Get Order
* [GET] Search Orders
* [GET] Tracking Details

## Methods Not Supported at this Stage

* [GET] Address Validation
* [POST] Create Orders
* [POST] Delete Orders
* [POST] Delivery Services
* [GET] Shipping Rates
* [GET] Unshipped Orders
* [PUT] Update Order
* [GET] Users Address Book

## Special Thanks

[JMS Serializer](https://github.com/schmittjoh/serializer)

[Guzzle](https://github.com/guzzle/guzzle)

