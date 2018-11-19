<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\CentrodeCusto;

// TIPOS DE CONTATO

$app->get('/admin/centrodecusto', function() {

	User::verifyLogin();

	$centrodecusto = CentrodeCusto::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('centrodecusto', array('centrodecusto'=>$centrodecusto));

});

$app->get("/admin/centrodecusto/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl("centrodecusto-novo");

});

$app->post("/admin/centrodecusto/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$centrodecusto = new CentrodeCusto();

	$centrodecusto->setData($_POST);

	$centrodecusto->save();

	header("Location: /admin/centrodecusto");
	exit;	

});

$app->get("/admin/centrodecusto/:idcentrodecusto/delete", function($idcentrodecusto){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$centrodecusto = new CentrodeCusto();

	$centrodecusto->get((int)$idcentrodecusto);

	$centrodecusto->delete();

	header("Location: /admin/centrodecusto");
	exit;
});

$app->get("/admin/centrodecusto/:idcentrodecusto", function($idcentrodecusto){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$centrodecusto = new CentrodeCusto();

	$centrodecusto->get((int)$idcentrodecusto);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("centrodecusto-editar", array("centrodecusto"=>$centrodecusto->getValues()
	));
});

$app->post("/admin/centrodecusto/:idcentrodecusto", function($idcentrodecusto){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$centrodecusto = new CentrodeCusto();

	$centrodecusto->get((int)$idcentrodecusto);

	$centrodecusto->setData($_POST);

	$centrodecusto->save();

	header("Location: /admin/centrodecusto");
	exit;	
	
});



?>