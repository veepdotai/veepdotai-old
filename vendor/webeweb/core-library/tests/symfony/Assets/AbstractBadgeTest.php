<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use JsonSerializable;
use WBW\Library\Serializer\SerializerKeys;
use WBW\Library\Symfony\Assets\BadgeInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestBadge;

/**
 * Abstract badge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AbstractBadgeTest extends AbstractTestCase {

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractBadgeTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestBadge("type");
        $obj->setContent(SerializerKeys::CONTENT);

        $res = $obj->jsonSerialize();
        $this->assertCount(2, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBadge("danger");

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(BadgeInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertEquals("danger", $obj->getType());
    }
}
