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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\MensualisationTacheAvenants;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Mensualisation tache avenants test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class MensualisationTacheAvenantsTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setHistoMensSaisi()
     *
     * @return void
     */
    public function testSetHistoMensSaisi(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setHistoMensSaisi(true);
        $this->assertTrue($obj->getHistoMensSaisi());
    }

    /**
     * Test setMensualisationCalculee()
     *
     * @return void
     */
    public function testSetMensualisationCalculee(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setMensualisationCalculee(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationCalculee());
    }

    /**
     * Test setMensualisationSaisie()
     *
     * @return void
     */
    public function testSetMensualisationSaisie(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setMensualisationSaisie(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationSaisie());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setNumeroAvenant()
     *
     * @return void
     */
    public function testSetNumeroAvenant(): void {

        $obj = new MensualisationTacheAvenants();

        $obj->setNumeroAvenant(10);
        $this->assertEquals(10, $obj->getNumeroAvenant());
    }

    /**
     * Test setPeriodeDebutValidite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebutValidite(): void {

        // Set a Date/time mock.
        $periodeDebutValidite = new DateTime("2018-09-10");

        $obj = new MensualisationTacheAvenants();

        $obj->setPeriodeDebutValidite($periodeDebutValidite);
        $this->assertSame($periodeDebutValidite, $obj->getPeriodeDebutValidite());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MensualisationTacheAvenants();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getHistoMensSaisi());
        $this->assertNull($obj->getMensualisationCalculee());
        $this->assertNull($obj->getMensualisationSaisie());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroAvenant());
        $this->assertNull($obj->getPeriodeDebutValidite());
    }
}
