<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\TipodeCliente;

// TIPOS DE CONTATO

$app->get('/admin/tipodecliente', function() {

	User::verifyLogin();

	$tipodecliente = TipodeCliente::listAll();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl('tipodecliente', array('tipodecliente'=>$tipodecliente));

});

$app->get("/admin/tipodecliente/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl("tipodecliente-novo");

});

$app->post("/admin/tipodecliente/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecliente = new TipodeCliente();

	$tipodecliente->setData($_POST);

	$tipodecliente->save();

	header("Location: /admin/tipodecliente");
	exit;	

});

$app->get("/admin/tipodecliente/:idtipodecliente/delete", function($idtipodecliente){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecliente = new TipodeCliente();

	$tipodecliente->get((int)$idtipodecliente);

	$tipodecliente->delete();

	header("Location: /admin/tipodecliente");
	exit;
});

$app->get("/admin/tipodecliente/:idtipodecliente", function($idtipodecliente){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecliente = new TipodeCliente();

	$tipodecliente->get((int)$idtipodecliente);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("tipodecliente-editar", array("tipodecliente"=>$tipodecliente->getValues()
	));
});

$app->post("/admin/tipodecliente/:idtipodecliente", function($idtipodecliente){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecliente = new TipodeCliente();

	$tipodecliente->get((int)$idtipodecliente);

	$tipodecliente->setData($_POST);

	$tipodecliente->save();

	header("Location: /admin/tipodecliente");
	exit;	
	
});



?>