<?php

namespace RdStation\Core;

class RdStationMarketing extends RdStationController{
    
    public function __construct(array $config = []) {
        $config = array_replace_recursive($config, [
            'base_uri' => self::MARKETING_URL,
        ]);
        
        parent::__construct($config);
    }
    
}
