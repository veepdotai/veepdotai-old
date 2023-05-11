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
use WBW\Library\Quadratus\Model\QGI\PostIt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Post it test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class PostItTest extends AbstractTestCase {

    /**
     * Test setCodeCollDest()
     *
     * @return void
     */
    public function testSetCodeCollDest(): void {

        $obj = new PostIt();

        $obj->setCodeCollDest("codeCollDest");
        $this->assertEquals("codeCollDest", $obj->getCodeCollDest());
    }

    /**
     * Test setCodeCollOrg()
     *
     * @return void
     */
    public function testSetCodeCollOrg(): void {

        $obj = new PostIt();

        $obj->setCodeCollOrg("codeCollOrg");
        $this->assertEquals("codeCollOrg", $obj->getCodeCollOrg());
    }

    /**
     * Test setDateHeure()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateHeure(): void {

        // Set a Date/time mock.
        $dateHeure = new DateTime("2018-09-10");

        $obj = new PostIt();

        $obj->setDateHeure($dateHeure);
        $this->assertSame($dateHeure, $obj->getDateHeure());
    }

    /**
     * Test setDateSysSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie(): void {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new PostIt();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new PostIt();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setRefGuid()
     *
     * @return void
     */
    public function testSetRefGuid(): void {

        $obj = new PostIt();

        $obj->setRefGuid("refGuid");
        $this->assertEquals("refGuid", $obj->getRefGuid());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new PostIt();

        $obj->setType(10);
        $this->assertEquals(10, $obj->getType());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new PostIt();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PostIt();

        $this->assertNull($obj->getCodeCollDest());
        $this->assertNull($obj->getCodeCollOrg());
        $this->assertNull($obj->getDateHeure());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getRefGuid());
        $this->assertNull($obj->getType());
        $this->assertNull($obj->getUniqId());
    }
}
