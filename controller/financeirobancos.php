<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\FinanceiroBancos;

// TIPOS DE CONTATO

$app->get('/admin/financeirobanco', function() {

	User::verifyLogin();

	$financeirobanco = FinanceiroBancos::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('financeirobanco', array('financeirobanco'=>$financeirobanco));

});

$app->get("/admin/financeirobanco/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl("financeirobanco-novo");

});

$app->post("/admin/financeirobanco/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirobanco = new FinanceiroBancos();

	$financeirobanco->setData($_POST);

	$financeirobanco->save();

	header("Location: /admin/financeirobanco");
	exit;	

});

$app->get("/admin/financeirobanco/:idfinanceirobanco/delete", function($idfinanceirobanco){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirobanco = new FinanceiroBancos();

	$financeirobanco->get((int)$idfinanceirobanco);

	$financeirobanco->delete();

	header("Location: /admin/financeirobanco");
	exit;
});

$app->get("/admin/financeirobanco/:idfinanceirobanco", function($idfinanceirobanco){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirobanco = new FinanceiroBancos();

	$financeirobanco->get((int)$idfinanceirobanco);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("financeirobanco-editar", array("financeirobanco"=>$financeirobanco->getValues()
	));
});

$app->post("/admin/financeirobanco/:idfinanceirobanco", function($idfinanceirobanco){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirobanco = new FinanceiroBancos();

	$financeirobanco->get((int)$idfinanceirobanco);

	$financeirobanco->setData($_POST);

	$financeirobanco->save();

	header("Location: /admin/financeirobanco");
	exit;	
	
});



?>