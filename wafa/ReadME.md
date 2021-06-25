# Learning Journey

## Task
* Understanding Laravel
* Understanding MVC in Laravel
* Creating a Hello world page
* Setting up Database
* Understanding table migration and naming conventions 
    - fillables
    - declaring non conventional primary keys
    - FK constraints 
    - how to data type for tables
* Installing laravel and resolving merge conflicts
* setting up basic CRUD functionality with no FK dependencies 
* updating CRUD to add FK contrains 
* Login functionality and registeration with using built in HASH and AUTH facades 
* implementing bootstarp theme and calling certain layouts dependant on views and user login

### Learning Notes and Resources

* INSTALLING LARAVEL
    - composer install using IDE terminal was the best way
    - first install globally on to local machine
    - Open folder in htdocs using XXAMP
    - within folder open teminal -> composer create-project laravel/laravel example-app -> cd example-app -> to start server: php artisan serve
        - [Installation Via Composer](https://laravel.com/docs/8.x/installation#installation-via-composer)

* HOW TO MIGRATE TABLES
    - tables can be migrated through terminal and create models 
    - understanding naming convention 
    - if conventions are not what the framework needs how to deckare it in the models to ensure proper primary key is being called 
        - [Generating Model Classes](https://laravel.com/docs/8.x/eloquent#generating-model-classes)
    - Adding a pre exsisting database
        - [Generate Migrations from Database](https://www.youtube.com/watch?v=qaCMdqLLdV8)
    - NOTE: everytime database is migrated the database info is cleared out so its best to use seeders to seed the database with fake info while ins the developmental phase

* UNDERSTANDING TABLE DATA TYPES AND RELATIONSHIPS
    - [Eloquent: Relationships](https://laravel.com/docs/8.x/eloquent-relationships)
    - [laravel 8 foreign key](https://stackoverflow.com/questions/66309431/laravel-8-foreign-key)
    - [Datatypes](https://laravel.com/docs/8.x/migrations#foreign-key-constraints)

* UNDERSTANDING MVC IN LARAVEL
    - understanding the structure of laravel and how model, controllers, and views are connected
        - [Directory Structure](https://laravel.com/docs/8.x/structure)
    - deeper dive with create a BLOG CMS
        - [How To Create A Blog In Laravel 8](https://www.youtube.com/watch?v=HKJDLXsTr8A)

* BASIC CRUD
    - [CRUD](https://codingdriver.com/upload-image-in-laravel-8-using-ajax.html)

* LOGIN AND AUTH
    - [login](https://codingdriver.com/laravel-custom-authentication-tutorial-with-example.html)
    - [Auth](https://laravel.com/docs/8.x/authentication#remembering-users)
    - [code sample](https://www.positronx.io/laravel-custom-authentication-login-and-registration-tutorial/)
    - [sessions](https://laravel.com/docs/8.x/session#introduction)
    - [more on sessions](https://hackthestuff.com/article/how-to-set-and-get-session-data-in-laravel)

* ADDING BOOTSTRAP AND CSS
    - [AdminLTE.io](AdminLTE.io)
    - [add bootstrap](https://www.youtube.com/watch?v=Kljm9P7JZbI&t=992s)



