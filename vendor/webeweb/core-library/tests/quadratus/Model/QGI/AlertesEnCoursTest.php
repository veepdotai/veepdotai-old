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
use WBW\Library\Quadratus\Model\QGI\AlertesEnCours;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Alertes en cours test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AlertesEnCoursTest extends AbstractTestCase {

    /**
     * Test setArDemande()
     *
     * @return void
     */
    public function testSetArDemande(): void {

        $obj = new AlertesEnCours();

        $obj->setArDemande(true);
        $this->assertTrue($obj->getArDemande());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AlertesEnCours();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollabDst()
     *
     * @return void
     */
    public function testSetCodeCollabDst(): void {

        $obj = new AlertesEnCours();

        $obj->setCodeCollabDst("codeCollabDst");
        $this->assertEquals("codeCollabDst", $obj->getCodeCollabDst());
    }

    /**
     * Test setCodeCollabOrg()
     *
     * @return void
     */
    public function testSetCodeCollabOrg(): void {

        $obj = new AlertesEnCours();

        $obj->setCodeCollabOrg("codeCollabOrg");
        $this->assertEquals("codeCollabOrg", $obj->getCodeCollabOrg());
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

        $obj = new AlertesEnCours();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateDeclenchement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDeclenchement(): void {

        // Set a Date/time mock.
        $dateDeclenchement = new DateTime("2018-09-10");

        $obj = new AlertesEnCours();

        $obj->setDateDeclenchement($dateDeclenchement);
        $this->assertSame($dateDeclenchement, $obj->getDateDeclenchement());
    }

    /**
     * Test setIdAlerte()
     *
     * @return void
     */
    public function testSetIdAlerte(): void {

        $obj = new AlertesEnCours();

        $obj->setIdAlerte(10);
        $this->assertEquals(10, $obj->getIdAlerte());
    }

    /**
     * Test setTexteAlerte()
     *
     * @return void
     */
    public function testSetTexteAlerte(): void {

        $obj = new AlertesEnCours();

        $obj->setTexteAlerte("texteAlerte");
        $this->assertEquals("texteAlerte", $obj->getTexteAlerte());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AlertesEnCours();

        $this->assertNull($obj->getArDemande());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollabDst());
        $this->assertNull($obj->getCodeCollabOrg());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDeclenchement());
        $this->assertNull($obj->getIdAlerte());
        $this->assertNull($obj->getTexteAlerte());
    }
}
