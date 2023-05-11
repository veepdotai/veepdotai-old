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
use WBW\Library\Quadratus\Model\Proprete\CdeFournisseurMensu;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cde fournisseur mensu test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CdeFournisseurMensuTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Test setCodeInspecteur()
     *
     * @return void
     */
    public function testSetCodeInspecteur(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeInspecteur("codeInspecteur");
        $this->assertEquals("codeInspecteur", $obj->getCodeInspecteur());
    }

    /**
     * Test setCodeLivraison()
     *
     * @return void
     */
    public function testSetCodeLivraison(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Test setCodeLivreur()
     *
     * @return void
     */
    public function testSetCodeLivreur(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCodeLivreur("codeLivreur");
        $this->assertEquals("codeLivreur", $obj->getCodeLivreur());
    }

    /**
     * Test setCommandeIsolee()
     *
     * @return void
     */
    public function testSetCommandeIsolee(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCommandeIsolee(true);
        $this->assertTrue($obj->getCommandeIsolee());
    }

    /**
     * Test setCritereTexte1()
     *
     * @return void
     */
    public function testSetCritereTexte1(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Test setDateLivraison()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateLivraison(): void {

        // Set a Date/time mock.
        $dateLivraison = new DateTime("2018-09-10");

        $obj = new CdeFournisseurMensu();

        $obj->setDateLivraison($dateLivraison);
        $this->assertSame($dateLivraison, $obj->getDateLivraison());
    }

    /**
     * Test setDateTransfert()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTransfert(): void {

        // Set a Date/time mock.
        $dateTransfert = new DateTime("2018-09-10");

        $obj = new CdeFournisseurMensu();

        $obj->setDateTransfert($dateTransfert);
        $this->assertSame($dateTransfert, $obj->getDateTransfert());
    }

    /**
     * Test setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Test setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Test setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Test setFromCdeType()
     *
     * @return void
     */
    public function testSetFromCdeType(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setFromCdeType(true);
        $this->assertTrue($obj->getFromCdeType());
    }

    /**
     * Test setMajStockByDa()
     *
     * @return void
     */
    public function testSetMajStockByDa(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setMajStockByDa(true);
        $this->assertTrue($obj->getMajStockByDa());
    }

    /**
     * Test setNoBonInt()
     *
     * @return void
     */
    public function testSetNoBonInt(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setNoBonInt("noBonInt");
        $this->assertEquals("noBonInt", $obj->getNoBonInt());
    }

    /**
     * Test setNoPieceCde()
     *
     * @return void
     */
    public function testSetNoPieceCde(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setNoPieceCde("noPieceCde");
        $this->assertEquals("noPieceCde", $obj->getNoPieceCde());
    }

    /**
     * Test setNoPieceCdeCli()
     *
     * @return void
     */
    public function testSetNoPieceCdeCli(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setNoPieceCdeCli("noPieceCdeCli");
        $this->assertEquals("noPieceCdeCli", $obj->getNoPieceCdeCli());
    }

    /**
     * Test setNumeroBsGenere()
     *
     * @return void
     */
    public function testSetNumeroBsGenere(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setNumeroBsGenere("numeroBsGenere");
        $this->assertEquals("numeroBsGenere", $obj->getNumeroBsGenere());
    }

    /**
     * Test setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new CdeFournisseurMensu();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setPrixSaisi()
     *
     * @return void
     */
    public function testSetPrixSaisi(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setPrixSaisi(true);
        $this->assertTrue($obj->getPrixSaisi());
    }

    /**
     * Test setPuBrut()
     *
     * @return void
     */
    public function testSetPuBrut(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setPuBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getPuBrut());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setQuantiteBs()
     *
     * @return void
     */
    public function testSetQuantiteBs(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteBs(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteBs());
    }

    /**
     * Test setQuantiteCde()
     *
     * @return void
     */
    public function testSetQuantiteCde(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteCde(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteCde());
    }

    /**
     * Test setQuantiteCdeCli()
     *
     * @return void
     */
    public function testSetQuantiteCdeCli(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteCdeCli(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteCdeCli());
    }

    /**
     * Test setQuantiteLiv()
     *
     * @return void
     */
    public function testSetQuantiteLiv(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setQuantiteLiv(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantiteLiv());
    }

    /**
     * Test setRemise1()
     *
     * @return void
     */
    public function testSetRemise1(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise1());
    }

    /**
     * Test setRemise2()
     *
     * @return void
     */
    public function testSetRemise2(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise2());
    }

    /**
     * Test setRemise3()
     *
     * @return void
     */
    public function testSetRemise3(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setRemise3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemise3());
    }

    /**
     * Test setTypeGestion()
     *
     * @return void
     */
    public function testSetTypeGestion(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setTypeGestion("typeGestion");
        $this->assertEquals("typeGestion", $obj->getTypeGestion());
    }

    /**
     * Test setTypePiece()
     *
     * @return void
     */
    public function testSetTypePiece(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setTypePiece("typePiece");
        $this->assertEquals("typePiece", $obj->getTypePiece());
    }

    /**
     * Test setUniqIdBlocage()
     *
     * @return void
     */
    public function testSetUniqIdBlocage(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setUniqIdBlocage("uniqIdBlocage");
        $this->assertEquals("uniqIdBlocage", $obj->getUniqIdBlocage());
    }

    /**
     * Test setValidee()
     *
     * @return void
     */
    public function testSetValidee(): void {

        $obj = new CdeFournisseurMensu();

        $obj->setValidee(true);
        $this->assertTrue($obj->getValidee());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CdeFournisseurMensu();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeInspecteur());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodeLivreur());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getDateLivraison());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getFromCdeType());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getNoBonInt());
        $this->assertNull($obj->getNoPieceCde());
        $this->assertNull($obj->getNoPieceCdeCli());
        $this->assertNull($obj->getNumeroBsGenere());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPuBrut());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixSaisi());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantiteBs());
        $this->assertNull($obj->getQuantiteCde());
        $this->assertNull($obj->getQuantiteCdeCli());
        $this->assertNull($obj->getQuantiteLiv());
        $this->assertNull($obj->getRemise1());
        $this->assertNull($obj->getRemise2());
        $this->assertNull($obj->getRemise3());
        $this->assertNull($obj->getTypeGestion());
        $this->assertNull($obj->getTypePiece());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getValidee());
    }
}
