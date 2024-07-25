# 

Biblioteca que realiza integração com a API do [RDStation](http://www.rdstation.com)

[![StyleCI](https://styleci.io/repos/127529310/shield?branch=master)](https://styleci.io/repos/127529310)

## Instalação via composer

```bash
$ composer require webflixtec/sdk-php-rdstation
```

## Cadastrar um novo lead

```php
<?php

use webflixtec\RDStation\RD;
use webflixtec\RDStation\Exceptions\RDException;

try {
    $rd = new RD('TOKEN_PUBLICO');
    $lead = $rd->lead()->create([
        'email' => 'lucas@bubb.com.br',
        'name' => 'Lucas Colette',
        'cargo' => 'CEO',
        'empresa' => 'webflixtec',
        'tags' => 'a_nice_tag',
        'campo_customizado_1' => 'valor customizado',
        'campo_customizado_2' => 'valor customizado'
    ]);

    echo '<pre>' . var_dump($lead) . '</pre>';

} catch (RDException $e) {
    echo $e->getMessage();
}
```

Resultado esperado:

```
[
    'result' => 'success',
    'lead' => [
        'email' => 'lucas@bubb.com.br',
        'name' => 'Lucas Colette',
        'cargo' => 'CEO',
        'empresa' => 'webflixtec',
        'tags' => 'a_nice_tag',
        'campo_customizado_1' => 'valor customizado',
        'campo_customizado_2' => 'valor customizado'
    ],
]
```

## Testando

```bash
$ composer test
```