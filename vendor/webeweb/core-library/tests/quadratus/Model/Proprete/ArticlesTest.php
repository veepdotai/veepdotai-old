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
use WBW\Library\Quadratus\Model\Proprete\Articles;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticlesTest extends AbstractTestCase {

    /**
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Articles();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setArticleRemplacement()
     *
     * @return void
     */
    public function testSetArticleRemplacement(): void {

        $obj = new Articles();

        $obj->setArticleRemplacement("articleRemplacement");
        $this->assertEquals("articleRemplacement", $obj->getArticleRemplacement());
    }

    /**
     * Test setClassificationFour()
     *
     * @return void
     */
    public function testSetClassificationFour(): void {

        $obj = new Articles();

        $obj->setClassificationFour("classificationFour");
        $this->assertEquals("classificationFour", $obj->getClassificationFour());
    }

    /**
     * Test setClassificationUtil()
     *
     * @return void
     */
    public function testSetClassificationUtil(): void {

        $obj = new Articles();

        $obj->setClassificationUtil("classificationUtil");
        $this->assertEquals("classificationUtil", $obj->getClassificationUtil());
    }

    /**
     * Test setCodeAffectRent()
     *
     * @return void
     */
    public function testSetCodeAffectRent(): void {

        $obj = new Articles();

        $obj->setCodeAffectRent("codeAffectRent");
        $this->assertEquals("codeAffectRent", $obj->getCodeAffectRent());
    }

    /**
     * Test setCodeAnalAchat()
     *
     * @return void
     */
    public function testSetCodeAnalAchat(): void {

        $obj = new Articles();

        $obj->setCodeAnalAchat("codeAnalAchat");
        $this->assertEquals("codeAnalAchat", $obj->getCodeAnalAchat());
    }

    /**
     * Test setCodeAnalVente()
     *
     * @return void
     */
    public function testSetCodeAnalVente(): void {

        $obj = new Articles();

        $obj->setCodeAnalVente("codeAnalVente");
        $this->assertEquals("codeAnalVente", $obj->getCodeAnalVente());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new Articles();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeFournisseur()
     *
     * @return void
     */
    public function testSetCodeFournisseur(): void {

        $obj = new Articles();

        $obj->setCodeFournisseur("codeFournisseur");
        $this->assertEquals("codeFournisseur", $obj->getCodeFournisseur());
    }

    /**
     * Test setCodeTvaAchat()
     *
     * @return void
     */
    public function testSetCodeTvaAchat(): void {

        $obj = new Articles();

        $obj->setCodeTvaAchat("codeTvaAchat");
        $this->assertEquals("codeTvaAchat", $obj->getCodeTvaAchat());
    }

    /**
     * Test setCodeTvaVente()
     *
     * @return void
     */
    public function testSetCodeTvaVente(): void {

        $obj = new Articles();

        $obj->setCodeTvaVente("codeTvaVente");
        $this->assertEquals("codeTvaVente", $obj->getCodeTvaVente());
    }

    /**
     * Test setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new Articles();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Test setCodeVentilAchat()
     *
     * @return void
     */
    public function testSetCodeVentilAchat(): void {

        $obj = new Articles();

        $obj->setCodeVentilAchat("codeVentilAchat");
        $this->assertEquals("codeVentilAchat", $obj->getCodeVentilAchat());
    }

    /**
     * Test setCodeVentilVente()
     *
     * @return void
     */
    public function testSetCodeVentilVente(): void {

        $obj = new Articles();

        $obj->setCodeVentilVente("codeVentilVente");
        $this->assertEquals("codeVentilVente", $obj->getCodeVentilVente());
    }

    /**
     * Test setCoef()
     *
     * @return void
     */
    public function testSetCoef(): void {

        $obj = new Articles();

        $obj->setCoef(10.092018);
        $this->assertEquals(10.092018, $obj->getCoef());
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

        $obj = new Articles();

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

        $obj = new Articles();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDepuisDebFac()
     *
     * @return void
     */
    public function testSetDepuisDebFac(): void {

        $obj = new Articles();

        $obj->setDepuisDebFac(true);
        $this->assertTrue($obj->getDepuisDebFac());
    }

    /**
     * Test setDernierPrixAchat()
     *
     * @return void
     */
    public function testSetDernierPrixAchat(): void {

        $obj = new Articles();

        $obj->setDernierPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getDernierPrixAchat());
    }

    /**
     * Test setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new Articles();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Test setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new Articles();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Test setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new Articles();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Test setDesignationRtf()
     *
     * @return void
     */
    public function testSetDesignationRtf(): void {

        $obj = new Articles();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Test setFamilleArticle()
     *
     * @return void
     */
    public function testSetFamilleArticle(): void {

        $obj = new Articles();

        $obj->setFamilleArticle("familleArticle");
        $this->assertEquals("familleArticle", $obj->getFamilleArticle());
    }

    /**
     * Test setImprimerDansPied()
     *
     * @return void
     */
    public function testSetImprimerDansPied(): void {

        $obj = new Articles();

        $obj->setImprimerDansPied(true);
        $this->assertTrue($obj->getImprimerDansPied());
    }

    /**
     * Test setMontantUnitaireTaxe()
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe(): void {

        $obj = new Articles();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Test setMotCleDansPied()
     *
     * @return void
     */
    public function testSetMotCleDansPied(): void {

        $obj = new Articles();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Test setNePasReviser()
     *
     * @return void
     */
    public function testSetNePasReviser(): void {

        $obj = new Articles();

        $obj->setNePasReviser(true);
        $this->assertTrue($obj->getNePasReviser());
    }

    /**
     * Test setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Articles();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Test setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Articles();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Test setPamp()
     *
     * @return void
     */
    public function testSetPamp(): void {

        $obj = new Articles();

        $obj->setPamp(10.092018);
        $this->assertEquals(10.092018, $obj->getPamp());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new Articles();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setPrixNet()
     *
     * @return void
     */
    public function testSetPrixNet(): void {

        $obj = new Articles();

        $obj->setPrixNet(true);
        $this->assertTrue($obj->getPrixNet());
    }

    /**
     * Test setPrixRevient()
     *
     * @return void
     */
    public function testSetPrixRevient(): void {

        $obj = new Articles();

        $obj->setPrixRevient(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixRevient());
    }

    /**
     * Test setPrixVente()
     *
     * @return void
     */
    public function testSetPrixVente(): void {

        $obj = new Articles();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Test setPrixVenteEuros()
     *
     * @return void
     */
    public function testSetPrixVenteEuros(): void {

        $obj = new Articles();

        $obj->setPrixVenteEuros(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVenteEuros());
    }

    /**
     * Test setProduit()
     *
     * @return void
     */
    public function testSetProduit(): void {

        $obj = new Articles();

        $obj->setProduit(true);
        $this->assertTrue($obj->getProduit());
    }

    /**
     * Test setProduitChimique()
     *
     * @return void
     */
    public function testSetProduitChimique(): void {

        $obj = new Articles();

        $obj->setProduitChimique(true);
        $this->assertTrue($obj->getProduitChimique());
    }

    /**
     * Test setPxFacture()
     *
     * @return void
     */
    public function testSetPxFacture(): void {

        $obj = new Articles();

        $obj->setPxFacture(true);
        $this->assertTrue($obj->getPxFacture());
    }

    /**
     * Test setQteStockMini()
     *
     * @return void
     */
    public function testSetQteStockMini(): void {

        $obj = new Articles();

        $obj->setQteStockMini(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockMini());
    }

    /**
     * Test setQteStockReel()
     *
     * @return void
     */
    public function testSetQteStockReel(): void {

        $obj = new Articles();

        $obj->setQteStockReel(10.092018);
        $this->assertEquals(10.092018, $obj->getQteStockReel());
    }

    /**
     * Test setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new Articles();

        $obj->setSoumisEscompte(true);
        $this->assertTrue($obj->getSoumisEscompte());
    }

    /**
     * Test setSuiviStock()
     *
     * @return void
     */
    public function testSetSuiviStock(): void {

        $obj = new Articles();

        $obj->setSuiviStock(true);
        $this->assertTrue($obj->getSuiviStock());
    }

    /**
     * Test setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Articles();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Test setTypeArticle()
     *
     * @return void
     */
    public function testSetTypeArticle(): void {

        $obj = new Articles();

        $obj->setTypeArticle("typeArticle");
        $this->assertEquals("typeArticle", $obj->getTypeArticle());
    }

    /**
     * Test setVariante()
     *
     * @return void
     */
    public function testSetVariante(): void {

        $obj = new Articles();

        $obj->setVariante(true);
        $this->assertTrue($obj->getVariante());
    }

    /**
     * Test setVentilMarge()
     *
     * @return void
     */
    public function testSetVentilMarge(): void {

        $obj = new Articles();

        $obj->setVentilMarge(true);
        $this->assertTrue($obj->getVentilMarge());
    }

    /**
     * Test setVisuDansAttFisc()
     *
     * @return void
     */
    public function testSetVisuDansAttFisc(): void {

        $obj = new Articles();

        $obj->setVisuDansAttFisc(true);
        $this->assertTrue($obj->getVisuDansAttFisc());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Articles();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getArticleRemplacement());
        $this->assertNull($obj->getClassificationFour());
        $this->assertNull($obj->getClassificationUtil());
        $this->assertNull($obj->getCodeAffectRent());
        $this->assertNull($obj->getCodeAnalAchat());
        $this->assertNull($obj->getCodeAnalVente());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeFournisseur());
        $this->assertNull($obj->getCodeTvaAchat());
        $this->assertNull($obj->getCodeTvaVente());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilAchat());
        $this->assertNull($obj->getCodeVentilVente());
        $this->assertNull($obj->getCoef());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDernierPrixAchat());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getFamilleArticle());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNePasReviser());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPamp());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixNet());
        $this->assertNull($obj->getPrixRevient());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPrixVenteEuros());
        $this->assertNull($obj->getProduit());
        $this->assertNull($obj->getProduitChimique());
        $this->assertNull($obj->getPxFacture());
        $this->assertNull($obj->getQteStockMini());
        $this->assertNull($obj->getQteStockReel());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSuiviStock());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTypeArticle());
        $this->assertNull($obj->getVariante());
        $this->assertNull($obj->getVentilMarge());
        $this->assertNull($obj->getVisuDansAttFisc());
    }
}
