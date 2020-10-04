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
    }

    public function testMigrate()
    {
        $this->exec('migrations migrate -p Sakila');
        $this->assertExitSuccess();

        $this->exec('migrations seed -p Sakila');
        $this->assertExitSuccess();
    }
}