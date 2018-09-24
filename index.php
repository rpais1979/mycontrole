 <?php 
session_start();
require_once("vendor/autoload.php");


use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);
	
require_once("controller/site.php");
require_once("controller/admin.php");
require_once("controller/admin-users.php");
require_once("controller/contacttypes.php");
require_once("controller/categories.php");
require_once("controller/client.php");

$app->run();

?>