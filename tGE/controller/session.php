<?php

function test(){echo "<script>window.alert('tGE session cookie is set!')</script>";}

function getSession(){
	//look for browser cookie for session info
	if(isset($_COOKIE["tGE_session"])){
		echo "<script>window.alert('tGE session cookie is set!')</script>";
	} else {
		echo "<script>window.alert('tGE session cookie is NOT set!')</script>";
	}
		
	//look in session DB for matching session
	
}

function createSession(){
	//$session = array();
	$sessionID =  $_SERVER['REQUEST_TIME'];
	$userID = '0';
	$IP_addr = $_SERVER['REMOTE_ADDR'];
	$cartID = $sessionID;
	$timeout = time()+3600;
}

function login($u_name, $pass){
	//get username, pass from user
	
	//check db for correct info
	
	//set session variables, set cookie
}

function logout($session_ID){
	//save cart for session

	//delete session from DB
	
	//unset session cookie
}


?>
