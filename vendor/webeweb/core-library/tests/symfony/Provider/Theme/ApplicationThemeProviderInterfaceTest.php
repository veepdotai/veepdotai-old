<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Provider\Theme;

use WBW\Library\Symfony\Provider\Theme\ApplicationThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Application theme provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class ApplicationThemeProviderInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.provider.theme.application", ApplicationThemeProviderInterface::SERVICE_NAME);
    }
}
