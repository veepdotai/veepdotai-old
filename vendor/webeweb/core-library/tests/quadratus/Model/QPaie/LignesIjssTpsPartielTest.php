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
use WBW\Library\Quadratus\Model\QPaie\LignesIjssTpsPartiel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes ijss tps partiel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesIjssTpsPartielTest extends AbstractTestCase {

    /**
     * Test setMontant()
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new LignesIjssTpsPartiel();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Test setMontantPlein()
     *
     * @return void
     */
    public function testSetMontantPlein(): void {

        $obj = new LignesIjssTpsPartiel();

        $obj->setMontantPlein(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPlein());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesIjssTpsPartiel();

        $obj->setNumLigne("numLigne");
        $this->assertEquals("numLigne", $obj->getNumLigne());
    }

    /**
     * Test setNumeroAttestation()
     *
     * @return void
     */
    public function testSetNumeroAttestation(): void {

        $obj = new LignesIjssTpsPartiel();

        $obj->setNumeroAttestation("numeroAttestation");
        $this->assertEquals("numeroAttestation", $obj->getNumeroAttestation());
    }

    /**
     * Test setPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new LignesIjssTpsPartiel();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new LignesIjssTpsPartiel();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesIjssTpsPartiel();

        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getMontantPlein());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAttestation());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
    }
}
