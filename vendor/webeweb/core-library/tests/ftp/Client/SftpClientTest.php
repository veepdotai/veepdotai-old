<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests\Client;

use Throwable;
use WBW\Library\Ftp\Client\SftpClient;
use WBW\Library\Ftp\Exception\FtpException;
use WBW\Library\Ftp\Tests\AbstractTestCase;

/**
 * SFTP client test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests\Client
 */
class SftpClientTest extends AbstractTestCase {

    /**
     * Client.
     *
     * @var SftpClient
     */
    private $client;

    /**
     * Message.
     *
     * @var string
     */
    private $message;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a message mock.
        $this->message = "sftp://demo:password@test.rebex.net:22 ";

        // Some SSH methods doesn't exist
        if (false === function_exists("ssh2_connect")) {
            $this->markTestSkipped("ssh2_connect is not available");
        }

        try {

            $this->client = new SftpClient($this->authenticator);
            $this->client->connect();
            $this->client->login();
        } catch (Throwable $ex) {
            $this->markTestSkipped($ex->getMessage());
        }
    }

    /**
     * Test connect()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testConnectWithFtpException(): void {

        $obj = new SftpClient($this->authenticator);
        $obj->getAuthenticator()->setPort(80);

        try {

            $obj->connect();
        } catch (Throwable $ex) {

            $msg = implode("", [
                str_replace(":22", ":80", $this->message),
                "ssh2_connect failed: [",
                $this->authenticator->getHostname(),
                ", 80]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Test delete()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testDelete(): void {

        $obj = $this->client;

        try {

            $obj->delete($this->remoteDir);
        } catch (Throwable $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_unlink failed: [",
                $this->remoteDir,
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Test get()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGet(): void {

        $obj = $this->client;

        $this->assertSame($obj, $obj->get($this->localFile, $this->remoteFile));

        $obj->close();
    }

    /**
     * Test login()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testLoginWithFtpException(): void {

        $obj = new SftpClient($this->authenticator);
        $obj->getAuthenticator()->getPasswordAuthentication()->setPassword(null);
        $obj->connect();

        try {

            $obj->login();
        } catch (Throwable $ex) {

            $msg = implode("", [
                str_replace(":password", ":", $this->message),
                "ssh2_auth_password failed: [",
                $this->authenticator->getPasswordAuthentication()->getUsername(),
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }
    }

    /**
     * Test mkdir()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testMkdir(): void {

        $obj = $this->client;

        try {

            $obj->mkdir("/mkdir");
        } catch (Throwable $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_mkdir failed: [/mkdir]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Test put()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testPut(): void {

        // Set a local file mock.
        $myself = realpath(__DIR__ . "/SftpClientTest.php");

        $obj = $this->client;

        try {

            $obj->put($myself, "/put");
        } catch (Throwable $ex) {

            $msg = implode("", [
                $this->message,
                "fopen failed: [ssh2.sftp://",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertStringContainsString($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Test rename()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRename(): void {

        $obj = $this->client;

        try {

            $obj->rename($this->remoteDir, "/rename");
        } catch (Throwable $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_rename failed: [",
                $this->remoteDir,
                ", /rename]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Test rmdir()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testRmdir(): void {

        $obj = $this->client;

        try {

            $obj->rmdir($this->remoteDir);
        } catch (Throwable $ex) {

            $msg = implode("", [
                $this->message,
                "ssh2_sftp_rmdir failed: [",
                $this->remoteDir,
                "]",
            ]);

            $this->assertInstanceOf(FtpException::class, $ex);
            $this->assertEquals($msg, $ex->getMessage());
        }

        $obj->close();
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SftpClient($this->authenticator);

        $this->assertSame($this->authenticator, $obj->getAuthenticator());
        $this->assertNull($obj->getConnection());

        $this->assertEquals(22, $obj->getAuthenticator()->getPort());
    }
}
