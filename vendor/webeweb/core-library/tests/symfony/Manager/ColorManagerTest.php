<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Manager\ColorManager;
use WBW\Library\Symfony\Manager\ColorManagerInterface;
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Color manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class ColorManagerTest extends AbstractTestCase {

    /**
     * Color provider.
     *
     * @var ColorProviderInterface
     */
    private $colorProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Color provider mock.
        $this->colorProvider = $this->getMockBuilder(ColorProviderInterface::class)->getMock();
        $this->colorProvider->expects($this->any())->method("getDomain")->willReturn("domain");
        $this->colorProvider->expects($this->any())->method("getName")->willReturn("name");
    }

    /**
     * Test addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new ColorManager($this->logger);

        $obj->addProvider($this->colorProvider);
        $this->assertSame($this->colorProvider, $obj->getProviders()[0]);
    }

    /**
     * Test addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new ColorManager($this->logger);
        $obj->addProvider($this->colorProvider);

        try {

            $obj->addProvider($this->colorProvider);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }

    /**
     * Test containsProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testContainsProvider(): void {

        $obj = new ColorManager($this->logger);

        $this->assertFalse($obj->containsProvider($this->colorProvider));

        $obj->addProvider($this->colorProvider);
        $this->assertTrue($obj->containsProvider($this->colorProvider));
    }

    /**
     * Test containsProvider()
     *
     * @return void
     */
    public function testContainsProviderWithInvalidArgumentException(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new ColorManager($this->logger);

        try {

            $obj->containsProvider($provider);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements " . ColorProviderInterface::class, $ex->getMessage());
        }
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.color", ColorManager::SERVICE_NAME);

        $obj = new ColorManager($this->logger);

        $this->assertInstanceOf(ManagerInterface::class, $obj);
        $this->assertInstanceOf(ColorManagerInterface::class, $obj);

        $this->assertEquals([], $obj->getProviders());
    }
}
