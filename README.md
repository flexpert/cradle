# CRADLE

Cradle is an MVC microframework for building web apps with PHP built on top of Slim microframework.

Cradle features a well structured directory and uses composer for dependency management. It requires at least PHP 7.2 to work properly.

If you appreciate the project, remember to leave a star, thank you.

Made with all the love in the world.

Developed and maintained by [Mohammed I. Adekunle](https://github.com/Iyiola-am).

## Installation

- Download (clone the repo) and place the files in your web server's root directory
- Configure your web server to direct all requests to the **public** folder if the applicable file or directory being requested exists in the folder.
- Redirect all other requests to the **index.php** file in the root directory (A sample configuration for apache server has already been provided by default).
- Run "composer install".
- Build something awesome.

## Requirements

- PHP 7.2+
- Apache's mod_rewrite module or similar.
- Composer.

## Usage

### Directories

Cradle features a simple directory structure

- **app:** This is where an app's controllers, models and view files are stored.
- **framework:** This directory contains custom app components that are specific to the app but aren't third-party dependencies, e.g extensions of default cradle components.
- **public:** This is where all publicly available files are stored, the favicon.ico, robots.txt, javascript files and so on are located here.
- **resources:** This is where you app's resources (view files, routes e.t.c) are stored. The files in this directory typical don't change throughout the lifetime of your app.
- **storage:** This directory contains all the files that are not meant to be accessible to the public by default e.g font files, system logs e.t.c
- **vendor:** This directory contains the project's third-party dependencies. It is generated by composer.

### Configurations

### MVC

Cradle follows the MVC software architecture, it uses controllers for handling requests, models for interacting with the database and views for displaying the result of a controller operation to the client.

#### Controllers

Controllers are classes that respond to user actions i.e user requests a web page, submits a form e.t.c. Controllers extend the [Cradle\Controller](vendor/cradle/Components/Controller.php) class or one of it's subclasses.

Controllers are stored in the **app/controllers** directory. You may use subdirectories to organize your controllers, but you will need to specify their namespace when routing.

#### Models

#### Views

Views are used to display information. The information is usually supplied by a controller after it has processed a request. Ideally, views should only render information and shouldn't do any interactions with the database. You load views to be rendered in a controller, like below:

```php
$this->loadView('home');
```

This loads the view file **app/views/home.php** into the controller's ViewCompiler instance to be rendered after the controller's operation. Views are rendered in the order in which they are loaded by the controller.

Views files are stored in the **app/views** directory. You may extend the default ViewCompiler instance in order to use a templating engine like twig and the likes, but you will also need to extend the default controller class to rectify this change. All extensions should be implemented by project components and should be stored in the **core** directory.

### Routing

## License

Cradle is licensed under the [MIT license](http://opensource.org/licenses/MIT). Feel free to use