<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\FinanceiroContasBancarias;

// TIPOS DE CONTATO

$app->get('/admin/financeirocontabancaria', function() {

	User::verifyLogin();

	$financeirocontabancaria = FinanceiroContasBancarias::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('financeirocontabancaria', array('financeirocontabancaria'=>$financeirocontabancaria));

});

$app->get("/admin/financeirocontabancaria/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl("financeirocontabancaria-novo");

});

$app->post("/admin/financeirocontabancaria/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirocontabancaria = new FinanceiroContasBancarias();

	$financeirocontabancaria->setData($_POST);

	$financeirocontabancaria->save();

	header("Location: /admin/financeirocontabancaria");
	exit;	

});

$app->get("/admin/financeirocontabancaria/:idfinanceirocontabancaria/delete", function($idfinanceirocontabancaria){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirocontabancaria = new FinanceiroContasBancarias();

	$financeirocontabancaria->get((int)$idfinanceirocontabancaria);

	$financeirocontabancaria->delete();

	header("Location: /admin/financeirocontabancaria");
	exit;
});

$app->get("/admin/financeirocontabancaria/:idfinanceirocontabancaria", function($idfinanceirocontabancaria){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirocontabancaria = new FinanceiroContasBancarias();

	$financeirocontabancaria->get((int)$idfinanceirocontabancaria);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("financeirocontabancaria-editar", array("financeirocontabancaria"=>$financeirocontabancaria->getValues()
	));
});

$app->post("/admin/financeirocontabancaria/:idfinanceirocontabancaria", function($idfinanceirocontabancaria){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$financeirocontabancaria = new FinanceiroContasBancarias();

	$financeirocontabancaria->get((int)$idfinanceirocontabancaria);

	$financeirocontabancaria->setData($_POST);

	$financeirocontabancaria->save();

	header("Location: /admin/financeirocontabancaria");
	exit;	
	
});



?>