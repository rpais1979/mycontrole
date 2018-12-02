<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Vendas;

// TIPOS DE CONTATO

$app->get('/admin/vendas', function() {

	User::verifyLogin();

	$vendas = Vendas::listAll();

	$page = new PageAdmin([], '/views/admin/vendas/');

	$page->setTpl('vendas', array('vendas'=>$vendas));

});

$app->get("/admin/vendas/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/vendas/');
	
	$page->setTpl("vendas-novo");

});

$app->post("/admin/vendas/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/vendas/');

	$vendas = new Vendas();

	$vendas->setData($_POST);

	$vendas->save();

	header("Location: /admin/vendas/vendas");
	exit;	

});

$app->get("/admin/vendas/:idvendas/delete", function($idvendas){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/vendas/');

	$vendas = new Vendas();

	$vendas->get((int)$idvendas);

	$vendas->delete();

	header("Location: /admin/vendas/vendas");
	exit;
});

$app->get("/admin/vendas/:idvendas", function($idvendas){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/vendas/');

	$vendas = new Vendas();

	$vendas->get((int)$idvendas);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("vendas-editar", array("vendas"=>$vendas->getValues()
	));
});

$app->post("/admin/vendas/:idvendas", function($idvendas){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/vendas/');

	$vendas = new Vendas();

	$vendas->get((int)$idvendas);

	$vendas->setData($_POST);

	$vendas->save();

	header("Location: /admin/vendas/vendas");
	exit;	
	
});



?>