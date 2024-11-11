<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include __DIR__ . '/../vendor/autoload.php';

$api = new \RdStation\Crm\Deals();

$api->setToken('');

try{
    
    $data = $api->create([
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
    
} catch (\Ligatech\Exceptions\RdStationException $ex) {

    var_dump($ex);
    
}