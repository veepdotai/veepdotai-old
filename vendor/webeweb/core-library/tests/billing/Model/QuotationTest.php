<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Billing\Tests\Model;

use DateTime;
use DateTimeZone;
use JsonSerializable;
use Throwable;
use WBW\Library\Billing\Model\BillableInterface;
use WBW\Library\Billing\Model\Quotation;
use WBW\Library\Billing\Model\QuotationInterface;
use WBW\Library\Billing\Tests\AbstractTestCase;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillable;
use WBW\Library\Billing\Tests\Fixtures\Model\TestBillableDetail;

/**
 * Quotation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Billing\Tests\Model
 */
class QuotationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/QuotationTest.testJsonSerialize.json");

        $obj = new Quotation();
        $obj->setComment("comment");
        $obj->setCreatedAt(new DateTime("2021-09-23 15:20:00.000000", new DateTimeZone("UTC")));
        $obj->setDate(new DateTime("2021-09-23 15:20:01.000000", new DateTimeZone("UTC")));
        $obj->setDiscountRate(0.1);
        $obj->setDiscountTotal(0.2);
        $obj->setExcludingVatTotal(0.3);
        $obj->setIncludingVatTotal(0.4);
        $obj->setNumber("number");
        $obj->setParent(new TestBillable());
        $obj->setReference("reference");
        $obj->setUpdatedAt(new DateTime("2021-09-23 15:20:02.000000", new DateTimeZone("UTC")));
        $obj->setVatTotal(0.5);
        $obj->setExpirationDate(new DateTime("2021-09-23 15:20:03.000000", new DateTimeZone("UTC")));

        $obj->addDetail(new TestBillableDetail());

        $res = $obj->jsonSerialize();
        $this->assertCount(14, $res);

        $this->assertEquals($data, json_encode($res, JSON_PRETTY_PRINT) . "\n");
    }

    /**
     * Test setExpirationDate()
     *
     * @return void
     */
    public function testSetExpirationDate(): void {

        // Set an Expiration date mock.
        $expirationDate = new DateTime();

        $obj = new Quotation();

        $obj->setExpirationDate($expirationDate);
        $this->assertSame($expirationDate, $obj->getExpirationDate());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Quotation();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(BillableInterface::class, $obj);
        $this->assertInstanceOf(QuotationInterface::class, $obj);

        $this->assertNull($obj->getExpirationDate());
    }
}
