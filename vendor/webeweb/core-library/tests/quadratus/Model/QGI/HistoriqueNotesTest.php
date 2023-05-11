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
use WBW\Library\Quadratus\Model\QGI\HistoriqueNotes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Historique notes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class HistoriqueNotesTest extends AbstractTestCase {

    /**
     * Test setCodeCategorie()
     *
     * @return void
     */
    public function testSetCodeCategorie(): void {

        $obj = new HistoriqueNotes();

        $obj->setCodeCategorie("codeCategorie");
        $this->assertEquals("codeCategorie", $obj->getCodeCategorie());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new HistoriqueNotes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setDateCloture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCloture(): void {

        // Set a Date/time mock.
        $dateCloture = new DateTime("2018-09-10");

        $obj = new HistoriqueNotes();

        $obj->setDateCloture($dateCloture);
        $this->assertSame($dateCloture, $obj->getDateCloture());
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

        $obj = new HistoriqueNotes();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new HistoriqueNotes();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new HistoriqueNotes();

        $obj->setNumUniq("numUniq");
        $this->assertEquals("numUniq", $obj->getNumUniq());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new HistoriqueNotes();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new HistoriqueNotes();

        $this->assertNull($obj->getCodeCategorie());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getDateCloture());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getTitre());
    }
}
