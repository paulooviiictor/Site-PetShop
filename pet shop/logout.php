<?php

session_start();

if(!isset($_REQUEST['logmeout'])){

	echo "Voc&ecirc; realmente deseja sair da &aacute;rea restrita?<br />";
	echo "<a href=\"logout.php?logmeout\">Sim</a> | <a href=\"javascript:history.go(-1)\">N&atilde;o</a>";

}
else{

	session_destroy();
echo"<script language='javascript' type='text/javascript'>alert('Voc\u00ea n\u00f5o estar mais logado em nosso site!');window.location.href='login.php';</script>";

		include "login.php";

	
}
?>