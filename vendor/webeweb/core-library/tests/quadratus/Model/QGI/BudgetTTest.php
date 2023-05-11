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
use WBW\Library\Quadratus\Model\QGI\BudgetT;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Budget t test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class BudgetTTest extends AbstractTestCase {

    /**
     * Test setCodeAssistantJuridique()
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique(): void {

        $obj = new BudgetT();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Test setCodeAssistantSocial()
     *
     * @return void
     */
    public function testSetCodeAssistantSocial(): void {

        $obj = new BudgetT();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Test setCodeAutre1()
     *
     * @return void
     */
    public function testSetCodeAutre1(): void {

        $obj = new BudgetT();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Test setCodeAutre2()
     *
     * @return void
     */
    public function testSetCodeAutre2(): void {

        $obj = new BudgetT();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BudgetT();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new BudgetT();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeExpert()
     *
     * @return void
     */
    public function testSetCodeExpert(): void {

        $obj = new BudgetT();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Test setCodeMission()
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new BudgetT();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Test setCodePortefeuille()
     *
     * @return void
     */
    public function testSetCodePortefeuille(): void {

        $obj = new BudgetT();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Test setCollabAuteur()
     *
     * @return void
     */
    public function testSetCollabAuteur(): void {

        $obj = new BudgetT();

        $obj->setCollabAuteur("collabAuteur");
        $this->assertEquals("collabAuteur", $obj->getCollabAuteur());
    }

    /**
     * Test setCollabValideur()
     *
     * @return void
     */
    public function testSetCollabValideur(): void {

        $obj = new BudgetT();

        $obj->setCollabValideur("collabValideur");
        $this->assertEquals("collabValideur", $obj->getCollabValideur());
    }

    /**
     * Test setComment1()
     *
     * @return void
     */
    public function testSetComment1(): void {

        $obj = new BudgetT();

        $obj->setComment1("comment1");
        $this->assertEquals("comment1", $obj->getComment1());
    }

    /**
     * Test setComment2()
     *
     * @return void
     */
    public function testSetComment2(): void {

        $obj = new BudgetT();

        $obj->setComment2("comment2");
        $this->assertEquals("comment2", $obj->getComment2());
    }

    /**
     * Test setComment3()
     *
     * @return void
     */
    public function testSetComment3(): void {

        $obj = new BudgetT();

        $obj->setComment3("comment3");
        $this->assertEquals("comment3", $obj->getComment3());
    }

    /**
     * Test setComment4()
     *
     * @return void
     */
    public function testSetComment4(): void {

        $obj = new BudgetT();

        $obj->setComment4("comment4");
        $this->assertEquals("comment4", $obj->getComment4());
    }

    /**
     * Test setComment5()
     *
     * @return void
     */
    public function testSetComment5(): void {

        $obj = new BudgetT();

        $obj->setComment5("comment5");
        $this->assertEquals("comment5", $obj->getComment5());
    }

    /**
     * Test setComment6()
     *
     * @return void
     */
    public function testSetComment6(): void {

        $obj = new BudgetT();

        $obj->setComment6("comment6");
        $this->assertEquals("comment6", $obj->getComment6());
    }

    /**
     * Test setComment7()
     *
     * @return void
     */
    public function testSetComment7(): void {

        $obj = new BudgetT();

        $obj->setComment7("comment7");
        $this->assertEquals("comment7", $obj->getComment7());
    }

    /**
     * Test setDateDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new BudgetT();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Test setDateValid()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateValid(): void {

        // Set a Date/time mock.
        $dateValid = new DateTime("2018-09-10");

        $obj = new BudgetT();

        $obj->setDateValid($dateValid);
        $this->assertSame($dateValid, $obj->getDateValid());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new BudgetT();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Test setHonoPrev()
     *
     * @return void
     */
    public function testSetHonoPrev(): void {

        $obj = new BudgetT();

        $obj->setHonoPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getHonoPrev());
    }

    /**
     * Test setLibelle1()
     *
     * @return void
     */
    public function testSetLibelle1(): void {

        $obj = new BudgetT();

        $obj->setLibelle1("libelle1");
        $this->assertEquals("libelle1", $obj->getLibelle1());
    }

    /**
     * Test setLibelle2()
     *
     * @return void
     */
    public function testSetLibelle2(): void {

        $obj = new BudgetT();

        $obj->setLibelle2("libelle2");
        $this->assertEquals("libelle2", $obj->getLibelle2());
    }

    /**
     * Test setLibelle3()
     *
     * @return void
     */
    public function testSetLibelle3(): void {

        $obj = new BudgetT();

        $obj->setLibelle3("libelle3");
        $this->assertEquals("libelle3", $obj->getLibelle3());
    }

    /**
     * Test setLibelle4()
     *
     * @return void
     */
    public function testSetLibelle4(): void {

        $obj = new BudgetT();

        $obj->setLibelle4("libelle4");
        $this->assertEquals("libelle4", $obj->getLibelle4());
    }

    /**
     * Test setLibelle5()
     *
     * @return void
     */
    public function testSetLibelle5(): void {

        $obj = new BudgetT();

        $obj->setLibelle5("libelle5");
        $this->assertEquals("libelle5", $obj->getLibelle5());
    }

    /**
     * Test setLibelle6()
     *
     * @return void
     */
    public function testSetLibelle6(): void {

        $obj = new BudgetT();

        $obj->setLibelle6("libelle6");
        $this->assertEquals("libelle6", $obj->getLibelle6());
    }

    /**
     * Test setLibelle7()
     *
     * @return void
     */
    public function testSetLibelle7(): void {

        $obj = new BudgetT();

        $obj->setLibelle7("libelle7");
        $this->assertEquals("libelle7", $obj->getLibelle7());
    }

    /**
     * Test setNbrBulletins()
     *
     * @return void
     */
    public function testSetNbrBulletins(): void {

        $obj = new BudgetT();

        $obj->setNbrBulletins(10);
        $this->assertEquals(10, $obj->getNbrBulletins());
    }

    /**
     * Test setNbrEcritures()
     *
     * @return void
     */
    public function testSetNbrEcritures(): void {

        $obj = new BudgetT();

        $obj->setNbrEcritures(10);
        $this->assertEquals(10, $obj->getNbrEcritures());
    }

    /**
     * Test setNbrHeures()
     *
     * @return void
     */
    public function testSetNbrHeures(): void {

        $obj = new BudgetT();

        $obj->setNbrHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbrHeures());
    }

    /**
     * Test setPrix1()
     *
     * @return void
     */
    public function testSetPrix1(): void {

        $obj = new BudgetT();

        $obj->setPrix1(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix1());
    }

    /**
     * Test setPrix2()
     *
     * @return void
     */
    public function testSetPrix2(): void {

        $obj = new BudgetT();

        $obj->setPrix2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix2());
    }

    /**
     * Test setPrix3()
     *
     * @return void
     */
    public function testSetPrix3(): void {

        $obj = new BudgetT();

        $obj->setPrix3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix3());
    }

    /**
     * Test setPrix4()
     *
     * @return void
     */
    public function testSetPrix4(): void {

        $obj = new BudgetT();

        $obj->setPrix4(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix4());
    }

    /**
     * Test setPrix5()
     *
     * @return void
     */
    public function testSetPrix5(): void {

        $obj = new BudgetT();

        $obj->setPrix5(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix5());
    }

    /**
     * Test setPrix6()
     *
     * @return void
     */
    public function testSetPrix6(): void {

        $obj = new BudgetT();

        $obj->setPrix6(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix6());
    }

    /**
     * Test setPrix7()
     *
     * @return void
     */
    public function testSetPrix7(): void {

        $obj = new BudgetT();

        $obj->setPrix7(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix7());
    }

    /**
     * Test setSaisieTache()
     *
     * @return void
     */
    public function testSetSaisieTache(): void {

        $obj = new BudgetT();

        $obj->setSaisieTache(true);
        $this->assertTrue($obj->getSaisieTache());
    }

    /**
     * Test setTypeSuivi()
     *
     * @return void
     */
    public function testSetTypeSuivi(): void {

        $obj = new BudgetT();

        $obj->setTypeSuivi("typeSuivi");
        $this->assertEquals("typeSuivi", $obj->getTypeSuivi());
    }

    /**
     * Test setValoRecap()
     *
     * @return void
     */
    public function testSetValoRecap(): void {

        $obj = new BudgetT();

        $obj->setValoRecap(10);
        $this->assertEquals(10, $obj->getValoRecap());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BudgetT();

        $this->assertNull($obj->getCodeAssistantJuridique());
        $this->assertNull($obj->getCodeAssistantSocial());
        $this->assertNull($obj->getCodeAutre1());
        $this->assertNull($obj->getCodeAutre2());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeExpert());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodePortefeuille());
        $this->assertNull($obj->getCollabAuteur());
        $this->assertNull($obj->getCollabValideur());
        $this->assertNull($obj->getComment1());
        $this->assertNull($obj->getComment2());
        $this->assertNull($obj->getComment3());
        $this->assertNull($obj->getComment4());
        $this->assertNull($obj->getComment5());
        $this->assertNull($obj->getComment6());
        $this->assertNull($obj->getComment7());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateValid());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHonoPrev());
        $this->assertNull($obj->getLibelle1());
        $this->assertNull($obj->getLibelle2());
        $this->assertNull($obj->getLibelle3());
        $this->assertNull($obj->getLibelle4());
        $this->assertNull($obj->getLibelle5());
        $this->assertNull($obj->getLibelle6());
        $this->assertNull($obj->getLibelle7());
        $this->assertNull($obj->getNbrBulletins());
        $this->assertNull($obj->getNbrEcritures());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getPrix1());
        $this->assertNull($obj->getPrix2());
        $this->assertNull($obj->getPrix3());
        $this->assertNull($obj->getPrix4());
        $this->assertNull($obj->getPrix5());
        $this->assertNull($obj->getPrix6());
        $this->assertNull($obj->getPrix7());
        $this->assertNull($obj->getSaisieTache());
        $this->assertNull($obj->getTypeSuivi());
        $this->assertNull($obj->getValoRecap());
    }
}
