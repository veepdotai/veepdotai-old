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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Prefacturation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prefacturation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class PrefacturationTest extends AbstractTestCase {

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new Prefacturation();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Prefacturation();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Prefacturation();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new Prefacturation();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Test setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new Prefacturation();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Prefacturation();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setDateSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSaisie(): void {

        // Set a Date/time mock.
        $dateSaisie = new DateTime("2018-09-10");

        $obj = new Prefacturation();

        $obj->setDateSaisie($dateSaisie);
        $this->assertSame($dateSaisie, $obj->getDateSaisie());
    }

    /**
     * Test setDateSysSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie(): void {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new Prefacturation();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Test setFacturable()
     *
     * @return void
     */
    public function testSetFacturable(): void {

        $obj = new Prefacturation();

        $obj->setFacturable(true);
        $this->assertTrue($obj->getFacturable());
    }

    /**
     * Test setIdPrefacturation()
     *
     * @return void
     */
    public function testSetIdPrefacturation(): void {

        $obj = new Prefacturation();

        $obj->setIdPrefacturation(10);
        $this->assertEquals(10, $obj->getIdPrefacturation());
    }

    /**
     * Test setIsTransf()
     *
     * @return void
     */
    public function testSetIsTransf(): void {

        $obj = new Prefacturation();

        $obj->setIsTransf(true);
        $this->assertTrue($obj->getIsTransf());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Prefacturation();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMonnaie()
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new Prefacturation();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Test setPu()
     *
     * @return void
     */
    public function testSetPu(): void {

        $obj = new Prefacturation();

        $obj->setPu(10.092018);
        $this->assertEquals(10.092018, $obj->getPu());
    }

    /**
     * Test setQte()
     *
     * @return void
     */
    public function testSetQte(): void {

        $obj = new Prefacturation();

        $obj->setQte(10.092018);
        $this->assertEquals(10.092018, $obj->getQte());
    }

    /**
     * Test setUniqIdFacture()
     *
     * @return void
     */
    public function testSetUniqIdFacture(): void {

        $obj = new Prefacturation();

        $obj->setUniqIdFacture("uniqIdFacture");
        $this->assertEquals("uniqIdFacture", $obj->getUniqIdFacture());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Prefacturation();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getDateSaisie());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getFacturable());
        $this->assertNull($obj->getIdPrefacturation());
        $this->assertNull($obj->getIsTransf());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getPu());
        $this->assertNull($obj->getQte());
        $this->assertNull($obj->getUniqIdFacture());
    }
}
