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
use WBW\Library\Quadratus\Model\QPaie\TauxPlanPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taux plan paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TauxPlanPaieTest extends AbstractTestCase {

    /**
     * Test setAPartirDe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetAPartirDe(): void {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new TauxPlanPaie();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new TauxPlanPaie();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setFormatNonEtendu()
     *
     * @return void
     */
    public function testSetFormatNonEtendu(): void {

        $obj = new TauxPlanPaie();

        $obj->setFormatNonEtendu(true);
        $this->assertTrue($obj->getFormatNonEtendu());
    }

    /**
     * Test setNumeroTaux()
     *
     * @return void
     */
    public function testSetNumeroTaux(): void {

        $obj = new TauxPlanPaie();

        $obj->setNumeroTaux(10);
        $this->assertEquals(10, $obj->getNumeroTaux());
    }

    /**
     * Test setTauxPatronal()
     *
     * @return void
     */
    public function testSetTauxPatronal(): void {

        $obj = new TauxPlanPaie();

        $obj->setTauxPatronal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPatronal());
    }

    /**
     * Test setTauxSalarial()
     *
     * @return void
     */
    public function testSetTauxSalarial(): void {

        $obj = new TauxPlanPaie();

        $obj->setTauxSalarial(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSalarial());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TauxPlanPaie();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getFormatNonEtendu());
        $this->assertNull($obj->getNumeroTaux());
        $this->assertNull($obj->getTauxPatronal());
        $this->assertNull($obj->getTauxSalarial());
    }
}
