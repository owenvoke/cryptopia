<?php

namespace pxgamer\Cryptopia;

use GuzzleHttp\Client;

/**
 * Class Basic.
 */
class Basic
{
    /**
     * The base URI of the API.
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

    /**
     * Get an array of all currency data.
     *
     * @return null|array
     */
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

    /**
     * Get an array of all trade pair data.
     *
     * @return null|array
     */
    public function getTradePairs()
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('gettradepairs')
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }

    /**
     * Get an array of all market data.
     *
     * @param string|int $baseMarket
     * @param int        $hours
     * @return null|array
     */
    public function getMarkets($baseMarket = '', int $hours = 24)
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('getmarkets/'.$baseMarket.'/'.$hours)
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }

    /**
     * Get an object of market data for the specified trade pair.
     *
     * @param int|string $market
     * @param int        $hours
     * @return null|\stdClass
     */
    public function getMarket($market = 1261, int $hours = 24)
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('getmarket/'.$market.'/'.$hours)
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }

    /**
     * Get an array of market history data for the specified trade pair.
     *
     * @param int|string $market
     * @param int        $hours
     * @return null|array
     */
    public function getMarketHistory($market = 1261, int $hours = 24)
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('getmarkethistory/'.$market.'/'.$hours)
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }

    /**
     * Get an object of the open buy and sell orders for the specified trade pair.
     *
     * @param int|string $market
     * @param int        $orderCount
     * @return null|\stdClass
     */
    public function getMarketOrders($market = 1261, int $orderCount = 100)
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('getmarketorders/'.$market.'/'.$orderCount)
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }

    /**
     * Get an array of the open buy and sell orders for the specified markets.
     *
     * @param string $markets
     * @param int    $orderCount
     * @return null|array
     */
    public function getMarketOrderGroups(string $markets = '1261', int $orderCount = 100)
    {
        $response = \GuzzleHttp\json_decode(
            $this->client
                ->get('getmarketordergroups/'.$markets.'/'.$orderCount)
                ->getBody()
                ->getContents()
        );

        if ($response->Success) {
            return $response->Data;
        }

        return null;
    }
}
