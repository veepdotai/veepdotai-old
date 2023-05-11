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

use WBW\Library\Quadratus\Model\QGI\StatsPersoSuiviClientCols;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Stats perso suivi client cols test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class StatsPersoSuiviClientColsTest extends AbstractTestCase {

    /**
     * Test setAnN()
     *
     * @return void
     */
    public function testSetAnN(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setAnN("anN");
        $this->assertEquals("anN", $obj->getAnN());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setRegleAutres()
     *
     * @return void
     */
    public function testSetRegleAutres(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleAutres("regleAutres");
        $this->assertEquals("regleAutres", $obj->getRegleAutres());
    }

    /**
     * Test setRegleBarn()
     *
     * @return void
     */
    public function testSetRegleBarn(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBarn("regleBarn");
        $this->assertEquals("regleBarn", $obj->getRegleBarn());
    }

    /**
     * Test setRegleBars()
     *
     * @return void
     */
    public function testSetRegleBars(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBars("regleBars");
        $this->assertEquals("regleBars", $obj->getRegleBars());
    }

    /**
     * Test setRegleBicrn()
     *
     * @return void
     */
    public function testSetRegleBicrn(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBicrn("regleBicrn");
        $this->assertEquals("regleBicrn", $obj->getRegleBicrn());
    }

    /**
     * Test setRegleBicrs()
     *
     * @return void
     */
    public function testSetRegleBicrs(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBicrs("regleBicrs");
        $this->assertEquals("regleBicrs", $obj->getRegleBicrs());
    }

    /**
     * Test setRegleBnc()
     *
     * @return void
     */
    public function testSetRegleBnc(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleBnc("regleBnc");
        $this->assertEquals("regleBnc", $obj->getRegleBnc());
    }

    /**
     * Test setRegleSci()
     *
     * @return void
     */
    public function testSetRegleSci(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleSci("regleSci");
        $this->assertEquals("regleSci", $obj->getRegleSci());
    }

    /**
     * Test setRegleScm()
     *
     * @return void
     */
    public function testSetRegleScm(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleScm("regleScm");
        $this->assertEquals("regleScm", $obj->getRegleScm());
    }

    /**
     * Test setRegleTous()
     *
     * @return void
     */
    public function testSetRegleTous(): void {

        $obj = new StatsPersoSuiviClientCols();

        $obj->setRegleTous("regleTous");
        $this->assertEquals("regleTous", $obj->getRegleTous());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new StatsPersoSuiviClientCols();

        $this->assertNull($obj->getAnN());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getRegleAutres());
        $this->assertNull($obj->getRegleBarn());
        $this->assertNull($obj->getRegleBars());
        $this->assertNull($obj->getRegleBicrn());
        $this->assertNull($obj->getRegleBicrs());
        $this->assertNull($obj->getRegleBnc());
        $this->assertNull($obj->getRegleSci());
        $this->assertNull($obj->getRegleScm());
        $this->assertNull($obj->getRegleTous());
    }
}
