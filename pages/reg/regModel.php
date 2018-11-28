<?php
//include('C:/OpenServer/domains/bwt/js/mainScript.js');
	$host = '127.0.0.1';
	$user = 'root';
	$password = '';
	mysql_connect($host,$user,$password);
	mysql_select_db("bwt_practice");
	$name = $_POST['usersRealName']; 
	$surname = $_POST['usersSurname'];
	$pathronic = $_POST['usersPathronicName'];
	$login = $_POST['usersLogin'];
	$Userspass = $_POST['usersPass'];
	$usersSex = $_POST['usersSex'];
	$BDate = $_POST['BirthDate'];
	$usersEmail = $_POST['usersEmail'];

//if (empty($name) ){
//	exit ("Введите имя!!!");
//}
//if (empty($surname) ){
//	exit ("Введите фамилию!!!");
//}//также дописать
  //  if (preg_match ('/[^а-яА-Я\s]+/msi', $usersEmail)){
    //	exit("Имейл должен дожержать только латынские буквы и собачку");
    //}

// $func1 = ifEmpty();
// var_dump($func1);


	$result = mysql_query("insert into Users(Name,Surname,Pathronic,usersLogin,usersPass,Sex,BirthDate,email) values('".$name."','".$surname."','".$pathronic."','".$login."','".$Userspass."','".$usersSex."','".$BDate."','".$usersEmail."')");
	//var_dump($result);
	if (!$result){
		echo "all isn't good";
	} else{
		echo "вы были успешно зарегистрированы";
		echo "<script>location.replace('../../index.php');</script>";
	}
?>