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
use WBW\Library\Quadratus\Model\QGI\AffaireSuivi;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Affaire suivi test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class AffaireSuiviTest extends AbstractTestCase {

    /**
     * Test setAvancement()
     *
     * @return void
     */
    public function testSetAvancement(): void {

        $obj = new AffaireSuivi();

        $obj->setAvancement(10.092018);
        $this->assertEquals(10.092018, $obj->getAvancement());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new AffaireSuivi();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodePhase()
     *
     * @return void
     */
    public function testSetCodePhase(): void {

        $obj = new AffaireSuivi();

        $obj->setCodePhase("codePhase");
        $this->assertEquals("codePhase", $obj->getCodePhase());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new AffaireSuivi();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateBilan()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateBilan(): void {

        // Set a Date/time mock.
        $dateBilan = new DateTime("2018-09-10");

        $obj = new AffaireSuivi();

        $obj->setDateBilan($dateBilan);
        $this->assertSame($dateBilan, $obj->getDateBilan());
    }

    /**
     * Test setListeCollab()
     *
     * @return void
     */
    public function testSetListeCollab(): void {

        $obj = new AffaireSuivi();

        $obj->setListeCollab("listeCollab");
        $this->assertEquals("listeCollab", $obj->getListeCollab());
    }

    /**
     * Test setNbHeuresPrevisionnel()
     *
     * @return void
     */
    public function testSetNbHeuresPrevisionnel(): void {

        $obj = new AffaireSuivi();

        $obj->setNbHeuresPrevisionnel(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeuresPrevisionnel());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AffaireSuivi();

        $this->assertNull($obj->getAvancement());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodePhase());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateBilan());
        $this->assertNull($obj->getListeCollab());
        $this->assertNull($obj->getNbHeuresPrevisionnel());
    }
}
