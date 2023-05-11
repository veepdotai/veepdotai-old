<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\RegulTva;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Regul tva test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class RegulTvaTest extends AbstractTestCase {

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new RegulTva();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setHt()
     *
     * @return void
     */
    public function testSetHt(): void {

        $obj = new RegulTva();

        $obj->setHt(10.092018);
        $this->assertEquals(10.092018, $obj->getHt());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new RegulTva();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLigne()
     *
     * @return void
     */
    public function testSetLigne(): void {

        $obj = new RegulTva();

        $obj->setLigne(10);
        $this->assertEquals(10, $obj->getLigne());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new RegulTva();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setTtc()
     *
     * @return void
     */
    public function testSetTtc(): void {

        $obj = new RegulTva();

        $obj->setTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getTtc());
    }

    /**
     * Test setTva()
     *
     * @return void
     */
    public function testSetTva(): void {

        $obj = new RegulTva();

        $obj->setTva(10.092018);
        $this->assertEquals(10.092018, $obj->getTva());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new RegulTva();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RegulTva();

        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getHt());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLigne());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTtc());
        $this->assertNull($obj->getTva());
        $this->assertNull($obj->getType());
    }
}
