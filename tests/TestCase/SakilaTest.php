<?php

namespace Sakila\Test\TestCase;

use Cake\TestSuite\ConsoleIntegrationTestTrait;
use Cake\TestSuite\TestCase;

class SakilaTest extends TestCase
{
    use ConsoleIntegrationTestTrait;

    public function setUp() : void
    {
        parent::setUp();
        $this->setAppNamespace('TestApp');
        $this->useCommandRunner();

        $this->controllers = APP . 'Controller' . DS;

        foreach (scandir($this->controllers) as $file) {
            if (!is_file($this->controllers . $file)) {
                continue;
            }
            unlink($this->controllers . $file);
        }
    }

    public function testMigrate()
    {
        unlink(PROJECT . 'sakila_test');
        $this->exec('migrations migrate -p Sakila');
        $this->assertExitSuccess();

        $this->exec('migrations seed -p Sakila');
        $this->assertExitSuccess();
    }
}