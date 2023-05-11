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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\DecTvaCa12;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva ca12 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTvaCa12Test extends AbstractTestCase {

    /**
     * Test setDateCession()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCession(): void {

        // Set a Date/time mock.
        $dateCession = new DateTime("2018-09-10");

        $obj = new DecTvaCa12();

        $obj->setDateCession($dateCession);
        $this->assertSame($dateCession, $obj->getDateCession());
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

        $obj = new DecTvaCa12();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setTxImposition()
     *
     * @return void
     */
    public function testSetTxImposition(): void {

        $obj = new DecTvaCa12();

        $obj->setTxImposition(10.092018);
        $this->assertEquals(10.092018, $obj->getTxImposition());
    }

    /**
     * Test setTypeCa12()
     *
     * @return void
     */
    public function testSetTypeCa12(): void {

        $obj = new DecTvaCa12();

        $obj->setTypeCa12("typeCa12");
        $this->assertEquals("typeCa12", $obj->getTypeCa12());
    }

    /**
     * Test setz0008()
     *
     * @return void
     */
    public function testSetz0008(): void {

        $obj = new DecTvaCa12();

        $obj->setz0008(10.092018);
        $this->assertEquals(10.092018, $obj->getz0008());
    }

    /**
     * Test setz0018()
     *
     * @return void
     */
    public function testSetz0018(): void {

        $obj = new DecTvaCa12();

        $obj->setz0018(10.092018);
        $this->assertEquals(10.092018, $obj->getz0018());
    }

    /**
     * Test setz0019()
     *
     * @return void
     */
    public function testSetz0019(): void {

        $obj = new DecTvaCa12();

        $obj->setz0019(10.092018);
        $this->assertEquals(10.092018, $obj->getz0019());
    }

    /**
     * Test setz0020()
     *
     * @return void
     */
    public function testSetz0020(): void {

        $obj = new DecTvaCa12();

        $obj->setz0020(10.092018);
        $this->assertEquals(10.092018, $obj->getz0020());
    }

    /**
     * Test setz0028()
     *
     * @return void
     */
    public function testSetz0028(): void {

        $obj = new DecTvaCa12();

        $obj->setz0028(10.092018);
        $this->assertEquals(10.092018, $obj->getz0028());
    }

    /**
     * Test setz0030b()
     *
     * @return void
     */
    public function testSetz0030b(): void {

        $obj = new DecTvaCa12();

        $obj->setz0030b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0030b());
    }

    /**
     * Test setz0058()
     *
     * @return void
     */
    public function testSetz0058(): void {

        $obj = new DecTvaCa12();

        $obj->setz0058(10.092018);
        $this->assertEquals(10.092018, $obj->getz0058());
    }

    /**
     * Test setz0704()
     *
     * @return void
     */
    public function testSetz0704(): void {

        $obj = new DecTvaCa12();

        $obj->setz0704(10.092018);
        $this->assertEquals(10.092018, $obj->getz0704());
    }

    /**
     * Test setz0709()
     *
     * @return void
     */
    public function testSetz0709(): void {

        $obj = new DecTvaCa12();

        $obj->setz0709(10.092018);
        $this->assertEquals(10.092018, $obj->getz0709());
    }

    /**
     * Test setz0970()
     *
     * @return void
     */
    public function testSetz0970(): void {

        $obj = new DecTvaCa12();

        $obj->setz0970(10.092018);
        $this->assertEquals(10.092018, $obj->getz0970());
    }

    /**
     * Test setz0970b()
     *
     * @return void
     */
    public function testSetz0970b(): void {

        $obj = new DecTvaCa12();

        $obj->setz0970b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0970b());
    }

    /**
     * Test setz0980()
     *
     * @return void
     */
    public function testSetz0980(): void {

        $obj = new DecTvaCa12();

        $obj->setz0980(10.092018);
        $this->assertEquals(10.092018, $obj->getz0980());
    }

    /**
     * Test setz0980b()
     *
     * @return void
     */
    public function testSetz0980b(): void {

        $obj = new DecTvaCa12();

        $obj->setz0980b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0980b());
    }

    /**
     * Test setz0981()
     *
     * @return void
     */
    public function testSetz0981(): void {

        $obj = new DecTvaCa12();

        $obj->setz0981(10.092018);
        $this->assertEquals(10.092018, $obj->getz0981());
    }

    /**
     * Test setz0981b()
     *
     * @return void
     */
    public function testSetz0981b(): void {

        $obj = new DecTvaCa12();

        $obj->setz0981b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0981b());
    }

    /**
     * Test setz0982()
     *
     * @return void
     */
    public function testSetz0982(): void {

        $obj = new DecTvaCa12();

        $obj->setz0982(10.092018);
        $this->assertEquals(10.092018, $obj->getz0982());
    }

    /**
     * Test setz0983()
     *
     * @return void
     */
    public function testSetz0983(): void {

        $obj = new DecTvaCa12();

        $obj->setz0983(10.092018);
        $this->assertEquals(10.092018, $obj->getz0983());
    }

    /**
     * Test setz3240()
     *
     * @return void
     */
    public function testSetz3240(): void {

        $obj = new DecTvaCa12();

        $obj->setz3240(10.092018);
        $this->assertEquals(10.092018, $obj->getz3240());
    }

    /**
     * Test setz32Code()
     *
     * @return void
     */
    public function testSetz32Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz32Code("z32Code");
        $this->assertEquals("z32Code", $obj->getz32Code());
    }

    /**
     * Test setz32Libelle()
     *
     * @return void
     */
    public function testSetz32Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz32Libelle("z32Libelle");
        $this->assertEquals("z32Libelle", $obj->getz32Libelle());
    }

    /**
     * Test setz32Taxe()
     *
     * @return void
     */
    public function testSetz32Taxe(): void {

        $obj = new DecTvaCa12();

        $obj->setz32Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz32Taxe());
    }

    /**
     * Test setz35BCode()
     *
     * @return void
     */
    public function testSetz35BCode(): void {

        $obj = new DecTvaCa12();

        $obj->setz35BCode("z35BCode");
        $this->assertEquals("z35BCode", $obj->getz35BCode());
    }

    /**
     * Test setz35BLibelle()
     *
     * @return void
     */
    public function testSetz35BLibelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz35BLibelle("z35BLibelle");
        $this->assertEquals("z35BLibelle", $obj->getz35BLibelle());
    }

    /**
     * Test setz35BTaxe()
     *
     * @return void
     */
    public function testSetz35BTaxe(): void {

        $obj = new DecTvaCa12();

        $obj->setz35BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz35BTaxe());
    }

    /**
     * Test setz35Code()
     *
     * @return void
     */
    public function testSetz35Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz35Code("z35Code");
        $this->assertEquals("z35Code", $obj->getz35Code());
    }

    /**
     * Test setz35Libelle()
     *
     * @return void
     */
    public function testSetz35Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz35Libelle("z35Libelle");
        $this->assertEquals("z35Libelle", $obj->getz35Libelle());
    }

    /**
     * Test setz35Taxe()
     *
     * @return void
     */
    public function testSetz35Taxe(): void {

        $obj = new DecTvaCa12();

        $obj->setz35Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz35Taxe());
    }

    /**
     * Test setz4202()
     *
     * @return void
     */
    public function testSetz4202(): void {

        $obj = new DecTvaCa12();

        $obj->setz4202(10.092018);
        $this->assertEquals(10.092018, $obj->getz4202());
    }

    /**
     * Test setz4213()
     *
     * @return void
     */
    public function testSetz4213(): void {

        $obj = new DecTvaCa12();

        $obj->setz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getz4213());
    }

    /**
     * Test setz4216()
     *
     * @return void
     */
    public function testSetz4216(): void {

        $obj = new DecTvaCa12();

        $obj->setz4216(10.092018);
        $this->assertEquals(10.092018, $obj->getz4216());
    }

    /**
     * Test setz4217()
     *
     * @return void
     */
    public function testSetz4217(): void {

        $obj = new DecTvaCa12();

        $obj->setz4217(10.092018);
        $this->assertEquals(10.092018, $obj->getz4217());
    }

    /**
     * Test setz4218()
     *
     * @return void
     */
    public function testSetz4218(): void {

        $obj = new DecTvaCa12();

        $obj->setz4218(10.092018);
        $this->assertEquals(10.092018, $obj->getz4218());
    }

    /**
     * Test setz4220()
     *
     * @return void
     */
    public function testSetz4220(): void {

        $obj = new DecTvaCa12();

        $obj->setz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getz4220());
    }

    /**
     * Test setz45Ca12()
     *
     * @return void
     */
    public function testSetz45Ca12(): void {

        $obj = new DecTvaCa12();

        $obj->setz45Ca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz45Ca12());
    }

    /**
     * Test setz45Ca12Code()
     *
     * @return void
     */
    public function testSetz45Ca12Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz45Ca12Code("z45Ca12Code");
        $this->assertEquals("z45Ca12Code", $obj->getz45Ca12Code());
    }

    /**
     * Test setz45Ca12Libelle()
     *
     * @return void
     */
    public function testSetz45Ca12Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz45Ca12Libelle("z45Ca12Libelle");
        $this->assertEquals("z45Ca12Libelle", $obj->getz45Ca12Libelle());
    }

    /**
     * Test setz47Ca12()
     *
     * @return void
     */
    public function testSetz47Ca12(): void {

        $obj = new DecTvaCa12();

        $obj->setz47Ca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz47Ca12());
    }

    /**
     * Test setz47Ca12Code()
     *
     * @return void
     */
    public function testSetz47Ca12Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz47Ca12Code("z47Ca12Code");
        $this->assertEquals("z47Ca12Code", $obj->getz47Ca12Code());
    }

    /**
     * Test setz47Ca12Libelle()
     *
     * @return void
     */
    public function testSetz47Ca12Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz47Ca12Libelle("z47Ca12Libelle");
        $this->assertEquals("z47Ca12Libelle", $obj->getz47Ca12Libelle());
    }

    /**
     * Test setz4Aca12()
     *
     * @return void
     */
    public function testSetz4Aca12(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Aca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4Aca12());
    }

    /**
     * Test setz4Aca12Code()
     *
     * @return void
     */
    public function testSetz4Aca12Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Aca12Code("z4Aca12Code");
        $this->assertEquals("z4Aca12Code", $obj->getz4Aca12Code());
    }

    /**
     * Test setz4Aca12Libelle()
     *
     * @return void
     */
    public function testSetz4Aca12Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Aca12Libelle("z4Aca12Libelle");
        $this->assertEquals("z4Aca12Libelle", $obj->getz4Aca12Libelle());
    }

    /**
     * Test setz4Bca12()
     *
     * @return void
     */
    public function testSetz4Bca12(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Bca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4Bca12());
    }

    /**
     * Test setz4Bca12Code()
     *
     * @return void
     */
    public function testSetz4Bca12Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Bca12Code("z4Bca12Code");
        $this->assertEquals("z4Bca12Code", $obj->getz4Bca12Code());
    }

    /**
     * Test setz4Bca12Libelle()
     *
     * @return void
     */
    public function testSetz4Bca12Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Bca12Libelle("z4Bca12Libelle");
        $this->assertEquals("z4Bca12Libelle", $obj->getz4Bca12Libelle());
    }

    /**
     * Test setz4Cca12()
     *
     * @return void
     */
    public function testSetz4Cca12(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Cca12(10.092018);
        $this->assertEquals(10.092018, $obj->getz4Cca12());
    }

    /**
     * Test setz4Cca12Code()
     *
     * @return void
     */
    public function testSetz4Cca12Code(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Cca12Code("z4Cca12Code");
        $this->assertEquals("z4Cca12Code", $obj->getz4Cca12Code());
    }

    /**
     * Test setz4Cca12Libelle()
     *
     * @return void
     */
    public function testSetz4Cca12Libelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz4Cca12Libelle("z4Cca12Libelle");
        $this->assertEquals("z4Cca12Libelle", $obj->getz4Cca12Libelle());
    }

    /**
     * Test setz5bCode()
     *
     * @return void
     */
    public function testSetz5bCode(): void {

        $obj = new DecTvaCa12();

        $obj->setz5bCode("z5bCode");
        $this->assertEquals("z5bCode", $obj->getz5bCode());
    }

    /**
     * Test setz5bHt()
     *
     * @return void
     */
    public function testSetz5bHt(): void {

        $obj = new DecTvaCa12();

        $obj->setz5bHt(10.092018);
        $this->assertEquals(10.092018, $obj->getz5bHt());
    }

    /**
     * Test setz5bLibelle()
     *
     * @return void
     */
    public function testSetz5bLibelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz5bLibelle("z5bLibelle");
        $this->assertEquals("z5bLibelle", $obj->getz5bLibelle());
    }

    /**
     * Test setz5bTaxe()
     *
     * @return void
     */
    public function testSetz5bTaxe(): void {

        $obj = new DecTvaCa12();

        $obj->setz5bTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz5bTaxe());
    }

    /**
     * Test setz7bCode()
     *
     * @return void
     */
    public function testSetz7bCode(): void {

        $obj = new DecTvaCa12();

        $obj->setz7bCode("z7bCode");
        $this->assertEquals("z7bCode", $obj->getz7bCode());
    }

    /**
     * Test setz7bHt()
     *
     * @return void
     */
    public function testSetz7bHt(): void {

        $obj = new DecTvaCa12();

        $obj->setz7bHt(10.092018);
        $this->assertEquals(10.092018, $obj->getz7bHt());
    }

    /**
     * Test setz7bLibelle()
     *
     * @return void
     */
    public function testSetz7bLibelle(): void {

        $obj = new DecTvaCa12();

        $obj->setz7bLibelle("z7bLibelle");
        $this->assertEquals("z7bLibelle", $obj->getz7bLibelle());
    }

    /**
     * Test setz7bTaxe()
     *
     * @return void
     */
    public function testSetz7bTaxe(): void {

        $obj = new DecTvaCa12();

        $obj->setz7bTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getz7bTaxe());
    }

    /**
     * Test setz8004()
     *
     * @return void
     */
    public function testSetz8004(): void {

        $obj = new DecTvaCa12();

        $obj->setz8004(10.092018);
        $this->assertEquals(10.092018, $obj->getz8004());
    }

    /**
     * Test setzAcompteDeduit1()
     *
     * @return void
     */
    public function testSetzAcompteDeduit1(): void {

        $obj = new DecTvaCa12();

        $obj->setzAcompteDeduit1(true);
        $this->assertTrue($obj->getzAcompteDeduit1());
    }

    /**
     * Test setzAcompteDeduit2()
     *
     * @return void
     */
    public function testSetzAcompteDeduit2(): void {

        $obj = new DecTvaCa12();

        $obj->setzAcompteDeduit2(true);
        $this->assertTrue($obj->getzAcompteDeduit2());
    }

    /**
     * Test setzAcompteDeduit3()
     *
     * @return void
     */
    public function testSetzAcompteDeduit3(): void {

        $obj = new DecTvaCa12();

        $obj->setzAcompteDeduit3(true);
        $this->assertTrue($obj->getzAcompteDeduit3());
    }

    /**
     * Test setzAcompteDeduit4()
     *
     * @return void
     */
    public function testSetzAcompteDeduit4(): void {

        $obj = new DecTvaCa12();

        $obj->setzAcompteDeduit4(true);
        $this->assertTrue($obj->getzAcompteDeduit4());
    }

    /**
     * Test setzAnneeAcompte1()
     *
     * @return void
     */
    public function testSetzAnneeAcompte1(): void {

        $obj = new DecTvaCa12();

        $obj->setzAnneeAcompte1(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte1());
    }

    /**
     * Test setzAnneeAcompte2()
     *
     * @return void
     */
    public function testSetzAnneeAcompte2(): void {

        $obj = new DecTvaCa12();

        $obj->setzAnneeAcompte2(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte2());
    }

    /**
     * Test setzAnneeAcompte3()
     *
     * @return void
     */
    public function testSetzAnneeAcompte3(): void {

        $obj = new DecTvaCa12();

        $obj->setzAnneeAcompte3(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte3());
    }

    /**
     * Test setzAnneeAcompte4()
     *
     * @return void
     */
    public function testSetzAnneeAcompte4(): void {

        $obj = new DecTvaCa12();

        $obj->setzAnneeAcompte4(10);
        $this->assertEquals(10, $obj->getzAnneeAcompte4());
    }

    /**
     * Test setzCol1Acompte1()
     *
     * @return void
     */
    public function testSetzCol1Acompte1(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol1Acompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte1());
    }

    /**
     * Test setzCol1Acompte2()
     *
     * @return void
     */
    public function testSetzCol1Acompte2(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol1Acompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte2());
    }

    /**
     * Test setzCol1Acompte3()
     *
     * @return void
     */
    public function testSetzCol1Acompte3(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol1Acompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte3());
    }

    /**
     * Test setzCol1Acompte4()
     *
     * @return void
     */
    public function testSetzCol1Acompte4(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol1Acompte4(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol1Acompte4());
    }

    /**
     * Test setzCol2Acompte1()
     *
     * @return void
     */
    public function testSetzCol2Acompte1(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol2Acompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte1());
    }

    /**
     * Test setzCol2Acompte2()
     *
     * @return void
     */
    public function testSetzCol2Acompte2(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol2Acompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte2());
    }

    /**
     * Test setzCol2Acompte3()
     *
     * @return void
     */
    public function testSetzCol2Acompte3(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol2Acompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte3());
    }

    /**
     * Test setzCol2Acompte4()
     *
     * @return void
     */
    public function testSetzCol2Acompte4(): void {

        $obj = new DecTvaCa12();

        $obj->setzCol2Acompte4(10.092018);
        $this->assertEquals(10.092018, $obj->getzCol2Acompte4());
    }

    /**
     * Test setzExcedentVersement()
     *
     * @return void
     */
    public function testSetzExcedentVersement(): void {

        $obj = new DecTvaCa12();

        $obj->setzExcedentVersement(10.092018);
        $this->assertEquals(10.092018, $obj->getzExcedentVersement());
    }

    /**
     * Test setzNomDemandeurRbt()
     *
     * @return void
     */
    public function testSetzNomDemandeurRbt(): void {

        $obj = new DecTvaCa12();

        $obj->setzNomDemandeurRbt("zNomDemandeurRbt");
        $this->assertEquals("zNomDemandeurRbt", $obj->getzNomDemandeurRbt());
    }

    /**
     * Test setzNumMsa()
     *
     * @return void
     */
    public function testSetzNumMsa(): void {

        $obj = new DecTvaCa12();

        $obj->setzNumMsa("zNumMsa");
        $this->assertEquals("zNumMsa", $obj->getzNumMsa());
    }

    /**
     * Test setzRbtDemande()
     *
     * @return void
     */
    public function testSetzRbtDemande(): void {

        $obj = new DecTvaCa12();

        $obj->setzRbtDemande(10.092018);
        $this->assertEquals(10.092018, $obj->getzRbtDemande());
    }

    /**
     * Test setzRbtQualite()
     *
     * @return void
     */
    public function testSetzRbtQualite(): void {

        $obj = new DecTvaCa12();

        $obj->setzRbtQualite("zRbtQualite");
        $this->assertEquals("zRbtQualite", $obj->getzRbtQualite());
    }

    /**
     * Test setzRbtVille()
     *
     * @return void
     */
    public function testSetzRbtVille(): void {

        $obj = new DecTvaCa12();

        $obj->setzRbtVille("zRbtVille");
        $this->assertEquals("zRbtVille", $obj->getzRbtVille());
    }

    /**
     * Test setzRbtbic()
     *
     * @return void
     */
    public function testSetzRbtbic(): void {

        $obj = new DecTvaCa12();

        $obj->setzRbtbic("zRbtbic");
        $this->assertEquals("zRbtbic", $obj->getzRbtbic());
    }

    /**
     * Test setzRbtiban()
     *
     * @return void
     */
    public function testSetzRbtiban(): void {

        $obj = new DecTvaCa12();

        $obj->setzRbtiban("zRbtiban");
        $this->assertEquals("zRbtiban", $obj->getzRbtiban());
    }

    /**
     * Test setzRbtrib()
     *
     * @return void
     */
    public function testSetzRbtrib(): void {

        $obj = new DecTvaCa12();

        $obj->setzRbtrib("zRbtrib");
        $this->assertEquals("zRbtrib", $obj->getzRbtrib());
    }

    /**
     * Test setzSoldeAPayer()
     *
     * @return void
     */
    public function testSetzSoldeAPayer(): void {

        $obj = new DecTvaCa12();

        $obj->setzSoldeAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getzSoldeAPayer());
    }

    /**
     * Test setzSurfaceAgr()
     *
     * @return void
     */
    public function testSetzSurfaceAgr(): void {

        $obj = new DecTvaCa12();

        $obj->setzSurfaceAgr(10);
        $this->assertEquals(10, $obj->getzSurfaceAgr());
    }

    /**
     * Test setzTaxesFiscales()
     *
     * @return void
     */
    public function testSetzTaxesFiscales(): void {

        $obj = new DecTvaCa12();

        $obj->setzTaxesFiscales(10.092018);
        $this->assertEquals(10.092018, $obj->getzTaxesFiscales());
    }

    /**
     * Test setzYaDemandeRbt()
     *
     * @return void
     */
    public function testSetzYaDemandeRbt(): void {

        $obj = new DecTvaCa12();

        $obj->setzYaDemandeRbt(true);
        $this->assertTrue($obj->getzYaDemandeRbt());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTvaCa12();

        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getTxImposition());
        $this->assertNull($obj->getTypeCa12());
        $this->assertNull($obj->getz0008());
        $this->assertNull($obj->getz0018());
        $this->assertNull($obj->getz0019());
        $this->assertNull($obj->getz0020());
        $this->assertNull($obj->getz0028());
        $this->assertNull($obj->getz0030b());
        $this->assertNull($obj->getz0058());
        $this->assertNull($obj->getz0704());
        $this->assertNull($obj->getz0709());
        $this->assertNull($obj->getz0970());
        $this->assertNull($obj->getz0970b());
        $this->assertNull($obj->getz0980());
        $this->assertNull($obj->getz0980b());
        $this->assertNull($obj->getz0981());
        $this->assertNull($obj->getz0981b());
        $this->assertNull($obj->getz0982());
        $this->assertNull($obj->getz0983());
        $this->assertNull($obj->getz3240());
        $this->assertNull($obj->getz32Code());
        $this->assertNull($obj->getz32Libelle());
        $this->assertNull($obj->getz32Taxe());
        $this->assertNull($obj->getz35BCode());
        $this->assertNull($obj->getz35BLibelle());
        $this->assertNull($obj->getz35BTaxe());
        $this->assertNull($obj->getz35Code());
        $this->assertNull($obj->getz35Libelle());
        $this->assertNull($obj->getz35Taxe());
        $this->assertNull($obj->getz4202());
        $this->assertNull($obj->getz4213());
        $this->assertNull($obj->getz4216());
        $this->assertNull($obj->getz4217());
        $this->assertNull($obj->getz4218());
        $this->assertNull($obj->getz4220());
        $this->assertNull($obj->getz45Ca12());
        $this->assertNull($obj->getz45Ca12Code());
        $this->assertNull($obj->getz45Ca12Libelle());
        $this->assertNull($obj->getz47Ca12());
        $this->assertNull($obj->getz47Ca12Code());
        $this->assertNull($obj->getz47Ca12Libelle());
        $this->assertNull($obj->getz4Aca12());
        $this->assertNull($obj->getz4Aca12Code());
        $this->assertNull($obj->getz4Aca12Libelle());
        $this->assertNull($obj->getz4Bca12());
        $this->assertNull($obj->getz4Bca12Code());
        $this->assertNull($obj->getz4Bca12Libelle());
        $this->assertNull($obj->getz4Cca12());
        $this->assertNull($obj->getz4Cca12Code());
        $this->assertNull($obj->getz4Cca12Libelle());
        $this->assertNull($obj->getz5bCode());
        $this->assertNull($obj->getz5bHt());
        $this->assertNull($obj->getz5bLibelle());
        $this->assertNull($obj->getz5bTaxe());
        $this->assertNull($obj->getz7bCode());
        $this->assertNull($obj->getz7bHt());
        $this->assertNull($obj->getz7bLibelle());
        $this->assertNull($obj->getz7bTaxe());
        $this->assertNull($obj->getz8004());
        $this->assertNull($obj->getzAcompteDeduit1());
        $this->assertNull($obj->getzAcompteDeduit2());
        $this->assertNull($obj->getzAcompteDeduit3());
        $this->assertNull($obj->getzAcompteDeduit4());
        $this->assertNull($obj->getzAnneeAcompte1());
        $this->assertNull($obj->getzAnneeAcompte2());
        $this->assertNull($obj->getzAnneeAcompte3());
        $this->assertNull($obj->getzAnneeAcompte4());
        $this->assertNull($obj->getzCol1Acompte1());
        $this->assertNull($obj->getzCol1Acompte2());
        $this->assertNull($obj->getzCol1Acompte3());
        $this->assertNull($obj->getzCol1Acompte4());
        $this->assertNull($obj->getzCol2Acompte1());
        $this->assertNull($obj->getzCol2Acompte2());
        $this->assertNull($obj->getzCol2Acompte3());
        $this->assertNull($obj->getzCol2Acompte4());
        $this->assertNull($obj->getzExcedentVersement());
        $this->assertNull($obj->getzNomDemandeurRbt());
        $this->assertNull($obj->getzNumMsa());
        $this->assertNull($obj->getzRbtbic());
        $this->assertNull($obj->getzRbtiban());
        $this->assertNull($obj->getzRbtQualite());
        $this->assertNull($obj->getzRbtrib());
        $this->assertNull($obj->getzRbtVille());
        $this->assertNull($obj->getzRbtDemande());
        $this->assertNull($obj->getzSoldeAPayer());
        $this->assertNull($obj->getzSurfaceAgr());
        $this->assertNull($obj->getzTaxesFiscales());
        $this->assertNull($obj->getzYaDemandeRbt());
    }
}
