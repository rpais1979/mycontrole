<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\FinanceiroCategoria;

// TIPOS DE CONTATO

$app->get('/admin/financeirocategoria', function() {

	User::verifyLogin();

	$financeirocategoria = FinanceiroCategoria::listAll();

	$page = new PageAdmin();

	$page->setTpl('financeirocategoria', array('financeirocategoria'=>$financeirocategoria));

});

$app->get("/admin/financeirocategoria/novo", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("financeirocategoria-novo");

});

$app->post("/admin/financeirocategoria/novo", function(){

	User::verifyLogin();

	$financeirocategoria = new FinanceiroCategoria();

	$financeirocategoria->setData($_POST);

	$financeirocategoria->save();

	header("Location: /admin/financeirocategoria");
	exit;	

});

$app->get("/admin/financeirocategoria/:idfinanceirocategoria/delete", function($idfinanceirocategoria){

	User::verifyLogin();

	$financeirocategoria = new FinanceiroCategoria();

	$financeirocategoria->get((int)$idfinanceirocategoria);

	$financeirocategoria->delete();

	header("Location: /admin/financeirocategoria");
	exit;
});

$app->get("/admin/financeirocategoria/:idfinanceirocategoria", function($idfinanceirocategoria){

	User::verifyLogin();

	$financeirocategoria = new FinanceiroCategoria();

	$financeirocategoria->get((int)$idfinanceirocategoria);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("financeirocategoria-editar", array("financeirocategoria"=>$financeirocategoria->getValues()
	));
});

$app->post("/admin/financeirocategoria/:idfinanceirocategoria", function($idfinanceirocategoria){

	User::verifyLogin();

	$financeirocategoria = new FinanceiroCategoria();

	$financeirocategoria->get((int)$idfinanceirocategoria);

	$financeirocategoria->setData($_POST);

	$financeirocategoria->save();

	header("Location: /admin/financeirocategoria");
	exit;	
	
});



?>