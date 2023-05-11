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

use WBW\Library\Symfony\Provider\Theme\SearchThemeProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Provider\Theme\TestSearchThemeProviderTrait;

/**
 * Search theme provider trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Provider\Theme
 */
class SearchThemeProviderTraitTest extends AbstractTestCase {

    /**
     * Test setSearchThemeProvider()
     *
     * @return void
     */
    public function testSetSearchThemeProvider(): void {

        // Set a Search theme provider mock.
        $searchThemeProvider = $this->getMockBuilder(SearchThemeProviderInterface::class)->getMock();

        $obj = new TestSearchThemeProviderTrait();

        $obj->setSearchThemeProvider($searchThemeProvider);
        $this->assertSame($searchThemeProvider, $obj->getSearchThemeProvider());
    }
}
