<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringMethodTrait;

/**
 * String method trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringMethodTraitTest extends AbstractTestCase {

    /**
     * Test setMethod()
     *
     * @return void
     */
    public function testSetMethod(): void {

        $obj = new TestStringMethodTrait();

        $obj->setMethod("method");
        $this->assertEquals("method", $obj->getMethod());
    }
}
