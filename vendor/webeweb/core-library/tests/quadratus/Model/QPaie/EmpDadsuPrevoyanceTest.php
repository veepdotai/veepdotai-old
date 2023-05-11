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
use WBW\Library\Quadratus\Model\QPaie\EmpDadsuPrevoyance;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Emp dadsu prevoyance test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class EmpDadsuPrevoyanceTest extends AbstractTestCase {

    /**
     * Test setCodeAffilSecu()
     *
     * @return void
     */
    public function testSetCodeAffilSecu(): void {

        $obj = new EmpDadsuPrevoyance();

        $obj->setCodeAffilSecu("codeAffilSecu");
        $this->assertEquals("codeAffilSecu", $obj->getCodeAffilSecu());
    }

    /**
     * Test setDateAncienBranche()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncienBranche(): void {

        // Set a Date/time mock.
        $dateAncienBranche = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setDateAncienBranche($dateAncienBranche);
        $this->assertSame($dateAncienBranche, $obj->getDateAncienBranche());
    }

    /**
     * Test setDateAncienCollege()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncienCollege(): void {

        // Set a Date/time mock.
        $dateAncienCollege = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setDateAncienCollege($dateAncienCollege);
        $this->assertSame($dateAncienCollege, $obj->getDateAncienCollege());
    }

    /**
     * Test setDateAncienPoste()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAncienPoste(): void {

        // Set a Date/time mock.
        $dateAncienPoste = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setDateAncienPoste($dateAncienPoste);
        $this->assertSame($dateAncienPoste, $obj->getDateAncienPoste());
    }

    /**
     * Test setNbEnfants()
     *
     * @return void
     */
    public function testSetNbEnfants(): void {

        $obj = new EmpDadsuPrevoyance();

        $obj->setNbEnfants("nbEnfants");
        $this->assertEquals("nbEnfants", $obj->getNbEnfants());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new EmpDadsuPrevoyance();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPremDateEntree()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPremDateEntree(): void {

        // Set a Date/time mock.
        $premDateEntree = new DateTime("2018-09-10");

        $obj = new EmpDadsuPrevoyance();

        $obj->setPremDateEntree($premDateEntree);
        $this->assertSame($premDateEntree, $obj->getPremDateEntree());
    }

    /**
     * Test setRangNaissance()
     *
     * @return void
     */
    public function testSetRangNaissance(): void {

        $obj = new EmpDadsuPrevoyance();

        $obj->setRangNaissance("rangNaissance");
        $this->assertEquals("rangNaissance", $obj->getRangNaissance());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new EmpDadsuPrevoyance();

        $this->assertNull($obj->getCodeAffilSecu());
        $this->assertNull($obj->getDateAncienBranche());
        $this->assertNull($obj->getDateAncienCollege());
        $this->assertNull($obj->getDateAncienPoste());
        $this->assertNull($obj->getNbEnfants());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPremDateEntree());
        $this->assertNull($obj->getRangNaissance());
    }
}
