<?php

namespace webflixtec\RDStation;

use webflixtec\RDStation\Contracts\LeadInterface;
use webflixtec\RDStation\Services\Lead;
use webflixtec\RDStation\Exceptions\RDException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as HttpClient;

class RD
{

    /**
     * Serviço de Lead
     *
     * @var \webflixtec\RDStation\Contracts\LeadInterface
     */
    protected $lead;

    /**
     * Token público
     *
     * @var string
     */
    private $token;

    public function __construct(
        $token,
        LeadInterface $lead = null,
        ClientInterface $http = null
    ) {
        if (!is_string($token)) {
            throw new RDException('O token precisa ser uma string');
        }
        
        $this->http = $http ?: new HttpClient;
        $this->token = $token;
        $this->lead = $lead ?: new Lead($this->http, $this);
    }

    /**
     * lead
     *
     * Serviço de Lead
     *
     * @return \webflixtec\RDStation\Services\Lead
     */
    public function lead()
    {
        return $this->lead;
    }

    /**
     * getToken
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
