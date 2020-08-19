# CakePHP Sakila Plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cnizzardini/cakephp-sakila-plugin.svg?style=flat-square)](https://packagist.org/packages/cnizzardini/cakephp-sakila-plugin)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE.txt)
[![Build Status](https://travis-ci.org/cnizzardini/cakephp-sakila-plugin.svg?branch=master)](https://travis-ci.org/github/cnizzardini/cakephp-sakila-plugin)
[![Coverage Status](https://coveralls.io/repos/github/cnizzardini/cakephp-sakila-plugin/badge.svg?branch=master)](https://coveralls.io/github/cnizzardini/cakephp-sakila-plugin?branch=master)
[![CakePHP](https://img.shields.io/badge/cakephp-%3E%3D%204.0-red?logo=cakephp)](https://book.cakephp.org/4/en/index.html)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.2-8892BF.svg?logo=php)](https://php.net/)

This Cake 4 plugin comes with a snapshot and data seeds for the 
[MySQL Sakila Sample Data](https://dev.mysql.com/doc/sakila/en/). I found myself needing test data when I am creating
new plugins and wanted something with complex enough relations for realistic development. While the SQL dump provided 
by MySQL is okay, it doesn't follow full Cake conventions. This plugin includes full cake conventions and additional 
schema improvements.

## Install

```bash
composer require cnizzardini/cakephp-sakila-plugin
bin/cake plugin load Sakila
```

Alternatively after composer installing you can manually load the plugin in your Application:

```php
# src/Application.php
public function bootstrap(): void
{
    // other logic...
    $this->addPlugin('Sakila');
}
```

## Usage

Run migrate and seed with `-p Sakila`

```bash
bin/cake migrations migrate -p Sakila
bin/cake migrations seed -p Sakila
```

## Baking

You should now be able to bake a full application skeleton

```bash
bin/cake bake all --everything
```

Verify everything is working by running `bin/cake server`

## Schema

See [config/Migrations/20200422015732_Initial.php](config/Migrations/20200422015732_Initial.php) for full schema.

## Unit Tests

Unit tests ensure the schema can be built and seeders run. It uses `cakephp/migrations` and SQLite for the data store.

```bash
vendor/bin/phpunit
```
