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
use WBW\Library\Quadratus\Model\Proprete\CdeTypeInspLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cde type insp lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CdeTypeInspLignesTest extends AbstractTestCase {

    /**
     * Test setAou()
     *
     * @return void
     */
    public function testSetAou(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setAou(true);
        $this->assertTrue($obj->getAou());
    }

    /**
     * Test setAvr()
     *
     * @return void
     */
    public function testSetAvr(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setAvr(true);
        $this->assertTrue($obj->getAvr());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Test setCodeInspecteur()
     *
     * @return void
     */
    public function testSetCodeInspecteur(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Test setCodeLivraison()
     *
     * @return void
     */
    public function testSetCodeLivraison(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Test setCommandeIsolee()
     *
     * @return void
     */
    public function testSetCommandeIsolee(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setCommandeIsolee(true);
        $this->assertTrue($obj->getCommandeIsolee());
    }

    /**
     * Test setDateDebutValidite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutValidite(): void {

        // Set a Date/time mock.
        $dateDebutValidite = new DateTime("2018-09-10");

        $obj = new CdeTypeInspLignes();

        $obj->setDateDebutValidite($dateDebutValidite);
        $this->assertSame($dateDebutValidite, $obj->getDateDebutValidite());
    }

    /**
     * Test setDateFinValidite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinValidite(): void {

        // Set a Date/time mock.
        $dateFinValidite = new DateTime("2018-09-10");

        $obj = new CdeTypeInspLignes();

        $obj->setDateFinValidite($dateFinValidite);
        $this->assertSame($dateFinValidite, $obj->getDateFinValidite());
    }

    /**
     * Test setDateValidee()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateValidee(): void {

        // Set a Date/time mock.
        $dateValidee = new DateTime("2018-09-10");

        $obj = new CdeTypeInspLignes();

        $obj->setDateValidee($dateValidee);
        $this->assertSame($dateValidee, $obj->getDateValidee());
    }

    /**
     * Test setDec()
     *
     * @return void
     */
    public function testSetDec(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setDec(true);
        $this->assertTrue($obj->getDec());
    }

    /**
     * Test setDesignation1()
     *
     * @return void
     */
    public function testSetDesignation1(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setDesignation1("designation1");
        $this->assertEquals("designation1", $obj->getDesignation1());
    }

    /**
     * Test setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Test setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Test setFev()
     *
     * @return void
     */
    public function testSetFev(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setFev(true);
        $this->assertTrue($obj->getFev());
    }

    /**
     * Test setJan()
     *
     * @return void
     */
    public function testSetJan(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setJan(true);
        $this->assertTrue($obj->getJan());
    }

    /**
     * Test setJourLivraison()
     *
     * @return void
     */
    public function testSetJourLivraison(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setJourLivraison("jourLivraison");
        $this->assertEquals("jourLivraison", $obj->getJourLivraison());
    }

    /**
     * Test setJuil()
     *
     * @return void
     */
    public function testSetJuil(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setJuil(true);
        $this->assertTrue($obj->getJuil());
    }

    /**
     * Test setJuin()
     *
     * @return void
     */
    public function testSetJuin(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setJuin(true);
        $this->assertTrue($obj->getJuin());
    }

    /**
     * Test setMai()
     *
     * @return void
     */
    public function testSetMai(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setMai(true);
        $this->assertTrue($obj->getMai());
    }

    /**
     * Test setMajStockByDa()
     *
     * @return void
     */
    public function testSetMajStockByDa(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setMajStockByDa(true);
        $this->assertTrue($obj->getMajStockByDa());
    }

    /**
     * Test setMar()
     *
     * @return void
     */
    public function testSetMar(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setMar(true);
        $this->assertTrue($obj->getMar());
    }

    /**
     * Test setNov()
     *
     * @return void
     */
    public function testSetNov(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setNov(true);
        $this->assertTrue($obj->getNov());
    }

    /**
     * Test setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Test setOct()
     *
     * @return void
     */
    public function testSetOct(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setOct(true);
        $this->assertTrue($obj->getOct());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setSaisirModaliteLiv()
     *
     * @return void
     */
    public function testSetSaisirModaliteLiv(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setSaisirModaliteLiv(true);
        $this->assertTrue($obj->getSaisirModaliteLiv());
    }

    /**
     * Test setSep()
     *
     * @return void
     */
    public function testSetSep(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setSep(true);
        $this->assertTrue($obj->getSep());
    }

    /**
     * Test setTypeGestion()
     *
     * @return void
     */
    public function testSetTypeGestion(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setTypeGestion("typeGestion");
        $this->assertEquals("typeGestion", $obj->getTypeGestion());
    }

    /**
     * Test setValidee()
     *
     * @return void
     */
    public function testSetValidee(): void {

        $obj = new CdeTypeInspLignes();

        $obj->setValidee(true);
        $this->assertTrue($obj->getValidee());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CdeTypeInspLignes();

        $this->assertNull($obj->getAou());
        $this->assertNull($obj->getAvr());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getDateDebutValidite());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDateValidee());
        $this->assertNull($obj->getDec());
        $this->assertNull($obj->getDesignation1());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getFev());
        $this->assertNull($obj->getJan());
        $this->assertNull($obj->getJourLivraison());
        $this->assertNull($obj->getJuil());
        $this->assertNull($obj->getJuin());
        $this->assertNull($obj->getMai());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getMar());
        $this->assertNull($obj->getNov());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getOct());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getSaisirModaliteLiv());
        $this->assertNull($obj->getSep());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getValidee());
    }
}
