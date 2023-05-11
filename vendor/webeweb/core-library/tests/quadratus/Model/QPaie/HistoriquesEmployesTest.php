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
use WBW\Library\Quadratus\Model\QPaie\HistoriquesEmployes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historiques employes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class HistoriquesEmployesTest extends AbstractTestCase {

    /**
     * Test setChapitre()
     *
     * @return void
     */
    public function testSetChapitre(): void {

        $obj = new HistoriquesEmployes();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Test setCollCreat()
     *
     * @return void
     */
    public function testSetCollCreat(): void {

        $obj = new HistoriquesEmployes();

        $obj->setCollCreat("collCreat");
        $this->assertEquals("collCreat", $obj->getCollCreat());
    }

    /**
     * Test setCollModif()
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new HistoriquesEmployes();

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

        $obj = new HistoriquesEmployes();

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

        $obj = new HistoriquesEmployes();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new HistoriquesEmployes();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setGUniqId()
     *
     * @return void
     */
    public function testSetGUniqId(): void {

        $obj = new HistoriquesEmployes();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new HistoriquesEmployes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoriquesEmployes();

        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCollCreat());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getGUniqId());
        $this->assertNull($obj->getIndice());
    }
}
