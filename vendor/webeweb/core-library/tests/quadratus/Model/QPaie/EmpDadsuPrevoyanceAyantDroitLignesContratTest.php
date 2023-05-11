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
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuPrevoyanceAyantDroitLignesContrat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu prevoyance ayant droit lignes contrat test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroitLignesContratTest extends AbstractTestCase {

    /**
     * Test setCodeOption()
     *
     * @return void
     */
    public function testSetCodeOption(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setCodeOption("codeOption");
        $this->assertEquals("codeOption", $obj->getCodeOption());
    }

    /**
     * Test setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Test setCodePopulation()
     *
     * @return void
     */
    public function testSetCodePopulation(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setCodePopulation("codePopulation");
        $this->assertEquals("codePopulation", $obj->getCodePopulation());
    }

    /**
     * Test setDebutPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutPeriode(): void {

        // Set a Date/time mock.
        $debutPeriode = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setDebutPeriode($debutPeriode);
        $this->assertSame($debutPeriode, $obj->getDebutPeriode());
    }

    /**
     * Test setFinPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriode(): void {

        // Set a Date/time mock.
        $finPeriode = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Test setNumeroAyantDroit()
     *
     * @return void
     */
    public function testSetNumeroAyantDroit(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setNumeroAyantDroit(10);
        $this->assertEquals(10, $obj->getNumeroAyantDroit());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setRefContrat()
     *
     * @return void
     */
    public function testSetRefContrat(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $obj->setRefContrat("refContrat");
        $this->assertEquals("refContrat", $obj->getRefContrat());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuPrevoyanceAyantDroitLignesContrat();

        $this->assertNull($obj->getCodeOption());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodePopulation());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getNumeroAyantDroit());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getRefContrat());
    }
}
