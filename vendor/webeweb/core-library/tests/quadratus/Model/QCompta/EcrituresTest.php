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
use WBW\Library\Quadratus\Model\QCompta\Ecritures;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Ecritures test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class EcrituresTest extends AbstractTestCase {

    /**
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Ecritures();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Ecritures();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Test setBonsAPayer()
     *
     * @return void
     */
    public function testSetBonsAPayer(): void {

        $obj = new Ecritures();

        $obj->setBonsAPayer(true);
        $this->assertTrue($obj->getBonsAPayer());
    }

    /**
     * Test setCentre()
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new Ecritures();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Test setCentreSimple()
     *
     * @return void
     */
    public function testSetCentreSimple(): void {

        $obj = new Ecritures();

        $obj->setCentreSimple("centreSimple");
        $this->assertEquals("centreSimple", $obj->getCentreSimple());
    }

    /**
     * Test setClientOuFrn()
     *
     * @return void
     */
    public function testSetClientOuFrn(): void {

        $obj = new Ecritures();

        $obj->setClientOuFrn("clientOuFrn");
        $this->assertEquals("clientOuFrn", $obj->getClientOuFrn());
    }

    /**
     * Test setCodeBanque()
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new Ecritures();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Ecritures();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeJournal()
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Ecritures();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Test setCodeLettrage()
     *
     * @return void
     */
    public function testSetCodeLettrage(): void {

        $obj = new Ecritures();

        $obj->setCodeLettrage("codeLettrage");
        $this->assertEquals("codeLettrage", $obj->getCodeLettrage());
    }

    /**
     * Test setCodeLettrageTiers()
     *
     * @return void
     */
    public function testSetCodeLettrageTiers(): void {

        $obj = new Ecritures();

        $obj->setCodeLettrageTiers("codeLettrageTiers");
        $this->assertEquals("codeLettrageTiers", $obj->getCodeLettrageTiers());
    }

    /**
     * Test setCodeLibelleAuto()
     *
     * @return void
     */
    public function testSetCodeLibelleAuto(): void {

        $obj = new Ecritures();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Test setCodeOperateur()
     *
     * @return void
     */
    public function testSetCodeOperateur(): void {

        $obj = new Ecritures();

        $obj->setCodeOperateur("codeOperateur");
        $this->assertEquals("codeOperateur", $obj->getCodeOperateur());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Ecritures();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Test setCompteContrepartie()
     *
     * @return void
     */
    public function testSetCompteContrepartie(): void {

        $obj = new Ecritures();

        $obj->setCompteContrepartie("compteContrepartie");
        $this->assertEquals("compteContrepartie", $obj->getCompteContrepartie());
    }

    /**
     * Test setDateDecTva()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDecTva(): void {

        // Set a Date/time mock.
        $dateDecTva = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateDecTva($dateDecTva);
        $this->assertSame($dateDecTva, $obj->getDateDecTva());
    }

    /**
     * Test setDateEcheance()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Test setDatePointageAux()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePointageAux(): void {

        // Set a Date/time mock.
        $datePointageAux = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDatePointageAux($datePointageAux);
        $this->assertSame($datePointageAux, $obj->getDatePointageAux());
    }

    /**
     * Test setDateRapproBancaire()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateRapproBancaire(): void {

        // Set a Date/time mock.
        $dateRapproBancaire = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateRapproBancaire($dateRapproBancaire);
        $this->assertSame($dateRapproBancaire, $obj->getDateRapproBancaire());
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

        $obj = new Ecritures();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Test setDateSysValidation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSysValidation(): void {

        // Set a Date/time mock.
        $dateSysValidation = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateSysValidation($dateSysValidation);
        $this->assertSame($dateSysValidation, $obj->getDateSysValidation());
    }

    /**
     * Test setDomBanque()
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Ecritures();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Test setEcheanceSimple()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetEcheanceSimple(): void {

        // Set a Date/time mock.
        $echeanceSimple = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setEcheanceSimple($echeanceSimple);
        $this->assertSame($echeanceSimple, $obj->getEcheanceSimple());
    }

    /**
     * Test setEcritureNum()
     *
     * @return void
     */
    public function testSetEcritureNum(): void {

        $obj = new Ecritures();

        $obj->setEcritureNum("ecritureNum");
        $this->assertEquals("ecritureNum", $obj->getEcritureNum());
    }

    /**
     * Test setEnLitige()
     *
     * @return void
     */
    public function testSetEnLitige(): void {

        $obj = new Ecritures();

        $obj->setEnLitige(true);
        $this->assertTrue($obj->getEnLitige());
    }

    /**
     * Test setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Ecritures();

        $obj->setEtat(10);
        $this->assertEquals(10, $obj->getEtat());
    }

    /**
     * Test setFolio()
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new Ecritures();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Test setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Ecritures();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Test setJourEcriture()
     *
     * @return void
     */
    public function testSetJourEcriture(): void {

        $obj = new Ecritures();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Test setJrnRapproBancaire()
     *
     * @return void
     */
    public function testSetJrnRapproBancaire(): void {

        $obj = new Ecritures();

        $obj->setJrnRapproBancaire("jrnRapproBancaire");
        $this->assertEquals("jrnRapproBancaire", $obj->getJrnRapproBancaire());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Ecritures();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setLibelleMemo()
     *
     * @return void
     */
    public function testSetLibelleMemo(): void {

        $obj = new Ecritures();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Test setLigneFolio()
     *
     * @return void
     */
    public function testSetLigneFolio(): void {

        $obj = new Ecritures();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Test setMethodeTva()
     *
     * @return void
     */
    public function testSetMethodeTva(): void {

        $obj = new Ecritures();

        $obj->setMethodeTva("methodeTva");
        $this->assertEquals("methodeTva", $obj->getMethodeTva());
    }

    /**
     * Test setMilliemesAna()
     *
     * @return void
     */
    public function testSetMilliemesAna(): void {

        $obj = new Ecritures();

        $obj->setMilliemesAna(10.092018);
        $this->assertEquals(10.092018, $obj->getMilliemesAna());
    }

    /**
     * Test setModePaiement()
     *
     * @return void
     */
    public function testSetModePaiement(): void {

        $obj = new Ecritures();

        $obj->setModePaiement("modePaiement");
        $this->assertEquals("modePaiement", $obj->getModePaiement());
    }

    /**
     * Test setMontantAna()
     *
     * @return void
     */
    public function testSetMontantAna(): void {

        $obj = new Ecritures();

        $obj->setMontantAna(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAna());
    }

    /**
     * Test setMontantSaisiCredit()
     *
     * @return void
     */
    public function testSetMontantSaisiCredit(): void {

        $obj = new Ecritures();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Test setMontantSaisiDebit()
     *
     * @return void
     */
    public function testSetMontantSaisiDebit(): void {

        $obj = new Ecritures();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Test setMontantTenuCredit()
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new Ecritures();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Test setMontantTenuDebit()
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new Ecritures();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Test setMtDevForce()
     *
     * @return void
     */
    public function testSetMtDevForce(): void {

        $obj = new Ecritures();

        $obj->setMtDevForce(true);
        $this->assertTrue($obj->getMtDevForce());
    }

    /**
     * Test setNature()
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new Ecritures();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Test setNoLotEcritures()
     *
     * @return void
     */
    public function testSetNoLotEcritures(): void {

        $obj = new Ecritures();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Test setNoLotFactor()
     *
     * @return void
     */
    public function testSetNoLotFactor(): void {

        $obj = new Ecritures();

        $obj->setNoLotFactor(10);
        $this->assertEquals(10, $obj->getNoLotFactor());
    }

    /**
     * Test setNoLotIs()
     *
     * @return void
     */
    public function testSetNoLotIs(): void {

        $obj = new Ecritures();

        $obj->setNoLotIs(10);
        $this->assertEquals(10, $obj->getNoLotIs());
    }

    /**
     * Test setNoLotTrace()
     *
     * @return void
     */
    public function testSetNoLotTrace(): void {

        $obj = new Ecritures();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Test setNumCptOrigine()
     *
     * @return void
     */
    public function testSetNumCptOrigine(): void {

        $obj = new Ecritures();

        $obj->setNumCptOrigine("numCptOrigine");
        $this->assertEquals("numCptOrigine", $obj->getNumCptOrigine());
    }

    /**
     * Test setNumEcrEco()
     *
     * @return void
     */
    public function testSetNumEcrEco(): void {

        $obj = new Ecritures();

        $obj->setNumEcrEco(10);
        $this->assertEquals(10, $obj->getNumEcrEco());
    }

    /**
     * Test setNumEditLettrePaiement()
     *
     * @return void
     */
    public function testSetNumEditLettrePaiement(): void {

        $obj = new Ecritures();

        $obj->setNumEditLettrePaiement(10);
        $this->assertEquals(10, $obj->getNumEditLettrePaiement());
    }

    /**
     * Test setNumLettrage()
     *
     * @return void
     */
    public function testSetNumLettrage(): void {

        $obj = new Ecritures();

        $obj->setNumLettrage(10);
        $this->assertEquals(10, $obj->getNumLettrage());
    }

    /**
     * Test setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new Ecritures();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Test setNumMandat()
     *
     * @return void
     */
    public function testSetNumMandat(): void {

        $obj = new Ecritures();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Test setNumUniq()
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new Ecritures();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Ecritures();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setNumeroPiece()
     *
     * @return void
     */
    public function testSetNumeroPiece(): void {

        $obj = new Ecritures();

        $obj->setNumeroPiece("numeroPiece");
        $this->assertEquals("numeroPiece", $obj->getNumeroPiece());
    }

    /**
     * Test setPeriodeEcriture()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcriture(): void {

        // Set a Date/time mock.
        $periodeEcriture = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Test setPeriodiciteDebut()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodiciteDebut(): void {

        // Set a Date/time mock.
        $periodiciteDebut = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setPeriodiciteDebut($periodiciteDebut);
        $this->assertSame($periodiciteDebut, $obj->getPeriodiciteDebut());
    }

    /**
     * Test setPeriodiciteFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodiciteFin(): void {

        // Set a Date/time mock.
        $periodiciteFin = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setPeriodiciteFin($periodiciteFin);
        $this->assertSame($periodiciteFin, $obj->getPeriodiciteFin());
    }

    /**
     * Test setPieceInterne()
     *
     * @return void
     */
    public function testSetPieceInterne(): void {

        $obj = new Ecritures();

        $obj->setPieceInterne(10);
        $this->assertEquals(10, $obj->getPieceInterne());
    }

    /**
     * Test setPrctRepartition()
     *
     * @return void
     */
    public function testSetPrctRepartition(): void {

        $obj = new Ecritures();

        $obj->setPrctRepartition(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctRepartition());
    }

    /**
     * Test setQuantite()
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new Ecritures();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Test setQuantite2()
     *
     * @return void
     */
    public function testSetQuantite2(): void {

        $obj = new Ecritures();

        $obj->setQuantite2(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite2());
    }

    /**
     * Test setRapproBancaireOk()
     *
     * @return void
     */
    public function testSetRapproBancaireOk(): void {

        $obj = new Ecritures();

        $obj->setRapproBancaireOk(true);
        $this->assertTrue($obj->getRapproBancaireOk());
    }

    /**
     * Test setRefImage()
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Ecritures();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Test setReferenceTire()
     *
     * @return void
     */
    public function testSetReferenceTire(): void {

        $obj = new Ecritures();

        $obj->setReferenceTire("referenceTire");
        $this->assertEquals("referenceTire", $obj->getReferenceTire());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Ecritures();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setTvaE4Bi()
     *
     * @return void
     */
    public function testSetTvaE4Bi(): void {

        $obj = new Ecritures();

        $obj->setTvaE4Bi("tvaE4Bi");
        $this->assertEquals("tvaE4Bi", $obj->getTvaE4Bi());
    }

    /**
     * Test setTvaE4Dr()
     *
     * @return void
     */
    public function testSetTvaE4Dr(): void {

        $obj = new Ecritures();

        $obj->setTvaE4Dr("tvaE4Dr");
        $this->assertEquals("tvaE4Dr", $obj->getTvaE4Dr());
    }

    /**
     * Test setTvaE4Mt()
     *
     * @return void
     */
    public function testSetTvaE4Mt(): void {

        $obj = new Ecritures();

        $obj->setTvaE4Mt(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaE4Mt());
    }

    /**
     * Test setTypeLigne()
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new Ecritures();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Test setTypeSaisie()
     *
     * @return void
     */
    public function testSetTypeSaisie(): void {

        $obj = new Ecritures();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }

    /**
     * Test setValidee()
     *
     * @return void
     */
    public function testSetValidee(): void {

        $obj = new Ecritures();

        $obj->setValidee(true);
        $this->assertTrue($obj->getValidee());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Ecritures();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBonsAPayer());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCentreSimple());
        $this->assertNull($obj->getClientOuFrn());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeLettrage());
        $this->assertNull($obj->getCodeLettrageTiers());
        $this->assertNull($obj->getCodeLibelleAuto());
        $this->assertNull($obj->getCodeOperateur());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getDateDecTva());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDatePointageAux());
        $this->assertNull($obj->getDateRapproBancaire());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getDateSysValidation());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEcheanceSimple());
        $this->assertNull($obj->getEcritureNum());
        $this->assertNull($obj->getEnLitige());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getJrnRapproBancaire());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMethodeTva());
        $this->assertNull($obj->getMilliemesAna());
        $this->assertNull($obj->getModePaiement());
        $this->assertNull($obj->getMontantAna());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getMtDevForce());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getNoLotFactor());
        $this->assertNull($obj->getNoLotIs());
        $this->assertNull($obj->getNoLotTrace());
        $this->assertNull($obj->getNumCptOrigine());
        $this->assertNull($obj->getNumEcrEco());
        $this->assertNull($obj->getNumEditLettrePaiement());
        $this->assertNull($obj->getNumLettrage());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumMandat());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getPeriodiciteDebut());
        $this->assertNull($obj->getPeriodiciteFin());
        $this->assertNull($obj->getPieceInterne());
        $this->assertNull($obj->getPrctRepartition());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRapproBancaireOk());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTvaE4Bi());
        $this->assertNull($obj->getTvaE4Dr());
        $this->assertNull($obj->getTvaE4Mt());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeSaisie());
        $this->assertNull($obj->getValidee());
    }
}
