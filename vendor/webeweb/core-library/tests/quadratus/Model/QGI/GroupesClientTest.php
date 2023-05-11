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
use WBW\Library\Quadratus\Model\QGI\GroupesClient;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Groupes client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class GroupesClientTest extends AbstractTestCase {

    /**
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new GroupesClient();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setBloque()
     *
     * @return void
     */
    public function testSetBloque(): void {

        $obj = new GroupesClient();

        $obj->setBloque(true);
        $this->assertTrue($obj->getBloque());
    }

    /**
     * Test setCleAlpha()
     *
     * @return void
     */
    public function testSetCleAlpha(): void {

        $obj = new GroupesClient();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Test setClientPerdu()
     *
     * @return void
     */
    public function testSetClientPerdu(): void {

        $obj = new GroupesClient();

        $obj->setClientPerdu(true);
        $this->assertTrue($obj->getClientPerdu());
    }

    /**
     * Test setCodeAnalytique()
     *
     * @return void
     */
    public function testSetCodeAnalytique(): void {

        $obj = new GroupesClient();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new GroupesClient();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeClientFact()
     *
     * @return void
     */
    public function testSetCodeClientFact(): void {

        $obj = new GroupesClient();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new GroupesClient();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeLangueDesignationArticle()
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new GroupesClient();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Test setCodeReglement()
     *
     * @return void
     */
    public function testSetCodeReglement(): void {

        $obj = new GroupesClient();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new GroupesClient();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new GroupesClient();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Test setCollectif()
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new GroupesClient();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Test setDateEntree()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new GroupesClient();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Test setDateSortie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new GroupesClient();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Test setDomiciliationBancaire1()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new GroupesClient();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Test setDomiciliationBancaire2()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new GroupesClient();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Test setEcheanceFinDecade()
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new GroupesClient();

        $obj->setEcheanceFinDecade(true);
        $this->assertTrue($obj->getEcheanceFinDecade());
    }

    /**
     * Test setFactureEuros()
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new GroupesClient();

        $obj->setFactureEuros(true);
        $this->assertTrue($obj->getFactureEuros());
    }

    /**
     * Test setGroupe()
     *
     * @return void
     */
    public function testSetGroupe(): void {

        $obj = new GroupesClient();

        $obj->setGroupe("groupe");
        $this->assertEquals("groupe", $obj->getGroupe());
    }

    /**
     * Test setNbBl()
     *
     * @return void
     */
    public function testSetNbBl(): void {

        $obj = new GroupesClient();

        $obj->setNbBl(10);
        $this->assertEquals(10, $obj->getNbBl());
    }

    /**
     * Test setNbFacture()
     *
     * @return void
     */
    public function testSetNbFacture(): void {

        $obj = new GroupesClient();

        $obj->setNbFacture(10);
        $this->assertEquals(10, $obj->getNbFacture());
    }

    /**
     * Test setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new GroupesClient();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new GroupesClient();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setPaiementDepartLe()
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new GroupesClient();

        $obj->setPaiementDepartLe("paiementDepartLe");
        $this->assertEquals("paiementDepartLe", $obj->getPaiementDepartLe());
    }

    /**
     * Test setPaiementLe()
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new GroupesClient();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Test setPaiementNombreDeJours()
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new GroupesClient();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Test setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new GroupesClient();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Test setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new GroupesClient();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Test setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new GroupesClient();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Test setRemisePied()
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new GroupesClient();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Test setRemisePied2()
     *
     * @return void
     */
    public function testSetRemisePied2(): void {

        $obj = new GroupesClient();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Test setRemisePied3()
     *
     * @return void
     */
    public function testSetRemisePied3(): void {

        $obj = new GroupesClient();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new GroupesClient();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new GroupesClient();

        $obj->setSoumisEscompte(true);
        $this->assertTrue($obj->getSoumisEscompte());
    }

    /**
     * Test setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new GroupesClient();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Test setTypeFacture()
     *
     * @return void
     */
    public function testSetTypeFacture(): void {

        $obj = new GroupesClient();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new GroupesClient();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getClientPerdu());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getGroupe());
        $this->assertNull($obj->getNbBl());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTypeFacture());
    }
}
