<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\PiecesJointes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Pieces jointes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PiecesJointesTest extends AbstractTestCase {

    /**
     * Test setAPublierEspaceClient()
     *
     * @return void
     */
    public function testSetAPublierEspaceClient(): void {

        $obj = new PiecesJointes();

        $obj->setAPublierEspaceClient(true);
        $this->assertTrue($obj->getAPublierEspaceClient());
    }

    /**
     * Test setAPublierWeb()
     *
     * @return void
     */
    public function testSetAPublierWeb(): void {

        $obj = new PiecesJointes();

        $obj->setAPublierWeb(true);
        $this->assertTrue($obj->getAPublierWeb());
    }

    /**
     * Test setArchive()
     *
     * @return void
     */
    public function testSetArchive(): void {

        $obj = new PiecesJointes();

        $obj->setArchive(true);
        $this->assertTrue($obj->getArchive());
    }

    /**
     * Test setAuteur()
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new PiecesJointes();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
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

        $obj = new PiecesJointes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new PiecesJointes();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new PiecesJointes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setNbDocAttache()
     *
     * @return void
     */
    public function testSetNbDocAttache(): void {

        $obj = new PiecesJointes();

        $obj->setNbDocAttache(10);
        $this->assertEquals(10, $obj->getNbDocAttache());
    }

    /**
     * Test setNomPiece()
     *
     * @return void
     */
    public function testSetNomPiece(): void {

        $obj = new PiecesJointes();

        $obj->setNomPiece("nomPiece");
        $this->assertEquals("nomPiece", $obj->getNomPiece());
    }

    /**
     * Test setNumPiece()
     *
     * @return void
     */
    public function testSetNumPiece(): void {

        $obj = new PiecesJointes();

        $obj->setNumPiece(10);
        $this->assertEquals(10, $obj->getNumPiece());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PiecesJointes();

        $this->assertNull($obj->getAPublierEspaceClient());
        $this->assertNull($obj->getAPublierWeb());
        $this->assertNull($obj->getArchive());
        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbDocAttache());
        $this->assertNull($obj->getNomPiece());
        $this->assertNull($obj->getNumPiece());
    }
}
