<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\ContactType;

// TIPOS DE CONTATO

$app->get('/admin/contacttype', function() {

	User::verifyLogin();

	$contacttypes = ContactType::listAll();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl('contacttype', array('contacttypes'=>$contacttypes));

});

$app->get("/admin/contacttype/create", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl("contacttype-create");

});

$app->post("/admin/contacttype/create", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$contacttypes = new ContactType();

	$contacttypes->setData($_POST);

	$contacttypes->save();

	header("Location: /admin/contacttype");
	exit;	

});

$app->get("/admin/contacttype/:idcontacttype/delete", function($idcontacttype){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$contacttype = new ContactType();

	$contacttype->get((int)$idcontacttype);

	$contacttype->delete();

	header("Location: /admin/contacttype");
	exit;
});

$app->get("/admin/contacttype/:idcontacttype", function($idcontacttype){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$contacttypes = new ContactType();

	$contacttypes->get((int)$idcontacttype);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("contacttype-update", array("contacttypes"=>$contacttypes->getValues()
	));
});

$app->post("/admin/contacttype/:idcontacttype", function($idcontacttype){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$contacttypes = new ContactType();

	$contacttypes->get((int)$idcontacttype);

	$contacttypes->setData($_POST);

	$contacttypes->save();

	header("Location: /admin/contacttype");
	exit;	
	
});



?>