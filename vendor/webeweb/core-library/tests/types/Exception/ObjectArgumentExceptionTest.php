<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Tests\Exception;

use WBW\Library\Types\Exception\ObjectArgumentException;
use WBW\Library\Types\Tests\AbstractTestCase;

/**
 * Object argument exception test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Types\Tests\Exception
 */
class ObjectArgumentExceptionTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $ex = new ObjectArgumentException("exception");

        $this->assertEquals('The argument "exception" is not an object', $ex->getMessage());
    }
}
