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
use WBW\Library\Quadratus\Model\Proprete\DevisCommercialLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis commercial lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisCommercialLignesTest extends AbstractTestCase {

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeAffaireLigne()
     *
     * @return void
     */
    public function testSetCodeAffaireLigne(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeAffaireLigne("codeAffaireLigne");
        $this->assertEquals("codeAffaireLigne", $obj->getCodeAffaireLigne());
    }

    /**
     * Test setCodeAnalArticle()
     *
     * @return void
     */
    public function testSetCodeAnalArticle(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeAnalArticle("codeAnalArticle");
        $this->assertEquals("codeAnalArticle", $obj->getCodeAnalArticle());
    }

    /**
     * Test setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeChantierLigne()
     *
     * @return void
     */
    public function testSetCodeChantierLigne(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeChantierLigne("codeChantierLigne");
        $this->assertEquals("codeChantierLigne", $obj->getCodeChantierLigne());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCodeTvaArticle()
     *
     * @return void
     */
    public function testSetCodeTvaArticle(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeTvaArticle("codeTvaArticle");
        $this->assertEquals("codeTvaArticle", $obj->getCodeTvaArticle());
    }

    /**
     * Test setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Test setCodeVentilArticle()
     *
     * @return void
     */
    public function testSetCodeVentilArticle(): void {

        $obj = new DevisCommercialLignes();

        $obj->setCodeVentilArticle("codeVentilArticle");
        $this->assertEquals("codeVentilArticle", $obj->getCodeVentilArticle());
    }

    /**
     * Test setDepuisDebFac()
     *
     * @return void
     */
    public function testSetDepuisDebFac(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDepuisDebFac(true);
        $this->assertTrue($obj->getDepuisDebFac());
    }

    /**
     * Test setDesignation()
     *
     * @return void
     */
    public function testSetDesignation(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignation("designation");
        $this->assertEquals("designation", $obj->getDesignation());
    }

    /**
     * Test setDesignation2()
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Test setDesignation3()
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Test setDesignationBis()
     *
     * @return void
     */
    public function testSetDesignationBis(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationBis("designationBis");
        $this->assertEquals("designationBis", $obj->getDesignationBis());
    }

    /**
     * Test setDesignationBis2()
     *
     * @return void
     */
    public function testSetDesignationBis2(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationBis2("designationBis2");
        $this->assertEquals("designationBis2", $obj->getDesignationBis2());
    }

    /**
     * Test setDesignationBis3()
     *
     * @return void
     */
    public function testSetDesignationBis3(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationBis3("designationBis3");
        $this->assertEquals("designationBis3", $obj->getDesignationBis3());
    }

    /**
     * Test setDesignationRtf()
     *
     * @return void
     */
    public function testSetDesignationRtf(): void {

        $obj = new DevisCommercialLignes();

        $obj->setDesignationRtf("designationRtf");
        $this->assertEquals("designationRtf", $obj->getDesignationRtf());
    }

    /**
     * Test setImprimerDansPied()
     *
     * @return void
     */
    public function testSetImprimerDansPied(): void {

        $obj = new DevisCommercialLignes();

        $obj->setImprimerDansPied(true);
        $this->assertTrue($obj->getImprimerDansPied());
    }

    /**
     * Test setMontantUnitaireTaxe()
     *
     * @return void
     */
    public function testSetMontantUnitaireTaxe(): void {

        $obj = new DevisCommercialLignes();

        $obj->setMontantUnitaireTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantUnitaireTaxe());
    }

    /**
     * Test setMotCleDansPied()
     *
     * @return void
     */
    public function testSetMotCleDansPied(): void {

        $obj = new DevisCommercialLignes();

        $obj->setMotCleDansPied("motCleDansPied");
        $this->assertEquals("motCleDansPied", $obj->getMotCleDansPied());
    }

    /**
     * Test setNumeroDevis()
     *
     * @return void
     */
    public function testSetNumeroDevis(): void {

        $obj = new DevisCommercialLignes();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Test setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new DevisCommercialLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Test setPeriodeVentilMarge()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeVentilMarge(): void {

        // Set a Date/time mock.
        $periodeVentilMarge = new DateTime("2018-09-10");

        $obj = new DevisCommercialLignes();

        $obj->setPeriodeVentilMarge($periodeVentilMarge);
        $this->assertSame($periodeVentilMarge, $obj->getPeriodeVentilMarge());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new DevisCommercialLignes();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setPrixAchat()
     *
     * @return void
     */
    public function testSetPrixAchat(): void {

        $obj = new DevisCommercialLignes();

        $obj->setPrixAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixAchat());
    }

    /**
     * Test setPrixUnitaire()
     *
     * @return void
     */
    public function testSetPrixUnitaire(): void {

        $obj = new DevisCommercialLignes();

        $obj->setPrixUnitaire(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixUnitaire());
    }

    /**
     * Test setPxDevis()
     *
     * @return void
     */
    public function testSetPxDevis(): void {

        $obj = new DevisCommercialLignes();

        $obj->setPxDevis(true);
        $this->assertTrue($obj->getPxDevis());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new DevisCommercialLignes();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new DevisCommercialLignes();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Test setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new DevisCommercialLignes();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Test setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new DevisCommercialLignes();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Test setTauxTvaArticle()
     *
     * @return void
     */
    public function testSetTauxTvaArticle(): void {

        $obj = new DevisCommercialLignes();

        $obj->setTauxTvaArticle(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaArticle());
    }

    /**
     * Test setTauxTvaTaxe()
     *
     * @return void
     */
    public function testSetTauxTvaTaxe(): void {

        $obj = new DevisCommercialLignes();

        $obj->setTauxTvaTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxTvaTaxe());
    }

    /**
     * Test setVentilMarge()
     *
     * @return void
     */
    public function testSetVentilMarge(): void {

        $obj = new DevisCommercialLignes();

        $obj->setVentilMarge(true);
        $this->assertTrue($obj->getVentilMarge());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisCommercialLignes();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAffaireLigne());
        $this->assertNull($obj->getCodeAnalArticle());
        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeChantierLigne());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTvaArticle());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCodeVentilArticle());
        $this->assertNull($obj->getDepuisDebFac());
        $this->assertNull($obj->getDesignation());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignationBis());
        $this->assertNull($obj->getDesignationBis2());
        $this->assertNull($obj->getDesignationBis3());
        $this->assertNull($obj->getDesignationRtf());
        $this->assertNull($obj->getImprimerDansPied());
        $this->assertNull($obj->getMontantUnitaireTaxe());
        $this->assertNull($obj->getMotCleDansPied());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPeriodeVentilMarge());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getPrixAchat());
        $this->assertNull($obj->getPrixUnitaire());
        $this->assertNull($obj->getPxDevis());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getTauxTvaArticle());
        $this->assertNull($obj->getTauxTvaTaxe());
        $this->assertNull($obj->getVentilMarge());
    }
}
