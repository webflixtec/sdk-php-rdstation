# SDK PHP RD Station
SDK das APIs Rd Station CRM/Marketing

## Instalar
```console
composer require webflixtec/sdk-php-rdstation
```

## Utilização
```php
$apiCrmDeals = new \RdStation\Crm\Deals();

$apiCrmDeals->setToken('');

try{
    
    $data = $apiCrmDeals->create([
        "deal" => [
            "deal_stage_id" => "",
            "name" => " 1",
            "user_id" => ""
        ],
        "contacts" => [[
            "name" => " 1",
            "emails" => [[
                'email' => "",
            ]],
            "phones" => [[
                'phone' => "1232313123",
                'type' => 'Celular'
            ]]
        ]],
        "deal_products" => [
            "amount" => 1,
            "price" => 1000000,
            "total" => 1000000,
            "name" => "123131",
            "description" => "771231380 sdasdasd"
        ]
    ]);

    var_dump($data);
    
} catch (\RdStation\Exceptions\RdStationException $ex) {
    var_dump($ex);
}
```
