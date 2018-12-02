<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\ContasaReceber;

// TIPOS DE CONTATO

$app->get('/admin/contasareceber', function() {

	User::verifyLogin();

	$contasareceber = ContasaReceber::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('contasareceber', array('contasareceber'=>$contasareceber));

});

$app->get("/admin/contasareceber/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');
	
	$page->setTpl("contasareceber-novo");

});

$app->post("/admin/contasareceber/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasareceber = new ContasaReceber();

	$contasareceber->setData($_POST);

	$contasareceber->save();

	header("Location: /admin/financeiro/contasareceber");
	exit;	

});

$app->get("/admin/contasareceber/:idcontasareceber/delete", function($idcontasareceber){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasareceber = new ContasaReceber();

	$contasareceber->get((int)$idcontasareceber);

	$contasareceber->delete();

	header("Location: /admin/financeiro/contasareceber");
	exit;
});

$app->get("/admin/contasareceber/:idcontasareceber", function($idcontasareceber){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasareceber = new ContasaReceber();

	$contasareceber->get((int)$idcontasareceber);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("contasareceber-editar", array("contasareceber"=>$contasareceber->getValues()
	));
});

$app->post("/admin/contasareceber/:idcontasareceber", function($idcontasareceber){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasareceber = new ContasaReceber();

	$contasareceber->get((int)$idcontasareceber);

	$contasareceber->setData($_POST);

	$contasareceber->save();

	header("Location: /admin/financeiro/contasareceber");
	exit;	
	
});



?>