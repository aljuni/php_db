<?php
	session_start();
	$errorMessage = '';
	if(isset($_POST['txtUserId']) && isset($_POST['txtPassword'])){
		if($_POST['txtUserId'] === 'admin' && $_POST['txtPassword'] === 'aljuni123'){
			$_SESSION['basic_is_logged_in'] =  true;

			header('Location: index.php');
			exit;
		}else{

			$errorMessage = 'Sorry, wrong username/password';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Login Form</title>
</head>
<body>

	<?php
		if($errorMessage !=''){
	?>
	<p>
		<div align="center">
				<?php
					echo $errorMessage;
				?>
		</div>
		<?php
		}
		?>
	</p>

	<form action="" method="post" name="frmLogin" id="frmLogin">
		<table width="400" border="1" align="center">
			<tr>
				<td>
					<div align="left">
						Username
					</div>
				</td>
				<th width="160" scope="col">
					<div align="left">
						<input type="text" name="txtUserId" id="txtUserId">
					</div>
				</th>
			</tr>

			<tr>
				<td>
					<div align="left">
						Password
					</div>
				</td>
				<td>
					<div align="left">
						<input type="password" name="txtPassword" id="txtPassword">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					&nbsp;
				</td>
				<td>
					<input type="submit" name="btnLogin" id="btnLogin" value="Login">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>