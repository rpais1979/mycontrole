<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\ContasaPagar;

// TIPOS DE CONTATO

$app->get('/admin/contasapagar', function() {

	User::verifyLogin();

	$contasapagar = ContasaPagar::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('contasapagar', array('contasapagar'=>$contasapagar));

});

$app->get("/admin/contasapagar/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');
	
	$page->setTpl("contasapagar-novo");

});

$app->post("/admin/contasapagar/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasapagar = new ContasaPagar();

	$contasapagar->setData($_POST);

	$contasapagar->save();

	header("Location: /admin/financeiro/contasapagar");
	exit;	

});

$app->get("/admin/contasapagar/:idcontasapagar/delete", function($idcontasapagar){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasapagar = new ContasaPagar();

	$contasapagar->get((int)$idcontasapagar);

	$contasapagar->delete();

	header("Location: /admin/financeiro/contasapagar");
	exit;
});

$app->get("/admin/contasapagar/:idcontasapagar", function($idcontasapagar){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasapagar = new ContasaPagar();

	$contasapagar->get((int)$idcontasapagar);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("contasapagar-editar", array("contasapagar"=>$contasapagar->getValues()
	));
});

$app->post("/admin/contasapagar/:idcontasapagar", function($idcontasapagar){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$contasapagar = new ContasaPagar();

	$contasapagar->get((int)$idcontasapagar);

	$contasapagar->setData($_POST);

	$contasapagar->save();

	header("Location: /admin/financeiro/contasapagar");
	exit;	
	
});



?>