<?php header("Access-Control-Allow-Origin: *");
$conn = mysqli_connect("host","user","pass","databasename")
/*
	db::clean($string);  -> escapes the string
	db::looper($query);  -> returns an array
	db::get($column,$query);  -> returns a specific column in database
	db::json($query);  -> returns json array
	db::counts($query);  -> count sql results
	db::udi($query);  -> update,delete,insert function returns boolean 1 = success , 0 = error
	db::redirect($url);  -> redirects page
	db::redirect($url);  -> redirects page
	db::redirect($url);  -> redirects page
	db::out($url);  -> remove sessions

	how to use ?

	send / create post or get datas to 'model.php?ctrl='
	then create a ctrl name example allusers -> you will post datas to this link -> model.php?ctrl=allusers
	then create a function inside ctrl.php

	public static function allusers(){
			//then you can you directives here
			$id = db::clean($_POST['id']);
			return db::json("SELECT * FROM allusers");
	}

*/

	if(@$_GET['ctrl']){

		$ctrl = $_GET['ctrl'];
		echo ctrl::$ctrl();

	} else if(@$_POST['ctrl']){

		$ctrl = $_POST['ctrl'];
		echo ctrl::$ctrl();

	} else {
		echo "<small style='color:gold;'>// Silence is Golden</small>";

	}
