<?php
declare(strict_types=1);

namespace TestApp;

use Cake\Console\CommandCollection;
use Cake\Http\BaseApplication;
use Cake\Http\MiddlewareQueue;
use Cake\Routing\RouteBuilder;
use Migrations\Command\MigrationsMigrateCommand;
use Migrations\Command\MigrationsSeedCommand;

class Application extends BaseApplication
{
    /**
     * @param MiddlewareQueue $middleware
     * @return MiddlewareQueue
     */
    public function middleware(MiddlewareQueue $middleware): MiddlewareQueue
    {
        return $middleware;
    }

    /**
     * @return void
     */
    public function bootstrap(): void
    {
        $this->addPlugin('Sakila');
        $this->addPlugin('Migrations');
    }

    /**
     * @param CommandCollection $commands
     * @return CommandCollection
     */
    public function console(CommandCollection $commands): CommandCollection
    {
        $commands->add('migrate', MigrationsMigrateCommand::class);
        $commands->add('seed', MigrationsSeedCommand::class);
        return $commands;
    }

    /**
     * @param RouteBuilder $routes
     * @return void
     */
    public function routes(RouteBuilder $routes): void
    {

    }
}
