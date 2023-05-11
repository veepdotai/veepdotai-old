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
use WBW\Library\Quadratus\Model\QPaie\LignesHsmsaEmploye;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes hsmsa employe test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesHsmsaEmployeTest extends AbstractTestCase {

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Test setMtHs()
     *
     * @return void
     */
    public function testSetMtHs(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setMtHs(10);
        $this->assertEquals(10, $obj->getMtHs());
    }

    /**
     * Test setNbHs()
     *
     * @return void
     */
    public function testSetNbHs(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setNbHs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHs());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setNumeroEmploye2()
     *
     * @return void
     */
    public function testSetNumeroEmploye2(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setNumeroEmploye2("numeroEmploye2");
        $this->assertEquals("numeroEmploye2", $obj->getNumeroEmploye2());
    }

    /**
     * Test setPerDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPerDeb(): void {

        // Set a Date/time mock.
        $perDeb = new DateTime("2018-09-10");

        $obj = new LignesHsmsaEmploye();

        $obj->setPerDeb($perDeb);
        $this->assertSame($perDeb, $obj->getPerDeb());
    }

    /**
     * Test setPeriodeDecla()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new LignesHsmsaEmploye();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Test setTauxHs()
     *
     * @return void
     */
    public function testSetTauxHs(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setTauxHs(10);
        $this->assertEquals(10, $obj->getTauxHs());
    }

    /**
     * Test setTypeRemunHs()
     *
     * @return void
     */
    public function testSetTypeRemunHs(): void {

        $obj = new LignesHsmsaEmploye();

        $obj->setTypeRemunHs("typeRemunHs");
        $this->assertEquals("typeRemunHs", $obj->getTypeRemunHs());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesHsmsaEmploye();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getMtHs());
        $this->assertNull($obj->getNbHs());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroEmploye2());
        $this->assertNull($obj->getPerDeb());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getTauxHs());
        $this->assertNull($obj->getTypeRemunHs());
    }
}
