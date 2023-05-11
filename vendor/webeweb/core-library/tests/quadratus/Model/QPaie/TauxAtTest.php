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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\TauxAt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Taux at test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class TauxAtTest extends AbstractTestCase {

    /**
     * Test setAPartirDe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetAPartirDe(): void {

        // Set a Date/time mock.
        $aPartirDe = new DateTime("2018-09-10");

        $obj = new TauxAt();

        $obj->setAPartirDe($aPartirDe);
        $this->assertSame($aPartirDe, $obj->getAPartirDe());
    }

    /**
     * Test setBureau()
     *
     * @return void
     */
    public function testSetBureau(): void {

        $obj = new TauxAt();

        $obj->setBureau("bureau");
        $this->assertEquals("bureau", $obj->getBureau());
    }

    /**
     * Test setCodeAt()
     *
     * @return void
     */
    public function testSetCodeAt(): void {

        $obj = new TauxAt();

        $obj->setCodeAt(10);
        $this->assertEquals(10, $obj->getCodeAt());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new TauxAt();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setRisque()
     *
     * @return void
     */
    public function testSetRisque(): void {

        $obj = new TauxAt();

        $obj->setRisque("risque");
        $this->assertEquals("risque", $obj->getRisque());
    }

    /**
     * Test setSection()
     *
     * @return void
     */
    public function testSetSection(): void {

        $obj = new TauxAt();

        $obj->setSection("section");
        $this->assertEquals("section", $obj->getSection());
    }

    /**
     * Test setTaux()
     *
     * @return void
     */
    public function testSetTaux(): void {

        $obj = new TauxAt();

        $obj->setTaux(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TauxAt();

        $this->assertNull($obj->getAPartirDe());
        $this->assertNull($obj->getBureau());
        $this->assertNull($obj->getCodeAt());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getRisque());
        $this->assertNull($obj->getSection());
        $this->assertNull($obj->getTaux());
    }
}
