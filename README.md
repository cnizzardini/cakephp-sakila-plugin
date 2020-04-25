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

## Schema

### Actors
| Attribute  | Data Type |
|------------|-----------|
| id         | integer   |
| first_name | string    |
| last_name  | string    |
| modified   | datetime  |

### Addresses
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| address       | string    |
| address2      | string    |
| district      | string    |
| city_id       | integer   |
| postal_code   | string    |
| phone         | string    |
| location      | string    |
| modified      | datetime  |

### Categories
| Attribute | Data Type |
|-----------|-----------|
| id        | integer   |
| name      | string    |
| modified  | datetime  |

### Cities
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| name          | string    |
| country_id    | integer   |
| modified      | datetime  |

### Countries
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| name          | string    |

### Customers
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| store_id      | integer   |
| first_name    | string    |
| last_name     | string    |
| email         | string    |
| address_id    | integer   |
| is_active     | tinyint   |
| created       | datetime  |
| modified      | datetime  |

### Employees
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| first_name    | string    |
| last_name     | string    |
| address_id    | integer   |
| picture       | binary    |
| email         | string    |
| store_id      | integer   |
| is_active     | tinyint   |
| username      | string    |
| password      | string    |
| modified      | datetime  |

### FilmActors
| Attribute | Data Type |
|-----------|-----------|
| uuid      | uuid      |
| actor_id  | integer   |
| film_id   | integer   |
| modified  | datetime  |


### FilmCategories
| Attribute   | Data Type |
|-------------|-----------|
| uuid        | uuid      |
| film_id     | integer   |
| category_id | integer   |
| modified    | datetime  |


### FilmTexts
| Attribute   | Data Type |
|-------------|-----------|
| uuid        | uuid      |
| film_id     | integer   |
| title       | string    |
| description | text      |


### Films
| Attribute        | Data Type |
|------------------|-----------|
| id               | integer   |
| title            | string    |
| description      | text      |
| release_year     | string    |
| language_id      | integer   |
| rental_duration  | integer   |
| rental_rate      | decimal   |
| length           | integer   |
| replacement_cost | decimal   |
| rating           | string    |
| special_features | string    |
| modified         | datetime  |

### Inventories
| Attribute | Data Type |
|-----------|-----------|
| id        | integer   |
| film_id   | integer   |
| store_id  | integer   |
| modified  | datetime  |

### Languages
| Attribute | Data Type |
|-----------|-----------|
| id        | integer   |
| name      | char      |

### Payments
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| customer_id   | integer   |
| employee_id   | integer   |
| rental_id     | integer   |
| amount        | decimal   |
| created       | datetime  |
| modified      | datetime  |

### Rentals
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| rental_date   | datetime  |
| inventory_id  | integer   |
| customer_id   | integer   |
| return_date   | datetime  |
| employee_id   | integer   |
| modified      | datetime  |

### Stores
| Attribute     | Data Type |
|---------------|-----------|
| id            | integer   |
| employee_id   | integer   |
| address_id    | integer   |
| modified      | datetime  |