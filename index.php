<?php 
// Paudel\\

use Paudel\App\includes\Footer;
use Paudel\App\includes\Header;
use Paudel\App\routes\Home;
use Paudel\App\routes\Login;

require_once realpath("vendor/autoload.php");

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
  default:
    new Home();
}

// Includes the footer of the page
new Footer();