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

use WBW\Library\Quadratus\Model\QGI\ActionsCoInscrits;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Actions co inscrits test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ActionsCoInscritsTest extends AbstractTestCase {

    /**
     * Test setCodeAction()
     *
     * @return void
     */
    public function testSetCodeAction(): void {

        $obj = new ActionsCoInscrits();

        $obj->setCodeAction("codeAction");
        $this->assertEquals("codeAction", $obj->getCodeAction());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ActionsCoInscrits();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeManif()
     *
     * @return void
     */
    public function testSetCodeManif(): void {

        $obj = new ActionsCoInscrits();

        $obj->setCodeManif("codeManif");
        $this->assertEquals("codeManif", $obj->getCodeManif());
    }

    /**
     * Test setConfirme()
     *
     * @return void
     */
    public function testSetConfirme(): void {

        $obj = new ActionsCoInscrits();

        $obj->setConfirme(true);
        $this->assertTrue($obj->getConfirme());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new ActionsCoInscrits();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setFax()
     *
     * @return void
     */
    public function testSetFax(): void {

        $obj = new ActionsCoInscrits();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Test setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Test setNumInterlocuteur()
     *
     * @return void
     */
    public function testSetNumInterlocuteur(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNumInterlocuteur(10);
        $this->assertEquals(10, $obj->getNumInterlocuteur());
    }

    /**
     * Test setNumSeance()
     *
     * @return void
     */
    public function testSetNumSeance(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNumSeance(10);
        $this->assertEquals(10, $obj->getNumSeance());
    }

    /**
     * Test setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new ActionsCoInscrits();

        $obj->setNumero(10);
        $this->assertEquals(10, $obj->getNumero());
    }

    /**
     * Test setPrenom()
     *
     * @return void
     */
    public function testSetPrenom(): void {

        $obj = new ActionsCoInscrits();

        $obj->setPrenom("prenom");
        $this->assertEquals("prenom", $obj->getPrenom());
    }

    /**
     * Test setPresent()
     *
     * @return void
     */
    public function testSetPresent(): void {

        $obj = new ActionsCoInscrits();

        $obj->setPresent(true);
        $this->assertTrue($obj->getPresent());
    }

    /**
     * Test setTelephone()
     *
     * @return void
     */
    public function testSetTelephone(): void {

        $obj = new ActionsCoInscrits();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Test setTypeInvite()
     *
     * @return void
     */
    public function testSetTypeInvite(): void {

        $obj = new ActionsCoInscrits();

        $obj->setTypeInvite("typeInvite");
        $this->assertEquals("typeInvite", $obj->getTypeInvite());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ActionsCoInscrits();

        $this->assertNull($obj->getCodeAction());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeManif());
        $this->assertNull($obj->getConfirme());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNumInterlocuteur());
        $this->assertNull($obj->getNumSeance());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPrenom());
        $this->assertNull($obj->getPresent());
        $this->assertNull($obj->getTelephone());
        $this->assertNull($obj->getTypeInvite());
    }
}
