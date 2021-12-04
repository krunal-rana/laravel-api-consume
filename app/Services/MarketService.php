<?php

namespace App\Services;

use App\Traits\ConsumableExternalServices;

class MarketService
{

    use ConsumableExternalServices;

    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = Config('services.market.baseUri');
    }


    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
    }

    public function decodeResponse($response)
    {
    }

    public function checkIfErrorResponse($response)
    {
    }
}
