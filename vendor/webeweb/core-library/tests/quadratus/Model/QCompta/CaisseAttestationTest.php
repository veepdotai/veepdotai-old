<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QCompta\CaisseAttestation;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Caisse attestation test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class CaisseAttestationTest extends AbstractTestCase {

    /**
     * Test setCollaborateur()
     *
     * @return void
     */
    public function testSetCollaborateur(): void {

        $obj = new CaisseAttestation();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Test setDateAcquisition()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAcquisition(): void {

        // Set a Date/time mock.
        $dateAcquisition = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateAcquisition($dateAcquisition);
        $this->assertSame($dateAcquisition, $obj->getDateAcquisition());
    }

    /**
     * Test setDateApplication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Test setDateAttestation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAttestation(): void {

        // Set a Date/time mock.
        $dateAttestation = new DateTime("2018-09-10");

        $obj = new CaisseAttestation();

        $obj->setDateAttestation($dateAttestation);
        $this->assertSame($dateAttestation, $obj->getDateAttestation());
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

        $obj = new CaisseAttestation();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setInfoFichier()
     *
     * @return void
     */
    public function testSetInfoFichier(): void {

        $obj = new CaisseAttestation();

        $obj->setInfoFichier("infoFichier");
        $this->assertEquals("infoFichier", $obj->getInfoFichier());
    }

    /**
     * Test setLicence()
     *
     * @return void
     */
    public function testSetLicence(): void {

        $obj = new CaisseAttestation();

        $obj->setLicence("licence");
        $this->assertEquals("licence", $obj->getLicence());
    }

    /**
     * Test setNomResponsable()
     *
     * @return void
     */
    public function testSetNomResponsable(): void {

        $obj = new CaisseAttestation();

        $obj->setNomResponsable("nomResponsable");
        $this->assertEquals("nomResponsable", $obj->getNomResponsable());
    }

    /**
     * Test setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new CaisseAttestation();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Test setNumVersion()
     *
     * @return void
     */
    public function testSetNumVersion(): void {

        $obj = new CaisseAttestation();

        $obj->setNumVersion("numVersion");
        $this->assertEquals("numVersion", $obj->getNumVersion());
    }

    /**
     * Test setOrdinateur()
     *
     * @return void
     */
    public function testSetOrdinateur(): void {

        $obj = new CaisseAttestation();

        $obj->setOrdinateur("ordinateur");
        $this->assertEquals("ordinateur", $obj->getOrdinateur());
    }

    /**
     * Test setOrigine()
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new CaisseAttestation();

        $obj->setOrigine("origine");
        $this->assertEquals("origine", $obj->getOrigine());
    }

    /**
     * Test setPrenomResponsable()
     *
     * @return void
     */
    public function testSetPrenomResponsable(): void {

        $obj = new CaisseAttestation();

        $obj->setPrenomResponsable("prenomResponsable");
        $this->assertEquals("prenomResponsable", $obj->getPrenomResponsable());
    }

    /**
     * Test setRaisonSocialeDistri()
     *
     * @return void
     */
    public function testSetRaisonSocialeDistri(): void {

        $obj = new CaisseAttestation();

        $obj->setRaisonSocialeDistri("raisonSocialeDistri");
        $this->assertEquals("raisonSocialeDistri", $obj->getRaisonSocialeDistri());
    }

    /**
     * Test setRaisonSocialeSociete()
     *
     * @return void
     */
    public function testSetRaisonSocialeSociete(): void {

        $obj = new CaisseAttestation();

        $obj->setRaisonSocialeSociete("raisonSocialeSociete");
        $this->assertEquals("raisonSocialeSociete", $obj->getRaisonSocialeSociete());
    }

    /**
     * Test setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new CaisseAttestation();

        $obj->setUniqId(10);
        $this->assertEquals(10, $obj->getUniqId());
    }

    /**
     * Test setUtilisateur()
     *
     * @return void
     */
    public function testSetUtilisateur(): void {

        $obj = new CaisseAttestation();

        $obj->setUtilisateur("utilisateur");
        $this->assertEquals("utilisateur", $obj->getUtilisateur());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CaisseAttestation();

        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getDateAcquisition());
        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getDateAttestation());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getInfoFichier());
        $this->assertNull($obj->getLicence());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNumVersion());
        $this->assertNull($obj->getOrdinateur());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPrenomResponsable());
        $this->assertNull($obj->getRaisonSocialeDistri());
        $this->assertNull($obj->getRaisonSocialeSociete());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getUtilisateur());
    }
}
