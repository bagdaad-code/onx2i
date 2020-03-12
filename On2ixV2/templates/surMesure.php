<!--
   quiSommesNous.html

   Copyright 2020 afacqueu <afacqueu@b2-IG-201PC20.domaine.lan>

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.


-->
<?php

if (basename($_SERVER["PHP_SELF"]) != "index.php")
{
	header("Location:../index.php?view=surMesure");
	die("");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Sur Mesure</title>
	<meta charset="UTF-8">
	<link href="css/serviceClient.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
	      [class*="col"] { margin-top: 20px; }
	      img { width: 70%;
				text-align:center; }
	    </style>
</head>

<body>
	<div class="container">
	  <h1 class="titre">Créez votre bijou</h1>


	</div>

</body>

</html>
