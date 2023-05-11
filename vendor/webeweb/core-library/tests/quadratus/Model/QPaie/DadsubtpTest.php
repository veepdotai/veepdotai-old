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
use WBW\Library\Quadratus\Model\QPaie\Dadsubtp;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsubtp test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsubtpTest extends AbstractTestCase {

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Dadsubtp();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new Dadsubtp();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Test setCodeTempsArret()
     *
     * @return void
     */
    public function testSetCodeTempsArret(): void {

        $obj = new Dadsubtp();

        $obj->setCodeTempsArret("codeTempsArret");
        $this->assertEquals("codeTempsArret", $obj->getCodeTempsArret());
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

        $obj = new Dadsubtp();

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

        $obj = new Dadsubtp();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Test setMontantEmployeur()
     *
     * @return void
     */
    public function testSetMontantEmployeur(): void {

        $obj = new Dadsubtp();

        $obj->setMontantEmployeur(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantEmployeur());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Dadsubtp();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new Dadsubtp();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Test setQualifUniteTemps()
     *
     * @return void
     */
    public function testSetQualifUniteTemps(): void {

        $obj = new Dadsubtp();

        $obj->setQualifUniteTemps("qualifUniteTemps");
        $this->assertEquals("qualifUniteTemps", $obj->getQualifUniteTemps());
    }

    /**
     * Test setTempsArret()
     *
     * @return void
     */
    public function testSetTempsArret(): void {

        $obj = new Dadsubtp();

        $obj->setTempsArret(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsArret());
    }

    /**
     * Test setTypeArret()
     *
     * @return void
     */
    public function testSetTypeArret(): void {

        $obj = new Dadsubtp();

        $obj->setTypeArret("typeArret");
        $this->assertEquals("typeArret", $obj->getTypeArret());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Dadsubtp();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeTempsArret());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getMontantEmployeur());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
        $this->assertNull($obj->getQualifUniteTemps());
        $this->assertNull($obj->getTempsArret());
        $this->assertNull($obj->getTypeArret());
    }
}
