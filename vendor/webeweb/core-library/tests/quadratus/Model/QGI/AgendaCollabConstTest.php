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
use WBW\Library\Quadratus\Model\QGI\AgendaCollabConst;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Agenda collab const test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AgendaCollabConstTest extends AbstractTestCase {

    /**
     * Test setArtt()
     *
     * @return void
     */
    public function testSetArtt(): void {

        $obj = new AgendaCollabConst();

        $obj->setArtt(true);
        $this->assertTrue($obj->getArtt());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new AgendaCollabConst();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeSiteTenue()
     *
     * @return void
     */
    public function testSetCodeSiteTenue(): void {

        $obj = new AgendaCollabConst();

        $obj->setCodeSiteTenue("codeSiteTenue");
        $this->assertEquals("codeSiteTenue", $obj->getCodeSiteTenue());
    }

    /**
     * Test setConfidentiel()
     *
     * @return void
     */
    public function testSetConfidentiel(): void {

        $obj = new AgendaCollabConst();

        $obj->setConfidentiel(true);
        $this->assertTrue($obj->getConfidentiel());
    }

    /**
     * Test setDateDerniereModifAgenda()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDerniereModifAgenda(): void {

        // Set a Date/time mock.
        $dateDerniereModifAgenda = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setDateDerniereModifAgenda($dateDerniereModifAgenda);
        $this->assertSame($dateDerniereModifAgenda, $obj->getDateDerniereModifAgenda());
    }

    /**
     * Test setDimancheAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDimancheAMdeb(): void {

        // Set a Date/time mock.
        $dimancheAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setDimancheAMdeb($dimancheAMdeb);
        $this->assertSame($dimancheAMdeb, $obj->getDimancheAMdeb());
    }

    /**
     * Test setDimancheAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDimancheAMfin(): void {

        // Set a Date/time mock.
        $dimancheAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setDimancheAMfin($dimancheAMfin);
        $this->assertSame($dimancheAMfin, $obj->getDimancheAMfin());
    }

    /**
     * Test setDimanchePMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDimanchePMdeb(): void {

        // Set a Date/time mock.
        $dimanchePMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setDimanchePMdeb($dimanchePMdeb);
        $this->assertSame($dimanchePMdeb, $obj->getDimanchePMdeb());
    }

    /**
     * Test setDimanchePMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDimanchePMfin(): void {

        // Set a Date/time mock.
        $dimanchePMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setDimanchePMfin($dimanchePMfin);
        $this->assertSame($dimanchePMfin, $obj->getDimanchePMfin());
    }

    /**
     * Test setInterdireRdVHorsTravail()
     *
     * @return void
     */
    public function testSetInterdireRdVHorsTravail(): void {

        $obj = new AgendaCollabConst();

        $obj->setInterdireRdVHorsTravail(true);
        $this->assertTrue($obj->getInterdireRdVHorsTravail());
    }

    /**
     * Test setJeudiAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetJeudiAMdeb(): void {

        // Set a Date/time mock.
        $jeudiAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setJeudiAMdeb($jeudiAMdeb);
        $this->assertSame($jeudiAMdeb, $obj->getJeudiAMdeb());
    }

    /**
     * Test setJeudiAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetJeudiAMfin(): void {

        // Set a Date/time mock.
        $jeudiAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setJeudiAMfin($jeudiAMfin);
        $this->assertSame($jeudiAMfin, $obj->getJeudiAMfin());
    }

    /**
     * Test setJeudiPMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetJeudiPMdeb(): void {

        // Set a Date/time mock.
        $jeudiPMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setJeudiPMdeb($jeudiPMdeb);
        $this->assertSame($jeudiPMdeb, $obj->getJeudiPMdeb());
    }

    /**
     * Test setJeudiPMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetJeudiPMfin(): void {

        // Set a Date/time mock.
        $jeudiPMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setJeudiPMfin($jeudiPMfin);
        $this->assertSame($jeudiPMfin, $obj->getJeudiPMfin());
    }

    /**
     * Test setLundiAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLundiAMdeb(): void {

        // Set a Date/time mock.
        $lundiAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setLundiAMdeb($lundiAMdeb);
        $this->assertSame($lundiAMdeb, $obj->getLundiAMdeb());
    }

    /**
     * Test setLundiAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLundiAMfin(): void {

        // Set a Date/time mock.
        $lundiAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setLundiAMfin($lundiAMfin);
        $this->assertSame($lundiAMfin, $obj->getLundiAMfin());
    }

    /**
     * Test setLundiPMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLundiPMdeb(): void {

        // Set a Date/time mock.
        $lundiPMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setLundiPMdeb($lundiPMdeb);
        $this->assertSame($lundiPMdeb, $obj->getLundiPMdeb());
    }

    /**
     * Test setLundiPMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetLundiPMfin(): void {

        // Set a Date/time mock.
        $lundiPMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setLundiPMfin($lundiPMfin);
        $this->assertSame($lundiPMfin, $obj->getLundiPMfin());
    }

    /**
     * Test setMardiAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMardiAMdeb(): void {

        // Set a Date/time mock.
        $mardiAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMardiAMdeb($mardiAMdeb);
        $this->assertSame($mardiAMdeb, $obj->getMardiAMdeb());
    }

    /**
     * Test setMardiAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMardiAMfin(): void {

        // Set a Date/time mock.
        $mardiAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMardiAMfin($mardiAMfin);
        $this->assertSame($mardiAMfin, $obj->getMardiAMfin());
    }

    /**
     * Test setMardiPMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMardiPMdeb(): void {

        // Set a Date/time mock.
        $mardiPMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMardiPMdeb($mardiPMdeb);
        $this->assertSame($mardiPMdeb, $obj->getMardiPMdeb());
    }

    /**
     * Test setMardiPMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMardiPMfin(): void {

        // Set a Date/time mock.
        $mardiPMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMardiPMfin($mardiPMfin);
        $this->assertSame($mardiPMfin, $obj->getMardiPMfin());
    }

    /**
     * Test setMercrediAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMercrediAMdeb(): void {

        // Set a Date/time mock.
        $mercrediAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMercrediAMdeb($mercrediAMdeb);
        $this->assertSame($mercrediAMdeb, $obj->getMercrediAMdeb());
    }

    /**
     * Test setMercrediAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMercrediAMfin(): void {

        // Set a Date/time mock.
        $mercrediAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMercrediAMfin($mercrediAMfin);
        $this->assertSame($mercrediAMfin, $obj->getMercrediAMfin());
    }

    /**
     * Test setMercrediPMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMercrediPMdeb(): void {

        // Set a Date/time mock.
        $mercrediPMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMercrediPMdeb($mercrediPMdeb);
        $this->assertSame($mercrediPMdeb, $obj->getMercrediPMdeb());
    }

    /**
     * Test setMercrediPMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMercrediPMfin(): void {

        // Set a Date/time mock.
        $mercrediPMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setMercrediPMfin($mercrediPMfin);
        $this->assertSame($mercrediPMfin, $obj->getMercrediPMfin());
    }

    /**
     * Test setPlusPetiteDateActiviteModifiee()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPlusPetiteDateActiviteModifiee(): void {

        // Set a Date/time mock.
        $plusPetiteDateActiviteModifiee = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setPlusPetiteDateActiviteModifiee($plusPetiteDateActiviteModifiee);
        $this->assertSame($plusPetiteDateActiviteModifiee, $obj->getPlusPetiteDateActiviteModifiee());
    }

    /**
     * Test setSamediAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSamediAMdeb(): void {

        // Set a Date/time mock.
        $samediAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setSamediAMdeb($samediAMdeb);
        $this->assertSame($samediAMdeb, $obj->getSamediAMdeb());
    }

    /**
     * Test setSamediAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSamediAMfin(): void {

        // Set a Date/time mock.
        $samediAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setSamediAMfin($samediAMfin);
        $this->assertSame($samediAMfin, $obj->getSamediAMfin());
    }

    /**
     * Test setSamediPMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSamediPMdeb(): void {

        // Set a Date/time mock.
        $samediPMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setSamediPMdeb($samediPMdeb);
        $this->assertSame($samediPMdeb, $obj->getSamediPMdeb());
    }

    /**
     * Test setSamediPMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetSamediPMfin(): void {

        // Set a Date/time mock.
        $samediPMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setSamediPMfin($samediPMfin);
        $this->assertSame($samediPMfin, $obj->getSamediPMfin());
    }

    /**
     * Test setSuiviOrdreMission()
     *
     * @return void
     */
    public function testSetSuiviOrdreMission(): void {

        $obj = new AgendaCollabConst();

        $obj->setSuiviOrdreMission(true);
        $this->assertTrue($obj->getSuiviOrdreMission());
    }

    /**
     * Test setUniteRdv()
     *
     * @return void
     */
    public function testSetUniteRdv(): void {

        $obj = new AgendaCollabConst();

        $obj->setUniteRdv("uniteRdv");
        $this->assertEquals("uniteRdv", $obj->getUniteRdv());
    }

    /**
     * Test setVendrediAMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetVendrediAMdeb(): void {

        // Set a Date/time mock.
        $vendrediAMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setVendrediAMdeb($vendrediAMdeb);
        $this->assertSame($vendrediAMdeb, $obj->getVendrediAMdeb());
    }

    /**
     * Test setVendrediAMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetVendrediAMfin(): void {

        // Set a Date/time mock.
        $vendrediAMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setVendrediAMfin($vendrediAMfin);
        $this->assertSame($vendrediAMfin, $obj->getVendrediAMfin());
    }

    /**
     * Test setVendrediPMdeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetVendrediPMdeb(): void {

        // Set a Date/time mock.
        $vendrediPMdeb = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setVendrediPMdeb($vendrediPMdeb);
        $this->assertSame($vendrediPMdeb, $obj->getVendrediPMdeb());
    }

    /**
     * Test setVendrediPMfin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetVendrediPMfin(): void {

        // Set a Date/time mock.
        $vendrediPMfin = new DateTime("2018-09-10");

        $obj = new AgendaCollabConst();

        $obj->setVendrediPMfin($vendrediPMfin);
        $this->assertSame($vendrediPMfin, $obj->getVendrediPMfin());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AgendaCollabConst();

        $this->assertNull($obj->getArtt());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeSiteTenue());
        $this->assertNull($obj->getConfidentiel());
        $this->assertNull($obj->getDateDerniereModifAgenda());
        $this->assertNull($obj->getDimancheAMdeb());
        $this->assertNull($obj->getDimancheAMfin());
        $this->assertNull($obj->getDimanchePMdeb());
        $this->assertNull($obj->getDimanchePMfin());
        $this->assertNull($obj->getInterdireRdVHorsTravail());
        $this->assertNull($obj->getJeudiAMdeb());
        $this->assertNull($obj->getJeudiAMfin());
        $this->assertNull($obj->getJeudiPMdeb());
        $this->assertNull($obj->getJeudiPMfin());
        $this->assertNull($obj->getLundiAMdeb());
        $this->assertNull($obj->getLundiAMfin());
        $this->assertNull($obj->getLundiPMdeb());
        $this->assertNull($obj->getLundiPMfin());
        $this->assertNull($obj->getMardiAMdeb());
        $this->assertNull($obj->getMardiAMfin());
        $this->assertNull($obj->getMardiPMdeb());
        $this->assertNull($obj->getMardiPMfin());
        $this->assertNull($obj->getMercrediAMdeb());
        $this->assertNull($obj->getMercrediAMfin());
        $this->assertNull($obj->getMercrediPMdeb());
        $this->assertNull($obj->getMercrediPMfin());
        $this->assertNull($obj->getPlusPetiteDateActiviteModifiee());
        $this->assertNull($obj->getSamediAMdeb());
        $this->assertNull($obj->getSamediAMfin());
        $this->assertNull($obj->getSamediPMdeb());
        $this->assertNull($obj->getSamediPMfin());
        $this->assertNull($obj->getSuiviOrdreMission());
        $this->assertNull($obj->getUniteRdv());
        $this->assertNull($obj->getVendrediAMdeb());
        $this->assertNull($obj->getVendrediAMfin());
        $this->assertNull($obj->getVendrediPMdeb());
        $this->assertNull($obj->getVendrediPMfin());
    }
}
