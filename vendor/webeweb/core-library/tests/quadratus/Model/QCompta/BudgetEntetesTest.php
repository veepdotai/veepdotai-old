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
use WBW\Library\Quadratus\Model\QCompta\BudgetEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Budget entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class BudgetEntetesTest extends AbstractTestCase {

    /**
     * Test setArrondi()
     *
     * @return void
     */
    public function testSetArrondi(): void {

        $obj = new BudgetEntetes();

        $obj->setArrondi("arrondi");
        $this->assertEquals("arrondi", $obj->getArrondi());
    }

    /**
     * Test setCodeBudget()
     *
     * @return void
     */
    public function testSetCodeBudget(): void {

        $obj = new BudgetEntetes();

        $obj->setCodeBudget("codeBudget");
        $this->assertEquals("codeBudget", $obj->getCodeBudget());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new BudgetEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setNumColRef()
     *
     * @return void
     */
    public function testSetNumColRef(): void {

        $obj = new BudgetEntetes();

        $obj->setNumColRef(10);
        $this->assertEquals(10, $obj->getNumColRef());
    }

    /**
     * Test setPeriodeDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebut(): void {

        // Set a Date/time mock.
        $periodeDebut = new DateTime("2018-09-10");

        $obj = new BudgetEntetes();

        $obj->setPeriodeDebut($periodeDebut);
        $this->assertSame($periodeDebut, $obj->getPeriodeDebut());
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

        $obj = new BudgetEntetes();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new BudgetEntetes();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setTypeColRef()
     *
     * @return void
     */
    public function testSetTypeColRef(): void {

        $obj = new BudgetEntetes();

        $obj->setTypeColRef("typeColRef");
        $this->assertEquals("typeColRef", $obj->getTypeColRef());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BudgetEntetes();

        $this->assertNull($obj->getArrondi());
        $this->assertNull($obj->getCodeBudget());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumColRef());
        $this->assertNull($obj->getPeriodeDebut());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getTypeColRef());
    }
}
