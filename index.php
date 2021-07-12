<?php 
ob_start();

use Dotenv\Dotenv;
use Paudel\App\includes\Footer;
use Paudel\App\includes\Header;
use Paudel\App\routes\Error404;
use Paudel\App\routes\Home;
use Paudel\App\routes\Login;
use Paudel\App\routes\Profile;
use Paudel\App\routes\Register;

require_once realpath("vendor/autoload.php");

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

// Gets the route
$route = (isset($_GET['r'])) ? $_GET['r'] : header('location: ?r=index');

// Include the header of the page
new Header();

// Includes the main content of the page
switch ($route) {
  case 'index':
    new Home();
    break;
  case 'login':
    new Login();
    break;
  case 'register':
    new Register();
    break;
  case 'page-not-found':
    new Error404();
    break;
  case 'profile':
    new Profile();
    break;
  default:
    new Error404();
}

// Includes the footer of the page
new Footer();