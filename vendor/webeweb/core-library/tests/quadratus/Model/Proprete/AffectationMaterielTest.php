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
use WBW\Library\Quadratus\Model\Proprete\AffectationMateriel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affectation materiel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AffectationMaterielTest extends AbstractTestCase {

    /**
     * Test setBudgetDepenseEuro()
     *
     * @return void
     */
    public function testSetBudgetDepenseEuro(): void {

        $obj = new AffectationMateriel();

        $obj->setBudgetDepenseEuro(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetDepenseEuro());
    }

    /**
     * Test setBudgetDepenseFrf()
     *
     * @return void
     */
    public function testSetBudgetDepenseFrf(): void {

        $obj = new AffectationMateriel();

        $obj->setBudgetDepenseFrf(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetDepenseFrf());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffectationMateriel();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new AffectationMateriel();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new AffectationMateriel();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeMateriel()
     *
     * @return void
     */
    public function testSetCodeMateriel(): void {

        $obj = new AffectationMateriel();

        $obj->setCodeMateriel("codeMateriel");
        $this->assertEquals("codeMateriel", $obj->getCodeMateriel());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new AffectationMateriel();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setDebutAffect()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutAffect(): void {

        // Set a Date/time mock.
        $debutAffect = new DateTime("2018-09-10");

        $obj = new AffectationMateriel();

        $obj->setDebutAffect($debutAffect);
        $this->assertSame($debutAffect, $obj->getDebutAffect());
    }

    /**
     * Test setFinAffect()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinAffect(): void {

        // Set a Date/time mock.
        $finAffect = new DateTime("2018-09-10");

        $obj = new AffectationMateriel();

        $obj->setFinAffect($finAffect);
        $this->assertSame($finAffect, $obj->getFinAffect());
    }

    /**
     * Test setPourcentUtilise()
     *
     * @return void
     */
    public function testSetPourcentUtilise(): void {

        $obj = new AffectationMateriel();

        $obj->setPourcentUtilise(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentUtilise());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffectationMateriel();

        $this->assertNull($obj->getBudgetDepenseEuro());
        $this->assertNull($obj->getBudgetDepenseFrf());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeMateriel());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDebutAffect());
        $this->assertNull($obj->getFinAffect());
        $this->assertNull($obj->getPourcentUtilise());
    }
}
