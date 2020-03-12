<?php


// inclure ici la librairie faciliant les requêtes SQL
include_once("maLibSQL.pdo.php");


function listerBagues()
{
	$SQL = "SELECT * FROM bijoux ";
	return parcoursRs(SQLSelect($SQL));
}


function triPrixASC()
{
	$SQL = "SELECT * FROM bijoux  ORDER BY bijoux.prix ASC";
		return parcoursRs(SQLSelect($SQL));
}
function triPrixDESC()
{
	$SQL = "SELECT * FROM `bijoux`  ORDER BY `bijoux`.`prix` DESC";
		return parcoursRs(SQLSelect($SQL));
}
function triCaratASC()
{
	$SQL = "SELECT * FROM `bijoux`  ORDER BY `bijoux`.`purete` ASC";
		return parcoursRs(SQLSelect($SQL));
}
function triCaratDESC()
{
	$SQL = "SELECT * FROM `bijoux`  ORDER BY `bijoux`.`purete` DESC";
		return parcoursRs(SQLSelect($SQL));
}
function triPopularite()
{
	$SQL = "SELECT * FROM `bijoux`  ORDER BY `bijoux`.`popularite` ASC";
		return parcoursRs(SQLSelect($SQL));
}
function triCheckbox($eltTri)
{
	$SQL = "SELECT * FROM bijoux WHERE alliage LIKE '$eltTri' ";
		return parcoursRs(SQLSelect($SQL));
}




?>
