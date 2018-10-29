<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\clientes;

// TIPOS DE CONTATO

$app->get('/admin/cliente', function() {

	User::verifyLogin();

	$cliente = clientes::listAll();

	$page = new PageAdmin();

	$page->setTpl('cliente', array('cliente'=>$cliente));

});

$app->get("/admin/cliente/novo", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("cliente-novo");

});

$app->post("/admin/cliente/novo", function(){

	User::verifyLogin();

	$cliente = new clientes();

	$cliente->setData($_POST);

	$cliente->save();

	header("Location: /admin/cliente");
	exit;	

});

$app->get("/admin/cliente/:idcliente/delete", function($idcliente){

	User::verifyLogin();

	$cliente = new clientes();

	$cliente->get((int)$idcliente);

	$cliente->delete();

	header("Location: /admin/cliente");
	exit;
});

$app->get("/admin/cliente/:idcliente", function($idcliente){

	User::verifyLogin();

	$cliente = new clientes();

	$cliente->get((int)$idcliente);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("cliente-update", array("cliente"=>$cliente->getValues()
	));
});

$app->post("/admin/cliente/:idcliente", function($idcliente){

	User::verifyLogin();

	$cliente = new clientes();

	$cliente->get((int)$idcliente);

	$cliente->setData($_POST);

	$cliente->save();

	header("Location: /admin/cliente");
	exit;	
	
});



?>