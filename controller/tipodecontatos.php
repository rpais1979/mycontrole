<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\TipodeContato;

// TIPOS DE CONTATO

$app->get('/admin/tipodecontato', function() {

	User::verifyLogin();

	$tipodecontato = TipodeContato::listAll();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl('tipodecontato', array('tipodecontato'=>$tipodecontato));

});

$app->get("/admin/tipodecontato/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl("tipodecontato-novo");

});

$app->post("/admin/tipodecontato/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecontato = new TipodeContato();

	$tipodecontato->setData($_POST);

	$tipodecontato->save();

	header("Location: /admin/tipodecontato");
	exit;	

});

$app->get("/admin/tipodecontato/:idtipodecontato/delete", function($idtipodecontato){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecontato = new TipodeContato();

	$tipodecontato->get((int)$idtipodecontato);

	$tipodecontato->delete();

	header("Location: /admin/tipodecontato");
	exit;
});

$app->get("/admin/tipodecontato/:idtipodecontato", function($idtipodecontato){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecontato = new TipodeContato();

	$tipodecontato->get((int)$idtipodecontato);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("tipodecontato-editar", array("tipodecontato"=>$tipodecontato->getValues()
	));
});

$app->post("/admin/tipodecontato/:idtipodecontato", function($idtipodecontato){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodecontato = new TipodeContato();

	$tipodecontato->get((int)$idtipodecontato);

	$tipodecontato->setData($_POST);

	$tipodecontato->save();

	header("Location: /admin/tipodecontato");
	exit;	
	
});



?>