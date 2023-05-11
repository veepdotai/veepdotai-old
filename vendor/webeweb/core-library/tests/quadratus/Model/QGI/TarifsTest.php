<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\Tarifs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Tarifs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TarifsTest extends AbstractTestCase {

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new Tarifs();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Tarifs();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Tarifs();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new Tarifs();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Test setComSurMargeBrute()
     *
     * @return void
     */
    public function testSetComSurMargeBrute(): void {

        $obj = new Tarifs();

        $obj->setComSurMargeBrute(true);
        $this->assertTrue($obj->getComSurMargeBrute());
    }

    /**
     * Test setPrixTtc()
     *
     * @return void
     */
    public function testSetPrixTtc(): void {

        $obj = new Tarifs();

        $obj->setPrixTtc(true);
        $this->assertTrue($obj->getPrixTtc());
    }

    /**
     * Test setPrixUnitBase()
     *
     * @return void
     */
    public function testSetPrixUnitBase(): void {

        $obj = new Tarifs();

        $obj->setPrixUnitBase(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitBase());
    }

    /**
     * Test setTauxCommission()
     *
     * @return void
     */
    public function testSetTauxCommission(): void {

        $obj = new Tarifs();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Test setTypeCodeArticle()
     *
     * @return void
     */
    public function testSetTypeCodeArticle(): void {

        $obj = new Tarifs();

        $obj->setTypeCodeArticle("typeCodeArticle");
        $this->assertEquals("typeCodeArticle", $obj->getTypeCodeArticle());
    }

    /**
     * Test setTypeCodeClient()
     *
     * @return void
     */
    public function testSetTypeCodeClient(): void {

        $obj = new Tarifs();

        $obj->setTypeCodeClient("typeCodeClient");
        $this->assertEquals("typeCodeClient", $obj->getTypeCodeClient());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Tarifs();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getComSurMargeBrute());
        $this->assertNull($obj->getPrixTtc());
        $this->assertNull($obj->getPrixUnitBase());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTypeCodeArticle());
        $this->assertNull($obj->getTypeCodeClient());
    }
}
