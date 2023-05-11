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
use WBW\Library\Quadratus\Model\QPaie\DadsuPrev;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu prev test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuPrevTest extends AbstractTestCase {

    /**
     * Test setBasePrev()
     *
     * @return void
     */
    public function testSetBasePrev(): void {

        $obj = new DadsuPrev();

        $obj->setBasePrev(10.092018);
        $this->assertEquals(10.092018, $obj->getBasePrev());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DadsuPrev();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuPrev();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Test setCodeOrganismeGestionnaire()
     *
     * @return void
     */
    public function testSetCodeOrganismeGestionnaire(): void {

        $obj = new DadsuPrev();

        $obj->setCodeOrganismeGestionnaire("codeOrganismeGestionnaire");
        $this->assertEquals("codeOrganismeGestionnaire", $obj->getCodeOrganismeGestionnaire());
    }

    /**
     * Test setCodePopul()
     *
     * @return void
     */
    public function testSetCodePopul(): void {

        $obj = new DadsuPrev();

        $obj->setCodePopul("codePopul");
        $this->assertEquals("codePopul", $obj->getCodePopul());
    }

    /**
     * Test setCodeTypePrev()
     *
     * @return void
     */
    public function testSetCodeTypePrev(): void {

        $obj = new DadsuPrev();

        $obj->setCodeTypePrev("codeTypePrev");
        $this->assertEquals("codeTypePrev", $obj->getCodeTypePrev());
    }

    /**
     * Test setDebutPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutPeriode(): void {

        // Set a Date/time mock.
        $debutPeriode = new DateTime("2018-09-10");

        $obj = new DadsuPrev();

        $obj->setDebutPeriode($debutPeriode);
        $this->assertSame($debutPeriode, $obj->getDebutPeriode());
    }

    /**
     * Test setEvenContrat()
     *
     * @return void
     */
    public function testSetEvenContrat(): void {

        $obj = new DadsuPrev();

        $obj->setEvenContrat("evenContrat");
        $this->assertEquals("evenContrat", $obj->getEvenContrat());
    }

    /**
     * Test setFinPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriode(): void {

        // Set a Date/time mock.
        $finPeriode = new DateTime("2018-09-10");

        $obj = new DadsuPrev();

        $obj->setFinPeriode($finPeriode);
        $this->assertSame($finPeriode, $obj->getFinPeriode());
    }

    /**
     * Test setIdInstitution()
     *
     * @return void
     */
    public function testSetIdInstitution(): void {

        $obj = new DadsuPrev();

        $obj->setIdInstitution("idInstitution");
        $this->assertEquals("idInstitution", $obj->getIdInstitution());
    }

    /**
     * Test setIndiceDadsu()
     *
     * @return void
     */
    public function testSetIndiceDadsu(): void {

        $obj = new DadsuPrev();

        $obj->setIndiceDadsu(10);
        $this->assertEquals(10, $obj->getIndiceDadsu());
    }

    /**
     * Test setNoAffiliation()
     *
     * @return void
     */
    public function testSetNoAffiliation(): void {

        $obj = new DadsuPrev();

        $obj->setNoAffiliation("noAffiliation");
        $this->assertEquals("noAffiliation", $obj->getNoAffiliation());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new DadsuPrev();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Test setNumeroOrdre()
     *
     * @return void
     */
    public function testSetNumeroOrdre(): void {

        $obj = new DadsuPrev();

        $obj->setNumeroOrdre(10);
        $this->assertEquals(10, $obj->getNumeroOrdre());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuPrev();

        $this->assertNull($obj->getBasePrev());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getCodeOrganismeGestionnaire());
        $this->assertNull($obj->getCodePopul());
        $this->assertNull($obj->getCodeTypePrev());
        $this->assertNull($obj->getDebutPeriode());
        $this->assertNull($obj->getEvenContrat());
        $this->assertNull($obj->getFinPeriode());
        $this->assertNull($obj->getIdInstitution());
        $this->assertNull($obj->getIndiceDadsu());
        $this->assertNull($obj->getNoAffiliation());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getNumeroOrdre());
    }
}
