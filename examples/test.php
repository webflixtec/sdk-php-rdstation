<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include __DIR__ . '/../vendor/autoload.php';

$apiDealPipelines = new \RdStation\Crm\DealPipelines();

$apiDealPipelines->setToken('');

try{
    
    $data = $apiDealPipelines->list();
    
    var_dump($data);
    
} catch (\Ligatech\Exceptions\RdStationException $ex) {

    var_dump($ex);
    
}