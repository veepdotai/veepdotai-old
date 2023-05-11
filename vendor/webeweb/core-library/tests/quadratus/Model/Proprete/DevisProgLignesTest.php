<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\DevisProgLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis prog lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisProgLignesTest extends AbstractTestCase {

    /**
     * Test setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new DevisProgLignes();

        $obj->setAou(true);
        $this->assertTrue($obj->getAou());
    }

    /**
     * Test setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new DevisProgLignes();

        $obj->setAvr(true);
        $this->assertTrue($obj->getAvr());
    }

    /**
     * Test setCodeEchelle()
     *
     * @return void
     */
    public function testSetCodeEchelle(): void {

        $obj = new DevisProgLignes();

        $obj->setCodeEchelle("codeEchelle");
        $this->assertEquals("codeEchelle", $obj->getCodeEchelle());
    }

    /**
     * Test setCodeOperation()
     *
     * @return void
     */
    public function testSetCodeOperation(): void {

        $obj = new DevisProgLignes();

        $obj->setCodeOperation("codeOperation");
        $this->assertEquals("codeOperation", $obj->getCodeOperation());
    }

    /**
     * Test setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new DevisProgLignes();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Test setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new DevisProgLignes();

        $obj->setDec(true);
        $this->assertTrue($obj->getDec());
    }

    /**
     * Test setDimanche()
     *
     * @return void
     */
    public function testSetDimanche(): void {

        $obj = new DevisProgLignes();

        $obj->setDimanche(true);
        $this->assertTrue($obj->getDimanche());
    }

    /**
     * Test setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new DevisProgLignes();

        $obj->setFev(true);
        $this->assertTrue($obj->getFev());
    }

    /**
     * Test setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new DevisProgLignes();

        $obj->setJan(true);
        $this->assertTrue($obj->getJan());
    }

    /**
     * Test setJeudi()
     *
     * @return void
     */
    public function testSetJeudi(): void {

        $obj = new DevisProgLignes();

        $obj->setJeudi(true);
        $this->assertTrue($obj->getJeudi());
    }

    /**
     * Test setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new DevisProgLignes();

        $obj->setJuil(true);
        $this->assertTrue($obj->getJuil());
    }

    /**
     * Test setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new DevisProgLignes();

        $obj->setJuin(true);
        $this->assertTrue($obj->getJuin());
    }

    /**
     * Test setLundi()
     *
     * @return void
     */
    public function testSetLundi(): void {

        $obj = new DevisProgLignes();

        $obj->setLundi(true);
        $this->assertTrue($obj->getLundi());
    }

    /**
     * Test setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new DevisProgLignes();

        $obj->setMai(true);
        $this->assertTrue($obj->getMai());
    }

    /**
     * Test setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new DevisProgLignes();

        $obj->setMar(true);
        $this->assertTrue($obj->getMar());
    }

    /**
     * Test setMardi()
     *
     * @return void
     */
    public function testSetMardi(): void {

        $obj = new DevisProgLignes();

        $obj->setMardi(true);
        $this->assertTrue($obj->getMardi());
    }

    /**
     * Test setMercredi()
     *
     * @return void
     */
    public function testSetMercredi(): void {

        $obj = new DevisProgLignes();

        $obj->setMercredi(true);
        $this->assertTrue($obj->getMercredi());
    }

    /**
     * Test setNoteResultat()
     *
     * @return void
     */
    public function testSetNoteResultat(): void {

        $obj = new DevisProgLignes();

        $obj->setNoteResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getNoteResultat());
    }

    /**
     * Test setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new DevisProgLignes();

        $obj->setNov(true);
        $this->assertTrue($obj->getNov());
    }

    /**
     * Test setNumDevis()
     *
     * @return void
     */
    public function testSetNumDevis(): void {

        $obj = new DevisProgLignes();

        $obj->setNumDevis("numDevis");
        $this->assertEquals("numDevis", $obj->getNumDevis());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new DevisProgLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumProgramme()
     *
     * @return void
     */
    public function testSetNumProgramme(): void {

        $obj = new DevisProgLignes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Test setOccurrence()
     *
     * @return void
     */
    public function testSetOccurrence(): void {

        $obj = new DevisProgLignes();

        $obj->setOccurrence("occurrence");
        $this->assertEquals("occurrence", $obj->getOccurrence());
    }

    /**
     * Test setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new DevisProgLignes();

        $obj->setOct(true);
        $this->assertTrue($obj->getOct());
    }

    /**
     * Test setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new DevisProgLignes();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Test setSamedi()
     *
     * @return void
     */
    public function testSetSamedi(): void {

        $obj = new DevisProgLignes();

        $obj->setSamedi(true);
        $this->assertTrue($obj->getSamedi());
    }

    /**
     * Test setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new DevisProgLignes();

        $obj->setSep(true);
        $this->assertTrue($obj->getSep());
    }

    /**
     * Test setVendredi()
     *
     * @return void
     */
    public function testSetVendredi(): void {

        $obj = new DevisProgLignes();

        $obj->setVendredi(true);
        $this->assertTrue($obj->getVendredi());
    }

    /**
     * Test setVitesseReelle()
     *
     * @return void
     */
    public function testSetVitesseReelle(): void {

        $obj = new DevisProgLignes();

        $obj->setVitesseReelle(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseReelle());
    }

    /**
     * Test setVitesseTheorique()
     *
     * @return void
     */
    public function testSetVitesseTheorique(): void {

        $obj = new DevisProgLignes();

        $obj->setVitesseTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseTheorique());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisProgLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeEchelle());
        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDimanche());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJeudi());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getLundi());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getMardi());
        $this->assertNull($obj->getMercredi());
        $this->assertNull($obj->getNoteResultat());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumDevis());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getOccurrence());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getSamedi());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getVendredi());
        $this->assertNull($obj->getVitesseReelle());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
