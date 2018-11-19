<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Produto;

// TIPOS DE CONTATO

$app->get('/admin/produto', function() {

	User::verifyLogin();

	$produto = Produto::listAll();

	$page = new PageAdmin([], '/views/admin/produto/');

	$page->setTpl('produto', array('produto'=>$produto));

});

$app->get("/admin/produto/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/produto/');

	$page->setTpl("produto-novo");

});

$app->post("/admin/produto/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/produto/');

	$produto = new Produto();

	$produto->setData($_POST);

	$produto->save();

	header("Location: /admin/produto");
	exit;	

});

$app->get("/admin/produto/:idproduto/delete", function($idproduto){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/produto/');

	$produto = new Produto();

	$produto->get((int)$idproduto);

	$produto->delete();

	header("Location: /admin/produto");
	exit;
});

$app->get("/admin/produto/:idproduto", function($idproduto){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/produto/');

	$produto = new Produto();

	$produto->get((int)$idproduto);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("produto-update", array("produto"=>$produto->getValues()
	));
});

$app->post("/admin/produto/:idproduto", function($idproduto){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/produto/');

	$produto = new Produto();

	$produto->get((int)$idproduto);

	$produto->setData($_POST);

	$produto->save();

	header("Location: /admin/produto");
	exit;	
	
});



?>