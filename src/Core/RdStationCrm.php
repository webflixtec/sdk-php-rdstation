<?php

namespace RdStation\Core;

class RdStationCrm extends RdStationController{
    
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::CRM_URL,
            'headers' => [
                "asdasd" => 'asdasd'
            ]
        ]);
        
        parent::__construct($config);
    }
    
}
