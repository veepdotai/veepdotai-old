<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\FichesConfidentialitesMenus;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches confidentialites menus test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class FichesConfidentialitesMenusTest extends AbstractTestCase {

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setDroitAjout()
     *
     * @return void
     */
    public function testSetDroitAjout(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setDroitAjout(true);
        $this->assertTrue($obj->getDroitAjout());
    }

    /**
     * Test setDroitModification()
     *
     * @return void
     */
    public function testSetDroitModification(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setDroitModification(true);
        $this->assertTrue($obj->getDroitModification());
    }

    /**
     * Test setDroitSuppression()
     *
     * @return void
     */
    public function testSetDroitSuppression(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setDroitSuppression(true);
        $this->assertTrue($obj->getDroitSuppression());
    }

    /**
     * Test setIndex()
     *
     * @return void
     */
    public function testSetIndex(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndex(10);
        $this->assertEquals(10, $obj->getIndex());
    }

    /**
     * Test setIndexDuPereNo1()
     *
     * @return void
     */
    public function testSetIndexDuPereNo1(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo1(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo1());
    }

    /**
     * Test setIndexDuPereNo2()
     *
     * @return void
     */
    public function testSetIndexDuPereNo2(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo2(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo2());
    }

    /**
     * Test setIndexDuPereNo3()
     *
     * @return void
     */
    public function testSetIndexDuPereNo3(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo3(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo3());
    }

    /**
     * Test setIndexDuPereNo4()
     *
     * @return void
     */
    public function testSetIndexDuPereNo4(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo4(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo4());
    }

    /**
     * Test setIndexDuPereNo5()
     *
     * @return void
     */
    public function testSetIndexDuPereNo5(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo5(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo5());
    }

    /**
     * Test setIndexDuPereNo6()
     *
     * @return void
     */
    public function testSetIndexDuPereNo6(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo6(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo6());
    }

    /**
     * Test setIndexDuPereNo7()
     *
     * @return void
     */
    public function testSetIndexDuPereNo7(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setIndexDuPereNo7(10);
        $this->assertEquals(10, $obj->getIndexDuPereNo7());
    }

    /**
     * Test setLibelleMenu()
     *
     * @return void
     */
    public function testSetLibelleMenu(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setLibelleMenu("libelleMenu");
        $this->assertEquals("libelleMenu", $obj->getLibelleMenu());
    }

    /**
     * Test setMenuVisible()
     *
     * @return void
     */
    public function testSetMenuVisible(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setMenuVisible(true);
        $this->assertTrue($obj->getMenuVisible());
    }

    /**
     * Test setMotDePasse()
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Test setNiveauLigne()
     *
     * @return void
     */
    public function testSetNiveauLigne(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNiveauLigne("niveauLigne");
        $this->assertEquals("niveauLigne", $obj->getNiveauLigne());
    }

    /**
     * Test setNomDuPereNo1()
     *
     * @return void
     */
    public function testSetNomDuPereNo1(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo1("nomDuPereNo1");
        $this->assertEquals("nomDuPereNo1", $obj->getNomDuPereNo1());
    }

    /**
     * Test setNomDuPereNo2()
     *
     * @return void
     */
    public function testSetNomDuPereNo2(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo2("nomDuPereNo2");
        $this->assertEquals("nomDuPereNo2", $obj->getNomDuPereNo2());
    }

    /**
     * Test setNomDuPereNo3()
     *
     * @return void
     */
    public function testSetNomDuPereNo3(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo3("nomDuPereNo3");
        $this->assertEquals("nomDuPereNo3", $obj->getNomDuPereNo3());
    }

    /**
     * Test setNomDuPereNo4()
     *
     * @return void
     */
    public function testSetNomDuPereNo4(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo4("nomDuPereNo4");
        $this->assertEquals("nomDuPereNo4", $obj->getNomDuPereNo4());
    }

    /**
     * Test setNomDuPereNo5()
     *
     * @return void
     */
    public function testSetNomDuPereNo5(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo5("nomDuPereNo5");
        $this->assertEquals("nomDuPereNo5", $obj->getNomDuPereNo5());
    }

    /**
     * Test setNomDuPereNo6()
     *
     * @return void
     */
    public function testSetNomDuPereNo6(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo6("nomDuPereNo6");
        $this->assertEquals("nomDuPereNo6", $obj->getNomDuPereNo6());
    }

    /**
     * Test setNomDuPereNo7()
     *
     * @return void
     */
    public function testSetNomDuPereNo7(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomDuPereNo7("nomDuPereNo7");
        $this->assertEquals("nomDuPereNo7", $obj->getNomDuPereNo7());
    }

    /**
     * Test setNomMenu()
     *
     * @return void
     */
    public function testSetNomMenu(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setNomMenu("nomMenu");
        $this->assertEquals("nomMenu", $obj->getNomMenu());
    }

    /**
     * Test setTypeSelection()
     *
     * @return void
     */
    public function testSetTypeSelection(): void {

        $obj = new FichesConfidentialitesMenus();

        $obj->setTypeSelection("typeSelection");
        $this->assertEquals("typeSelection", $obj->getTypeSelection());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesConfidentialitesMenus();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDroitAjout());
        $this->assertNull($obj->getDroitModification());
        $this->assertNull($obj->getDroitSuppression());
        $this->assertNull($obj->getIndex());
        $this->assertNull($obj->getIndexDuPereNo1());
        $this->assertNull($obj->getIndexDuPereNo2());
        $this->assertNull($obj->getIndexDuPereNo3());
        $this->assertNull($obj->getIndexDuPereNo4());
        $this->assertNull($obj->getIndexDuPereNo5());
        $this->assertNull($obj->getIndexDuPereNo6());
        $this->assertNull($obj->getIndexDuPereNo7());
        $this->assertNull($obj->getLibelleMenu());
        $this->assertNull($obj->getMenuVisible());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNomDuPereNo1());
        $this->assertNull($obj->getNomDuPereNo2());
        $this->assertNull($obj->getNomDuPereNo3());
        $this->assertNull($obj->getNomDuPereNo4());
        $this->assertNull($obj->getNomDuPereNo5());
        $this->assertNull($obj->getNomDuPereNo6());
        $this->assertNull($obj->getNomDuPereNo7());
        $this->assertNull($obj->getNomMenu());
        $this->assertNull($obj->getTypeSelection());
    }
}
