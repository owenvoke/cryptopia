<?php

namespace pxgamer\Cryptopia;

use PHPUnit\Framework\TestCase;

/**
 * Class BasicTest.
 */
class BasicTest extends TestCase
{
    /**
     * @var Basic
     */
    private $instance;

    /**
     * Set up the instance.
     */
    public function setUp()
    {
        $this->instance = new Basic();
    }

    /**
     * Test if the Basic::getCurrencies() method works correctly.
     */
    public function testCanGetCurrencies()
    {
        $response = $this->instance
            ->getCurrencies();

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
    }

    /**
     * Test if the Basic::getTradePairs() method works correctly.
     */
    public function testCanGetTradePairs()
    {
        $response = $this->instance
            ->getTradePairs();

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
    }

    /**
     * Test if the Basic::getMarkets() method works correctly.
     */
    public function testCanGetMarkets()
    {
        $response = $this->instance
            ->getMarkets();

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
    }

    /**
     * Test if the Basic::getMarket() method works correctly.
     */
    public function testCanGetMarket()
    {
        $response = $this->instance
            ->getMarket();

        $this->assertInstanceOf(\stdClass::class, $response);
    }

    /**
     * Test if the Basic::getMarketHistory() method works correctly.
     */
    public function testCanGetMarketHistory()
    {
        $response = $this->instance
            ->getMarketHistory();

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
    }

    /**
     * Test if the Basic::getMarketOrders() method works correctly.
     */
    public function testCanGetMarketOrders()
    {
        $response = $this->instance
            ->getMarketOrders();

        $this->assertInstanceOf(\stdClass::class, $response);
    }

    /**
     * Test if the Basic::getMarketOrderGroups() method works correctly.
     */
    public function testCanGetMarketOrderGroups()
    {
        $response = $this->instance
            ->getMarketOrderGroups();

        $this->assertInternalType('array', $response);
        $this->assertNotEmpty($response);
    }
}