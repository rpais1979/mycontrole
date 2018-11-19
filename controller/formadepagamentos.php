<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\FormadePagamento;

// TIPOS DE CONTATO

$app->get('/admin/formadepagamento', function() {

	User::verifyLogin();

	$formadepagamento = FormadePagamento::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('formadepagamento', array('formadepagamento'=>$formadepagamento));

});

$app->get("/admin/formadepagamento/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');
	
	$page->setTpl("formadepagamento-novo");

});

$app->post("/admin/formadepagamento/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$formadepagamento = new FormadePagamento();

	$formadepagamento->setData($_POST);

	$formadepagamento->save();

	header("Location: /admin/financeiro/formadepagamento");
	exit;	

});

$app->get("/admin/formadepagamento/:idformadepagamento/delete", function($idformadepagamento){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$formadepagamento = new FormadePagamento();

	$formadepagamento->get((int)$idformadepagamento);

	$formadepagamento->delete();

	header("Location: /admin/financeiro/formadepagamento");
	exit;
});

$app->get("/admin/formadepagamento/:idformadepagamento", function($idformadepagamento){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$formadepagamento = new FormadePagamento();

	$formadepagamento->get((int)$idformadepagamento);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("formadepagamento-editar", array("formadepagamento"=>$formadepagamento->getValues()
	));
});

$app->post("/admin/formadepagamento/:idformadepagamento", function($idformadepagamento){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$formadepagamento = new FormadePagamento();

	$formadepagamento->get((int)$idformadepagamento);

	$formadepagamento->setData($_POST);

	$formadepagamento->save();

	header("Location: /admin/financeiro/formadepagamento");
	exit;	
	
});



?>