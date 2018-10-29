<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\FormadePagamento;

// TIPOS DE CONTATO

$app->get('/admin/financeiro/formadepagamento', function() {

	User::verifyLogin();

	$formadepagamento = FormadePagamento::listAll();

	$page = new PageAdmin();

	$page->setTpl('formadepagamento', array('formadepagamento'=>$formadepagamento));

});

$app->get("/admin/financeiro/formadepagamento/novo", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("formadepagamento-novo");

});

$app->post("/admin/financeiro/formadepagamento/novo", function(){

	User::verifyLogin();

	$formadepagamento = new FormadePagamento();

	$formadepagamento->setData($_POST);

	$formadepagamento->save();

	header("Location: /admin/financeiro/formadepagamento");
	exit;	

});

$app->get("/admin/financeiro/formadepagamento/:idformadepagamento/delete", function($idformadepagamento){

	User::verifyLogin();

	$formadepagamento = new FormadePagamento();

	$formadepagamento->get((int)$idformadepagamento);

	$formadepagamento->delete();

	header("Location: /admin/financeiro/formadepagamento");
	exit;
});

$app->get("/admin/financeiro/formadepagamento/:idformadepagamento", function($idformadepagamento){

	User::verifyLogin();

	$formadepagamento = new FormadePagamento();

	$formadepagamento->get((int)$idformadepagamento);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("formadepagamento-editar", array("formadepagamento"=>$formadepagamento->getValues()
	));
});

$app->post("/admin/financeiro/formadepagamento/:idformadepagamento", function($idformadepagamento){

	User::verifyLogin();

	$formadepagamento = new FormadePagamento();

	$formadepagamento->get((int)$idformadepagamento);

	$formadepagamento->setData($_POST);

	$formadepagamento->save();

	header("Location: /admin/financeiro/formadepagamento");
	exit;	
	
});



?>