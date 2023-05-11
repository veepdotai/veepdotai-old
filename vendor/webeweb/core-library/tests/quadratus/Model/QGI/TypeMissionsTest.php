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
use WBW\Library\Quadratus\Model\QGI\TypeMissions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Type missions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TypeMissionsTest extends AbstractTestCase {

    /**
     * Test setArticle()
     *
     * @return void
     */
    public function testSetArticle(): void {

        $obj = new TypeMissions();

        $obj->setArticle("article");
        $this->assertEquals("article", $obj->getArticle());
    }

    /**
     * Test setCentreAnalytique()
     *
     * @return void
     */
    public function testSetCentreAnalytique(): void {

        $obj = new TypeMissions();

        $obj->setCentreAnalytique("centreAnalytique");
        $this->assertEquals("centreAnalytique", $obj->getCentreAnalytique());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new TypeMissions();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeFamille()
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new TypeMissions();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Test setCodeResponsable()
     *
     * @return void
     */
    public function testSetCodeResponsable(): void {

        $obj = new TypeMissions();

        $obj->setCodeResponsable("codeResponsable");
        $this->assertEquals("codeResponsable", $obj->getCodeResponsable());
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

        $obj = new TypeMissions();

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

        $obj = new TypeMissions();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDecalageFermetureAuto()
     *
     * @return void
     */
    public function testSetDecalageFermetureAuto(): void {

        $obj = new TypeMissions();

        $obj->setDecalageFermetureAuto(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAuto());
    }

    /**
     * Test setDecalageFermetureAutoJours()
     *
     * @return void
     */
    public function testSetDecalageFermetureAutoJours(): void {

        $obj = new TypeMissions();

        $obj->setDecalageFermetureAutoJours(10);
        $this->assertEquals(10, $obj->getDecalageFermetureAutoJours());
    }

    /**
     * Test setDecalageOuvertureAuto()
     *
     * @return void
     */
    public function testSetDecalageOuvertureAuto(): void {

        $obj = new TypeMissions();

        $obj->setDecalageOuvertureAuto(10);
        $this->assertEquals(10, $obj->getDecalageOuvertureAuto());
    }

    /**
     * Test setDescriptif()
     *
     * @return void
     */
    public function testSetDescriptif(): void {

        $obj = new TypeMissions();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Test setDescriptifRtf()
     *
     * @return void
     */
    public function testSetDescriptifRtf(): void {

        $obj = new TypeMissions();

        $obj->setDescriptifRtf("descriptifRtf");
        $this->assertEquals("descriptifRtf", $obj->getDescriptifRtf());
    }

    /**
     * Test setFermetureAuto()
     *
     * @return void
     */
    public function testSetFermetureAuto(): void {

        $obj = new TypeMissions();

        $obj->setFermetureAuto(true);
        $this->assertTrue($obj->getFermetureAuto());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TypeMissions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMoisOuvertureAuto()
     *
     * @return void
     */
    public function testSetMoisOuvertureAuto(): void {

        $obj = new TypeMissions();

        $obj->setMoisOuvertureAuto(10);
        $this->assertEquals(10, $obj->getMoisOuvertureAuto());
    }

    /**
     * Test setOrdre()
     *
     * @return void
     */
    public function testSetOrdre(): void {

        $obj = new TypeMissions();

        $obj->setOrdre(10);
        $this->assertEquals(10, $obj->getOrdre());
    }

    /**
     * Test setRecurrente()
     *
     * @return void
     */
    public function testSetRecurrente(): void {

        $obj = new TypeMissions();

        $obj->setRecurrente(true);
        $this->assertTrue($obj->getRecurrente());
    }

    /**
     * Test setTachesGroupe()
     *
     * @return void
     */
    public function testSetTachesGroupe(): void {

        $obj = new TypeMissions();

        $obj->setTachesGroupe("tachesGroupe");
        $this->assertEquals("tachesGroupe", $obj->getTachesGroupe());
    }

    /**
     * Test setTransfertCentre()
     *
     * @return void
     */
    public function testSetTransfertCentre(): void {

        $obj = new TypeMissions();

        $obj->setTransfertCentre(true);
        $this->assertTrue($obj->getTransfertCentre());
    }

    /**
     * Test setTypeCentre()
     *
     * @return void
     */
    public function testSetTypeCentre(): void {

        $obj = new TypeMissions();

        $obj->setTypeCentre("typeCentre");
        $this->assertEquals("typeCentre", $obj->getTypeCentre());
    }

    /**
     * Test setTypeCompteur()
     *
     * @return void
     */
    public function testSetTypeCompteur(): void {

        $obj = new TypeMissions();

        $obj->setTypeCompteur(true);
        $this->assertTrue($obj->getTypeCompteur());
    }

    /**
     * Test setTypeResponsable()
     *
     * @return void
     */
    public function testSetTypeResponsable(): void {

        $obj = new TypeMissions();

        $obj->setTypeResponsable("typeResponsable");
        $this->assertEquals("typeResponsable", $obj->getTypeResponsable());
    }

    /**
     * Test setTypeVisuTaches()
     *
     * @return void
     */
    public function testSetTypeVisuTaches(): void {

        $obj = new TypeMissions();

        $obj->setTypeVisuTaches("typeVisuTaches");
        $this->assertEquals("typeVisuTaches", $obj->getTypeVisuTaches());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TypeMissions();

        $this->assertNull($obj->getArticle());
        $this->assertNull($obj->getCentreAnalytique());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeResponsable());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDecalageFermetureAuto());
        $this->assertNull($obj->getDecalageFermetureAutoJours());
        $this->assertNull($obj->getDecalageOuvertureAuto());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDescriptifRtf());
        $this->assertNull($obj->getFermetureAuto());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMoisOuvertureAuto());
        $this->assertNull($obj->getOrdre());
        $this->assertNull($obj->getRecurrente());
        $this->assertNull($obj->getTachesGroupe());
        $this->assertNull($obj->getTransfertCentre());
        $this->assertNull($obj->getTypeCentre());
        $this->assertNull($obj->getTypeCompteur());
        $this->assertNull($obj->getTypeResponsable());
        $this->assertNull($obj->getTypeVisuTaches());
    }
}
