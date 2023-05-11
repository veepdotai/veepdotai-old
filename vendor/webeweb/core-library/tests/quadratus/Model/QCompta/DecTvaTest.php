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
use WBW\Library\Quadratus\Model\QCompta\DecTva;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dec tva test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class DecTvaTest extends AbstractTestCase {

    /**
     * Test setACorres1()
     *
     * @return void
     */
    public function testSetACorres1(): void {

        $obj = new DecTva();

        $obj->setACorres1("aCorres1");
        $this->assertEquals("aCorres1", $obj->getACorres1());
    }

    /**
     * Test setACorres2()
     *
     * @return void
     */
    public function testSetACorres2(): void {

        $obj = new DecTva();

        $obj->setACorres2("aCorres2");
        $this->assertEquals("aCorres2", $obj->getACorres2());
    }

    /**
     * Test setACorres3()
     *
     * @return void
     */
    public function testSetACorres3(): void {

        $obj = new DecTva();

        $obj->setACorres3("aCorres3");
        $this->assertEquals("aCorres3", $obj->getACorres3());
    }

    /**
     * Test setACorres4()
     *
     * @return void
     */
    public function testSetACorres4(): void {

        $obj = new DecTva();

        $obj->setACorres4("aCorres4");
        $this->assertEquals("aCorres4", $obj->getACorres4());
    }

    /**
     * Test setACorres5()
     *
     * @return void
     */
    public function testSetACorres5(): void {

        $obj = new DecTva();

        $obj->setACorres5("aCorres5");
        $this->assertEquals("aCorres5", $obj->getACorres5());
    }

    /**
     * Test setACorres6()
     *
     * @return void
     */
    public function testSetACorres6(): void {

        $obj = new DecTva();

        $obj->setACorres6("aCorres6");
        $this->assertEquals("aCorres6", $obj->getACorres6());
    }

    /**
     * Test setACorres7()
     *
     * @return void
     */
    public function testSetACorres7(): void {

        $obj = new DecTva();

        $obj->setACorres7("aCorres7");
        $this->assertEquals("aCorres7", $obj->getACorres7());
    }

    /**
     * Test setACorres8()
     *
     * @return void
     */
    public function testSetACorres8(): void {

        $obj = new DecTva();

        $obj->setACorres8("aCorres8");
        $this->assertEquals("aCorres8", $obj->getACorres8());
    }

    /**
     * Test setAz0990()
     *
     * @return void
     */
    public function testSetAz0990(): void {

        $obj = new DecTva();

        $obj->setAz0990(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990());
    }

    /**
     * Test setAz0990b()
     *
     * @return void
     */
    public function testSetAz0990b(): void {

        $obj = new DecTva();

        $obj->setAz0990b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz0990b());
    }

    /**
     * Test setAz1010()
     *
     * @return void
     */
    public function testSetAz1010(): void {

        $obj = new DecTva();

        $obj->setAz1010(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010());
    }

    /**
     * Test setAz1010b()
     *
     * @return void
     */
    public function testSetAz1010b(): void {

        $obj = new DecTva();

        $obj->setAz1010b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1010b());
    }

    /**
     * Test setAz1020()
     *
     * @return void
     */
    public function testSetAz1020(): void {

        $obj = new DecTva();

        $obj->setAz1020(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020());
    }

    /**
     * Test setAz1020b()
     *
     * @return void
     */
    public function testSetAz1020b(): void {

        $obj = new DecTva();

        $obj->setAz1020b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1020b());
    }

    /**
     * Test setAz1030()
     *
     * @return void
     */
    public function testSetAz1030(): void {

        $obj = new DecTva();

        $obj->setAz1030(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030());
    }

    /**
     * Test setAz1030b()
     *
     * @return void
     */
    public function testSetAz1030b(): void {

        $obj = new DecTva();

        $obj->setAz1030b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030b());
    }

    /**
     * Test setAz1040()
     *
     * @return void
     */
    public function testSetAz1040(): void {

        $obj = new DecTva();

        $obj->setAz1040(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1040());
    }

    /**
     * Test setAz1040b()
     *
     * @return void
     */
    public function testSetAz1040b(): void {

        $obj = new DecTva();

        $obj->setAz1040b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1040b());
    }

    /**
     * Test setAz1050()
     *
     * @return void
     */
    public function testSetAz1050(): void {

        $obj = new DecTva();

        $obj->setAz1050(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1050());
    }

    /**
     * Test setAz1050b()
     *
     * @return void
     */
    public function testSetAz1050b(): void {

        $obj = new DecTva();

        $obj->setAz1050b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1050b());
    }

    /**
     * Test setAz1080()
     *
     * @return void
     */
    public function testSetAz1080(): void {

        $obj = new DecTva();

        $obj->setAz1080(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1080());
    }

    /**
     * Test setAz1080b()
     *
     * @return void
     */
    public function testSetAz1080b(): void {

        $obj = new DecTva();

        $obj->setAz1080b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1080b());
    }

    /**
     * Test setAz1081()
     *
     * @return void
     */
    public function testSetAz1081(): void {

        $obj = new DecTva();

        $obj->setAz1081(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081());
    }

    /**
     * Test setAz1081b()
     *
     * @return void
     */
    public function testSetAz1081b(): void {

        $obj = new DecTva();

        $obj->setAz1081b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1081b());
    }

    /**
     * Test setAz1090()
     *
     * @return void
     */
    public function testSetAz1090(): void {

        $obj = new DecTva();

        $obj->setAz1090(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090());
    }

    /**
     * Test setAz1090b()
     *
     * @return void
     */
    public function testSetAz1090b(): void {

        $obj = new DecTva();

        $obj->setAz1090b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090b());
    }

    /**
     * Test setAz1100()
     *
     * @return void
     */
    public function testSetAz1100(): void {

        $obj = new DecTva();

        $obj->setAz1100(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1100());
    }

    /**
     * Test setAz1100b()
     *
     * @return void
     */
    public function testSetAz1100b(): void {

        $obj = new DecTva();

        $obj->setAz1100b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1100b());
    }

    /**
     * Test setAz1110()
     *
     * @return void
     */
    public function testSetAz1110(): void {

        $obj = new DecTva();

        $obj->setAz1110(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1110());
    }

    /**
     * Test setAz1110b()
     *
     * @return void
     */
    public function testSetAz1110b(): void {

        $obj = new DecTva();

        $obj->setAz1110b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1110b());
    }

    /**
     * Test setAz1120()
     *
     * @return void
     */
    public function testSetAz1120(): void {

        $obj = new DecTva();

        $obj->setAz1120(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120());
    }

    /**
     * Test setAz1120b()
     *
     * @return void
     */
    public function testSetAz1120b(): void {

        $obj = new DecTva();

        $obj->setAz1120b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1120b());
    }

    /**
     * Test setAz3240()
     *
     * @return void
     */
    public function testSetAz3240(): void {

        $obj = new DecTva();

        $obj->setAz3240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3240());
    }

    /**
     * Test setAz3260()
     *
     * @return void
     */
    public function testSetAz3260(): void {

        $obj = new DecTva();

        $obj->setAz3260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3260());
    }

    /**
     * Test setAz3510()
     *
     * @return void
     */
    public function testSetAz3510(): void {

        $obj = new DecTva();

        $obj->setAz3510(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3510());
    }

    /**
     * Test setAz3520()
     *
     * @return void
     */
    public function testSetAz3520(): void {

        $obj = new DecTva();

        $obj->setAz3520(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3520());
    }

    /**
     * Test setAz38Code()
     *
     * @return void
     */
    public function testSetAz38Code(): void {

        $obj = new DecTva();

        $obj->setAz38Code("az38Code");
        $this->assertEquals("az38Code", $obj->getAz38Code());
    }

    /**
     * Test setAz38Lib()
     *
     * @return void
     */
    public function testSetAz38Lib(): void {

        $obj = new DecTva();

        $obj->setAz38Lib("az38Lib");
        $this->assertEquals("az38Lib", $obj->getAz38Lib());
    }

    /**
     * Test setAz38b()
     *
     * @return void
     */
    public function testSetAz38b(): void {

        $obj = new DecTva();

        $obj->setAz38b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38b());
    }

    /**
     * Test setAz38ht()
     *
     * @return void
     */
    public function testSetAz38ht(): void {

        $obj = new DecTva();

        $obj->setAz38ht(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38ht());
    }

    /**
     * Test setAz3910()
     *
     * @return void
     */
    public function testSetAz3910(): void {

        $obj = new DecTva();

        $obj->setAz3910(10.092018);
        $this->assertEquals(10.092018, $obj->getAz3910());
    }

    /**
     * Test setAz4200()
     *
     * @return void
     */
    public function testSetAz4200(): void {

        $obj = new DecTva();

        $obj->setAz4200(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4200());
    }

    /**
     * Test setAz4201()
     *
     * @return void
     */
    public function testSetAz4201(): void {

        $obj = new DecTva();

        $obj->setAz4201(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4201());
    }

    /**
     * Test setAz4204()
     *
     * @return void
     */
    public function testSetAz4204(): void {

        $obj = new DecTva();

        $obj->setAz4204(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4204());
    }

    /**
     * Test setAz4206()
     *
     * @return void
     */
    public function testSetAz4206(): void {

        $obj = new DecTva();

        $obj->setAz4206(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4206());
    }

    /**
     * Test setAz4207()
     *
     * @return void
     */
    public function testSetAz4207(): void {

        $obj = new DecTva();

        $obj->setAz4207(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4207());
    }

    /**
     * Test setAz4208()
     *
     * @return void
     */
    public function testSetAz4208(): void {

        $obj = new DecTva();

        $obj->setAz4208(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4208());
    }

    /**
     * Test setAz4209()
     *
     * @return void
     */
    public function testSetAz4209(): void {

        $obj = new DecTva();

        $obj->setAz4209(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4209());
    }

    /**
     * Test setAz4210()
     *
     * @return void
     */
    public function testSetAz4210(): void {

        $obj = new DecTva();

        $obj->setAz4210(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4210());
    }

    /**
     * Test setAz4211()
     *
     * @return void
     */
    public function testSetAz4211(): void {

        $obj = new DecTva();

        $obj->setAz4211(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4211());
    }

    /**
     * Test setAz4212()
     *
     * @return void
     */
    public function testSetAz4212(): void {

        $obj = new DecTva();

        $obj->setAz4212(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4212());
    }

    /**
     * Test setAz4213()
     *
     * @return void
     */
    public function testSetAz4213(): void {

        $obj = new DecTva();

        $obj->setAz4213(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4213());
    }

    /**
     * Test setAz4215()
     *
     * @return void
     */
    public function testSetAz4215(): void {

        $obj = new DecTva();

        $obj->setAz4215(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4215());
    }

    /**
     * Test setAz4220()
     *
     * @return void
     */
    public function testSetAz4220(): void {

        $obj = new DecTva();

        $obj->setAz4220(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4220());
    }

    /**
     * Test setAz4222()
     *
     * @return void
     */
    public function testSetAz4222(): void {

        $obj = new DecTva();

        $obj->setAz4222(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4222());
    }

    /**
     * Test setAz4223()
     *
     * @return void
     */
    public function testSetAz4223(): void {

        $obj = new DecTva();

        $obj->setAz4223(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4223());
    }

    /**
     * Test setAz4224()
     *
     * @return void
     */
    public function testSetAz4224(): void {

        $obj = new DecTva();

        $obj->setAz4224(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4224());
    }

    /**
     * Test setAz4228Mtt()
     *
     * @return void
     */
    public function testSetAz4228Mtt(): void {

        $obj = new DecTva();

        $obj->setAz4228Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4228Mtt());
    }

    /**
     * Test setAz4230()
     *
     * @return void
     */
    public function testSetAz4230(): void {

        $obj = new DecTva();

        $obj->setAz4230(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4230());
    }

    /**
     * Test setAz4231()
     *
     * @return void
     */
    public function testSetAz4231(): void {

        $obj = new DecTva();

        $obj->setAz4231(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4231());
    }

    /**
     * Test setAz4232()
     *
     * @return void
     */
    public function testSetAz4232(): void {

        $obj = new DecTva();

        $obj->setAz4232(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4232());
    }

    /**
     * Test setAz4233()
     *
     * @return void
     */
    public function testSetAz4233(): void {

        $obj = new DecTva();

        $obj->setAz4233(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4233());
    }

    /**
     * Test setAz4234()
     *
     * @return void
     */
    public function testSetAz4234(): void {

        $obj = new DecTva();

        $obj->setAz4234(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4234());
    }

    /**
     * Test setAz4235()
     *
     * @return void
     */
    public function testSetAz4235(): void {

        $obj = new DecTva();

        $obj->setAz4235(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4235());
    }

    /**
     * Test setAz4236()
     *
     * @return void
     */
    public function testSetAz4236(): void {

        $obj = new DecTva();

        $obj->setAz4236(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4236());
    }

    /**
     * Test setAz4237()
     *
     * @return void
     */
    public function testSetAz4237(): void {

        $obj = new DecTva();

        $obj->setAz4237(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4237());
    }

    /**
     * Test setAz4238()
     *
     * @return void
     */
    public function testSetAz4238(): void {

        $obj = new DecTva();

        $obj->setAz4238(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4238());
    }

    /**
     * Test setAz4239()
     *
     * @return void
     */
    public function testSetAz4239(): void {

        $obj = new DecTva();

        $obj->setAz4239(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4239());
    }

    /**
     * Test setAz4240()
     *
     * @return void
     */
    public function testSetAz4240(): void {

        $obj = new DecTva();

        $obj->setAz4240(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240());
    }

    /**
     * Test setAz4241()
     *
     * @return void
     */
    public function testSetAz4241(): void {

        $obj = new DecTva();

        $obj->setAz4241(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4241());
    }

    /**
     * Test setAz4242()
     *
     * @return void
     */
    public function testSetAz4242(): void {

        $obj = new DecTva();

        $obj->setAz4242(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4242());
    }

    /**
     * Test setAz4243()
     *
     * @return void
     */
    public function testSetAz4243(): void {

        $obj = new DecTva();

        $obj->setAz4243(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4243());
    }

    /**
     * Test setAz4244()
     *
     * @return void
     */
    public function testSetAz4244(): void {

        $obj = new DecTva();

        $obj->setAz4244(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4244());
    }

    /**
     * Test setAz4245()
     *
     * @return void
     */
    public function testSetAz4245(): void {

        $obj = new DecTva();

        $obj->setAz4245(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4245());
    }

    /**
     * Test setAz4246()
     *
     * @return void
     */
    public function testSetAz4246(): void {

        $obj = new DecTva();

        $obj->setAz4246(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4246());
    }

    /**
     * Test setAz4247()
     *
     * @return void
     */
    public function testSetAz4247(): void {

        $obj = new DecTva();

        $obj->setAz4247(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4247());
    }

    /**
     * Test setAz4248()
     *
     * @return void
     */
    public function testSetAz4248(): void {

        $obj = new DecTva();

        $obj->setAz4248(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4248());
    }

    /**
     * Test setAz4249()
     *
     * @return void
     */
    public function testSetAz4249(): void {

        $obj = new DecTva();

        $obj->setAz4249(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4249());
    }

    /**
     * Test setAz4250()
     *
     * @return void
     */
    public function testSetAz4250(): void {

        $obj = new DecTva();

        $obj->setAz4250(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4250());
    }

    /**
     * Test setAz4251()
     *
     * @return void
     */
    public function testSetAz4251(): void {

        $obj = new DecTva();

        $obj->setAz4251(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4251());
    }

    /**
     * Test setAz4252()
     *
     * @return void
     */
    public function testSetAz4252(): void {

        $obj = new DecTva();

        $obj->setAz4252(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4252());
    }

    /**
     * Test setAz4254()
     *
     * @return void
     */
    public function testSetAz4254(): void {

        $obj = new DecTva();

        $obj->setAz4254(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4254());
    }

    /**
     * Test setAz4255()
     *
     * @return void
     */
    public function testSetAz4255(): void {

        $obj = new DecTva();

        $obj->setAz4255(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4255());
    }

    /**
     * Test setAz4256()
     *
     * @return void
     */
    public function testSetAz4256(): void {

        $obj = new DecTva();

        $obj->setAz4256(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4256());
    }

    /**
     * Test setAz4257()
     *
     * @return void
     */
    public function testSetAz4257(): void {

        $obj = new DecTva();

        $obj->setAz4257(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4257());
    }

    /**
     * Test setAz4258()
     *
     * @return void
     */
    public function testSetAz4258(): void {

        $obj = new DecTva();

        $obj->setAz4258(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4258());
    }

    /**
     * Test setAz4259()
     *
     * @return void
     */
    public function testSetAz4259(): void {

        $obj = new DecTva();

        $obj->setAz4259(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4259());
    }

    /**
     * Test setAz4260()
     *
     * @return void
     */
    public function testSetAz4260(): void {

        $obj = new DecTva();

        $obj->setAz4260(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4260());
    }

    /**
     * Test setAz4261()
     *
     * @return void
     */
    public function testSetAz4261(): void {

        $obj = new DecTva();

        $obj->setAz4261(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4261());
    }

    /**
     * Test setAz4262()
     *
     * @return void
     */
    public function testSetAz4262(): void {

        $obj = new DecTva();

        $obj->setAz4262(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4262());
    }

    /**
     * Test setAz4263()
     *
     * @return void
     */
    public function testSetAz4263(): void {

        $obj = new DecTva();

        $obj->setAz4263(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4263());
    }

    /**
     * Test setAz4264()
     *
     * @return void
     */
    public function testSetAz4264(): void {

        $obj = new DecTva();

        $obj->setAz4264(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4264());
    }

    /**
     * Test setAz4265()
     *
     * @return void
     */
    public function testSetAz4265(): void {

        $obj = new DecTva();

        $obj->setAz4265(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4265());
    }

    /**
     * Test setAz4266()
     *
     * @return void
     */
    public function testSetAz4266(): void {

        $obj = new DecTva();

        $obj->setAz4266(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4266());
    }

    /**
     * Test setAz4267()
     *
     * @return void
     */
    public function testSetAz4267(): void {

        $obj = new DecTva();

        $obj->setAz4267(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4267());
    }

    /**
     * Test setAz4268()
     *
     * @return void
     */
    public function testSetAz4268(): void {

        $obj = new DecTva();

        $obj->setAz4268(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268());
    }

    /**
     * Test setAz4268Base()
     *
     * @return void
     */
    public function testSetAz4268Base(): void {

        $obj = new DecTva();

        $obj->setAz4268Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4268Base());
    }

    /**
     * Test setAz4269()
     *
     * @return void
     */
    public function testSetAz4269(): void {

        $obj = new DecTva();

        $obj->setAz4269(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269());
    }

    /**
     * Test setAz4269Base()
     *
     * @return void
     */
    public function testSetAz4269Base(): void {

        $obj = new DecTva();

        $obj->setAz4269Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4269Base());
    }

    /**
     * Test setAz4270()
     *
     * @return void
     */
    public function testSetAz4270(): void {

        $obj = new DecTva();

        $obj->setAz4270(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270());
    }

    /**
     * Test setAz4270Base()
     *
     * @return void
     */
    public function testSetAz4270Base(): void {

        $obj = new DecTva();

        $obj->setAz4270Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base());
    }

    /**
     * Test setAz4271()
     *
     * @return void
     */
    public function testSetAz4271(): void {

        $obj = new DecTva();

        $obj->setAz4271(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271());
    }

    /**
     * Test setAz4271Base()
     *
     * @return void
     */
    public function testSetAz4271Base(): void {

        $obj = new DecTva();

        $obj->setAz4271Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4271Base());
    }

    /**
     * Test setAz4272()
     *
     * @return void
     */
    public function testSetAz4272(): void {

        $obj = new DecTva();

        $obj->setAz4272(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4272());
    }

    /**
     * Test setAz4274()
     *
     * @return void
     */
    public function testSetAz4274(): void {

        $obj = new DecTva();

        $obj->setAz4274(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4274());
    }

    /**
     * Test setAz4276()
     *
     * @return void
     */
    public function testSetAz4276(): void {

        $obj = new DecTva();

        $obj->setAz4276(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276());
    }

    /**
     * Test setAz4276Base()
     *
     * @return void
     */
    public function testSetAz4276Base(): void {

        $obj = new DecTva();

        $obj->setAz4276Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4276Base());
    }

    /**
     * Test setAz4277()
     *
     * @return void
     */
    public function testSetAz4277(): void {

        $obj = new DecTva();

        $obj->setAz4277(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277());
    }

    /**
     * Test setAz4277Base()
     *
     * @return void
     */
    public function testSetAz4277Base(): void {

        $obj = new DecTva();

        $obj->setAz4277Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4277Base());
    }

    /**
     * Test setAz50Code()
     *
     * @return void
     */
    public function testSetAz50Code(): void {

        $obj = new DecTva();

        $obj->setAz50Code("az50Code");
        $this->assertEquals("az50Code", $obj->getAz50Code());
    }

    /**
     * Test setAz50Lib()
     *
     * @return void
     */
    public function testSetAz50Lib(): void {

        $obj = new DecTva();

        $obj->setAz50Lib("az50Lib");
        $this->assertEquals("az50Lib", $obj->getAz50Lib());
    }

    /**
     * Test setAz50Mtt()
     *
     * @return void
     */
    public function testSetAz50Mtt(): void {

        $obj = new DecTva();

        $obj->setAz50Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz50Mtt());
    }

    /**
     * Test setAz59Code()
     *
     * @return void
     */
    public function testSetAz59Code(): void {

        $obj = new DecTva();

        $obj->setAz59Code("az59Code");
        $this->assertEquals("az59Code", $obj->getAz59Code());
    }

    /**
     * Test setAz59Lib()
     *
     * @return void
     */
    public function testSetAz59Lib(): void {

        $obj = new DecTva();

        $obj->setAz59Lib("az59Lib");
        $this->assertEquals("az59Lib", $obj->getAz59Lib());
    }

    /**
     * Test setAz59Mtt()
     *
     * @return void
     */
    public function testSetAz59Mtt(): void {

        $obj = new DecTva();

        $obj->setAz59Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAz59Mtt());
    }

    /**
     * Test setAzEnCode()
     *
     * @return void
     */
    public function testSetAzEnCode(): void {

        $obj = new DecTva();

        $obj->setAzEnCode("azEnCode");
        $this->assertEquals("azEnCode", $obj->getAzEnCode());
    }

    /**
     * Test setAzEnLib()
     *
     * @return void
     */
    public function testSetAzEnLib(): void {

        $obj = new DecTva();

        $obj->setAzEnLib("azEnLib");
        $this->assertEquals("azEnLib", $obj->getAzEnLib());
    }

    /**
     * Test setAzEsCode()
     *
     * @return void
     */
    public function testSetAzEsCode(): void {

        $obj = new DecTva();

        $obj->setAzEsCode("azEsCode");
        $this->assertEquals("azEsCode", $obj->getAzEsCode());
    }

    /**
     * Test setAzEsLib()
     *
     * @return void
     */
    public function testSetAzEsLib(): void {

        $obj = new DecTva();

        $obj->setAzEsLib("azEsLib");
        $this->assertEquals("azEsLib", $obj->getAzEsLib());
    }

    /**
     * Test setAzEsMtt()
     *
     * @return void
     */
    public function testSetAzEsMtt(): void {

        $obj = new DecTva();

        $obj->setAzEsMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEsMtt());
    }

    /**
     * Test setAzEuCode()
     *
     * @return void
     */
    public function testSetAzEuCode(): void {

        $obj = new DecTva();

        $obj->setAzEuCode("azEuCode");
        $this->assertEquals("azEuCode", $obj->getAzEuCode());
    }

    /**
     * Test setAzEuLib()
     *
     * @return void
     */
    public function testSetAzEuLib(): void {

        $obj = new DecTva();

        $obj->setAzEuLib("azEuLib");
        $this->assertEquals("azEuLib", $obj->getAzEuLib());
    }

    /**
     * Test setAzEuMtt()
     *
     * @return void
     */
    public function testSetAzEuMtt(): void {

        $obj = new DecTva();

        $obj->setAzEuMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEuMtt());
    }

    /**
     * Test setAzExCode()
     *
     * @return void
     */
    public function testSetAzExCode(): void {

        $obj = new DecTva();

        $obj->setAzExCode("azExCode");
        $this->assertEquals("azExCode", $obj->getAzExCode());
    }

    /**
     * Test setAzExLib()
     *
     * @return void
     */
    public function testSetAzExLib(): void {

        $obj = new DecTva();

        $obj->setAzExLib("azExLib");
        $this->assertEquals("azExLib", $obj->getAzExLib());
    }

    /**
     * Test setAzExMtt()
     *
     * @return void
     */
    public function testSetAzExMtt(): void {

        $obj = new DecTva();

        $obj->setAzExMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzExMtt());
    }

    /**
     * Test setAzEyCode()
     *
     * @return void
     */
    public function testSetAzEyCode(): void {

        $obj = new DecTva();

        $obj->setAzEyCode("azEyCode");
        $this->assertEquals("azEyCode", $obj->getAzEyCode());
    }

    /**
     * Test setAzEyLib()
     *
     * @return void
     */
    public function testSetAzEyLib(): void {

        $obj = new DecTva();

        $obj->setAzEyLib("azEyLib");
        $this->assertEquals("azEyLib", $obj->getAzEyLib());
    }

    /**
     * Test setAzEyMtt()
     *
     * @return void
     */
    public function testSetAzEyMtt(): void {

        $obj = new DecTva();

        $obj->setAzEyMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEyMtt());
    }

    /**
     * Test setAzEzCode()
     *
     * @return void
     */
    public function testSetAzEzCode(): void {

        $obj = new DecTva();

        $obj->setAzEzCode("azEzCode");
        $this->assertEquals("azEzCode", $obj->getAzEzCode());
    }

    /**
     * Test setAzEzLib()
     *
     * @return void
     */
    public function testSetAzEzLib(): void {

        $obj = new DecTva();

        $obj->setAzEzLib("azEzLib");
        $this->assertEquals("azEzLib", $obj->getAzEzLib());
    }

    /**
     * Test setAzEzMtt()
     *
     * @return void
     */
    public function testSetAzEzMtt(): void {

        $obj = new DecTva();

        $obj->setAzEzMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzEzMtt());
    }

    /**
     * Test setAzGaCode()
     *
     * @return void
     */
    public function testSetAzGaCode(): void {

        $obj = new DecTva();

        $obj->setAzGaCode("azGaCode");
        $this->assertEquals("azGaCode", $obj->getAzGaCode());
    }

    /**
     * Test setAzGaLib()
     *
     * @return void
     */
    public function testSetAzGaLib(): void {

        $obj = new DecTva();

        $obj->setAzGaLib("azGaLib");
        $this->assertEquals("azGaLib", $obj->getAzGaLib());
    }

    /**
     * Test setAzGaMtt()
     *
     * @return void
     */
    public function testSetAzGaMtt(): void {

        $obj = new DecTva();

        $obj->setAzGaMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGaMtt());
    }

    /**
     * Test setAzGcCode()
     *
     * @return void
     */
    public function testSetAzGcCode(): void {

        $obj = new DecTva();

        $obj->setAzGcCode("azGcCode");
        $this->assertEquals("azGcCode", $obj->getAzGcCode());
    }

    /**
     * Test setAzGcLib()
     *
     * @return void
     */
    public function testSetAzGcLib(): void {

        $obj = new DecTva();

        $obj->setAzGcLib("azGcLib");
        $this->assertEquals("azGcLib", $obj->getAzGcLib());
    }

    /**
     * Test setAzGcMtt()
     *
     * @return void
     */
    public function testSetAzGcMtt(): void {

        $obj = new DecTva();

        $obj->setAzGcMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzGcMtt());
    }

    /**
     * Test setAzHi()
     *
     * @return void
     */
    public function testSetAzHi(): void {

        $obj = new DecTva();

        $obj->setAzHi(10.092018);
        $this->assertEquals(10.092018, $obj->getAzHi());
    }

    /**
     * Test setAzHl()
     *
     * @return void
     */
    public function testSetAzHl(): void {

        $obj = new DecTva();

        $obj->setAzHl(10.092018);
        $this->assertEquals(10.092018, $obj->getAzHl());
    }

    /**
     * Test setAzJb()
     *
     * @return void
     */
    public function testSetAzJb(): void {

        $obj = new DecTva();

        $obj->setAzJb(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJb());
    }

    /**
     * Test setAzJc()
     *
     * @return void
     */
    public function testSetAzJc(): void {

        $obj = new DecTva();

        $obj->setAzJc(10.092018);
        $this->assertEquals(10.092018, $obj->getAzJc());
    }

    /**
     * Test setAzLigne4Mtt()
     *
     * @return void
     */
    public function testSetAzLigne4Mtt(): void {

        $obj = new DecTva();

        $obj->setAzLigne4Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzLigne4Mtt());
    }

    /**
     * Test setAzLigne5Mtt()
     *
     * @return void
     */
    public function testSetAzLigne5Mtt(): void {

        $obj = new DecTva();

        $obj->setAzLigne5Mtt(10.092018);
        $this->assertEquals(10.092018, $obj->getAzLigne5Mtt());
    }

    /**
     * Test setCa12MoisCloture()
     *
     * @return void
     */
    public function testSetCa12MoisCloture(): void {

        $obj = new DecTva();

        $obj->setCa12MoisCloture(10);
        $this->assertEquals(10, $obj->getCa12MoisCloture());
    }

    /**
     * Test setCorres1()
     *
     * @return void
     */
    public function testSetCorres1(): void {

        $obj = new DecTva();

        $obj->setCorres1("corres1");
        $this->assertEquals("corres1", $obj->getCorres1());
    }

    /**
     * Test setCorres2()
     *
     * @return void
     */
    public function testSetCorres2(): void {

        $obj = new DecTva();

        $obj->setCorres2("corres2");
        $this->assertEquals("corres2", $obj->getCorres2());
    }

    /**
     * Test setCorres3()
     *
     * @return void
     */
    public function testSetCorres3(): void {

        $obj = new DecTva();

        $obj->setCorres3("corres3");
        $this->assertEquals("corres3", $obj->getCorres3());
    }

    /**
     * Test setCorres4()
     *
     * @return void
     */
    public function testSetCorres4(): void {

        $obj = new DecTva();

        $obj->setCorres4("corres4");
        $this->assertEquals("corres4", $obj->getCorres4());
    }

    /**
     * Test setCorres5()
     *
     * @return void
     */
    public function testSetCorres5(): void {

        $obj = new DecTva();

        $obj->setCorres5("corres5");
        $this->assertEquals("corres5", $obj->getCorres5());
    }

    /**
     * Test setCorres6()
     *
     * @return void
     */
    public function testSetCorres6(): void {

        $obj = new DecTva();

        $obj->setCorres6("corres6");
        $this->assertEquals("corres6", $obj->getCorres6());
    }

    /**
     * Test setCorres7()
     *
     * @return void
     */
    public function testSetCorres7(): void {

        $obj = new DecTva();

        $obj->setCorres7("corres7");
        $this->assertEquals("corres7", $obj->getCorres7());
    }

    /**
     * Test setCorres8()
     *
     * @return void
     */
    public function testSetCorres8(): void {

        $obj = new DecTva();

        $obj->setCorres8("corres8");
        $this->assertEquals("corres8", $obj->getCorres8());
    }

    /**
     * Test setCreditCompte()
     *
     * @return void
     */
    public function testSetCreditCompte(): void {

        $obj = new DecTva();

        $obj->setCreditCompte(true);
        $this->assertTrue($obj->getCreditCompte());
    }

    /**
     * Test setCreditImputer()
     *
     * @return void
     */
    public function testSetCreditImputer(): void {

        $obj = new DecTva();

        $obj->setCreditImputer(true);
        $this->assertTrue($obj->getCreditImputer());
    }

    /**
     * Test setDateDec()
     *
     * @return void
     */
    public function testSetDateDec(): void {

        $obj = new DecTva();

        $obj->setDateDec("dateDec");
        $this->assertEquals("dateDec", $obj->getDateDec());
    }

    /**
     * Test setFlgAc()
     *
     * @return void
     */
    public function testSetFlgAc(): void {

        $obj = new DecTva();

        $obj->setFlgAc(true);
        $this->assertTrue($obj->getFlgAc());
    }

    /**
     * Test setGenAuto()
     *
     * @return void
     */
    public function testSetGenAuto(): void {

        $obj = new DecTva();

        $obj->setGenAuto(true);
        $this->assertTrue($obj->getGenAuto());
    }

    /**
     * Test setHtTaux196()
     *
     * @return void
     */
    public function testSetHtTaux196(): void {

        $obj = new DecTva();

        $obj->setHtTaux196(10.092018);
        $this->assertEquals(10.092018, $obj->getHtTaux196());
    }

    /**
     * Test setHtTaux7()
     *
     * @return void
     */
    public function testSetHtTaux7(): void {

        $obj = new DecTva();

        $obj->setHtTaux7(10.092018);
        $this->assertEquals(10.092018, $obj->getHtTaux7());
    }

    /**
     * Test setLiquiTaxes1()
     *
     * @return void
     */
    public function testSetLiquiTaxes1(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes1("liquiTaxes1");
        $this->assertEquals("liquiTaxes1", $obj->getLiquiTaxes1());
    }

    /**
     * Test setLiquiTaxes2()
     *
     * @return void
     */
    public function testSetLiquiTaxes2(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes2("liquiTaxes2");
        $this->assertEquals("liquiTaxes2", $obj->getLiquiTaxes2());
    }

    /**
     * Test setLiquiTaxes3()
     *
     * @return void
     */
    public function testSetLiquiTaxes3(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes3("liquiTaxes3");
        $this->assertEquals("liquiTaxes3", $obj->getLiquiTaxes3());
    }

    /**
     * Test setLiquiTaxes4()
     *
     * @return void
     */
    public function testSetLiquiTaxes4(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes4("liquiTaxes4");
        $this->assertEquals("liquiTaxes4", $obj->getLiquiTaxes4());
    }

    /**
     * Test setLiquiTaxes5()
     *
     * @return void
     */
    public function testSetLiquiTaxes5(): void {

        $obj = new DecTva();

        $obj->setLiquiTaxes5("liquiTaxes5");
        $this->assertEquals("liquiTaxes5", $obj->getLiquiTaxes5());
    }

    /**
     * Test setMentionExpresse()
     *
     * @return void
     */
    public function testSetMentionExpresse(): void {

        $obj = new DecTva();

        $obj->setMentionExpresse(true);
        $this->assertTrue($obj->getMentionExpresse());
    }

    /**
     * Test setMonnaie()
     *
     * @return void
     */
    public function testSetMonnaie(): void {

        $obj = new DecTva();

        $obj->setMonnaie("monnaie");
        $this->assertEquals("monnaie", $obj->getMonnaie());
    }

    /**
     * Test setMonnaieTenue()
     *
     * @return void
     */
    public function testSetMonnaieTenue(): void {

        $obj = new DecTva();

        $obj->setMonnaieTenue("monnaieTenue");
        $this->assertEquals("monnaieTenue", $obj->getMonnaieTenue());
    }

    /**
     * Test setNoLotEcritures()
     *
     * @return void
     */
    public function testSetNoLotEcritures(): void {

        $obj = new DecTva();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Test setPCent()
     *
     * @return void
     */
    public function testSetPCent(): void {

        $obj = new DecTva();

        $obj->setPCent(10.092018);
        $this->assertEquals(10.092018, $obj->getPCent());
    }

    /**
     * Test setPaiementImputation()
     *
     * @return void
     */
    public function testSetPaiementImputation(): void {

        $obj = new DecTva();

        $obj->setPaiementImputation(true);
        $this->assertTrue($obj->getPaiementImputation());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new DecTva();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setReportAcp()
     *
     * @return void
     */
    public function testSetReportAcp(): void {

        $obj = new DecTva();

        $obj->setReportAcp(10.092018);
        $this->assertEquals(10.092018, $obj->getReportAcp());
    }

    /**
     * Test setRibTitulaire1()
     *
     * @return void
     */
    public function testSetRibTitulaire1(): void {

        $obj = new DecTva();

        $obj->setRibTitulaire1("ribTitulaire1");
        $this->assertEquals("ribTitulaire1", $obj->getRibTitulaire1());
    }

    /**
     * Test setRibTitulaire2()
     *
     * @return void
     */
    public function testSetRibTitulaire2(): void {

        $obj = new DecTva();

        $obj->setRibTitulaire2("ribTitulaire2");
        $this->assertEquals("ribTitulaire2", $obj->getRibTitulaire2());
    }

    /**
     * Test setSelAdresseDest()
     *
     * @return void
     */
    public function testSetSelAdresseDest(): void {

        $obj = new DecTva();

        $obj->setSelAdresseDest("selAdresseDest");
        $this->assertEquals("selAdresseDest", $obj->getSelAdresseDest());
    }

    /**
     * Test setTotal()
     *
     * @return void
     */
    public function testSetTotal(): void {

        $obj = new DecTva();

        $obj->setTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getTotal());
    }

    /**
     * Test setTypeReglement()
     *
     * @return void
     */
    public function testSetTypeReglement(): void {

        $obj = new DecTva();

        $obj->setTypeReglement(10);
        $this->assertEquals(10, $obj->getTypeReglement());
    }

    /**
     * Test setVille()
     *
     * @return void
     */
    public function testSetVille(): void {

        $obj = new DecTva();

        $obj->setVille("ville");
        $this->assertEquals("ville", $obj->getVille());
    }

    /**
     * Test setZ0031()
     *
     * @return void
     */
    public function testSetZ0031(): void {

        $obj = new DecTva();

        $obj->setZ0031(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0031());
    }

    /**
     * Test setZ0031b()
     *
     * @return void
     */
    public function testSetZ0031b(): void {

        $obj = new DecTva();

        $obj->setZ0031b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0031b());
    }

    /**
     * Test setZ0032()
     *
     * @return void
     */
    public function testSetZ0032(): void {

        $obj = new DecTva();

        $obj->setZ0032(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0032());
    }

    /**
     * Test setZ0033()
     *
     * @return void
     */
    public function testSetZ0033(): void {

        $obj = new DecTva();

        $obj->setZ0033(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0033());
    }

    /**
     * Test setZ0034()
     *
     * @return void
     */
    public function testSetZ0034(): void {

        $obj = new DecTva();

        $obj->setZ0034(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0034());
    }

    /**
     * Test setZ0035()
     *
     * @return void
     */
    public function testSetZ0035(): void {

        $obj = new DecTva();

        $obj->setZ0035(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0035());
    }

    /**
     * Test setZ0037()
     *
     * @return void
     */
    public function testSetZ0037(): void {

        $obj = new DecTva();

        $obj->setZ0037(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0037());
    }

    /**
     * Test setZ0038()
     *
     * @return void
     */
    public function testSetZ0038(): void {

        $obj = new DecTva();

        $obj->setZ0038(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0038());
    }

    /**
     * Test setZ0040()
     *
     * @return void
     */
    public function testSetZ0040(): void {

        $obj = new DecTva();

        $obj->setZ0040(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0040());
    }

    /**
     * Test setZ0040b()
     *
     * @return void
     */
    public function testSetZ0040b(): void {

        $obj = new DecTva();

        $obj->setZ0040b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0040b());
    }

    /**
     * Test setZ0041()
     *
     * @return void
     */
    public function testSetZ0041(): void {

        $obj = new DecTva();

        $obj->setZ0041(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0041());
    }

    /**
     * Test setZ01()
     *
     * @return void
     */
    public function testSetZ01(): void {

        $obj = new DecTva();

        $obj->setZ01(10.092018);
        $this->assertEquals(10.092018, $obj->getZ01());
    }

    /**
     * Test setZ0100()
     *
     * @return void
     */
    public function testSetZ0100(): void {

        $obj = new DecTva();

        $obj->setZ0100(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100());
    }

    /**
     * Test setZ0100b()
     *
     * @return void
     */
    public function testSetZ0100b(): void {

        $obj = new DecTva();

        $obj->setZ0100b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0100b());
    }

    /**
     * Test setZ0121b()
     *
     * @return void
     */
    public function testSetZ0121b(): void {

        $obj = new DecTva();

        $obj->setZ0121b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0121b());
    }

    /**
     * Test setZ02()
     *
     * @return void
     */
    public function testSetZ02(): void {

        $obj = new DecTva();

        $obj->setZ02(10.092018);
        $this->assertEquals(10.092018, $obj->getZ02());
    }

    /**
     * Test setZ0200()
     *
     * @return void
     */
    public function testSetZ0200(): void {

        $obj = new DecTva();

        $obj->setZ0200(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0200());
    }

    /**
     * Test setZ0200b()
     *
     * @return void
     */
    public function testSetZ0200b(): void {

        $obj = new DecTva();

        $obj->setZ0200b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0200b());
    }

    /**
     * Test setZ0205()
     *
     * @return void
     */
    public function testSetZ0205(): void {

        $obj = new DecTva();

        $obj->setZ0205(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0205());
    }

    /**
     * Test setZ0205b()
     *
     * @return void
     */
    public function testSetZ0205b(): void {

        $obj = new DecTva();

        $obj->setZ0205b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0205b());
    }

    /**
     * Test setZ0600()
     *
     * @return void
     */
    public function testSetZ0600(): void {

        $obj = new DecTva();

        $obj->setZ0600(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0600());
    }

    /**
     * Test setZ0701()
     *
     * @return void
     */
    public function testSetZ0701(): void {

        $obj = new DecTva();

        $obj->setZ0701(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0701());
    }

    /**
     * Test setZ0702()
     *
     * @return void
     */
    public function testSetZ0702(): void {

        $obj = new DecTva();

        $obj->setZ0702(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0702());
    }

    /**
     * Test setZ0702b()
     *
     * @return void
     */
    public function testSetZ0702b(): void {

        $obj = new DecTva();

        $obj->setZ0702b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0702b());
    }

    /**
     * Test setZ0703()
     *
     * @return void
     */
    public function testSetZ0703(): void {

        $obj = new DecTva();

        $obj->setZ0703(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0703());
    }

    /**
     * Test setZ0703b()
     *
     * @return void
     */
    public function testSetZ0703b(): void {

        $obj = new DecTva();

        $obj->setZ0703b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0703b());
    }

    /**
     * Test setZ0705()
     *
     * @return void
     */
    public function testSetZ0705(): void {

        $obj = new DecTva();

        $obj->setZ0705(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0705());
    }

    /**
     * Test setZ0900()
     *
     * @return void
     */
    public function testSetZ0900(): void {

        $obj = new DecTva();

        $obj->setZ0900(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900());
    }

    /**
     * Test setZ0900b()
     *
     * @return void
     */
    public function testSetZ0900b(): void {

        $obj = new DecTva();

        $obj->setZ0900b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0900b());
    }

    /**
     * Test setZ0920()
     *
     * @return void
     */
    public function testSetZ0920(): void {

        $obj = new DecTva();

        $obj->setZ0920(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920());
    }

    /**
     * Test setZ0920b()
     *
     * @return void
     */
    public function testSetZ0920b(): void {

        $obj = new DecTva();

        $obj->setZ0920b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0920b());
    }

    /**
     * Test setZ0950()
     *
     * @return void
     */
    public function testSetZ0950(): void {

        $obj = new DecTva();

        $obj->setZ0950(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0950());
    }

    /**
     * Test setZ0950b()
     *
     * @return void
     */
    public function testSetZ0950b(): void {

        $obj = new DecTva();

        $obj->setZ0950b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ0950b());
    }

    /**
     * Test setZ12Code()
     *
     * @return void
     */
    public function testSetZ12Code(): void {

        $obj = new DecTva();

        $obj->setZ12Code("z12Code");
        $this->assertEquals("z12Code", $obj->getZ12Code());
    }

    /**
     * Test setZ12Lib()
     *
     * @return void
     */
    public function testSetZ12Lib(): void {

        $obj = new DecTva();

        $obj->setZ12Lib("z12Lib");
        $this->assertEquals("z12Lib", $obj->getZ12Lib());
    }

    /**
     * Test setZ12Taxe()
     *
     * @return void
     */
    public function testSetZ12Taxe(): void {

        $obj = new DecTva();

        $obj->setZ12Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ12Taxe());
    }

    /**
     * Test setZ14()
     *
     * @return void
     */
    public function testSetZ14(): void {

        $obj = new DecTva();

        $obj->setZ14(10.092018);
        $this->assertEquals(10.092018, $obj->getZ14());
    }

    /**
     * Test setZ18()
     *
     * @return void
     */
    public function testSetZ18(): void {

        $obj = new DecTva();

        $obj->setZ18(10.092018);
        $this->assertEquals(10.092018, $obj->getZ18());
    }

    /**
     * Test setZ196()
     *
     * @return void
     */
    public function testSetZ196(): void {

        $obj = new DecTva();

        $obj->setZ196(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196());
    }

    /**
     * Test setZ196b()
     *
     * @return void
     */
    public function testSetZ196b(): void {

        $obj = new DecTva();

        $obj->setZ196b(10.092018);
        $this->assertEquals(10.092018, $obj->getZ196b());
    }

    /**
     * Test setZ21()
     *
     * @return void
     */
    public function testSetZ21(): void {

        $obj = new DecTva();

        $obj->setZ21(10.092018);
        $this->assertEquals(10.092018, $obj->getZ21());
    }

    /**
     * Test setZ25()
     *
     * @return void
     */
    public function testSetZ25(): void {

        $obj = new DecTva();

        $obj->setZ25(10.092018);
        $this->assertEquals(10.092018, $obj->getZ25());
    }

    /**
     * Test setZ4227()
     *
     * @return void
     */
    public function testSetZ4227(): void {

        $obj = new DecTva();

        $obj->setZ4227(10.092018);
        $this->assertEquals(10.092018, $obj->getZ4227());
    }

    /**
     * Test setZ8001()
     *
     * @return void
     */
    public function testSetZ8001(): void {

        $obj = new DecTva();

        $obj->setZ8001(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8001());
    }

    /**
     * Test setZ8002()
     *
     * @return void
     */
    public function testSetZ8002(): void {

        $obj = new DecTva();

        $obj->setZ8002(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8002());
    }

    /**
     * Test setZ8003()
     *
     * @return void
     */
    public function testSetZ8003(): void {

        $obj = new DecTva();

        $obj->setZ8003(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003());
    }

    /**
     * Test setZ8003c()
     *
     * @return void
     */
    public function testSetZ8003c(): void {

        $obj = new DecTva();

        $obj->setZ8003c(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8003c());
    }

    /**
     * Test setZ8005()
     *
     * @return void
     */
    public function testSetZ8005(): void {

        $obj = new DecTva();

        $obj->setZ8005(10.092018);
        $this->assertEquals(10.092018, $obj->getZ8005());
    }

    /**
     * Test setZ9979()
     *
     * @return void
     */
    public function testSetZ9979(): void {

        $obj = new DecTva();

        $obj->setZ9979(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9979());
    }

    /**
     * Test setZ9989()
     *
     * @return void
     */
    public function testSetZ9989(): void {

        $obj = new DecTva();

        $obj->setZ9989(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9989());
    }

    /**
     * Test setZ9991()
     *
     * @return void
     */
    public function testSetZ9991(): void {

        $obj = new DecTva();

        $obj->setZ9991(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9991());
    }

    /**
     * Test setZ9999()
     *
     * @return void
     */
    public function testSetZ9999(): void {

        $obj = new DecTva();

        $obj->setZ9999(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9999());
    }

    /**
     * Test setZ9BTaxe()
     *
     * @return void
     */
    public function testSetZ9BTaxe(): void {

        $obj = new DecTva();

        $obj->setZ9BTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ9BTaxe());
    }

    /**
     * Test setbGroupe()
     *
     * @return void
     */
    public function testSetbGroupe(): void {

        $obj = new DecTva();

        $obj->setbGroupe(true);
        $this->assertTrue($obj->getbGroupe());
    }

    /**
     * Test setz0029()
     *
     * @return void
     */
    public function testSetz0029(): void {

        $obj = new DecTva();

        $obj->setz0029(10.092018);
        $this->assertEquals(10.092018, $obj->getz0029());
    }

    /**
     * Test setz0030()
     *
     * @return void
     */
    public function testSetz0030(): void {

        $obj = new DecTva();

        $obj->setz0030(10.092018);
        $this->assertEquals(10.092018, $obj->getz0030());
    }

    /**
     * Test setz0036()
     *
     * @return void
     */
    public function testSetz0036(): void {

        $obj = new DecTva();

        $obj->setz0036(10.092018);
        $this->assertEquals(10.092018, $obj->getz0036());
    }

    /**
     * Test setz0039()
     *
     * @return void
     */
    public function testSetz0039(): void {

        $obj = new DecTva();

        $obj->setz0039(10.092018);
        $this->assertEquals(10.092018, $obj->getz0039());
    }

    /**
     * Test setz0044()
     *
     * @return void
     */
    public function testSetz0044(): void {

        $obj = new DecTva();

        $obj->setz0044(10.092018);
        $this->assertEquals(10.092018, $obj->getz0044());
    }

    /**
     * Test setz0044b()
     *
     * @return void
     */
    public function testSetz0044b(): void {

        $obj = new DecTva();

        $obj->setz0044b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0044b());
    }

    /**
     * Test setz0045()
     *
     * @return void
     */
    public function testSetz0045(): void {

        $obj = new DecTva();

        $obj->setz0045(10.092018);
        $this->assertEquals(10.092018, $obj->getz0045());
    }

    /**
     * Test setz0046()
     *
     * @return void
     */
    public function testSetz0046(): void {

        $obj = new DecTva();

        $obj->setz0046(10.092018);
        $this->assertEquals(10.092018, $obj->getz0046());
    }

    /**
     * Test setz0059b()
     *
     * @return void
     */
    public function testSetz0059b(): void {

        $obj = new DecTva();

        $obj->setz0059b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0059b());
    }

    /**
     * Test setz0121()
     *
     * @return void
     */
    public function testSetz0121(): void {

        $obj = new DecTva();

        $obj->setz0121(10.092018);
        $this->assertEquals(10.092018, $obj->getz0121());
    }

    /**
     * Test setz0151()
     *
     * @return void
     */
    public function testSetz0151(): void {

        $obj = new DecTva();

        $obj->setz0151(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151());
    }

    /**
     * Test setz0151b()
     *
     * @return void
     */
    public function testSetz0151b(): void {

        $obj = new DecTva();

        $obj->setz0151b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0151b());
    }

    /**
     * Test setz0207()
     *
     * @return void
     */
    public function testSetz0207(): void {

        $obj = new DecTva();

        $obj->setz0207(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207());
    }

    /**
     * Test setz0207b()
     *
     * @return void
     */
    public function testSetz0207b(): void {

        $obj = new DecTva();

        $obj->setz0207b(10.092018);
        $this->assertEquals(10.092018, $obj->getz0207b());
    }

    /**
     * Test setz0709()
     *
     * @return void
     */
    public function testSetz0709(): void {

        $obj = new DecTva();

        $obj->setz0709(10.092018);
        $this->assertEquals(10.092018, $obj->getz0709());
    }

    /**
     * Test setz12Ht()
     *
     * @return void
     */
    public function testSetz12Ht(): void {

        $obj = new DecTva();

        $obj->setz12Ht(10.092018);
        $this->assertEquals(10.092018, $obj->getz12Ht());
    }

    /**
     * Test setz9bCode()
     *
     * @return void
     */
    public function testSetz9bCode(): void {

        $obj = new DecTva();

        $obj->setz9bCode("z9bCode");
        $this->assertEquals("z9bCode", $obj->getz9bCode());
    }

    /**
     * Test setz9bHt()
     *
     * @return void
     */
    public function testSetz9bHt(): void {

        $obj = new DecTva();

        $obj->setz9bHt(10.092018);
        $this->assertEquals(10.092018, $obj->getz9bHt());
    }

    /**
     * Test setz9bLib()
     *
     * @return void
     */
    public function testSetz9bLib(): void {

        $obj = new DecTva();

        $obj->setz9bLib("z9bLib");
        $this->assertEquals("z9bLib", $obj->getz9bLib());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DecTva();

        $this->assertNull($obj->getACorres1());
        $this->assertNull($obj->getACorres2());
        $this->assertNull($obj->getACorres3());
        $this->assertNull($obj->getACorres4());
        $this->assertNull($obj->getACorres5());
        $this->assertNull($obj->getACorres6());
        $this->assertNull($obj->getACorres7());
        $this->assertNull($obj->getACorres8());
        $this->assertNull($obj->getAz0990());
        $this->assertNull($obj->getAz0990b());
        $this->assertNull($obj->getAz1010());
        $this->assertNull($obj->getAz1010b());
        $this->assertNull($obj->getAz1020());
        $this->assertNull($obj->getAz1020b());
        $this->assertNull($obj->getAz1030());
        $this->assertNull($obj->getAz1030b());
        $this->assertNull($obj->getAz1040());
        $this->assertNull($obj->getAz1040b());
        $this->assertNull($obj->getAz1050());
        $this->assertNull($obj->getAz1050b());
        $this->assertNull($obj->getAz1080());
        $this->assertNull($obj->getAz1080b());
        $this->assertNull($obj->getAz1081());
        $this->assertNull($obj->getAz1081b());
        $this->assertNull($obj->getAz1090());
        $this->assertNull($obj->getAz1090b());
        $this->assertNull($obj->getAz1100());
        $this->assertNull($obj->getAz1100b());
        $this->assertNull($obj->getAz1110());
        $this->assertNull($obj->getAz1110b());
        $this->assertNull($obj->getAz1120());
        $this->assertNull($obj->getAz1120b());
        $this->assertNull($obj->getAz3240());
        $this->assertNull($obj->getAz3260());
        $this->assertNull($obj->getAz3510());
        $this->assertNull($obj->getAz3520());
        $this->assertNull($obj->getAz38Code());
        $this->assertNull($obj->getAz38Lib());
        $this->assertNull($obj->getAz38b());
        $this->assertNull($obj->getAz38ht());
        $this->assertNull($obj->getAz3910());
        $this->assertNull($obj->getAz4200());
        $this->assertNull($obj->getAz4201());
        $this->assertNull($obj->getAz4204());
        $this->assertNull($obj->getAz4206());
        $this->assertNull($obj->getAz4207());
        $this->assertNull($obj->getAz4208());
        $this->assertNull($obj->getAz4209());
        $this->assertNull($obj->getAz4210());
        $this->assertNull($obj->getAz4211());
        $this->assertNull($obj->getAz4212());
        $this->assertNull($obj->getAz4213());
        $this->assertNull($obj->getAz4215());
        $this->assertNull($obj->getAz4220());
        $this->assertNull($obj->getAz4222());
        $this->assertNull($obj->getAz4223());
        $this->assertNull($obj->getAz4224());
        $this->assertNull($obj->getAz4228Mtt());
        $this->assertNull($obj->getAz4230());
        $this->assertNull($obj->getAz4231());
        $this->assertNull($obj->getAz4232());
        $this->assertNull($obj->getAz4233());
        $this->assertNull($obj->getAz4234());
        $this->assertNull($obj->getAz4235());
        $this->assertNull($obj->getAz4236());
        $this->assertNull($obj->getAz4237());
        $this->assertNull($obj->getAz4238());
        $this->assertNull($obj->getAz4239());
        $this->assertNull($obj->getAz4240());
        $this->assertNull($obj->getAz4241());
        $this->assertNull($obj->getAz4242());
        $this->assertNull($obj->getAz4243());
        $this->assertNull($obj->getAz4244());
        $this->assertNull($obj->getAz4245());
        $this->assertNull($obj->getAz4246());
        $this->assertNull($obj->getAz4247());
        $this->assertNull($obj->getAz4248());
        $this->assertNull($obj->getAz4249());
        $this->assertNull($obj->getAz4250());
        $this->assertNull($obj->getAz4251());
        $this->assertNull($obj->getAz4252());
        $this->assertNull($obj->getAz4254());
        $this->assertNull($obj->getAz4255());
        $this->assertNull($obj->getAz4256());
        $this->assertNull($obj->getAz4257());
        $this->assertNull($obj->getAz4258());
        $this->assertNull($obj->getAz4259());
        $this->assertNull($obj->getAz4260());
        $this->assertNull($obj->getAz4261());
        $this->assertNull($obj->getAz4262());
        $this->assertNull($obj->getAz4263());
        $this->assertNull($obj->getAz4264());
        $this->assertNull($obj->getAz4265());
        $this->assertNull($obj->getAz4266());
        $this->assertNull($obj->getAz4267());
        $this->assertNull($obj->getAz4268());
        $this->assertNull($obj->getAz4268Base());
        $this->assertNull($obj->getAz4269());
        $this->assertNull($obj->getAz4269Base());
        $this->assertNull($obj->getAz4270());
        $this->assertNull($obj->getAz4270Base());
        $this->assertNull($obj->getAz4271());
        $this->assertNull($obj->getAz4271Base());
        $this->assertNull($obj->getAz4272());
        $this->assertNull($obj->getAz4274());
        $this->assertNull($obj->getAz4276());
        $this->assertNull($obj->getAz4276Base());
        $this->assertNull($obj->getAz4277());
        $this->assertNull($obj->getAz4277Base());
        $this->assertNull($obj->getAz50Code());
        $this->assertNull($obj->getAz50Lib());
        $this->assertNull($obj->getAz50Mtt());
        $this->assertNull($obj->getAz59Code());
        $this->assertNull($obj->getAz59Lib());
        $this->assertNull($obj->getAz59Mtt());
        $this->assertNull($obj->getAzEnCode());
        $this->assertNull($obj->getAzEnLib());
        $this->assertNull($obj->getAzEsCode());
        $this->assertNull($obj->getAzEsLib());
        $this->assertNull($obj->getAzEsMtt());
        $this->assertNull($obj->getAzEuCode());
        $this->assertNull($obj->getAzEuLib());
        $this->assertNull($obj->getAzEuMtt());
        $this->assertNull($obj->getAzExCode());
        $this->assertNull($obj->getAzExLib());
        $this->assertNull($obj->getAzExMtt());
        $this->assertNull($obj->getAzEyCode());
        $this->assertNull($obj->getAzEyLib());
        $this->assertNull($obj->getAzEyMtt());
        $this->assertNull($obj->getAzEzCode());
        $this->assertNull($obj->getAzEzLib());
        $this->assertNull($obj->getAzEzMtt());
        $this->assertNull($obj->getAzGaCode());
        $this->assertNull($obj->getAzGaLib());
        $this->assertNull($obj->getAzGaMtt());
        $this->assertNull($obj->getAzGcCode());
        $this->assertNull($obj->getAzGcLib());
        $this->assertNull($obj->getAzGcMtt());
        $this->assertNull($obj->getAzHi());
        $this->assertNull($obj->getAzHl());
        $this->assertNull($obj->getAzJb());
        $this->assertNull($obj->getAzJc());
        $this->assertNull($obj->getAzLigne4Mtt());
        $this->assertNull($obj->getAzLigne5Mtt());
        $this->assertNull($obj->getCa12MoisCloture());
        $this->assertNull($obj->getCorres1());
        $this->assertNull($obj->getCorres2());
        $this->assertNull($obj->getCorres3());
        $this->assertNull($obj->getCorres4());
        $this->assertNull($obj->getCorres5());
        $this->assertNull($obj->getCorres6());
        $this->assertNull($obj->getCorres7());
        $this->assertNull($obj->getCorres8());
        $this->assertNull($obj->getCreditCompte());
        $this->assertNull($obj->getCreditImputer());
        $this->assertNull($obj->getDateDec());
        $this->assertNull($obj->getFlgAc());
        $this->assertNull($obj->getGenAuto());
        $this->assertNull($obj->getHtTaux196());
        $this->assertNull($obj->getHtTaux7());
        $this->assertNull($obj->getLiquiTaxes1());
        $this->assertNull($obj->getLiquiTaxes2());
        $this->assertNull($obj->getLiquiTaxes3());
        $this->assertNull($obj->getLiquiTaxes4());
        $this->assertNull($obj->getLiquiTaxes5());
        $this->assertNull($obj->getMentionExpresse());
        $this->assertNull($obj->getMonnaie());
        $this->assertNull($obj->getMonnaieTenue());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getPCent());
        $this->assertNull($obj->getPaiementImputation());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getRibTitulaire1());
        $this->assertNull($obj->getRibTitulaire2());
        $this->assertNull($obj->getReportAcp());
        $this->assertNull($obj->getSelAdresseDest());
        $this->assertNull($obj->getTotal());
        $this->assertNull($obj->getTypeReglement());
        $this->assertNull($obj->getVille());
        $this->assertNull($obj->getZ0031());
        $this->assertNull($obj->getZ0031b());
        $this->assertNull($obj->getZ0032());
        $this->assertNull($obj->getZ0033());
        $this->assertNull($obj->getZ0034());
        $this->assertNull($obj->getZ0035());
        $this->assertNull($obj->getZ0037());
        $this->assertNull($obj->getZ0038());
        $this->assertNull($obj->getZ0040());
        $this->assertNull($obj->getZ0040b());
        $this->assertNull($obj->getZ0041());
        $this->assertNull($obj->getZ01());
        $this->assertNull($obj->getZ0100());
        $this->assertNull($obj->getZ0100b());
        $this->assertNull($obj->getZ02());
        $this->assertNull($obj->getZ0200());
        $this->assertNull($obj->getZ0200b());
        $this->assertNull($obj->getZ0205());
        $this->assertNull($obj->getZ0205b());
        $this->assertNull($obj->getZ0600());
        $this->assertNull($obj->getZ0701());
        $this->assertNull($obj->getZ0702());
        $this->assertNull($obj->getZ0702b());
        $this->assertNull($obj->getZ0703());
        $this->assertNull($obj->getZ0703b());
        $this->assertNull($obj->getZ0705());
        $this->assertNull($obj->getZ0900());
        $this->assertNull($obj->getZ0900b());
        $this->assertNull($obj->getZ0920());
        $this->assertNull($obj->getZ0920b());
        $this->assertNull($obj->getZ0950());
        $this->assertNull($obj->getZ0950b());
        $this->assertNull($obj->getZ14());
        $this->assertNull($obj->getZ18());
        $this->assertNull($obj->getZ196());
        $this->assertNull($obj->getZ196b());
        $this->assertNull($obj->getZ21());
        $this->assertNull($obj->getZ25());
        $this->assertNull($obj->getZ8001());
        $this->assertNull($obj->getZ8002());
        $this->assertNull($obj->getZ8003());
        $this->assertNull($obj->getZ8003c());
        $this->assertNull($obj->getZ8005());
        $this->assertNull($obj->getZ9979());
        $this->assertNull($obj->getZ9989());
        $this->assertNull($obj->getZ9991());
        $this->assertNull($obj->getZ9999());
        $this->assertNull($obj->getbGroupe());
        $this->assertNull($obj->getz0029());
        $this->assertNull($obj->getz0030());
        $this->assertNull($obj->getz0036());
        $this->assertNull($obj->getz0039());
        $this->assertNull($obj->getz0044());
        $this->assertNull($obj->getz0044b());
        $this->assertNull($obj->getz0045());
        $this->assertNull($obj->getz0046());
        $this->assertNull($obj->getz0059b());
        $this->assertNull($obj->getz0121());
        $this->assertNull($obj->getZ0121b());
        $this->assertNull($obj->getz0151());
        $this->assertNull($obj->getz0151b());
        $this->assertNull($obj->getz0207());
        $this->assertNull($obj->getz0207b());
        $this->assertNull($obj->getz0709());
        $this->assertNull($obj->getZ12Code());
        $this->assertNull($obj->getz12Ht());
        $this->assertNull($obj->getZ12Lib());
        $this->assertNull($obj->getZ12Taxe());
        $this->assertNull($obj->getZ4227());
        $this->assertNull($obj->getz9bCode());
        $this->assertNull($obj->getz9bHt());
        $this->assertNull($obj->getz9bLib());
        $this->assertNull($obj->getZ9BTaxe());
    }
}
