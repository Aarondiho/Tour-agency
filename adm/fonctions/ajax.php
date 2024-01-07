<?php

ob_start();
$action = $_GET['action'];
include 'classes.php';

$crud = new Action();


if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action =='save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == "editer_mot_de_passe"){
	$save = $crud->editer_mot_de_passe();
	if($save)
		echo $save;
}
if($action == "reinitialiser"){
	$save = $crud->reinitialiser();
	if($save)
		echo $save;
}

if($action == "desactiver"){
	$save = $crud->desactiver();
	if($save)
		echo $save;
}


if($action == "save_post"){
	$save = $crud->save_post();
	if($save)
		echo $save;
}


