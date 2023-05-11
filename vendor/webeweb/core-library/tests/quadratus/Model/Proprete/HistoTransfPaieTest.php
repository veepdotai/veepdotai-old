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
use WBW\Library\Quadratus\Model\Proprete\HistoTransfPaie;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Histo transf paie test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class HistoTransfPaieTest extends AbstractTestCase {

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new HistoTransfPaie();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setEcartCumule()
     *
     * @return void
     */
    public function testSetEcartCumule(): void {

        $obj = new HistoTransfPaie();

        $obj->setEcartCumule(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartCumule());
    }

    /**
     * Test setHcrPayees()
     *
     * @return void
     */
    public function testSetHcrPayees(): void {

        $obj = new HistoTransfPaie();

        $obj->setHcrPayees(true);
        $this->assertTrue($obj->getHcrPayees());
    }

    /**
     * Test setHnpComplH()
     *
     * @return void
     */
    public function testSetHnpComplH(): void {

        $obj = new HistoTransfPaie();

        $obj->setHnpComplH(10.092018);
        $this->assertEquals(10.092018, $obj->getHnpComplH());
    }

    /**
     * Test setHnphc11()
     *
     * @return void
     */
    public function testSetHnphc11(): void {

        $obj = new HistoTransfPaie();

        $obj->setHnphc11(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc11());
    }

    /**
     * Test setHnphc25()
     *
     * @return void
     */
    public function testSetHnphc25(): void {

        $obj = new HistoTransfPaie();

        $obj->setHnphc25(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc25());
    }

    /**
     * Test setHnphc33()
     *
     * @return void
     */
    public function testSetHnphc33(): void {

        $obj = new HistoTransfPaie();

        $obj->setHnphc33(10.092018);
        $this->assertEquals(10.092018, $obj->getHnphc33());
    }

    /**
     * Test setNbComplH()
     *
     * @return void
     */
    public function testSetNbComplH(): void {

        $obj = new HistoTransfPaie();

        $obj->setNbComplH(10.092018);
        $this->assertEquals(10.092018, $obj->getNbComplH());
    }

    /**
     * Test setNbHAbs()
     *
     * @return void
     */
    public function testSetNbHAbs(): void {

        $obj = new HistoTransfPaie();

        $obj->setNbHAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbs());
    }

    /**
     * Test setNbHAbsJf()
     *
     * @return void
     */
    public function testSetNbHAbsJf(): void {

        $obj = new HistoTransfPaie();

        $obj->setNbHAbsJf(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsJf());
    }

    /**
     * Test setNbHCompl()
     *
     * @return void
     */
    public function testSetNbHCompl(): void {

        $obj = new HistoTransfPaie();

        $obj->setNbHCompl(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHCompl());
    }

    /**
     * Test setNbHRempl()
     *
     * @return void
     */
    public function testSetNbHRempl(): void {

        $obj = new HistoTransfPaie();

        $obj->setNbHRempl(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRempl());
    }

    /**
     * Test setNbHprevues()
     *
     * @return void
     */
    public function testSetNbHprevues(): void {

        $obj = new HistoTransfPaie();

        $obj->setNbHprevues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHprevues());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new HistoTransfPaie();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoTransfPaie();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getEcartCumule());
        $this->assertNull($obj->getHcrPayees());
        $this->assertNull($obj->getHnpComplH());
        $this->assertNull($obj->getHnphc11());
        $this->assertNull($obj->getHnphc25());
        $this->assertNull($obj->getHnphc33());
        $this->assertNull($obj->getNbComplH());
        $this->assertNull($obj->getNbHAbs());
        $this->assertNull($obj->getNbHAbsJf());
        $this->assertNull($obj->getNbHCompl());
        $this->assertNull($obj->getNbHRempl());
        $this->assertNull($obj->getNbHprevues());
        $this->assertNull($obj->getPeriode());
    }
}
