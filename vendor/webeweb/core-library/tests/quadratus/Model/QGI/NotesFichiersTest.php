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
use WBW\Library\Quadratus\Model\QGI\NotesFichiers;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Notes fichiers test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class NotesFichiersTest extends AbstractTestCase {

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new NotesFichiers();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setNomFichier()
     *
     * @return void
     */
    public function testSetNomFichier(): void {

        $obj = new NotesFichiers();

        $obj->setNomFichier("nomFichier");
        $this->assertEquals("nomFichier", $obj->getNomFichier());
    }

    /**
     * Test setNumNote()
     *
     * @return void
     */
    public function testSetNumNote(): void {

        $obj = new NotesFichiers();

        $obj->setNumNote("numNote");
        $this->assertEquals("numNote", $obj->getNumNote());
    }

    /**
     * Test setOrigineFichier()
     *
     * @return void
     */
    public function testSetOrigineFichier(): void {

        $obj = new NotesFichiers();

        $obj->setOrigineFichier("origineFichier");
        $this->assertEquals("origineFichier", $obj->getOrigineFichier());
    }

    /**
     * Test setTitre()
     *
     * @return void
     */
    public function testSetTitre(): void {

        $obj = new NotesFichiers();

        $obj->setTitre("titre");
        $this->assertEquals("titre", $obj->getTitre());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NotesFichiers();

        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getNomFichier());
        $this->assertNull($obj->getNumNote());
        $this->assertNull($obj->getOrigineFichier());
        $this->assertNull($obj->getTitre());
    }
}
