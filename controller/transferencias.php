<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Transferencias;

// TIPOS DE CONTATO

$app->get('/admin/transferencia', function() {

	User::verifyLogin();

	$transferencia = Transferencias::listAll();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl('transferencia', array('transferencia'=>$transferencia));

});

$app->get("/admin/transferencia/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/financeiro/');

	$page->setTpl("transferencia-novo");

});

$app->post("/admin/transferencia/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$transferencia = new Transferencias();

	$transferencia->setData($_POST);

	$transferencia->save();

	header("Location: /admin/transferencia");
	exit;	

});

$app->get("/admin/transferencia/:idtransferencia/delete", function($idtransferencia){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$transferencia = new Transferencias();

	$transferencia->get((int)$idtransferencia);

	$transferencia->delete();

	header("Location: /admin/transferencia");
	exit;
});

$app->get("/admin/transferencia/:idtransferencia", function($idtransferencia){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$transferencia = new Transferencias();

	$transferencia->get((int)$idtransferencia);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("transferencia-editar", array("transferencia"=>$transferencia->getValues()
	));
});

$app->post("/admin/transferencia/:idtransferencia", function($idtransferencia){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/financeiro/');

	$transferencia = new Transferencias();

	$transferencia->get((int)$idtransferencia);

	$transferencia->setData($_POST);

	$transferencia->save();

	header("Location: /admin/transferencia");
	exit;	
	
});



?>