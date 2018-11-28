<?
	$id = $_GET['id'];
	include("../config.php");
	$sql = "SELECT * FROM client WHERE id = $id LIMIT 1";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add customer</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<div class="container">
		<div class="row">
		    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		    <h2>Редактирование работника</h2>
				<form method="POST" action="update_user.php" >
					<hr>
					<div class="form-group" style="display:none;">
				                <input type="text" name="id"  class="form-control input-lg" placeholder="id" tabindex="1" value="<?echo $row['id'];?>"/>
							</div>
					<div class="form-group">
			            <input type="text" name="client_account" id="client_account" class="form-control input-lg" placeholder="Номер клиента" tabindex="1" value="<?echo $row['client_account'];?>" required>
					</div>
					<div class="form-group">
						<input type="text" name="tariff_plan" id="tariff_plan" class="form-control input-lg" placeholder="Тарифный план" tabindex="2" value="<?echo $row['tariff_plan'];?>" required>
					</div>
					<div class="form-group">
						<input type="text" name="phone_number" id="phone_number" class="form-control input-lg" placeholder="Телефон" tabindex="3" value="<?echo $row['phone_number'];?>">
					</div>
					<div class="form-group">
						<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Имя" tabindex="4" value="<?echo $row['name'];?>" required>
					</div>
					<div class="form-group">
						<input type="text" name="address" id="address" class="form-control input-lg" placeholder="Адресс" tabindex="4" value="<?echo $row['address'];?>" required>
					</div>
					<div class="form-group">
						<input type="text" name="region" id="region" class="form-control input-lg" placeholder="Город" tabindex="4" value="<?echo $row['region'];?>" required>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12 col-md-6"><button type="submit" class="btn btn-warning btn-block btn-lg">Изменить</button></div>
						<div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg" >Назад</a></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?
mysql_close();
?>