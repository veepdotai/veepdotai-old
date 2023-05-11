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
use WBW\Library\Quadratus\Model\QGI\iSessions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i sessions test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iSessionsTest extends AbstractTestCase {

    /**
     * Test setAdresseIp()
     *
     * @return void
     */
    public function testSetAdresseIp(): void {

        $obj = new iSessions();

        $obj->setAdresseIp("adresseIp");
        $this->assertEquals("adresseIp", $obj->getAdresseIp());
    }

    /**
     * Test setAppli()
     *
     * @return void
     */
    public function testSetAppli(): void {

        $obj = new iSessions();

        $obj->setAppli("appli");
        $this->assertEquals("appli", $obj->getAppli());
    }

    /**
     * Test setCodeUser()
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new iSessions();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Test setDateActive()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateActive(): void {

        // Set a Date/time mock.
        $dateActive = new DateTime("2018-09-10");

        $obj = new iSessions();

        $obj->setDateActive($dateActive);
        $this->assertSame($dateActive, $obj->getDateActive());
    }

    /**
     * Test setDateAdded()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAdded(): void {

        // Set a Date/time mock.
        $dateAdded = new DateTime("2018-09-10");

        $obj = new iSessions();

        $obj->setDateAdded($dateAdded);
        $this->assertSame($dateAdded, $obj->getDateAdded());
    }

    /**
     * Test setDossier()
     *
     * @return void
     */
    public function testSetDossier(): void {

        $obj = new iSessions();

        $obj->setDossier("dossier");
        $this->assertEquals("dossier", $obj->getDossier());
    }

    /**
     * Test setId()
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new iSessions();

        $obj->setId(10);
        $this->assertEquals(10, $obj->getId());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new iSessions();

        $this->assertNull($obj->getAdresseIp());
        $this->assertNull($obj->getAppli());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getDateActive());
        $this->assertNull($obj->getDateAdded());
        $this->assertNull($obj->getDossier());
        $this->assertNull($obj->getId());
    }
}
