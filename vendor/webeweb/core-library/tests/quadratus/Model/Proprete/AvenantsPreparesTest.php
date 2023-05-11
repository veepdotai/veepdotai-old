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
use WBW\Library\Quadratus\Model\Proprete\AvenantsPrepares;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Avenants prepares test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AvenantsPreparesTest extends AbstractTestCase {

    /**
     * Test setChrono()
     *
     * @return void
     */
    public function testSetChrono(): void {

        $obj = new AvenantsPrepares();

        $obj->setChrono("chrono");
        $this->assertEquals("chrono", $obj->getChrono());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AvenantsPrepares();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setContinuerVerif()
     *
     * @return void
     */
    public function testSetContinuerVerif(): void {

        $obj = new AvenantsPrepares();

        $obj->setContinuerVerif(true);
        $this->assertTrue($obj->getContinuerVerif());
    }

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new AvenantsPrepares();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
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

        $obj = new AvenantsPrepares();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new AvenantsPrepares();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setTypeDocument()
     *
     * @return void
     */
    public function testSetTypeDocument(): void {

        $obj = new AvenantsPrepares();

        $obj->setTypeDocument("typeDocument");
        $this->assertEquals("typeDocument", $obj->getTypeDocument());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AvenantsPrepares();

        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getContinuerVerif());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getTypeDocument());
    }
}
