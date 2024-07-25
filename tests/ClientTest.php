<?php

namespace webflixtec\RDStation;

use Mockery;
use GuzzleHttp\ClientInterface;
use webflixtec\RDStation\Services\Lead;
use webflixtec\RDStation\Contracts\LeadInterface;

class ClientTest extends TestCase
{
    /**
     * @var \webflixtec\RDStation\RD
     */
    protected $rd;

    public function setUp()
    {
        parent::setUp();

        $this->rd = new RD(
            'TOKEN',
            Mockery::mock(LeadInterface::class)
        );
    }

    public function testLeadService()
    {
        $this->assertInstanceOf(LeadInterface::class, $this->rd->lead());
    }
}