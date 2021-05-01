<?php
session_start();
include('./Database/Connection.php');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mi7ni Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="Front.css">
		<link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-color:#17202A;
			
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			
			border-collapse:collapse;
			 background: #336ca6;
			}
		th{
			color:white;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color:white ;
			padding: 10px 20px 10px 22px;
		}
		
		th,td{
			border-collapse:collapse;
			border:1px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}
		.btn:hover {
			background-color:  DodgerBlue;
		}
	</style>
	</head>
	<body>
	<ul class="nav-ul">
	<a href="index.php" style="color:white;font-size:24px">
		<li class="nav-li"><i class="fa fa-home"> Home</i></li>
	</a>
	</ul><br><br><br>
		<h2 style="color:white"><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons">
			<br><button class="primary_btn" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			
			</div>
		</form>
		
	</body>
</html>