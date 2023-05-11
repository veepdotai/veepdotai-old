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
use WBW\Library\Quadratus\Model\QCompta\Stocks;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Stocks test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class StocksTest extends AbstractTestCase {

    /**
     * Test setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new Stocks();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Test setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new Stocks();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Test setLibelleEcriture()
     *
     * @return void
     */
    public function testSetLibelleEcriture(): void {

        $obj = new Stocks();

        $obj->setLibelleEcriture("libelleEcriture");
        $this->assertEquals("libelleEcriture", $obj->getLibelleEcriture());
    }

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new Stocks();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new Stocks();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new Stocks();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Stocks();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
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

        $obj = new Stocks();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPrixU()
     *
     * @return void
     */
    public function testSetPrixU(): void {

        $obj = new Stocks();

        $obj->setPrixU(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixU());
    }

    /**
     * Test setPrixU2()
     *
     * @return void
     */
    public function testSetPrixU2(): void {

        $obj = new Stocks();

        $obj->setPrixU2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixU2());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new Stocks();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setQuantite2()
     *
     * @return void
     */
    public function testSetQuantite2(): void {

        $obj = new Stocks();

        $obj->setQuantite2(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite2());
    }

    /**
     * Test setRefEcrCodeJournal()
     *
     * @return void
     */
    public function testSetRefEcrCodeJournal(): void {

        $obj = new Stocks();

        $obj->setRefEcrCodeJournal("refEcrCodeJournal");
        $this->assertEquals("refEcrCodeJournal", $obj->getRefEcrCodeJournal());
    }

    /**
     * Test setRefEcrFolio()
     *
     * @return void
     */
    public function testSetRefEcrFolio(): void {

        $obj = new Stocks();

        $obj->setRefEcrFolio(10);
        $this->assertEquals(10, $obj->getRefEcrFolio());
    }

    /**
     * Test setRefEcrLigneFolio()
     *
     * @return void
     */
    public function testSetRefEcrLigneFolio(): void {

        $obj = new Stocks();

        $obj->setRefEcrLigneFolio(10);
        $this->assertEquals(10, $obj->getRefEcrLigneFolio());
    }

    /**
     * Test setRefEcrNumLigne()
     *
     * @return void
     */
    public function testSetRefEcrNumLigne(): void {

        $obj = new Stocks();

        $obj->setRefEcrNumLigne(10);
        $this->assertEquals(10, $obj->getRefEcrNumLigne());
    }

    /**
     * Test setRefEcrPeriodeEcriture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetRefEcrPeriodeEcriture(): void {

        // Set a Date/time mock.
        $refEcrPeriodeEcriture = new DateTime("2018-09-10");

        $obj = new Stocks();

        $obj->setRefEcrPeriodeEcriture($refEcrPeriodeEcriture);
        $this->assertSame($refEcrPeriodeEcriture, $obj->getRefEcrPeriodeEcriture());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Stocks();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getLibelleEcriture());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrixU());
        $this->assertNull($obj->getPrixU2());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getRefEcrCodeJournal());
        $this->assertNull($obj->getRefEcrFolio());
        $this->assertNull($obj->getRefEcrLigneFolio());
        $this->assertNull($obj->getRefEcrNumLigne());
        $this->assertNull($obj->getRefEcrPeriodeEcriture());
    }
}
