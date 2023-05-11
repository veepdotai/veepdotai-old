<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Floats;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Floats\TestFloatLatitudeTrait;

/**
 * Float latitude trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Floats
 */
class FloatLatitudeTraitTest extends AbstractTestCase {

    /**
     * Test setLatitude()
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new TestFloatLatitudeTrait();

        $obj->setLatitude(0.123456789);
        $this->assertEquals(0.123456789, $obj->getLatitude());
    }
}
