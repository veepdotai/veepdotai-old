<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\DateTimes;

use DateTime;
use Throwable;
use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\DateTimes\TestDateTimeEndedOnTrait;

/**
 * Date/time ended on trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\DateTimes
 */
class DateTimeEndedOnTraitTest extends AbstractTestCase {

    /**
     * Test setEndedOn()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetEndedOn(): void {

        // Set a date/time mock.
        $endedOn = new DateTime();

        $obj = new TestDateTimeEndedOnTrait();

        $obj->setEndedOn($endedOn);
        $this->assertSame($endedOn, $obj->getEndedOn());
    }
}
