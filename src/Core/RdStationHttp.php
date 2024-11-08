<?php

namespace RdStation\Core;

use GuzzleHttp\Client;

class RdStationHttp {
    protected Client $http;
    protected $config;

    const CRM_URL = "https://crm.rdstation.com/api/v1/";
    const MARKETING_URL = "https://api.rd.services/platform/";
           
    public function __construct(array $config = []) {   
        $defaultConfig = array(
            'base_uri' => self::CRM_URL,
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json'
            )
        );
        
        $this->config = array_replace_recursive($defaultConfig, $config);
                
        $this->http = new Client($this->config);
    }
}
