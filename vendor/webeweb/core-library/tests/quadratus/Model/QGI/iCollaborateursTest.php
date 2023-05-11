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
use WBW\Library\Quadratus\Model\QGI\iCollaborateurs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i collaborateurs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iCollaborateursTest extends AbstractTestCase {

    /**
     * Test setCodeCollab()
     *
     * @return void
     */
    public function testSetCodeCollab(): void {

        $obj = new iCollaborateurs();

        $obj->setCodeCollab("codeCollab");
        $this->assertEquals("codeCollab", $obj->getCodeCollab());
    }

    /**
     * Test setNumiKey()
     *
     * @return void
     */
    public function testSetNumiKey(): void {

        $obj = new iCollaborateurs();

        $obj->setNumiKey("numiKey");
        $this->assertEquals("numiKey", $obj->getNumiKey());
    }

    /**
     * Test setPassword()
     *
     * @return void
     */
    public function testSetPassword(): void {

        $obj = new iCollaborateurs();

        $obj->setPassword("password");
        $this->assertEquals("password", $obj->getPassword());
    }

    /**
     * Test setValideA()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetValideA(): void {

        // Set a Date/time mock.
        $valideA = new DateTime("2018-09-10");

        $obj = new iCollaborateurs();

        $obj->setValideA($valideA);
        $this->assertSame($valideA, $obj->getValideA());
    }

    /**
     * Test setValideDe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetValideDe(): void {

        // Set a Date/time mock.
        $valideDe = new DateTime("2018-09-10");

        $obj = new iCollaborateurs();

        $obj->setValideDe($valideDe);
        $this->assertSame($valideDe, $obj->getValideDe());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new iCollaborateurs();

        $this->assertNull($obj->getCodeCollab());
        $this->assertNull($obj->getNumiKey());
        $this->assertNull($obj->getPassword());
        $this->assertNull($obj->getValideA());
        $this->assertNull($obj->getValideDe());
    }
}
