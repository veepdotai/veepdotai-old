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
use WBW\Library\Quadratus\Model\QGI\StatsPersoSuiviClientTetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Stats perso suivi client tetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class StatsPersoSuiviClientTetesTest extends AbstractTestCase {

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCollCreat()
     *
     * @return void
     */
    public function testSetCollCreat(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setCollCreat("collCreat");
        $this->assertEquals("collCreat", $obj->getCollCreat());
    }

    /**
     * Test setCollModif()
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Test setDateCreat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
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

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLstCollab()
     *
     * @return void
     */
    public function testSetLstCollab(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $obj->setLstCollab("lstCollab");
        $this->assertEquals("lstCollab", $obj->getLstCollab());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new StatsPersoSuiviClientTetes();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCollCreat());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLstCollab());
    }
}
