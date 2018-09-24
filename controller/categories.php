<?php

use \Mycontrole\PageAdmin;
use \Mycontrole\Model\User;
use \Mycontrole\Model\Category;

// TIPOS DE CONTATO

$app->get('/admin/categories', function() {

	User::verifyLogin();

	$categories = Category::listAll();

	$page = new PageAdmin();

	$page->setTpl('categories', array('categories'=>$categories));

});

$app->get("/admin/categories/create", function(){

	User::verifyLogin();
	
	$page = new Mycontrole\PageAdmin();

	$page->setTpl("categories-create");

});

$app->post("/admin/categories/create", function(){

	User::verifyLogin();

	$categories = new Category();

	$categories->setData($_POST);

	$categories->save();

	header("Location: /admin/categories");
	exit;	

});

$app->get("/admin/categories/:idcategory/delete", function($idcategory){

	User::verifyLogin();

	$categories = new Category();

	$categories->get((int)$idcategory);

	$categories->delete();

	header("Location: /admin/categories");
	exit;
});

$app->get("/admin/categories/:idcategory", function($idcategory){

	User::verifyLogin();

	$categories = new Category();

	$categories->get((int)$idcategory);	

	$page = new Mycontrole\PageAdmin();

	$page->setTpl("categories-update", array("categories"=>$categories->getValues()
	));
});

$app->post("/admin/categories/:idcategory", function($idcategory){

	User::verifyLogin();

	$categories = new Category();

	$categories->get((int)$idcategory);

	$categories->setData($_POST);

	$categories->save();

	header("Location: /admin/categories");
	exit;	
	
});



?>