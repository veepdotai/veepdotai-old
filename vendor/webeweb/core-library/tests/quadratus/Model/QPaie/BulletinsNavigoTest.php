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
use WBW\Library\Quadratus\Model\QPaie\BulletinsNavigo;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bulletins navigo test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class BulletinsNavigoTest extends AbstractTestCase {

    /**
     * Test setIndicePeriode()
     *
     * @return void
     */
    public function testSetIndicePeriode(): void {

        $obj = new BulletinsNavigo();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Test setNbSemaine()
     *
     * @return void
     */
    public function testSetNbSemaine(): void {

        $obj = new BulletinsNavigo();

        $obj->setNbSemaine("nbSemaine");
        $this->assertEquals("nbSemaine", $obj->getNbSemaine());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new BulletinsNavigo();

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

        $obj = new BulletinsNavigo();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setRbtNonProratise()
     *
     * @return void
     */
    public function testSetRbtNonProratise(): void {

        $obj = new BulletinsNavigo();

        $obj->setRbtNonProratise(true);
        $this->assertTrue($obj->getRbtNonProratise());
    }

    /**
     * Test setTypeAbonnement()
     *
     * @return void
     */
    public function testSetTypeAbonnement(): void {

        $obj = new BulletinsNavigo();

        $obj->setTypeAbonnement("typeAbonnement");
        $this->assertEquals("typeAbonnement", $obj->getTypeAbonnement());
    }

    /**
     * Test setZone()
     *
     * @return void
     */
    public function testSetZone(): void {

        $obj = new BulletinsNavigo();

        $obj->setZone("zone");
        $this->assertEquals("zone", $obj->getZone());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BulletinsNavigo();

        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getNbSemaine());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRbtNonProratise());
        $this->assertNull($obj->getTypeAbonnement());
        $this->assertNull($obj->getZone());
    }
}
