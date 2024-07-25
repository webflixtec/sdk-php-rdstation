<?php

require __DIR__ . '/../vendor/autoload.php';

use webflixtec\RDStation\RD;
use webflixtec\RDStation\Exceptions\RDException;

try {
    $rd = new RD('92d6b7f739e52baf6860f89ea1d3e46d');
    
    $lead = $rd->lead()->create([
        'email' => 'teste1@teste.com',
        'name' => 'Teste via API',
    ]);

    echo '<pre>' . var_dump($lead) . '</pre>';

} catch (RDException $e) {
    echo $e->getMessage();
}