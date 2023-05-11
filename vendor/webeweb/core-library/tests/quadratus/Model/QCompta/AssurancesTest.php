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
use WBW\Library\Quadratus\Model\QCompta\Assurances;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Assurances test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class AssurancesTest extends AbstractTestCase {

    /**
     * Test setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new Assurances();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Test setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new Assurances();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Test setCompagnie()
     *
     * @return void
     */
    public function testSetCompagnie(): void {

        $obj = new Assurances();

        $obj->setCompagnie("compagnie");
        $this->assertEquals("compagnie", $obj->getCompagnie());
    }

    /**
     * Test setCourtier()
     *
     * @return void
     */
    public function testSetCourtier(): void {

        $obj = new Assurances();

        $obj->setCourtier("courtier");
        $this->assertEquals("courtier", $obj->getCourtier());
    }

    /**
     * Test setDateEcheance()
     *
     * @return void
     */
    public function testSetDateEcheance(): void {

        $obj = new Assurances();

        $obj->setDateEcheance("dateEcheance");
        $this->assertEquals("dateEcheance", $obj->getDateEcheance());
    }

    /**
     * Test setDateInitiale()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateInitiale(): void {

        // Set a Date/time mock.
        $dateInitiale = new DateTime("2018-09-10");

        $obj = new Assurances();

        $obj->setDateInitiale($dateInitiale);
        $this->assertSame($dateInitiale, $obj->getDateInitiale());
    }

    /**
     * Test setDateSignature1()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSignature1(): void {

        // Set a Date/time mock.
        $dateSignature1 = new DateTime("2018-09-10");

        $obj = new Assurances();

        $obj->setDateSignature1($dateSignature1);
        $this->assertSame($dateSignature1, $obj->getDateSignature1());
    }

    /**
     * Test setDateSignature2()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSignature2(): void {

        // Set a Date/time mock.
        $dateSignature2 = new DateTime("2018-09-10");

        $obj = new Assurances();

        $obj->setDateSignature2($dateSignature2);
        $this->assertSame($dateSignature2, $obj->getDateSignature2());
    }

    /**
     * Test setDateSignature3()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSignature3(): void {

        // Set a Date/time mock.
        $dateSignature3 = new DateTime("2018-09-10");

        $obj = new Assurances();

        $obj->setDateSignature3($dateSignature3);
        $this->assertSame($dateSignature3, $obj->getDateSignature3());
    }

    /**
     * Test setDateSignature4()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSignature4(): void {

        // Set a Date/time mock.
        $dateSignature4 = new DateTime("2018-09-10");

        $obj = new Assurances();

        $obj->setDateSignature4($dateSignature4);
        $this->assertSame($dateSignature4, $obj->getDateSignature4());
    }

    /**
     * Test setDateSignature5()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSignature5(): void {

        // Set a Date/time mock.
        $dateSignature5 = new DateTime("2018-09-10");

        $obj = new Assurances();

        $obj->setDateSignature5($dateSignature5);
        $this->assertSame($dateSignature5, $obj->getDateSignature5());
    }

    /**
     * Test setDuree()
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new Assurances();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Test setDureePreavis()
     *
     * @return void
     */
    public function testSetDureePreavis(): void {

        $obj = new Assurances();

        $obj->setDureePreavis(10);
        $this->assertEquals(10, $obj->getDureePreavis());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Assurances();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMontantAnnuel1()
     *
     * @return void
     */
    public function testSetMontantAnnuel1(): void {

        $obj = new Assurances();

        $obj->setMontantAnnuel1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel1());
    }

    /**
     * Test setMontantAnnuel2()
     *
     * @return void
     */
    public function testSetMontantAnnuel2(): void {

        $obj = new Assurances();

        $obj->setMontantAnnuel2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel2());
    }

    /**
     * Test setMontantAnnuel3()
     *
     * @return void
     */
    public function testSetMontantAnnuel3(): void {

        $obj = new Assurances();

        $obj->setMontantAnnuel3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel3());
    }

    /**
     * Test setMontantAnnuel4()
     *
     * @return void
     */
    public function testSetMontantAnnuel4(): void {

        $obj = new Assurances();

        $obj->setMontantAnnuel4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel4());
    }

    /**
     * Test setMontantAnnuel5()
     *
     * @return void
     */
    public function testSetMontantAnnuel5(): void {

        $obj = new Assurances();

        $obj->setMontantAnnuel5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAnnuel5());
    }

    /**
     * Test setMontantFixe()
     *
     * @return void
     */
    public function testSetMontantFixe(): void {

        $obj = new Assurances();

        $obj->setMontantFixe(true);
        $this->assertTrue($obj->getMontantFixe());
    }

    /**
     * Test setNumContrat()
     *
     * @return void
     */
    public function testSetNumContrat(): void {

        $obj = new Assurances();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Test setNumCptAssurance()
     *
     * @return void
     */
    public function testSetNumCptAssurance(): void {

        $obj = new Assurances();

        $obj->setNumCptAssurance("numCptAssurance");
        $this->assertEquals("numCptAssurance", $obj->getNumCptAssurance());
    }

    /**
     * Test setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Assurances();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Test setUniteDuree()
     *
     * @return void
     */
    public function testSetUniteDuree(): void {

        $obj = new Assurances();

        $obj->setUniteDuree("uniteDuree");
        $this->assertEquals("uniteDuree", $obj->getUniteDuree());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Assurances();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getCompagnie());
        $this->assertNull($obj->getCourtier());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateInitiale());
        $this->assertNull($obj->getDateSignature1());
        $this->assertNull($obj->getDateSignature2());
        $this->assertNull($obj->getDateSignature3());
        $this->assertNull($obj->getDateSignature4());
        $this->assertNull($obj->getDateSignature5());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getDureePreavis());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantAnnuel1());
        $this->assertNull($obj->getMontantAnnuel2());
        $this->assertNull($obj->getMontantAnnuel3());
        $this->assertNull($obj->getMontantAnnuel4());
        $this->assertNull($obj->getMontantAnnuel5());
        $this->assertNull($obj->getMontantFixe());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptAssurance());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getUniteDuree());
    }
}
