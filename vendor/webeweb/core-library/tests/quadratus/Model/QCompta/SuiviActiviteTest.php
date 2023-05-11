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
use WBW\Library\Quadratus\Model\QCompta\SuiviActivite;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Suivi activite test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class SuiviActiviteTest extends AbstractTestCase {

    /**
     * Test setCodeColl()
     *
     * @return void
     */
    public function testSetCodeColl(): void {

        $obj = new SuiviActivite();

        $obj->setCodeColl("codeColl");
        $this->assertEquals("codeColl", $obj->getCodeColl());
    }

    /**
     * Test setDateHeure()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateHeure(): void {

        // Set a Date/time mock.
        $dateHeure = new DateTime("2018-09-10");

        $obj = new SuiviActivite();

        $obj->setDateHeure($dateHeure);
        $this->assertSame($dateHeure, $obj->getDateHeure());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new SuiviActivite();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setIdAction()
     *
     * @return void
     */
    public function testSetIdAction(): void {

        $obj = new SuiviActivite();

        $obj->setIdAction(10);
        $this->assertEquals(10, $obj->getIdAction());
    }

    /**
     * Test setResultat()
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new SuiviActivite();

        $obj->setResultat("resultat");
        $this->assertEquals("resultat", $obj->getResultat());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuiviActivite();

        $this->assertNull($obj->getCodeColl());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getIdAction());
        $this->assertNull($obj->getResultat());
    }
}
