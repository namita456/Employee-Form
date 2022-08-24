<?php
if(isset($_POST['submit']))
{
	include 'db_con.php';
	extract($_POST);
	$ins_que = "insert into employee(name, contact, email, gender, job_title, salary) values('$name', '$contact', '$email', '$gender', '$job_title', '$salary')";
	mysqli_query($con, $ins_que);
	
}
else {
	header('Location:form.php');
}




?>