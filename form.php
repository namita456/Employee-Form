<html>
<head>
<title>Employee</title>
<style>

.container{
	box-sizing: border-box;
	
}
input[type=text], select, textarea {
  width: 250%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: blue;
}
.th {
	font-size: 25px;
	color: black;
}
h1 {
	font-size: 36px;
	color: green;
	
}

</style>
</head>
<body>

<h1><center>Employee</center></h1>
<div class="container">
<form method="POST" action="save_details.php">

<table class="th" align="center">
<tr align="center">
<td>Name</td>
<td><input type="text" name="name" required="" placeholder="Enter Your Name"></td>
</tr>
<tr align="center">
<td>Contact Number</td>
<td><input type="text" name="contact" required="" placeholder="Enter Your Contact Number"></td>
</tr>
<tr align="center">
<td>Email</td>
<td><input type="text" name="email" required="" placeholder="Enter Your Email"></td>
</tr>
<tr align="center">
<td>Gender</td>
<td>Male<input type="radio" name="gender" value="male">
Female<input type="radio" name="gender" value="female"</td>
</tr>
<tr align="center">
<td>Job Title</td>
<td><input type="text" name="job_title" required="" placeholder="Enter Your Job Title"></td>
</tr>
<tr align="center">
<td>Salary</td>
<td><input type="text" name="salary" required="" placeholder="Enter Your Salary"></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>

</div>
</body>
</html>
