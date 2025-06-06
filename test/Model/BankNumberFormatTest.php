<?php
/**
 * BankNumberFormatTest
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
use SpApi\Model\sellerWallet\v2024_03_01\BankNumberFormat;

/**
 * BankNumberFormatTest Class Doc Comment
 *
 * @category    Class
 * @description The format of the bank number. Also known as the routing number type.
 * @package     SpApi
 */
class BankNumberFormatTest extends TestCase
{

    private BankNumberFormat $model;

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->model = new BankNumberFormat();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
        unset($this->model);
    }

    /**
     * Test "BankNumberFormat"
     */
    public function testBankNumberFormat()
    {
        $this->assertInstanceOf(BankNumberFormat::class, $this->model);
    }
}
