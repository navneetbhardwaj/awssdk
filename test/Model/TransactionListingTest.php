<?php
/**
 * TransactionListingTest
 *
 * PHP version 8.3
 *
 * @category Class
 * @package  SpApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

namespace SpApi\Test\Model;

use PHPUnit\Framework\TestCase;
use SpApi\Model\sellerWallet\v2024_03_01\TransactionListing;

/**
 * TransactionListingTest Class Doc Comment
 *
 * @category    Class
 * @description A list of transactions.
 * @package     SpApi
 */
class TransactionListingTest extends TestCase
{

    private TransactionListing $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new TransactionListing();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "TransactionListing"
     */
    public function testTransactionListing()
    {
        $this->assertInstanceOf(TransactionListing::class, $this->model);
    }

    /**
     * Test attribute "next_page_token"
     */
    public function testPropertyNextPageToken()
    {
        $testValue = 'test';
        
        $this->model->setNextPageToken($testValue);
        $this->assertEquals($testValue, $this->model->getNextPageToken());
    }

    /**
     * Test attribute "transactions"
     */
    public function testPropertyTransactions()
    {
        $testValue = [];
        
        $this->model->setTransactions($testValue);
        $this->assertEquals($testValue, $this->model->getTransactions());
    }
}
