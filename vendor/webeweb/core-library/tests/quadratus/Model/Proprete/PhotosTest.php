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
use WBW\Library\Quadratus\Model\Proprete\Photos;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Photos test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PhotosTest extends AbstractTestCase {

    /**
     * Test setAPublierEspaceClient()
     *
     * @return void
     */
    public function testSetAPublierEspaceClient(): void {

        $obj = new Photos();

        $obj->setAPublierEspaceClient(true);
        $this->assertTrue($obj->getAPublierEspaceClient());
    }

    /**
     * Test setAuteur()
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new Photos();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Photos();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setNomFichierId()
     *
     * @return void
     */
    public function testSetNomFichierId(): void {

        $obj = new Photos();

        $obj->setNomFichierId("nomFichierId");
        $this->assertEquals("nomFichierId", $obj->getNomFichierId());
    }

    /**
     * Test setTypeId()
     *
     * @return void
     */
    public function testSetTypeId(): void {

        $obj = new Photos();

        $obj->setTypeId("typeId");
        $this->assertEquals("typeId", $obj->getTypeId());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new Photos();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Photos();

        $this->assertNull($obj->getAPublierEspaceClient());
        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getNomFichierId());
        $this->assertNull($obj->getTypeId());
        $this->assertNull($obj->getUniqId());
    }
}
