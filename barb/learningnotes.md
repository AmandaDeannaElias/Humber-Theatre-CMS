#### Basic code to create tables, controllers, migrate and models

#### Models
Php artisan make:model Homepage

protected $primaryKey = 'homepage_id'; public $timestamps = false;

#### Create Migrations to create tables

(Terminal) $ php artisan make:migration create_homepages_table

$table->mediumText('main_img'); $table->string('img_credit'); $table->string('main_title'); $table->string('sub_title')->nullable(); $table->string('program_description')->nullable(); $table->string('location'); $table->string('content_warning')->nullable(); $table->unsignedBigInteger('eprogram_id'); $table->foreign('eprogram_id')->references('id')->on('eprograms')->onUpdate('cascade')->o
onUpdate('cascade')->onDelete('cascade');

$ php artisan migrate

Dont forget to add the model reference

#### Create Controllers

$ php artisan make:controller Homepagecontroller

Create reference from the models!

#### Create Blade(View)

Create folder with the views
 - Index
 - Show
 - Create
 - Edit
 
#### Open the link for the serve in order to display the page
$php artisan serve