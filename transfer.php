<?php
session_start();
include('./Database/Connection.php');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sparks Foundation | Basic Banking System</title>
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png">
	
	<link rel="stylesheet" href="Front.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: #17202A;
		
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#17202A;
		padding:50px;
		
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#26abff;
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Avinash"){
				 var arr=["Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Harshal"){
					var arr=["Avinash","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				}
				else if(a==="Prathamesh"){
					var arr=["Avinash","Harshal","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				}
				else if(a==="Ajay"){
					var arr=["Avinash","Harshal","Prathamesh","Vaishali","Monika","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Vaishali"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Monika","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Monika"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Ravina","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Ravina"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Nishant","Avdhut","Rushi"];
				 }
				 else if(a==="Nishant"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Avdhut","Rushi"];
				 }
				 else if(a==="Avdhut"){
					var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Rushi"];
				 }
				 else if(a==="Rushi"){
				 var arr=["Avinash","Harshal","Prathamesh","Ajay","Vaishali","Monika","Ravina","Nishant","Avdhut"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>

	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="color:white">Senders Name: &nbsp;</label>
		<select id="input" name="sender" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Avinash">Avinash</option>
			<option value="Harshal">Harshal</option>
			<option value="Prathamesh">Prathamesh</option>
			<option value="Ajay">Ajay</option>
			<option value="Vaishali">Vaishali</option>
			<option value="Monika">Monika</option>
			<option value="Ravina">Ravina</option>
			<option value="Nishant">Nishant</option>
			<option value="Avdhut">Avdhut</option>
			<option value="Rushi">Rushi</option>
		</select><br><br>
		<label for="receiver" align="left"style="color:white">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left"style="color:white">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="buttons">
		<input class="buttons primary_btn" type="submit" name="submit" value="Transfer" >
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="primary_btn">HOME</button>
	</a>
</div>
</body>
</html>