<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Fornecedor;

// TIPOS DE CONTATO

$app->get('/admin/fornecedor', function() {

	User::verifyLogin();

	$fornecedor = Fornecedor::listAll();

	$page = new PageAdmin();

	$page->setTpl('fornecedor', array('fornecedor'=>$fornecedor));

});

$app->get("/admin/fornecedor/novo", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("fornecedor-novo");

});

$app->post("/admin/fornecedor/novo", function(){

	User::verifyLogin();

	$fornecedor = new Fornecedor();

	$fornecedor->setData($_POST);

	$fornecedor->save();

	header("Location: /admin/fornecedor");
	exit;	

});

$app->get("/admin/fornecedor/:idfornecedor/delete", function($idfornecedor){

	User::verifyLogin();

	$fornecedor = new Fornecedor();

	$fornecedor->get((int)$idfornecedor);

	$fornecedor->delete();

	header("Location: /admin/fornecedor");
	exit;
});

$app->get("/admin/fornecedor/:idfornecedor", function($idfornecedor){

	User::verifyLogin();

	$fornecedor = new Fornecedor();

	$fornecedor->get((int)$idfornecedor);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("fornecedor-update", array("fornecedor"=>$fornecedor->getValues()
	));
});

$app->post("/admin/fornecedor/:idfornecedor", function($idfornecedor){

	User::verifyLogin();

	$fornecedor = new Fornecedor();

	$fornecedor->get((int)$idfornecedor);

	$fornecedor->setData($_POST);

	$fornecedor->save();

	header("Location: /admin/fornecedor");
	exit;	
	
});



?>