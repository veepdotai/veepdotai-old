<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider;

use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Color provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider
 */
class ColorProviderInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct().
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.color", ColorProviderInterface::COLOR_PROVIDER_TAG_NAME);
    }
}
