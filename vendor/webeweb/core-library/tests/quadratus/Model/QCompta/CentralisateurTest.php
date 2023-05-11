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
use WBW\Library\Quadratus\Model\QCompta\Centralisateur;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Centralisateur test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CentralisateurTest extends AbstractTestCase {

    /**
     * Test setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Centralisateur();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Test setCreditClasse15()
     *
     * @return void
     */
    public function testSetCreditClasse15(): void {

        $obj = new Centralisateur();

        $obj->setCreditClasse15(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClasse15());
    }

    /**
     * Test setCreditClasse67()
     *
     * @return void
     */
    public function testSetCreditClasse67(): void {

        $obj = new Centralisateur();

        $obj->setCreditClasse67(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClasse67());
    }

    /**
     * Test setCreditClient()
     *
     * @return void
     */
    public function testSetCreditClient(): void {

        $obj = new Centralisateur();

        $obj->setCreditClient(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditClient());
    }

    /**
     * Test setCreditFournisseur()
     *
     * @return void
     */
    public function testSetCreditFournisseur(): void {

        $obj = new Centralisateur();

        $obj->setCreditFournisseur(10.092018);
        $this->assertEquals(10.092018, $obj->getCreditFournisseur());
    }

    /**
     * Test setDebitClasse15()
     *
     * @return void
     */
    public function testSetDebitClasse15(): void {

        $obj = new Centralisateur();

        $obj->setDebitClasse15(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClasse15());
    }

    /**
     * Test setDebitClasse67()
     *
     * @return void
     */
    public function testSetDebitClasse67(): void {

        $obj = new Centralisateur();

        $obj->setDebitClasse67(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClasse67());
    }

    /**
     * Test setDebitClient()
     *
     * @return void
     */
    public function testSetDebitClient(): void {

        $obj = new Centralisateur();

        $obj->setDebitClient(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitClient());
    }

    /**
     * Test setDebitFournisseur()
     *
     * @return void
     */
    public function testSetDebitFournisseur(): void {

        $obj = new Centralisateur();

        $obj->setDebitFournisseur(10.092018);
        $this->assertEquals(10.092018, $obj->getDebitFournisseur());
    }

    /**
     * Test setFolio()
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new Centralisateur();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Test setNbLigneFolio()
     *
     * @return void
     */
    public function testSetNbLigneFolio(): void {

        $obj = new Centralisateur();

        $obj->setNbLigneFolio(10);
        $this->assertEquals(10, $obj->getNbLigneFolio());
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

        $obj = new Centralisateur();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setProchaineLigne()
     *
     * @return void
     */
    public function testSetProchaineLigne(): void {

        $obj = new Centralisateur();

        $obj->setProchaineLigne(10);
        $this->assertEquals(10, $obj->getProchaineLigne());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Centralisateur();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCreditClasse15());
        $this->assertNull($obj->getCreditClasse67());
        $this->assertNull($obj->getCreditClient());
        $this->assertNull($obj->getCreditFournisseur());
        $this->assertNull($obj->getDebitClasse15());
        $this->assertNull($obj->getDebitClasse67());
        $this->assertNull($obj->getDebitClient());
        $this->assertNull($obj->getDebitFournisseur());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getNbLigneFolio());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getProchaineLigne());
    }
}
