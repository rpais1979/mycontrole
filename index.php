 <?php 
session_start();
require_once("vendor/autoload.php");


use \Slim\Slim;
use \Mycontrole\Page;
use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\ContactType;


$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

	User::verifyLogin();
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() {

	User::verifyLogin();
    
	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->get('/admin/login', function() {

	$page = new Mycontrole\PageAdmin([
		"header"=>false,
		"footer"=>false

	]);

	$page->setTpl("login");

});

$app->post('/admin/login', function(){

	User::login($_POST["deslogin"], $_POST["despassword"]);

	header("Location: /admin");
	exit;
});

$app->get('/admin/logout', function() {

	User::logout();

	header("Location: /admin/login");
	exit;

});

$app->get('/admin/users', function() {

	User::verifyLogin();

	$users = User::listAll();

	$page = new PageAdmin();

	$page->setTpl('users', array('users'=>$users));

});

$app->get("/admin/users/create", function(){

	User::verifyLogin();
	
	$page = new PageAdmin();

	$page->setTpl("users-create");
});

$app->get("/admin/users/:iduser/delete",function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admin/users");
	exit;

});

$app->get("/admin/users/:iduser",function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);
	
	$page = new PageAdmin();

	$page->setTpl("users-update", array("user"=>$user->getValues()
	));

});


$app->post("/admin/users/create", function() {

	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

	$_POST['despassword'] = password_hash($_POST["despassword"], PASSWORD_DEFAULT, [
            "cost"=>12
        ]);


	$user->setData($_POST);

	$user->save();

	header("Location: /admin/users");
	exit;

});

$app->post("/admin/users/:iduser",function($iduser){

	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update();

	header("Location: /admin/users");
	exit;

});

$app->get("/admin/forgot", function(){

	$page = new Mycontrole\PageAdmin([
		"header"=>false,
		"footer"=>false

	]);

	$page->setTpl("forgot");

});

$app->post("/admin/forgot", function(){

	$user = User::getForgot($_POST["email"]);

	header("Location: /admin/forgot/sent");
	exit;

});

$app->get("/admin/forgot/sent", function(){

	$page = new Mycontrole\PageAdmin([
		"header"=>false,
		"footer"=>false

	]);

	$page->setTpl("forgot-sent");

});

$app->get("/admin/forgot/reset", function(){

	$user = User::validForgotDecrypt($_GET["code"]);

	$page = new Mycontrole\PageAdmin([
		"header"=>false,
		"footer"=>false

	]);

	$page->setTpl("forgot-reset", array(
		"name"=>$user["desperson"],
		"code"=>$_GET["code"]
	));

});

$app->post("/admin/forgot/reset", function(){

	$forgot = User::validForgotDecrypt($_POST["code"]);

	User::setForgotUserd($forgot["idrecovery"]);

	$user = new User();

	$user->get((int)$forgot["iduser"]);

	$password = password_hash($_POST["password"], PASSWORD_DEFAULT, [
		"cost"=>12
	]);

	$user->setPassword($password);

	$page = new Mycontrole\PageAdmin([
		"header"=>false,
		"footer"=>false

	]);

	$page->setTpl("forgot-reset-success");

});

$app->get('/admin/contacttype', function() {

	User::verifyLogin();

	$contacttypes = ContactType::listAll();

	$page = new PageAdmin();

	$page->setTpl('contacttype', array('contacttypes'=>$contacttypes));

});

$app->get("/admin/contacttype/create", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("contacttype-create");

});

$app->post("/admin/contacttype/create", function(){

	User::verifyLogin();

	$contacttypes = new ContactType();

	$contacttypes->setData($_POST);

	$contacttypes->save();

	header("Location: /admin/contacttype");
	exit;	

});

$app->get("/admin/contacttype/:idcontacttype/delete", function($idcontacttype){

	User::verifyLogin();

	$contacttype = new ContactType();

	$contacttype->get((int)$idcontacttype);

	$contacttype->delete();

	header("Location: /admin/contacttype");
	exit;
});

$app->get("/admin/contacttype/:idcontacttype", function($idcontacttype){

	User::verifyLogin();

	$contacttypes = new ContactType();

	$contacttypes->get((int)$idcontacttype);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("contacttype-update", array("contacttypes"=>$contacttypes->getValues()
	));
});

$app->post("/admin/contacttype/:idcontacttype", function($idcontacttype){

	User::verifyLogin();

	$contacttypes = new ContactType();

	$contacttypes->get((int)$idcontacttype);

	$contacttypes->setData($_POST);

	$contacttypes->save();

	header("Location: /admin/contacttype");
	exit;	
	
});

$app->run();

?>