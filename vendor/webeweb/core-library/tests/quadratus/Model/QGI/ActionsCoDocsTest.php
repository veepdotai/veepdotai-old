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
use WBW\Library\Quadratus\Model\QGI\ActionsCoDocs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co docs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoDocsTest extends AbstractTestCase {

    /**
     * Test setAuteur()
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new ActionsCoDocs();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Test setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoDocs();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ActionsCoDocs();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeDoc()
     *
     * @return void
     */
    public function testSetCodeDoc(): void {

        $obj = new ActionsCoDocs();

        $obj->setCodeDoc("codeDoc");
        $this->assertEquals("codeDoc", $obj->getCodeDoc());
    }

    /**
     * Test setCodeManif()
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoDocs();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
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

        $obj = new ActionsCoDocs();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new ActionsCoDocs();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setEmplacementFichier()
     *
     * @return void
     */
    public function testSetEmplacementFichier(): void {

        $obj = new ActionsCoDocs();

        $obj->setEmplacementFichier("emplacementFichier");
        $this->assertEquals("emplacementFichier", $obj->getEmplacementFichier());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ActionsCoDocs();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new ActionsCoDocs();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoDocs();

        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDoc());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getEmplacementFichier());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumero());
    }
}
