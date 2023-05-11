<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests\Helper;

use WBW\Library\Serializer\Helper\CsvSerializerHelper;
use WBW\Library\Serializer\Tests\AbstractTestCase;
use WBW\Library\Serializer\Tests\Fixtures\Model\TestCsvSerializable;

/**
 * CSV serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests\Helper
 */
class CsvSerializerHelperTest extends AbstractTestCase {

    /**
     * Test serializeArray()
     *
     * @return void
     */
    public function testSerializeArray(): void {

        $models = [
            new TestCsvSerializable(),
            new TestCsvSerializable(),
            null,
        ];

        $res = CsvSerializerHelper::csvSerializeArray($models);
        $this->assertEquals("\n", $res);
    }
}
