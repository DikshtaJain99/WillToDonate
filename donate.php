<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
	<link rel="stylesheet" type="text/css" href="donate.css">
</head>
<body>
	<form method="POST" action="">
	<div>Enter Your Name</br>
		<input type="text" name="don_name" style="width : 250px;"/>
	</div>
	<div>
		<table>
			<tr>
				<th>Article Type</th>
				<th>Count</th>
				<th>Desciption</th>
			</tr>
			<tr>
				<th>
					<object type="image/svg+xml" data="sofa.svg" width="80vw" height="80vw"></object><br>
					Furniture
				</th>
				<th><input type="number" name="count_fur"></th>
				<th><input type="textbox" name="fur_des" placeholder="Enter description here..."></th>
			</tr>
			<tr>
				<th>
					<object type="image/svg+xml" data="computer.svg" width="80vw" height="80vw"></object><br>
					Electronics
				</th>
				<th><input type="number" name="count_elec"></th>
				<th><input type="textbox" name="elec_des" placeholder="Enter description here..."></th>
			</tr>
			<tr>
				<th>
					<object type="image/svg+xml" data="dinner.svg" width="80vw" height="80vw"></object><br>
					Food
				</th>
				<th><input type="number" name="count_food"></th>
				<th><input type="textbox" name="food_des" placeholder="Enter description here..."></th>
			</tr>
			<tr>
				<th>
					<object type="image/svg+xml" data="t-shirt.svg" width="80vw" height="80vw"></object><br>
					Cloths
				</th>
				<th><input type="number" name="count_cloth"></th>
				<th><input type="textbox" name="cloth_des" placeholder="Enter description here..."></th>
			</tr>
			<tr>
				<th>
					<object type="image/svg+xml" data="toy.svg" width="80vw" height="80vw"></object><br>
					Toys
				</th>
				<th><input type="number" name="count_toy"></th>
				<th><input type="textbox" name="toy_des" placeholder="Enter description here..."></th>
			</tr>
		</table>
	</div>
	<div>
	 <input type="SUBMIT" name = "submit" value = "Donate" >
	</div>
</form>
</body>
<?php
		if(isset($_POST["submit"])){
			dbentry();
		}
		function dbentry(){
			$servername="localhost";
			$username="root";
			$password="dikshita99";
			$dbname="will_to_donate";
			$conn=new mysqli($servername,$username,$password,$dbname);
			if($conn->connect_error){
				die("Connection failed: " .$conn->connect_error);
			}
			$donator_name=$_POST["don_name"];
			$fur=$_POST["count_fur"];
			$fur_des=$_POST["fur_des"];
			$elec=$_POST["count_elec"];
			$elec_des=$_POST["elec_des"];
			$food=$_POST["count_food"];
			$food_des=$_POST["food_des"];
			$cloth=$_POST["count_cloth"];
			$cloth_des=$_POST["cloth_des"];
			$toy=$_POST["count_toy"];
			$toy_des=$_POST["toy_des"];
			
			$sql="insert into count_don (donator_name,fur,fur_des,elec,elec_des,food,food_des,cloth,cloth_des,toy,toy_des) values( \"".$donator_name."\",\"".(int)$fur."\",\"".$fur_des."\",\"".(int)$elec."\",\"".$elec_des."\",\"".(int)$food."\",\"".$food_des."\",\"".(int)$cloth."\",\"".$cloth_des."\",\"".(int)$toy."\",\"".$toy_des."\")";
			if($conn->query($sql) === TRUE){
				echo "<script type=\"text/javascript\"> alert(\"Entered into database.\"); window.location.href=\"http://localhost/WilltoDonate-master/home.html\";</script>";
			}
			else{
				echo "Error" .$sql. "<br>" .$conn->error;
			}
			$conn->close();
			}
	?>
</html>