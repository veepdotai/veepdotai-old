<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Helper;

use Throwable;
use WBW\Library\Types\Exception\IntegerArgumentException;
use WBW\Library\Types\Helper\IntegerHelper;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Integer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Helper
 */
class IntegerHelperTest extends AbstractTestCase {

    /**
     * Test factorial()
     *
     * @return void
     */
    public function testFactorial(): void {

        $this->assertNull(IntegerHelper::factorial(null));
        $this->assertNull(IntegerHelper::factorial(-1));
        $this->assertEquals(1, IntegerHelper::factorial(0));
        $this->assertEquals(1, IntegerHelper::factorial(1));
        $this->assertEquals(2, IntegerHelper::factorial(2));
        $this->assertEquals(6, IntegerHelper::factorial(3));
        $this->assertEquals(24, IntegerHelper::factorial(4));
        $this->assertEquals(120, IntegerHelper::factorial(5));
        $this->assertEquals(720, IntegerHelper::factorial(6));
        $this->assertEquals(5040, IntegerHelper::factorial(7));
        $this->assertEquals(40320, IntegerHelper::factorial(8));
        $this->assertEquals(362880, IntegerHelper::factorial(9));
        $this->assertEquals(3628800, IntegerHelper::factorial(10));
    }

    /**
     * Test parseBoolean()
     *
     * @return void
     */
    public function testParseBoolean(): void {

        $this->assertEquals(0, IntegerHelper::parseBoolean(null));
        $this->assertEquals(0, IntegerHelper::parseBoolean(false));
        $this->assertEquals(1, IntegerHelper::parseBoolean(true));
    }

    /**
     * Test parseString()
     *
     * @return void
     */
    public function testParseString(): void {

        $this->assertNull(IntegerHelper::parseString(null));
        $this->assertEquals(1, IntegerHelper::parseString("1"));
        $this->assertEquals(-1, IntegerHelper::parseString("-1"));
    }

    /**
     * Test parseString()
     *
     * @return void
     */
    public function testParseStringWithIntegerArgumentException(): void {

        try {

            IntegerHelper::parseString("1.0");
        } catch (Throwable $ex) {

            $this->assertInstanceOf(IntegerArgumentException::class, $ex);
            $this->assertEquals('The argument "1.0" is not an integer', $ex->getMessage());
        }
    }

    /**
     * Test usortCallback()
     *
     * @return void
     */
    public function testUsortCallable(): void {

        $obj = IntegerHelper::usortCallback();
        $this->assertIsCallable($obj);

        $this->assertEquals(-1, $obj(1, 2));
        $this->assertEquals(0, $obj(2, 2));
        $this->assertEquals(1, $obj(2, 1));

        $this->assertEquals(-1, $obj(null, 2));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(1, $obj(2, null));
    }

    /**
     * Test usortCallback()
     *
     * @return void
     */
    public function testUsortCallableWithAsc(): void {

        $obj = IntegerHelper::usortCallback(false);
        $this->assertIsCallable($obj);

        $this->assertEquals(1, $obj(1, 2));
        $this->assertEquals(0, $obj(2, 2));
        $this->assertEquals(-1, $obj(2, 1));

        $this->assertEquals(1, $obj(null, 2));
        $this->assertEquals(0, $obj(null, null));
        $this->assertEquals(-1, $obj(2, null));
    }
}
