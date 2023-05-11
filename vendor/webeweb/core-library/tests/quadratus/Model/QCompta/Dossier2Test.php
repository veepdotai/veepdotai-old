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
use WBW\Library\Quadratus\Model\QCompta\Dossier2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dossier2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class Dossier2Test extends AbstractTestCase {

    /**
     * Test setAnneeRecolte()
     *
     * @return void
     */
    public function testSetAnneeRecolte(): void {

        $obj = new Dossier2();

        $obj->setAnneeRecolte("anneeRecolte");
        $this->assertEquals("anneeRecolte", $obj->getAnneeRecolte());
    }

    /**
     * Test setAppliquerRegroupement()
     *
     * @return void
     */
    public function testSetAppliquerRegroupement(): void {

        $obj = new Dossier2();

        $obj->setAppliquerRegroupement(true);
        $this->assertTrue($obj->getAppliquerRegroupement());
    }

    /**
     * Test setCcaMemo()
     *
     * @return void
     */
    public function testSetCcaMemo(): void {

        $obj = new Dossier2();

        $obj->setCcaMemo("ccaMemo");
        $this->assertEquals("ccaMemo", $obj->getCcaMemo());
    }

    /**
     * Test setClasse4ClientDebut()
     *
     * @return void
     */
    public function testSetClasse4ClientDebut(): void {

        $obj = new Dossier2();

        $obj->setClasse4ClientDebut("classe4ClientDebut");
        $this->assertEquals("classe4ClientDebut", $obj->getClasse4ClientDebut());
    }

    /**
     * Test setClasse4ClientFin()
     *
     * @return void
     */
    public function testSetClasse4ClientFin(): void {

        $obj = new Dossier2();

        $obj->setClasse4ClientFin("classe4ClientFin");
        $this->assertEquals("classe4ClientFin", $obj->getClasse4ClientFin());
    }

    /**
     * Test setClasse4FrnDebut()
     *
     * @return void
     */
    public function testSetClasse4FrnDebut(): void {

        $obj = new Dossier2();

        $obj->setClasse4FrnDebut("classe4FrnDebut");
        $this->assertEquals("classe4FrnDebut", $obj->getClasse4FrnDebut());
    }

    /**
     * Test setClasse4FrnFin()
     *
     * @return void
     */
    public function testSetClasse4FrnFin(): void {

        $obj = new Dossier2();

        $obj->setClasse4FrnFin("classe4FrnFin");
        $this->assertEquals("classe4FrnFin", $obj->getClasse4FrnFin());
    }

    /**
     * Test setCodifClasse0()
     *
     * @return void
     */
    public function testSetCodifClasse0(): void {

        $obj = new Dossier2();

        $obj->setCodifClasse0("codifClasse0");
        $this->assertEquals("codifClasse0", $obj->getCodifClasse0());
    }

    /**
     * Test setCodifClasse0Seule()
     *
     * @return void
     */
    public function testSetCodifClasse0Seule(): void {

        $obj = new Dossier2();

        $obj->setCodifClasse0Seule("codifClasse0Seule");
        $this->assertEquals("codifClasse0Seule", $obj->getCodifClasse0Seule());
    }

    /**
     * Test setCodifClasse9()
     *
     * @return void
     */
    public function testSetCodifClasse9(): void {

        $obj = new Dossier2();

        $obj->setCodifClasse9("codifClasse9");
        $this->assertEquals("codifClasse9", $obj->getCodifClasse9());
    }

    /**
     * Test setCodifClasse9Seule()
     *
     * @return void
     */
    public function testSetCodifClasse9Seule(): void {

        $obj = new Dossier2();

        $obj->setCodifClasse9Seule("codifClasse9Seule");
        $this->assertEquals("codifClasse9Seule", $obj->getCodifClasse9Seule());
    }

    /**
     * Test setCollectifClientDebut()
     *
     * @return void
     */
    public function testSetCollectifClientDebut(): void {

        $obj = new Dossier2();

        $obj->setCollectifClientDebut("collectifClientDebut");
        $this->assertEquals("collectifClientDebut", $obj->getCollectifClientDebut());
    }

    /**
     * Test setCollectifClientDefaut()
     *
     * @return void
     */
    public function testSetCollectifClientDefaut(): void {

        $obj = new Dossier2();

        $obj->setCollectifClientDefaut("collectifClientDefaut");
        $this->assertEquals("collectifClientDefaut", $obj->getCollectifClientDefaut());
    }

    /**
     * Test setCollectifClientFin()
     *
     * @return void
     */
    public function testSetCollectifClientFin(): void {

        $obj = new Dossier2();

        $obj->setCollectifClientFin("collectifClientFin");
        $this->assertEquals("collectifClientFin", $obj->getCollectifClientFin());
    }

    /**
     * Test setCollectifFrnDebut()
     *
     * @return void
     */
    public function testSetCollectifFrnDebut(): void {

        $obj = new Dossier2();

        $obj->setCollectifFrnDebut("collectifFrnDebut");
        $this->assertEquals("collectifFrnDebut", $obj->getCollectifFrnDebut());
    }

    /**
     * Test setCollectifFrnDefaut()
     *
     * @return void
     */
    public function testSetCollectifFrnDefaut(): void {

        $obj = new Dossier2();

        $obj->setCollectifFrnDefaut("collectifFrnDefaut");
        $this->assertEquals("collectifFrnDefaut", $obj->getCollectifFrnDefaut());
    }

    /**
     * Test setCollectifFrnFin()
     *
     * @return void
     */
    public function testSetCollectifFrnFin(): void {

        $obj = new Dossier2();

        $obj->setCollectifFrnFin("collectifFrnFin");
        $this->assertEquals("collectifFrnFin", $obj->getCollectifFrnFin());
    }

    /**
     * Test setCollectifSocDebut()
     *
     * @return void
     */
    public function testSetCollectifSocDebut(): void {

        $obj = new Dossier2();

        $obj->setCollectifSocDebut("collectifSocDebut");
        $this->assertEquals("collectifSocDebut", $obj->getCollectifSocDebut());
    }

    /**
     * Test setCollectifSocFin()
     *
     * @return void
     */
    public function testSetCollectifSocFin(): void {

        $obj = new Dossier2();

        $obj->setCollectifSocFin("collectifSocFin");
        $this->assertEquals("collectifSocFin", $obj->getCollectifSocFin());
    }

    /**
     * Test setCombiLettrageAuto()
     *
     * @return void
     */
    public function testSetCombiLettrageAuto(): void {

        $obj = new Dossier2();

        $obj->setCombiLettrageAuto(10);
        $this->assertEquals(10, $obj->getCombiLettrageAuto());
    }

    /**
     * Test setCommentaireDossier()
     *
     * @return void
     */
    public function testSetCommentaireDossier(): void {

        $obj = new Dossier2();

        $obj->setCommentaireDossier("commentaireDossier");
        $this->assertEquals("commentaireDossier", $obj->getCommentaireDossier());
    }

    /**
     * Test setControlSalaireCptEx()
     *
     * @return void
     */
    public function testSetControlSalaireCptEx(): void {

        $obj = new Dossier2();

        $obj->setControlSalaireCptEx("controlSalaireCptEx");
        $this->assertEquals("controlSalaireCptEx", $obj->getControlSalaireCptEx());
    }

    /**
     * Test setControlSalaireObs()
     *
     * @return void
     */
    public function testSetControlSalaireObs(): void {

        $obj = new Dossier2();

        $obj->setControlSalaireObs("controlSalaireObs");
        $this->assertEquals("controlSalaireObs", $obj->getControlSalaireObs());
    }

    /**
     * Test setDads1LivrePaie()
     *
     * @return void
     */
    public function testSetDads1LivrePaie(): void {

        $obj = new Dossier2();

        $obj->setDads1LivrePaie(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1LivrePaie());
    }

    /**
     * Test setDads1Paie()
     *
     * @return void
     */
    public function testSetDads1Paie(): void {

        $obj = new Dossier2();

        $obj->setDads1Paie(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1Paie());
    }

    /**
     * Test setDads1RemuMoins()
     *
     * @return void
     */
    public function testSetDads1RemuMoins(): void {

        $obj = new Dossier2();

        $obj->setDads1RemuMoins(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1RemuMoins());
    }

    /**
     * Test setDads1RemuPlus()
     *
     * @return void
     */
    public function testSetDads1RemuPlus(): void {

        $obj = new Dossier2();

        $obj->setDads1RemuPlus(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1RemuPlus());
    }

    /**
     * Test setDateCalculProvCp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCalculProvCp(): void {

        // Set a Date/time mock.
        $dateCalculProvCp = new DateTime("2018-09-10");

        $obj = new Dossier2();

        $obj->setDateCalculProvCp($dateCalculProvCp);
        $this->assertSame($dateCalculProvCp, $obj->getDateCalculProvCp());
    }

    /**
     * Test setDatePublication()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePublication(): void {

        // Set a Date/time mock.
        $datePublication = new DateTime("2018-09-10");

        $obj = new Dossier2();

        $obj->setDatePublication($datePublication);
        $this->assertSame($datePublication, $obj->getDatePublication());
    }

    /**
     * Test setDateRazEcritures()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRazEcritures(): void {

        // Set a Date/time mock.
        $dateRazEcritures = new DateTime("2018-09-10");

        $obj = new Dossier2();

        $obj->setDateRazEcritures($dateRazEcritures);
        $this->assertSame($dateRazEcritures, $obj->getDateRazEcritures());
    }

    /**
     * Test setDernierCompteClient()
     *
     * @return void
     */
    public function testSetDernierCompteClient(): void {

        $obj = new Dossier2();

        $obj->setDernierCompteClient("dernierCompteClient");
        $this->assertEquals("dernierCompteClient", $obj->getDernierCompteClient());
    }

    /**
     * Test setDernierCompteFrn()
     *
     * @return void
     */
    public function testSetDernierCompteFrn(): void {

        $obj = new Dossier2();

        $obj->setDernierCompteFrn("dernierCompteFrn");
        $this->assertEquals("dernierCompteFrn", $obj->getDernierCompteFrn());
    }

    /**
     * Test setDiffLettrageCodeJournal()
     *
     * @return void
     */
    public function testSetDiffLettrageCodeJournal(): void {

        $obj = new Dossier2();

        $obj->setDiffLettrageCodeJournal("diffLettrageCodeJournal");
        $this->assertEquals("diffLettrageCodeJournal", $obj->getDiffLettrageCodeJournal());
    }

    /**
     * Test setDiffLettrageCodeLibelle()
     *
     * @return void
     */
    public function testSetDiffLettrageCodeLibelle(): void {

        $obj = new Dossier2();

        $obj->setDiffLettrageCodeLibelle("diffLettrageCodeLibelle");
        $this->assertEquals("diffLettrageCodeLibelle", $obj->getDiffLettrageCodeLibelle());
    }

    /**
     * Test setDiffLettrageFolio()
     *
     * @return void
     */
    public function testSetDiffLettrageFolio(): void {

        $obj = new Dossier2();

        $obj->setDiffLettrageFolio(10);
        $this->assertEquals(10, $obj->getDiffLettrageFolio());
    }

    /**
     * Test setDiffLettrageGains()
     *
     * @return void
     */
    public function testSetDiffLettrageGains(): void {

        $obj = new Dossier2();

        $obj->setDiffLettrageGains("diffLettrageGains");
        $this->assertEquals("diffLettrageGains", $obj->getDiffLettrageGains());
    }

    /**
     * Test setDiffLettrageLibelle()
     *
     * @return void
     */
    public function testSetDiffLettrageLibelle(): void {

        $obj = new Dossier2();

        $obj->setDiffLettrageLibelle("diffLettrageLibelle");
        $this->assertEquals("diffLettrageLibelle", $obj->getDiffLettrageLibelle());
    }

    /**
     * Test setDiffLettragePertes()
     *
     * @return void
     */
    public function testSetDiffLettragePertes(): void {

        $obj = new Dossier2();

        $obj->setDiffLettragePertes("diffLettragePertes");
        $this->assertEquals("diffLettragePertes", $obj->getDiffLettragePertes());
    }

    /**
     * Test setDsCodeCollab()
     *
     * @return void
     */
    public function testSetDsCodeCollab(): void {

        $obj = new Dossier2();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Test setDsDateRetour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour(): void {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new Dossier2();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Test setDsDateSortie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie(): void {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new Dossier2();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Test setEcartMaxiLettrageAuto()
     *
     * @return void
     */
    public function testSetEcartMaxiLettrageAuto(): void {

        $obj = new Dossier2();

        $obj->setEcartMaxiLettrageAuto(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartMaxiLettrageAuto());
    }

    /**
     * Test setEcartMiniCtrlTva()
     *
     * @return void
     */
    public function testSetEcartMiniCtrlTva(): void {

        $obj = new Dossier2();

        $obj->setEcartMiniCtrlTva(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartMiniCtrlTva());
    }

    /**
     * Test setEditerEnCfa()
     *
     * @return void
     */
    public function testSetEditerEnCfa(): void {

        $obj = new Dossier2();

        $obj->setEditerEnCfa(true);
        $this->assertTrue($obj->getEditerEnCfa());
    }

    /**
     * Test setEtatProvCpObs()
     *
     * @return void
     */
    public function testSetEtatProvCpObs(): void {

        $obj = new Dossier2();

        $obj->setEtatProvCpObs("etatProvCpObs");
        $this->assertEquals("etatProvCpObs", $obj->getEtatProvCpObs());
    }

    /**
     * Test setFaireControleLettrage()
     *
     * @return void
     */
    public function testSetFaireControleLettrage(): void {

        $obj = new Dossier2();

        $obj->setFaireControleLettrage("faireControleLettrage");
        $this->assertEquals("faireControleLettrage", $obj->getFaireControleLettrage());
    }

    /**
     * Test setIncrementCompteAuto()
     *
     * @return void
     */
    public function testSetIncrementCompteAuto(): void {

        $obj = new Dossier2();

        $obj->setIncrementCompteAuto(10);
        $this->assertEquals(10, $obj->getIncrementCompteAuto());
    }

    /**
     * Test setLibellePlusDe30Carac()
     *
     * @return void
     */
    public function testSetLibellePlusDe30Carac(): void {

        $obj = new Dossier2();

        $obj->setLibellePlusDe30Carac(true);
        $this->assertTrue($obj->getLibellePlusDe30Carac());
    }

    /**
     * Test setLienSaiImmos()
     *
     * @return void
     */
    public function testSetLienSaiImmos(): void {

        $obj = new Dossier2();

        $obj->setLienSaiImmos(true);
        $this->assertTrue($obj->getLienSaiImmos());
    }

    /**
     * Test setLongueurPieceLettrage()
     *
     * @return void
     */
    public function testSetLongueurPieceLettrage(): void {

        $obj = new Dossier2();

        $obj->setLongueurPieceLettrage(10);
        $this->assertEquals(10, $obj->getLongueurPieceLettrage());
    }

    /**
     * Test setNbComptesRaz()
     *
     * @return void
     */
    public function testSetNbComptesRaz(): void {

        $obj = new Dossier2();

        $obj->setNbComptesRaz(10);
        $this->assertEquals(10, $obj->getNbComptesRaz());
    }

    /**
     * Test setNbDecimalesMt()
     *
     * @return void
     */
    public function testSetNbDecimalesMt(): void {

        $obj = new Dossier2();

        $obj->setNbDecimalesMt("nbDecimalesMt");
        $this->assertEquals("nbDecimalesMt", $obj->getNbDecimalesMt());
    }

    /**
     * Test setNbEcrAFacturerCloture()
     *
     * @return void
     */
    public function testSetNbEcrAFacturerCloture(): void {

        $obj = new Dossier2();

        $obj->setNbEcrAFacturerCloture(10);
        $this->assertEquals(10, $obj->getNbEcrAFacturerCloture());
    }

    /**
     * Test setNbEcrituresRaz()
     *
     * @return void
     */
    public function testSetNbEcrituresRaz(): void {

        $obj = new Dossier2();

        $obj->setNbEcrituresRaz(10);
        $this->assertEquals(10, $obj->getNbEcrituresRaz());
    }

    /**
     * Test setNbJourBaseCp()
     *
     * @return void
     */
    public function testSetNbJourBaseCp(): void {

        $obj = new Dossier2();

        $obj->setNbJourBaseCp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCp());
    }

    /**
     * Test setNivRuptClasse0()
     *
     * @return void
     */
    public function testSetNivRuptClasse0(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse0("nivRuptClasse0");
        $this->assertEquals("nivRuptClasse0", $obj->getNivRuptClasse0());
    }

    /**
     * Test setNivRuptClasse1()
     *
     * @return void
     */
    public function testSetNivRuptClasse1(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse1("nivRuptClasse1");
        $this->assertEquals("nivRuptClasse1", $obj->getNivRuptClasse1());
    }

    /**
     * Test setNivRuptClasse2()
     *
     * @return void
     */
    public function testSetNivRuptClasse2(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse2("nivRuptClasse2");
        $this->assertEquals("nivRuptClasse2", $obj->getNivRuptClasse2());
    }

    /**
     * Test setNivRuptClasse3()
     *
     * @return void
     */
    public function testSetNivRuptClasse3(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse3("nivRuptClasse3");
        $this->assertEquals("nivRuptClasse3", $obj->getNivRuptClasse3());
    }

    /**
     * Test setNivRuptClasse4()
     *
     * @return void
     */
    public function testSetNivRuptClasse4(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse4("nivRuptClasse4");
        $this->assertEquals("nivRuptClasse4", $obj->getNivRuptClasse4());
    }

    /**
     * Test setNivRuptClasse5()
     *
     * @return void
     */
    public function testSetNivRuptClasse5(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse5("nivRuptClasse5");
        $this->assertEquals("nivRuptClasse5", $obj->getNivRuptClasse5());
    }

    /**
     * Test setNivRuptClasse6()
     *
     * @return void
     */
    public function testSetNivRuptClasse6(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse6("nivRuptClasse6");
        $this->assertEquals("nivRuptClasse6", $obj->getNivRuptClasse6());
    }

    /**
     * Test setNivRuptClasse7()
     *
     * @return void
     */
    public function testSetNivRuptClasse7(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse7("nivRuptClasse7");
        $this->assertEquals("nivRuptClasse7", $obj->getNivRuptClasse7());
    }

    /**
     * Test setNivRuptClasse8()
     *
     * @return void
     */
    public function testSetNivRuptClasse8(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse8("nivRuptClasse8");
        $this->assertEquals("nivRuptClasse8", $obj->getNivRuptClasse8());
    }

    /**
     * Test setNivRuptClasse9()
     *
     * @return void
     */
    public function testSetNivRuptClasse9(): void {

        $obj = new Dossier2();

        $obj->setNivRuptClasse9("nivRuptClasse9");
        $this->assertEquals("nivRuptClasse9", $obj->getNivRuptClasse9());
    }

    /**
     * Test setPositionPieceLettrage()
     *
     * @return void
     */
    public function testSetPositionPieceLettrage(): void {

        $obj = new Dossier2();

        $obj->setPositionPieceLettrage(10);
        $this->assertEquals(10, $obj->getPositionPieceLettrage());
    }

    /**
     * Test setProchainLotEcrit()
     *
     * @return void
     */
    public function testSetProchainLotEcrit(): void {

        $obj = new Dossier2();

        $obj->setProchainLotEcrit(10);
        $this->assertEquals(10, $obj->getProchainLotEcrit());
    }

    /**
     * Test setProchainLotFactor()
     *
     * @return void
     */
    public function testSetProchainLotFactor(): void {

        $obj = new Dossier2();

        $obj->setProchainLotFactor(10);
        $this->assertEquals(10, $obj->getProchainLotFactor());
    }

    /**
     * Test setProchainNumEcrEco()
     *
     * @return void
     */
    public function testSetProchainNumEcrEco(): void {

        $obj = new Dossier2();

        $obj->setProchainNumEcrEco(10);
        $this->assertEquals(10, $obj->getProchainNumEcrEco());
    }

    /**
     * Test setProchainNumLotVmp()
     *
     * @return void
     */
    public function testSetProchainNumLotVmp(): void {

        $obj = new Dossier2();

        $obj->setProchainNumLotVmp(10);
        $this->assertEquals(10, $obj->getProchainNumLotVmp());
    }

    /**
     * Test setProvCpCptBrut()
     *
     * @return void
     */
    public function testSetProvCpCptBrut(): void {

        $obj = new Dossier2();

        $obj->setProvCpCptBrut("provCpCptBrut");
        $this->assertEquals("provCpCptBrut", $obj->getProvCpCptBrut());
    }

    /**
     * Test setProvCpCptCapCh()
     *
     * @return void
     */
    public function testSetProvCpCptCapCh(): void {

        $obj = new Dossier2();

        $obj->setProvCpCptCapCh("provCpCptCapCh");
        $this->assertEquals("provCpCptCapCh", $obj->getProvCpCptCapCh());
    }

    /**
     * Test setProvCpCptCapcp()
     *
     * @return void
     */
    public function testSetProvCpCptCapcp(): void {

        $obj = new Dossier2();

        $obj->setProvCpCptCapcp("provCpCptCapcp");
        $this->assertEquals("provCpCptCapcp", $obj->getProvCpCptCapcp());
    }

    /**
     * Test setProvCpCptCharges()
     *
     * @return void
     */
    public function testSetProvCpCptCharges(): void {

        $obj = new Dossier2();

        $obj->setProvCpCptCharges("provCpCptCharges");
        $this->assertEquals("provCpCptCharges", $obj->getProvCpCptCharges());
    }

    /**
     * Test setProvMini()
     *
     * @return void
     */
    public function testSetProvMini(): void {

        $obj = new Dossier2();

        $obj->setProvMini(10.092018);
        $this->assertEquals(10.092018, $obj->getProvMini());
    }

    /**
     * Test setPublication()
     *
     * @return void
     */
    public function testSetPublication(): void {

        $obj = new Dossier2();

        $obj->setPublication(true);
        $this->assertTrue($obj->getPublication());
    }

    /**
     * Test setQimg2CptEncours()
     *
     * @return void
     */
    public function testSetQimg2CptEncours(): void {

        $obj = new Dossier2();

        $obj->setQimg2CptEncours(10);
        $this->assertEquals(10, $obj->getQimg2CptEncours());
    }

    /**
     * Test setQimg2CptEnvoi()
     *
     * @return void
     */
    public function testSetQimg2CptEnvoi(): void {

        $obj = new Dossier2();

        $obj->setQimg2CptEnvoi(10);
        $this->assertEquals(10, $obj->getQimg2CptEnvoi());
    }

    /**
     * Test setRappDads1Obs()
     *
     * @return void
     */
    public function testSetRappDads1Obs(): void {

        $obj = new Dossier2();

        $obj->setRappDads1Obs("rappDads1Obs");
        $this->assertEquals("rappDads1Obs", $obj->getRappDads1Obs());
    }

    /**
     * Test setRelanceAdresseCpt()
     *
     * @return void
     */
    public function testSetRelanceAdresseCpt(): void {

        $obj = new Dossier2();

        $obj->setRelanceAdresseCpt(true);
        $this->assertTrue($obj->getRelanceAdresseCpt());
    }

    /**
     * Test setRffCptExploitant()
     *
     * @return void
     */
    public function testSetRffCptExploitant(): void {

        $obj = new Dossier2();

        $obj->setRffCptExploitant("rffCptExploitant");
        $this->assertEquals("rffCptExploitant", $obj->getRffCptExploitant());
    }

    /**
     * Test setRffCptInterets()
     *
     * @return void
     */
    public function testSetRffCptInterets(): void {

        $obj = new Dossier2();

        $obj->setRffCptInterets("rffCptInterets");
        $this->assertEquals("rffCptInterets", $obj->getRffCptInterets());
    }

    /**
     * Test setRffCptRegul()
     *
     * @return void
     */
    public function testSetRffCptRegul(): void {

        $obj = new Dossier2();

        $obj->setRffCptRegul("rffCptRegul");
        $this->assertEquals("rffCptRegul", $obj->getRffCptRegul());
    }

    /**
     * Test setRffDateLotEcr()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetRffDateLotEcr(): void {

        // Set a Date/time mock.
        $rffDateLotEcr = new DateTime("2018-09-10");

        $obj = new Dossier2();

        $obj->setRffDateLotEcr($rffDateLotEcr);
        $this->assertSame($rffDateLotEcr, $obj->getRffDateLotEcr());
    }

    /**
     * Test setRffDecouvertsAvances()
     *
     * @return void
     */
    public function testSetRffDecouvertsAvances(): void {

        $obj = new Dossier2();

        $obj->setRffDecouvertsAvances(10.092018);
        $this->assertEquals(10.092018, $obj->getRffDecouvertsAvances());
    }

    /**
     * Test setRffInteretsEmprunts()
     *
     * @return void
     */
    public function testSetRffInteretsEmprunts(): void {

        $obj = new Dossier2();

        $obj->setRffInteretsEmprunts(10.092018);
        $this->assertEquals(10.092018, $obj->getRffInteretsEmprunts());
    }

    /**
     * Test setRffLimite()
     *
     * @return void
     */
    public function testSetRffLimite(): void {

        $obj = new Dossier2();

        $obj->setRffLimite(10.092018);
        $this->assertEquals(10.092018, $obj->getRffLimite());
    }

    /**
     * Test setRffMttRegul()
     *
     * @return void
     */
    public function testSetRffMttRegul(): void {

        $obj = new Dossier2();

        $obj->setRffMttRegul(10.092018);
        $this->assertEquals(10.092018, $obj->getRffMttRegul());
    }

    /**
     * Test setRffMttRff()
     *
     * @return void
     */
    public function testSetRffMttRff(): void {

        $obj = new Dossier2();

        $obj->setRffMttRff(10.092018);
        $this->assertEquals(10.092018, $obj->getRffMttRff());
    }

    /**
     * Test setRffNumLotEcr()
     *
     * @return void
     */
    public function testSetRffNumLotEcr(): void {

        $obj = new Dossier2();

        $obj->setRffNumLotEcr(10);
        $this->assertEquals(10, $obj->getRffNumLotEcr());
    }

    /**
     * Test setRffType()
     *
     * @return void
     */
    public function testSetRffType(): void {

        $obj = new Dossier2();

        $obj->setRffType(10);
        $this->assertEquals(10, $obj->getRffType());
    }

    /**
     * Test setTexteRelance0()
     *
     * @return void
     */
    public function testSetTexteRelance0(): void {

        $obj = new Dossier2();

        $obj->setTexteRelance0("texteRelance0");
        $this->assertEquals("texteRelance0", $obj->getTexteRelance0());
    }

    /**
     * Test setTexteRelance1()
     *
     * @return void
     */
    public function testSetTexteRelance1(): void {

        $obj = new Dossier2();

        $obj->setTexteRelance1("texteRelance1");
        $this->assertEquals("texteRelance1", $obj->getTexteRelance1());
    }

    /**
     * Test setTexteRelance2()
     *
     * @return void
     */
    public function testSetTexteRelance2(): void {

        $obj = new Dossier2();

        $obj->setTexteRelance2("texteRelance2");
        $this->assertEquals("texteRelance2", $obj->getTexteRelance2());
    }

    /**
     * Test setTexteRelance3()
     *
     * @return void
     */
    public function testSetTexteRelance3(): void {

        $obj = new Dossier2();

        $obj->setTexteRelance3("texteRelance3");
        $this->assertEquals("texteRelance3", $obj->getTexteRelance3());
    }

    /**
     * Test setTexteRelance4()
     *
     * @return void
     */
    public function testSetTexteRelance4(): void {

        $obj = new Dossier2();

        $obj->setTexteRelance4("texteRelance4");
        $this->assertEquals("texteRelance4", $obj->getTexteRelance4());
    }

    /**
     * Test setTresoComptesAExclure()
     *
     * @return void
     */
    public function testSetTresoComptesAExclure(): void {

        $obj = new Dossier2();

        $obj->setTresoComptesAExclure("tresoComptesAExclure");
        $this->assertEquals("tresoComptesAExclure", $obj->getTresoComptesAExclure());
    }

    /**
     * Test setUtiliseQuantite2()
     *
     * @return void
     */
    public function testSetUtiliseQuantite2(): void {

        $obj = new Dossier2();

        $obj->setUtiliseQuantite2(true);
        $this->assertTrue($obj->getUtiliseQuantite2());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Dossier2();

        $this->assertNull($obj->getAnneeRecolte());
        $this->assertNull($obj->getAppliquerRegroupement());
        $this->assertNull($obj->getCcaMemo());
        $this->assertNull($obj->getClasse4ClientDebut());
        $this->assertNull($obj->getClasse4ClientFin());
        $this->assertNull($obj->getClasse4FrnDebut());
        $this->assertNull($obj->getClasse4FrnFin());
        $this->assertNull($obj->getCodifClasse0());
        $this->assertNull($obj->getCodifClasse0Seule());
        $this->assertNull($obj->getCodifClasse9());
        $this->assertNull($obj->getCodifClasse9Seule());
        $this->assertNull($obj->getCollectifClientDebut());
        $this->assertNull($obj->getCollectifClientDefaut());
        $this->assertNull($obj->getCollectifClientFin());
        $this->assertNull($obj->getCollectifFrnDebut());
        $this->assertNull($obj->getCollectifFrnDefaut());
        $this->assertNull($obj->getCollectifFrnFin());
        $this->assertNull($obj->getCollectifSocDebut());
        $this->assertNull($obj->getCollectifSocFin());
        $this->assertNull($obj->getCombiLettrageAuto());
        $this->assertNull($obj->getCommentaireDossier());
        $this->assertNull($obj->getControlSalaireCptEx());
        $this->assertNull($obj->getControlSalaireObs());
        $this->assertNull($obj->getDads1LivrePaie());
        $this->assertNull($obj->getDads1Paie());
        $this->assertNull($obj->getDads1RemuMoins());
        $this->assertNull($obj->getDads1RemuPlus());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDateCalculProvCp());
        $this->assertNull($obj->getDatePublication());
        $this->assertNull($obj->getDateRazEcritures());
        $this->assertNull($obj->getDernierCompteClient());
        $this->assertNull($obj->getDernierCompteFrn());
        $this->assertNull($obj->getDiffLettrageCodeJournal());
        $this->assertNull($obj->getDiffLettrageCodeLibelle());
        $this->assertNull($obj->getDiffLettrageFolio());
        $this->assertNull($obj->getDiffLettrageGains());
        $this->assertNull($obj->getDiffLettrageLibelle());
        $this->assertNull($obj->getDiffLettragePertes());
        $this->assertNull($obj->getEcartMaxiLettrageAuto());
        $this->assertNull($obj->getEcartMiniCtrlTva());
        $this->assertNull($obj->getEditerEnCfa());
        $this->assertNull($obj->getEtatProvCpObs());
        $this->assertNull($obj->getFaireControleLettrage());
        $this->assertNull($obj->getIncrementCompteAuto());
        $this->assertNull($obj->getLibellePlusDe30Carac());
        $this->assertNull($obj->getLienSaiImmos());
        $this->assertNull($obj->getLongueurPieceLettrage());
        $this->assertNull($obj->getNbComptesRaz());
        $this->assertNull($obj->getNbDecimalesMt());
        $this->assertNull($obj->getNbEcrAFacturerCloture());
        $this->assertNull($obj->getNbEcrituresRaz());
        $this->assertNull($obj->getNbJourBaseCp());
        $this->assertNull($obj->getNivRuptClasse0());
        $this->assertNull($obj->getNivRuptClasse1());
        $this->assertNull($obj->getNivRuptClasse2());
        $this->assertNull($obj->getNivRuptClasse3());
        $this->assertNull($obj->getNivRuptClasse4());
        $this->assertNull($obj->getNivRuptClasse5());
        $this->assertNull($obj->getNivRuptClasse6());
        $this->assertNull($obj->getNivRuptClasse7());
        $this->assertNull($obj->getNivRuptClasse8());
        $this->assertNull($obj->getNivRuptClasse9());
        $this->assertNull($obj->getPositionPieceLettrage());
        $this->assertNull($obj->getProchainLotEcrit());
        $this->assertNull($obj->getProchainLotFactor());
        $this->assertNull($obj->getProchainNumEcrEco());
        $this->assertNull($obj->getProchainNumLotVmp());
        $this->assertNull($obj->getProvCpCptBrut());
        $this->assertNull($obj->getProvCpCptCapcp());
        $this->assertNull($obj->getProvCpCptCapCh());
        $this->assertNull($obj->getProvCpCptCharges());
        $this->assertNull($obj->getProvMini());
        $this->assertNull($obj->getPublication());
        $this->assertNull($obj->getQimg2CptEncours());
        $this->assertNull($obj->getQimg2CptEnvoi());
        $this->assertNull($obj->getRffCptExploitant());
        $this->assertNull($obj->getRffCptInterets());
        $this->assertNull($obj->getRffCptRegul());
        $this->assertNull($obj->getRffDateLotEcr());
        $this->assertNull($obj->getRffDecouvertsAvances());
        $this->assertNull($obj->getRffInteretsEmprunts());
        $this->assertNull($obj->getRffLimite());
        $this->assertNull($obj->getRffMttRff());
        $this->assertNull($obj->getRffMttRegul());
        $this->assertNull($obj->getRffNumLotEcr());
        $this->assertNull($obj->getRffType());
        $this->assertNull($obj->getRappDads1Obs());
        $this->assertNull($obj->getRelanceAdresseCpt());
        $this->assertNull($obj->getTexteRelance0());
        $this->assertNull($obj->getTexteRelance1());
        $this->assertNull($obj->getTexteRelance2());
        $this->assertNull($obj->getTexteRelance3());
        $this->assertNull($obj->getTexteRelance4());
        $this->assertNull($obj->getTresoComptesAExclure());
        $this->assertNull($obj->getUtiliseQuantite2());
    }
}
