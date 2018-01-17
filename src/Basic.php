<?php

namespace pxgamer\Cryptopia;

use GuzzleHttp\Client;

/**
 * Class Basic.
 */
class Basic
{
    /**
     * The base URI of the extended API.
     */
    const BASE_URI = 'https://www.cryptopia.co.nz/api/';
    /**
     * @var Client
     */
    protected $client;

    /**
     * Basic constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => self::BASE_URI,
        ]);
    }

    public function getCurrencies()
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('getcurrencies')
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }
}
