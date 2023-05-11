<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\SaisiePrepaEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Saisie prepa entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class SaisiePrepaEnteteTest extends AbstractTestCase {

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setDesactive()
     *
     * @return void
     */
    public function testSetDesactive(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setDesactive(true);
        $this->assertTrue($obj->getDesactive());
    }

    /**
     * Test setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Test setSaisieAbsCp()
     *
     * @return void
     */
    public function testSetSaisieAbsCp(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setSaisieAbsCp(true);
        $this->assertTrue($obj->getSaisieAbsCp());
    }

    /**
     * Test setSaisieAcompte()
     *
     * @return void
     */
    public function testSetSaisieAcompte(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setSaisieAcompte(true);
        $this->assertTrue($obj->getSaisieAcompte());
    }

    /**
     * Test setWidthBord()
     *
     * @return void
     */
    public function testSetWidthBord(): void {

        $obj = new SaisiePrepaEntete();

        $obj->setWidthBord(10);
        $this->assertEquals(10, $obj->getWidthBord());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SaisiePrepaEntete();

        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getDesactive());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getSaisieAbsCp());
        $this->assertNull($obj->getSaisieAcompte());
        $this->assertNull($obj->getWidthBord());
    }
}
