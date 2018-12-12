<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Funcionarios;

// TIPOS DE CONTATO

$app->get('/admin/funcionario', function() {

	User::verifyLogin();

	$funcionario = Funcionarios::listAll();

	$page = new PageAdmin([], '/views/admin/funcionario/');

	$page->setTpl('funcionario', array('funcionario'=>$funcionario));

});

$app->get("/admin/funcionario/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/funcionario/');

	$page->setTpl("funcionario-novo");

});

$app->post("/admin/funcionario/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/funcionario/');

	$funcionario = new Funcionarios();

	$funcionario->setData($_POST);

	$funcionario->save();

	header("Location: /admin/funcionario");
	exit;	

});

$app->get("/admin/funcionario/:idfuncionario/delete", function($idfuncionario){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/funcionario/');

	$funcionario = new Funcionarios();

	$funcionario->get((int)$idfuncionario);

	$funcionario->delete();

	header("Location: /admin/funcionario");
	exit;
});

$app->get("/admin/funcionario/:idfuncionario", function($idfuncionario){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/funcionario/');

	$funcionario = new Funcionarios();

	$funcionario->get((int)$idfuncionario);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("funcionario-update", array("funcionario"=>$funcionario->getValues()
	));
});

$app->post("/admin/funcionario/:idfuncionario", function($idfuncionario){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/funcionario/');

	$funcionario = new Funcionarios();

	$funcionario->get((int)$idfuncionario);

	$funcionario->setData($_POST);

	$funcionario->save();

	header("Location: /admin/funcionario");
	exit;	
	
});



?>