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
use WBW\Library\Quadratus\Model\QCompta\SuiviCompteParticulier;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Suivi compte particulier test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class SuiviCompteParticulierTest extends AbstractTestCase {

    /**
     * Test setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Test setCodeLettrage()
     *
     * @return void
     */
    public function testSetCodeLettrage(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeLettrage("codeLettrage");
        $this->assertEquals("codeLettrage", $obj->getCodeLettrage());
    }

    /**
     * Test setCodeLibelleAuto()
     *
     * @return void
     */
    public function testSetCodeLibelleAuto(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Test setCodeOperateur()
     *
     * @return void
     */
    public function testSetCodeOperateur(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setCodeOperateur("codeOperateur");
        $this->assertEquals("codeOperateur", $obj->getCodeOperateur());
    }

    /**
     * Test setDateOperation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateOperation(): void {

        // Set a Date/time mock.
        $dateOperation = new DateTime("2018-09-10");

        $obj = new SuiviCompteParticulier();

        $obj->setDateOperation($dateOperation);
        $this->assertSame($dateOperation, $obj->getDateOperation());
    }

    /**
     * Test setFolio()
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Test setJourEcriture()
     *
     * @return void
     */
    public function testSetJourEcriture(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLigneFolio()
     *
     * @return void
     */
    public function testSetLigneFolio(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Test setMontantTenuCredit()
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Test setMontantTenuDebit()
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Test setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setNumeroPiece()
     *
     * @return void
     */
    public function testSetNumeroPiece(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setNumeroPiece("numeroPiece");
        $this->assertEquals("numeroPiece", $obj->getNumeroPiece());
    }

    /**
     * Test setPeriodeEcriture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcriture(): void {

        // Set a Date/time mock.
        $periodeEcriture = new DateTime("2018-09-10");

        $obj = new SuiviCompteParticulier();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Test setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Test setTypeOperation()
     *
     * @return void
     */
    public function testSetTypeOperation(): void {

        $obj = new SuiviCompteParticulier();

        $obj->setTypeOperation("typeOperation");
        $this->assertEquals("typeOperation", $obj->getTypeOperation());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuiviCompteParticulier();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeLettrage());
        $this->assertNull($obj->getCodeLibelleAuto());
        $this->assertNull($obj->getCodeOperateur());
        $this->assertNull($obj->getDateOperation());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeOperation());
    }
}
