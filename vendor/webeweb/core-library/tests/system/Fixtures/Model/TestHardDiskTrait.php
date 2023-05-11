<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Fixtures\Model;

use WBW\Library\System\Model\HardDiskTrait;

/**
 * Test hard disk tait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Fixtures\Model
 */
class TestHardDiskTrait {

    use HardDiskTrait {
        setHardDisk as public;
    }
}
