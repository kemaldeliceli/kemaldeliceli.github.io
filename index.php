<!DOCTYPE HTML>
<html>
<head>
<title><?php
echo "Hello World!";
?></title>
</head>

 

	
<body style="background-color:beige;">

<center><h1>Personality Informations</h1></center>
<center><img src="kemal.jpg" width="250" height="250" style="border:solid darkslategrey"> </center>
<center>

<table style="background-color:darkseagreen;" border=1px;> 	
<tr>
 	<th>Firstname</th>
 	<th>Kemal</th>  
  </tr>

<tr>
  <th>Lastname</th>
	<th>Deliceli</th>
</tr>

<tr>
  <th>Age</th>
  <th>20</th>
</tr>

<tr>
  <th>City</th>
  <th>Sinop</th>
</tr>
  	
<tr>
  <th>School</th>
  <th>Gebze Technical University</th>
</tr>


<tr>
	<th>Hobies</th>
	<th>Watching movie and football match , reading book , listening and singing song, writing short film scenario </th>
</tr>

<tr>
  <th>E-mail</th>
  <th>kmldeliceli@gmail.com</th>
</tr>

<tr>
  <th>Social Media Accounts</th>
  <th>
  <a href="https://www.instagram.com/kemaldeliceli/"><img src="instagram.png" alt="Instagram" width="50" height="50"></a>
  <a href="https://tr-tr.facebook.com/kemal.deliceli.7"> <img     src="facebook.png" alt="Facebook" width="50" height="50"></a>
  <a href="https://twitter.com/kemaldeliceli"><img src="twitter.png" alt="Twitter" width="50" height="50"></a>
  <a href="https://plus.google.com/u/0/111883558579351453285"><img src="google.png" alt="Google" width="50" height="50"></a>
  </th>
</tr>
<tr>
	<th>Resume</th>
	<th>
	
	<a href="https://drive.google.com/open?id=0B3S4Zf-vxCz3VlMwdjRfa2NqR2M"><img src="resume.png" alt="Resume" width="50" height="50">
	</th>	
</tr>
	
</table>
</center>
<?php

$page = file_get_contents('https://www.google.com');
echo $page;
echo "I am here ";
?>
	
	
</body>
</html> 
