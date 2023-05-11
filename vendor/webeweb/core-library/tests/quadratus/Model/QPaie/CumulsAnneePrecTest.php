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

use WBW\Library\Quadratus\Model\QPaie\CumulsAnneePrec;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cumuls annee prec test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class CumulsAnneePrecTest extends AbstractTestCase {

    /**
     * Test setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new CumulsAnneePrec();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Test setCum30Ss()
     *
     * @return void
     */
    public function testSetCum30Ss(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCum30Ss(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30Ss());
    }

    /**
     * Test setCumBaseCsg()
     *
     * @return void
     */
    public function testSetCumBaseCsg(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseCsg());
    }

    /**
     * Test setCumBaseGmp()
     *
     * @return void
     */
    public function testSetCumBaseGmp(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGmp());
    }

    /**
     * Test setCumBaseSs()
     *
     * @return void
     */
    public function testSetCumBaseSs(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseSs(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSs());
    }

    /**
     * Test setCumBaseTr2()
     *
     * @return void
     */
    public function testSetCumBaseTr2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTr2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTr2());
    }

    /**
     * Test setCumBaseTrA()
     *
     * @return void
     */
    public function testSetCumBaseTrA(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrA());
    }

    /**
     * Test setCumBaseTrACaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse1());
    }

    /**
     * Test setCumBaseTrACaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse2());
    }

    /**
     * Test setCumBaseTrACaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse3());
    }

    /**
     * Test setCumBaseTrB()
     *
     * @return void
     */
    public function testSetCumBaseTrB(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrB());
    }

    /**
     * Test setCumBaseTrBCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse1());
    }

    /**
     * Test setCumBaseTrBCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse2());
    }

    /**
     * Test setCumBaseTrBCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrBCaisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrBCaisse3());
    }

    /**
     * Test setCumBaseTrC()
     *
     * @return void
     */
    public function testSetCumBaseTrC(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrC());
    }

    /**
     * Test setCumBaseTrCCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse1());
    }

    /**
     * Test setCumBaseTrCCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse2());
    }

    /**
     * Test setCumBaseTrCCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrCCaisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrCCaisse3());
    }

    /**
     * Test setCumBaseTrD()
     *
     * @return void
     */
    public function testSetCumBaseTrD(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD());
    }

    /**
     * Test setCumBaseTrD1()
     *
     * @return void
     */
    public function testSetCumBaseTrD1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1());
    }

    /**
     * Test setCumBaseTrD1Caisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse1());
    }

    /**
     * Test setCumBaseTrD1Caisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse2());
    }

    /**
     * Test setCumBaseTrD1Caisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrD1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse3());
    }

    /**
     * Test setCumBaseTrDCaisse1()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrDCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse1());
    }

    /**
     * Test setCumBaseTrDCaisse2()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrDCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse2());
    }

    /**
     * Test setCumBaseTrDCaisse3()
     *
     * @return void
     */
    public function testSetCumBaseTrDCaisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBaseTrDCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrDCaisse3());
    }

    /**
     * Test setCumBrutAbatNonLim()
     *
     * @return void
     */
    public function testSetCumBrutAbatNonLim(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutAbatNonLim(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAbatNonLim());
    }

    /**
     * Test setCumBrutAl()
     *
     * @return void
     */
    public function testSetCumBrutAl(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutAl(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAl());
    }

    /**
     * Test setCumBrutAlSansSi()
     *
     * @return void
     */
    public function testSetCumBrutAlSansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutAlSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAlSansSi());
    }

    /**
     * Test setCumBrutCaisse1()
     *
     * @return void
     */
    public function testSetCumBrutCaisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Test setCumBrutCaisse2()
     *
     * @return void
     */
    public function testSetCumBrutCaisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Test setCumBrutCaisse3()
     *
     * @return void
     */
    public function testSetCumBrutCaisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Test setCumBrutNonAbattu()
     *
     * @return void
     */
    public function testSetCumBrutNonAbattu(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumBrutNonAbattu(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutNonAbattu());
    }

    /**
     * Test setCumCpDus()
     *
     * @return void
     */
    public function testSetCumCpDus(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus());
    }

    /**
     * Test setCumCpDus1()
     *
     * @return void
     */
    public function testSetCumCpDus1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpDus1());
    }

    /**
     * Test setCumCpPris()
     *
     * @return void
     */
    public function testSetCumCpPris(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris());
    }

    /**
     * Test setCumCpPris1()
     *
     * @return void
     */
    public function testSetCumCpPris1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumCpPris1());
    }

    /**
     * Test setCumDifDus()
     *
     * @return void
     */
    public function testSetCumDifDus(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus());
    }

    /**
     * Test setCumDifDus1()
     *
     * @return void
     */
    public function testSetCumDifDus1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumDifDus1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDifDus1());
    }

    /**
     * Test setCumHBonifie()
     *
     * @return void
     */
    public function testSetCumHBonifie(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Test setCumHReposRemplace()
     *
     * @return void
     */
    public function testSetCumHReposRemplace(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Test setCumHService()
     *
     * @return void
     */
    public function testSetCumHService(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Test setCumHSup()
     *
     * @return void
     */
    public function testSetCumHSup(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSup());
    }

    /**
     * Test setCumHSupRcit()
     *
     * @return void
     */
    public function testSetCumHSupRcit(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHSupRcit(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHSupRcit());
    }

    /**
     * Test setCumHeurePaye()
     *
     * @return void
     */
    public function testSetCumHeurePaye(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeurePaye());
    }

    /**
     * Test setCumHeureTrav()
     *
     * @return void
     */
    public function testSetCumHeureTrav(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHeureTrav());
    }

    /**
     * Test setCumJReposRecup()
     *
     * @return void
     */
    public function testSetCumJReposRecup(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Test setCumJourPaye()
     *
     * @return void
     */
    public function testSetCumJourPaye(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumJourPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourPaye());
    }

    /**
     * Test setCumJourTrav()
     *
     * @return void
     */
    public function testSetCumJourTrav(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJourTrav());
    }

    /**
     * Test setCumMtCpPris()
     *
     * @return void
     */
    public function testSetCumMtCpPris(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Test setCumMtCpPris1()
     *
     * @return void
     */
    public function testSetCumMtCpPris1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumMtCpPris1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris1());
    }

    /**
     * Test setCumNetAPayer()
     *
     * @return void
     */
    public function testSetCumNetAPayer(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Test setCumNetImposable()
     *
     * @return void
     */
    public function testSetCumNetImposable(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumNetImposable(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetImposable());
    }

    /**
     * Test setCumPlaf1Caisse1()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Test setCumPlaf1Caisse2()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Test setCumPlaf1Caisse3()
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Test setCumPlaf2Caisse1()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Test setCumPlaf2Caisse2()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Test setCumPlaf2Caisse3()
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Test setCumPlafondGmp()
     *
     * @return void
     */
    public function testSetCumPlafondGmp(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlafondGmp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGmp());
    }

    /**
     * Test setCumPlafondSs1()
     *
     * @return void
     */
    public function testSetCumPlafondSs1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlafondSs1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs1());
    }

    /**
     * Test setCumPlafondSs2()
     *
     * @return void
     */
    public function testSetCumPlafondSs2(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumPlafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs2());
    }

    /**
     * Test setCumProvCp()
     *
     * @return void
     */
    public function testSetCumProvCp(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp());
    }

    /**
     * Test setCumProvCp1()
     *
     * @return void
     */
    public function testSetCumProvCp1(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumProvCp1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp1());
    }

    /**
     * Test setCumReposComp()
     *
     * @return void
     */
    public function testSetCumReposComp(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumReposComp());
    }

    /**
     * Test setCumRttDus()
     *
     * @return void
     */
    public function testSetCumRttDus(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Test setCumRttPris()
     *
     * @return void
     */
    public function testSetCumRttPris(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Test setCumTotSi()
     *
     * @return void
     */
    public function testSetCumTotSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTotSi());
    }

    /**
     * Test setCumTranche2SansSi()
     *
     * @return void
     */
    public function testSetCumTranche2SansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTranche2SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2SansSi());
    }

    /**
     * Test setCumTranche2Si()
     *
     * @return void
     */
    public function testSetCumTranche2Si(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }

    /**
     * Test setCumTrancheASansSi()
     *
     * @return void
     */
    public function testSetCumTrancheASansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheASansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheASansSi());
    }

    /**
     * Test setCumTrancheAsi()
     *
     * @return void
     */
    public function testSetCumTrancheAsi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheAsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheAsi());
    }

    /**
     * Test setCumTrancheBSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheBSansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheBSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBSansSi());
    }

    /**
     * Test setCumTrancheBsi()
     *
     * @return void
     */
    public function testSetCumTrancheBsi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheBsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheBsi());
    }

    /**
     * Test setCumTrancheCSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheCSansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheCSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCSansSi());
    }

    /**
     * Test setCumTrancheCsi()
     *
     * @return void
     */
    public function testSetCumTrancheCsi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheCsi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheCsi());
    }

    /**
     * Test setCumTrancheD1SansSi()
     *
     * @return void
     */
    public function testSetCumTrancheD1SansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheD1SansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheD1SansSi());
    }

    /**
     * Test setCumTrancheDSansSi()
     *
     * @return void
     */
    public function testSetCumTrancheDSansSi(): void {

        $obj = new CumulsAnneePrec();

        $obj->setCumTrancheDSansSi(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheDSansSi());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new CumulsAnneePrec();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CumulsAnneePrec();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getCum30Ss());
        $this->assertNull($obj->getCumBaseCsg());
        $this->assertNull($obj->getCumBaseGmp());
        $this->assertNull($obj->getCumBaseSs());
        $this->assertNull($obj->getCumBaseTr2());
        $this->assertNull($obj->getCumBaseTrA());
        $this->assertNull($obj->getCumBaseTrACaisse1());
        $this->assertNull($obj->getCumBaseTrACaisse2());
        $this->assertNull($obj->getCumBaseTrACaisse3());
        $this->assertNull($obj->getCumBaseTrB());
        $this->assertNull($obj->getCumBaseTrBCaisse1());
        $this->assertNull($obj->getCumBaseTrBCaisse2());
        $this->assertNull($obj->getCumBaseTrBCaisse3());
        $this->assertNull($obj->getCumBaseTrC());
        $this->assertNull($obj->getCumBaseTrCCaisse1());
        $this->assertNull($obj->getCumBaseTrCCaisse2());
        $this->assertNull($obj->getCumBaseTrCCaisse3());
        $this->assertNull($obj->getCumBaseTrD());
        $this->assertNull($obj->getCumBaseTrD1());
        $this->assertNull($obj->getCumBaseTrD1Caisse1());
        $this->assertNull($obj->getCumBaseTrD1Caisse2());
        $this->assertNull($obj->getCumBaseTrD1Caisse3());
        $this->assertNull($obj->getCumBaseTrDCaisse1());
        $this->assertNull($obj->getCumBaseTrDCaisse2());
        $this->assertNull($obj->getCumBaseTrDCaisse3());
        $this->assertNull($obj->getCumBrutAbatNonLim());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumBrutNonAbattu());
        $this->assertNull($obj->getCumBrutAl());
        $this->assertNull($obj->getCumBrutAlSansSi());
        $this->assertNull($obj->getCumCpDus());
        $this->assertNull($obj->getCumCpDus1());
        $this->assertNull($obj->getCumCpPris());
        $this->assertNull($obj->getCumCpPris1());
        $this->assertNull($obj->getCumDifDus());
        $this->assertNull($obj->getCumDifDus1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumHReposRemplace());
        $this->assertNull($obj->getCumHService());
        $this->assertNull($obj->getCumHSup());
        $this->assertNull($obj->getCumHSupRcit());
        $this->assertNull($obj->getCumHeurePaye());
        $this->assertNull($obj->getCumHeureTrav());
        $this->assertNull($obj->getCumJReposRecup());
        $this->assertNull($obj->getCumJourPaye());
        $this->assertNull($obj->getCumJourTrav());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumNetImposable());
        $this->assertNull($obj->getCumPlaf1Caisse1());
        $this->assertNull($obj->getCumPlaf1Caisse2());
        $this->assertNull($obj->getCumPlaf1Caisse3());
        $this->assertNull($obj->getCumPlaf2Caisse1());
        $this->assertNull($obj->getCumPlaf2Caisse2());
        $this->assertNull($obj->getCumPlaf2Caisse3());
        $this->assertNull($obj->getCumPlafondGmp());
        $this->assertNull($obj->getCumPlafondSs1());
        $this->assertNull($obj->getCumPlafondSs2());
        $this->assertNull($obj->getCumProvCp());
        $this->assertNull($obj->getCumProvCp1());
        $this->assertNull($obj->getCumReposComp());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTotSi());
        $this->assertNull($obj->getCumTranche2Si());
        $this->assertNull($obj->getCumTranche2SansSi());
        $this->assertNull($obj->getCumTrancheAsi());
        $this->assertNull($obj->getCumTrancheASansSi());
        $this->assertNull($obj->getCumTrancheBsi());
        $this->assertNull($obj->getCumTrancheBSansSi());
        $this->assertNull($obj->getCumTrancheCsi());
        $this->assertNull($obj->getCumTrancheCSansSi());
        $this->assertNull($obj->getCumTrancheD1SansSi());
        $this->assertNull($obj->getCumTrancheDSansSi());
        $this->assertNull($obj->getNumeroEmploye());
    }
}
