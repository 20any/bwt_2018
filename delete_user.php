<?
	$id = $_GET['id'];
	include("../config.php");
	$sql = "SELECT * FROM client WHERE id = $id";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	/*
	echo '<h3>+ you are about to delete the below record +</h3>';
	echo 'id: '.$row['id'].'<br/>';
	echo 'First name: '.$row['firstname'].'<br/>';
	echo 'Surname: '.$row['surname'].'<br/>';
	echo 'Login: '.$row['login'].'<br/>';
	echo 'email: '.$row['email'].'<br/>';
	echo 'password: '.$row['password'].'<br/>';

	echo '<a href="delete_record.php?id='.$row['id'].'">+ YES +</a>';
	echo '<a href="index.php">+ NO +</a>';*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Удаление работника</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
		<div class="container">
			<div class="row">
	    		<h1>Удаление работника</h1>
	    		<hr>
	    		<div class="alert alert-danger">Вы действительно хотите удалить работника №<?=$row['id'].''?>?</div>
	    		<div class="well well-lg">
	    			<?echo '<a class="btn btn-danger" href="delete_record.php?id='.$row['id'].'">Да</a>';?>
                    <a class="btn btn-default" href="index.php">Нет</a>
	    		</div>
			</div>
	</div>
</body>
</html>
