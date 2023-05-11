<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\HistoTransfertCpta;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo transfert cpta test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HistoTransfertCptaTest extends AbstractTestCase {

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new HistoTransfertCpta();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new HistoTransfertCpta();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Test setDateEcriture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEcriture(): void {

        // Set a Date/time mock.
        $dateEcriture = new DateTime("2018-09-10");

        $obj = new HistoTransfertCpta();

        $obj->setDateEcriture($dateEcriture);
        $this->assertSame($dateEcriture, $obj->getDateEcriture());
    }

    /**
     * Test setNumLot()
     *
     * @return void
     */
    public function testSetNumLot(): void {

        $obj = new HistoTransfertCpta();

        $obj->setNumLot(10);
        $this->assertEquals(10, $obj->getNumLot());
    }

    /**
     * Test setPeriodeTransfert()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfert(): void {

        // Set a Date/time mock.
        $periodeTransfert = new DateTime("2018-09-10");

        $obj = new HistoTransfertCpta();

        $obj->setPeriodeTransfert($periodeTransfert);
        $this->assertSame($periodeTransfert, $obj->getPeriodeTransfert());
    }

    /**
     * Test setTypeTransfert()
     *
     * @return void
     */
    public function testSetTypeTransfert(): void {

        $obj = new HistoTransfertCpta();

        $obj->setTypeTransfert("typeTransfert");
        $this->assertEquals("typeTransfert", $obj->getTypeTransfert());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoTransfertCpta();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getDateEcriture());
        $this->assertNull($obj->getNumLot());
        $this->assertNull($obj->getPeriodeTransfert());
        $this->assertNull($obj->getTypeTransfert());
    }
}
