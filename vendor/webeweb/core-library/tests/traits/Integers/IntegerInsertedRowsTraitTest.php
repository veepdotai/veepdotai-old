<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Integers;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Integers\TestIntegerInsertedRowsTrait;

/**
 * Integer inserted rows trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Integers
 */
class IntegerInsertedRowsTraitTest extends AbstractTestCase {

    /**
     * Test setInsertedRows()
     *
     * @return void
     */
    public function testSetInsertedRows(): void {

        $obj = new TestIntegerInsertedRowsTrait();

        $obj->setInsertedRows(1);
        $this->assertEquals(1, $obj->getInsertedRows());
    }
}
