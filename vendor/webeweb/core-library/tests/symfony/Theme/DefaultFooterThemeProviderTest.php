<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Theme;

use WBW\Library\Symfony\Provider\Theme\FooterThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Theme\DefaultFooterThemeProvider;

/**
 * Default footer theme provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Theme
 */
class DefaultFooterThemeProviderTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultFooterThemeProvider();

        $this->assertInstanceOf(FooterThemeProviderInterface::class, $obj);
    }
}
