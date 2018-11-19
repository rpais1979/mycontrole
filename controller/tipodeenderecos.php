<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\TipodeEndereco;

// TIPOS DE CONTATO

$app->get('/admin/tipodeendereco', function() {

	User::verifyLogin();

	$tipodeendereco = TipodeEndereco::listAll();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$page->setTpl('tipodeendereco', array('tipodeendereco'=>$tipodeendereco));

});

$app->get("/admin/tipodeendereco/novo", function(){

	User::verifyLogin();
	
	$page = new PageAdmin([], '/views/admin/configuracao/');
	
	$page->setTpl("tipodeendereco-novo");

});

$app->post("/admin/tipodeendereco/novo", function(){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodeendereco = new TipodeEndereco();

	$tipodeendereco->setData($_POST);

	$tipodeendereco->save();

	header("Location: /admin/tipodeendereco");
	exit;	

});

$app->get("/admin/tipodeendereco/:idtipodeendereco/delete", function($idtipodeendereco){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodeendereco = new TipodeEndereco();

	$tipodeendereco->get((int)$idtipodeendereco);

	$tipodeendereco->delete();

	header("Location: /admin/tipodeendereco");
	exit;
});

$app->get("/admin/tipodeendereco/:idtipodeendereco", function($idtipodeendereco){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodeendereco = new TipodeEndereco();

	$tipodeendereco->get((int)$idtipodeendereco);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("tipodeendereco-editar", array("tipodeendereco"=>$tipodeendereco->getValues()
	));
});

$app->post("/admin/tipodeendereco/:idtipodeendereco", function($idtipodeendereco){

	User::verifyLogin();

	$page = new PageAdmin([], '/views/admin/configuracao/');

	$tipodeendereco = new TipodeEndereco();

	$tipodeendereco->get((int)$idtipodeendereco);

	$tipodeendereco->setData($_POST);

	$tipodeendereco->save();

	header("Location: /admin/tipodeendereco");
	exit;	
	
});



?>