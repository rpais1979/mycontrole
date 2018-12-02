<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\ContasFinanceiras;

// TIPOS DE CONTATO

$app->get('/admin/contafinanceira', function() {

	User::verifyLogin();

	$contafinanceira = ContasFinanceiras::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('contafinanceira', array('contafinanceira'=>$contafinanceira));

});

$app->get("/admin/contafinanceira/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl("contafinanceira-novo");

});

$app->post("/admin/contafinanceira/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contafinanceira = new ContasFinanceiras();

	$contafinanceira->setData($_POST);

	$contafinanceira->save();

	header("Location: /admin/contafinanceira");
	exit;	

});

$app->get("/admin/contafinanceira/:idcontafinanceira/delete", function($idcontafinanceira){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contafinanceira = new ContasFinanceiras();

	$contafinanceira->get((int)$idcontafinanceira);

	$contafinanceira->delete();

	header("Location: /admin/contafinanceira");
	exit;
});

$app->get("/admin/contafinanceira/:idcontafinanceira", function($idcontafinanceira){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contafinanceira = new ContasFinanceiras();

	$contafinanceira->get((int)$idcontafinanceira);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("contafinanceira-editar", array("contafinanceira"=>$contafinanceira->getValues()
	));
});

$app->post("/admin/contafinanceira/:idcontafinanceira", function($idcontafinanceira){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contafinanceira = new ContasFinanceiras();

	$contafinanceira->get((int)$idcontafinanceira);

	$contafinanceira->setData($_POST);

	$contafinanceira->save();

	header("Location: /admin/contafinanceira");
	exit;	
	
});



?>