<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestNotification;

/**
 * Abstract notification test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AbstractNotificationTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractNotificationTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestNotification();
        $obj->setContent(SerializerKeys::CONTENT);
        $obj->setType(SerializerKeys::TYPE);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Test setContent()
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestNotification();

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new TestNotification();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestNotification();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(NotificationInterface::class, $obj);

        $this->assertEquals("t", $obj->getType());
        $this->assertEquals("c", $obj->getContent());
    }
}
