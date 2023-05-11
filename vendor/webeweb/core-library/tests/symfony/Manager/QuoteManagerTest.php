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
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Manager\QuoteManager;
use WBW\Library\Symfony\Manager\QuoteManagerInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Provider\QuoteProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Quote manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class QuoteManagerTest extends AbstractTestCase {

    /**
     * Quote provider.
     *
     * @var QuoteProviderInterface
     */
    private $quoteProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Quote provider mock.
        $this->quoteProvider = $this->getMockBuilder(QuoteProviderInterface::class)->getMock();
        $this->quoteProvider->expects($this->any())->method("getDomain")->willReturn("domain");
    }

    /**
     * Test addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new QuoteManager($this->logger);

        $obj->addProvider($this->quoteProvider);
        $this->assertSame($this->quoteProvider, $obj->getProviders()[0]);
    }

    /**
     * Test addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new QuoteManager($this->logger);
        $obj->addProvider($this->quoteProvider);

        try {

            $obj->addProvider($this->quoteProvider);
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

        $obj = new QuoteManager($this->logger);

        $this->assertFalse($obj->containsProvider($this->quoteProvider));

        $obj->addProvider($this->quoteProvider);
        $this->assertTrue($obj->containsProvider($this->quoteProvider));
    }

    /**
     * Test contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new QuoteManager($this->logger);

        try {

            $obj->containsProvider($provider);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements " . QuoteProviderInterface::class, $ex->getMessage());
        }
    }

    /**
     * Test getProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetProvider(): void {

        $obj = new QuoteManager($this->logger);
        $obj->addProvider($this->quoteProvider);

        $this->assertSame($this->quoteProvider, $obj->getProvider("domain"));
        $this->assertNull($obj->getProvider("github"));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.quote", QuoteManager::SERVICE_NAME);

        $obj = new QuoteManager($this->logger);

        $this->assertInstanceOf(ManagerInterface::class, $obj);
        $this->assertInstanceOf(QuoteManagerInterface::class, $obj);

        $this->assertEquals([], $obj->getProviders());
    }
}
