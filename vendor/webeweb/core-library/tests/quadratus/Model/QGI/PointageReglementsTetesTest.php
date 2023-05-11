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
use WBW\Library\Quadratus\Model\QGI\PointageReglementsTetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Pointage reglements tetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class PointageReglementsTetesTest extends AbstractTestCase {

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollCreation()
     *
     * @return void
     */
    public function testSetCodeCollCreation(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollCreation("codeCollCreation");
        $this->assertEquals("codeCollCreation", $obj->getCodeCollCreation());
    }

    /**
     * Test setCodeCollGenere()
     *
     * @return void
     */
    public function testSetCodeCollGenere(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollGenere("codeCollGenere");
        $this->assertEquals("codeCollGenere", $obj->getCodeCollGenere());
    }

    /**
     * Test setCodeCollModif()
     *
     * @return void
     */
    public function testSetCodeCollModif(): void {

        $obj = new PointageReglementsTetes();

        $obj->setCodeCollModif("codeCollModif");
        $this->assertEquals("codeCollModif", $obj->getCodeCollModif());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new PointageReglementsTetes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateGenere()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateGenere(): void {

        // Set a Date/time mock.
        $dateGenere = new DateTime("2018-09-10");

        $obj = new PointageReglementsTetes();

        $obj->setDateGenere($dateGenere);
        $this->assertSame($dateGenere, $obj->getDateGenere());
    }

    /**
     * Test setDateModif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new PointageReglementsTetes();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new PointageReglementsTetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMontantSaisi()
     *
     * @return void
     */
    public function testSetMontantSaisi(): void {

        $obj = new PointageReglementsTetes();

        $obj->setMontantSaisi(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisi());
    }

    /**
     * Test setNumCptPayeur()
     *
     * @return void
     */
    public function testSetNumCptPayeur(): void {

        $obj = new PointageReglementsTetes();

        $obj->setNumCptPayeur("numCptPayeur");
        $this->assertEquals("numCptPayeur", $obj->getNumCptPayeur());
    }

    /**
     * Test setNumDoss()
     *
     * @return void
     */
    public function testSetNumDoss(): void {

        $obj = new PointageReglementsTetes();

        $obj->setNumDoss("numDoss");
        $this->assertEquals("numDoss", $obj->getNumDoss());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointageReglementsTetes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollCreation());
        $this->assertNull($obj->getCodeCollGenere());
        $this->assertNull($obj->getCodeCollModif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateGenere());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontantSaisi());
        $this->assertNull($obj->getNumCptPayeur());
        $this->assertNull($obj->getNumDoss());
    }
}
