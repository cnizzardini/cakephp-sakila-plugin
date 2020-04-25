# CakePHP Sakila Plugin

This Cake 4 plugin comes with a snapshot and data seeds for the 
[MySQL Sakila Sample Data](https://dev.mysql.com/doc/sakila/en/). I found myself needing test data when I am creating
new plugins and wanted something with complex enough relations for realistic development.

## Installation

- Add the plugin to your project with `composer require cnizzardini\cakephp-sakila-plugin`

- Run the migration and data seeder

```bash
bin/cake migrations migrate -p Sakila
bin/cake migrations seed -p Sakila
```

## Baking

You should now be able to bake a full application skeleton

```bash
bin/cake bake all --everything
```

Verify everything is working by running `bin/cakephp server`
