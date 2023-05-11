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
use WBW\Library\Quadratus\Model\Proprete\FichesControlesLignesElements;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches controles lignes elements test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FichesControlesLignesElementsTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeElement()
     *
     * @return void
     */
    public function testSetCodeElement(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setCodeElement("codeElement");
        $this->assertEquals("codeElement", $obj->getCodeElement());
    }

    /**
     * Test setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Test setMiseEnConformite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMiseEnConformite(): void {

        // Set a Date/time mock.
        $miseEnConformite = new DateTime("2018-09-10");

        $obj = new FichesControlesLignesElements();

        $obj->setMiseEnConformite($miseEnConformite);
        $this->assertSame($miseEnConformite, $obj->getMiseEnConformite());
    }

    /**
     * Test setNiveauNoeud()
     *
     * @return void
     */
    public function testSetNiveauNoeud(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setNiveauNoeud(10);
        $this->assertEquals(10, $obj->getNiveauNoeud());
    }

    /**
     * Test setNote()
     *
     * @return void
     */
    public function testSetNote(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setNote(10);
        $this->assertEquals(10, $obj->getNote());
    }

    /**
     * Test setNumeroFiche()
     *
     * @return void
     */
    public function testSetNumeroFiche(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setNumeroFiche(10);
        $this->assertEquals(10, $obj->getNumeroFiche());
    }

    /**
     * Test setNumeroNoeud()
     *
     * @return void
     */
    public function testSetNumeroNoeud(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setNumeroNoeud(10);
        $this->assertEquals(10, $obj->getNumeroNoeud());
    }

    /**
     * Test setTypeElement()
     *
     * @return void
     */
    public function testSetTypeElement(): void {

        $obj = new FichesControlesLignesElements();

        $obj->setTypeElement("typeElement");
        $this->assertEquals("typeElement", $obj->getTypeElement());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesControlesLignesElements();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeElement());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getMiseEnConformite());
        $this->assertNull($obj->getNiveauNoeud());
        $this->assertNull($obj->getNote());
        $this->assertNull($obj->getNumeroFiche());
        $this->assertNull($obj->getNumeroNoeud());
        $this->assertNull($obj->getTypeElement());
    }
}
