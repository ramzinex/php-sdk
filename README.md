# Ramzinex

# <a href="https://documenter.getpostman.com/view/15475713/UyxnD4dH">Ramzinex API Document</a>

## Installation
<p>
First of all, You need to make an account on Ramzinex exchange from <a href="https://ramzinex.com/exchange/pt/authentication">Ramzinex</a>
</p>
<p>
After that you just need to pick your token
</p>
<hr>

Use in these ways :

```php
composer require ramzinex/php
```

or add 

```php
"ramzinex/php": "*"
```
to your composer.json file and then run

```php
$ composer update
```


Usage
-----

There is an example 

```php
require __DIR__ . '/vendor/autoload.php';
	$ramzinex_api = new \ramzinex\RamzinexApi('your authentication token',['Authorization2: Bearer Your-Token','x-api-key: YOUR_API_KEY','additional_header : ....']);
	
	
	$price =$ramzinex_api->getPrice(272);
	
	if($price['http_code'] == 200){
		return $price;	
	}

/*
output
[
 "http_code" => 200
  "result" => [
    "status" => 0
    "data" => array:20 [
      "sell" => 433000
      "buy" => 380008
      "pair_id" => 272
      "icon" => "/exchange/img/coins/toncoin.png"
      "web_link" => "https://ramzinex.com/exchange/orderbook/272"
      "base_precision" => 2
      "quote_precision" => 0
      "base_currency_id" => 166
      "base_currency_symbol" => []
      "quote_currency_id" => 2
      "quote_currency_symbol" =>[] 
      "price_step" => 433
      "amount_step" => 2.3
      "show_order" => 1000
      "url_name" => "toncoin-ton"
      "crypto_box" => 0
      "price_precision" => null
    ]
  ]
]
*/
```




<div dir='rtl'>

## راهنما

### ساخت حساب کاربری

اگر در رمزینکس عضو نیستید میتوانید از [لینک عضویت](https://ramzinex.com/exchange/pt/authentication) ثبت نام کنید.

### مستندات

برای مطالعه کامل مستندات رمزینکس به صفحه [مستندات رمزینکس](https://documenter.getpostman.com/view/15475713/UyxnD4dH) مراجعه کنید.


##
![ramzinex](https://ramzinex.com/exchange/pt/static/media/logo-dark.254200c0c6e2e4874067db61e5b45cf6.svg)

[https://ramzinex.com/](https://ramzinex.com)

</div>