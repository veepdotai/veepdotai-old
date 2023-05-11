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
use WBW\Library\Quadratus\Model\QPaie\HSupTepaBul;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * H sup tepa bul test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HSupTepaBulTest extends AbstractTestCase {

    /**
     * Test setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new HSupTepaBul();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Test setMtBrutExo()
     *
     * @return void
     */
    public function testSetMtBrutExo(): void {

        $obj = new HSupTepaBul();

        $obj->setMtBrutExo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutExo());
    }

    /**
     * Test setMtBrutExoAbat()
     *
     * @return void
     */
    public function testSetMtBrutExoAbat(): void {

        $obj = new HSupTepaBul();

        $obj->setMtBrutExoAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getMtBrutExoAbat());
    }

    /**
     * Test setNbJhExo()
     *
     * @return void
     */
    public function testSetNbJhExo(): void {

        $obj = new HSupTepaBul();

        $obj->setNbJhExo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJhExo());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new HSupTepaBul();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new HSupTepaBul();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
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

        $obj = new HSupTepaBul();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPourcentMajo()
     *
     * @return void
     */
    public function testSetPourcentMajo(): void {

        $obj = new HSupTepaBul();

        $obj->setPourcentMajo(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentMajo());
    }

    /**
     * Test setTypeExo()
     *
     * @return void
     */
    public function testSetTypeExo(): void {

        $obj = new HSupTepaBul();

        $obj->setTypeExo("typeExo");
        $this->assertEquals("typeExo", $obj->getTypeExo());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HSupTepaBul();

        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getMtBrutExo());
        $this->assertNull($obj->getMtBrutExoAbat());
        $this->assertNull($obj->getNbJhExo());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPourcentMajo());
        $this->assertNull($obj->getTypeExo());
    }
}
