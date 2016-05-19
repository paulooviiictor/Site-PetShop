<?php require_once('../Connections/portal.php'); ?>
<?php
//initialize the session
session_start();

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  session_unregister('MM_Username');
  session_unregister('MM_UserGroup');
	
  $logoutGoTo = "login.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php

$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO usuarios (usu_nome, usu_email, usu_senha, usu_data) VALUES (%s, %s, md5(%s), %s)",
                       GetSQLValueString($_POST['usu_nome'], "text"),
                       GetSQLValueString($_POST['usu_email'], "text"),
                       GetSQLValueString($_POST['usu_senha'], "text"),
                       GetSQLValueString($_POST['usu_data'], "date"));

  mysql_select_db($database_ConnImasters, $ConnImasters);
  $Result1 = mysql_query($insertSQL, $ConnImasters) or die(mysql_error());

  $insertGoTo = "cadastro_usuario.php?sucesso=true";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Projeto: Portal de Not&iacute;cias [ &Aacute;rea Administrativa ]</title>
<style type="text/css" media="screen">
		<!--
			@import url(../css/style_portal_admin.css);
		-->
</style>
</head>
<body>
<!--
Aproveite este simples modelo, e aprenda um pouco sobre Tableless
-->
<div id="global">
	<div id="topo">
		<h1>Portal de Notícias [ Admin ]</h1>
	</div>
	<!-- / Head -->
	
	<div id="menu">
		<ul>
			<li><a href="index.php">Início do Admin</a></li>
			<li><a href="<?php echo $logoutAction ?>">Log out</a></li>
			<li><a href="cadastro_usuario.php">Cadastrar usuário</a></li>
			<li><a href="noticia_inserir.php">Cadastrar notícias</a></li>
		</ul>
	</div>
	<!-- / Menu -->
	
	<div id="conteudo_admin">
<?php if(isset($_GET["sucesso"])) { ?>
<h2>Usuário cadastrado com sucesso.</h2>
<?php } else { ?>
<form method="post" id="frm_cadastro_usuario" action="<?php echo $editFormAction; ?>">
	<table align="center">
		<tr valign="baseline">
			<td nowrap align="right">Nome::</td>
			<td><input type="text" name="usu_nome" value="" size="32"></td>
		</tr>
		<tr valign="baseline">
			<td nowrap align="right">E-mail:</td>
			<td><input type="text" name="usu_email" value="" size="32"></td>
		</tr>
		<tr valign="baseline">
			<td nowrap align="right">Senha:</td>
			<td><input type="password" name="usu_senha" value="" size="32"></td>
		</tr>
		<tr valign="baseline">
			<td nowrap align="right">Data:</td>
			<td><input type="text" name="usu_data" value="<?php echo date('Y/m/d'); ?>" size="32"></td>
		</tr>
		<tr valign="baseline">
			<td nowrap align="right">&nbsp;</td>
			<td><input type="submit" value="Cadastrar usuário"></td>
		</tr>
	</table>
	<input type="hidden" name="MM_insert" value="form1">
</form>
<?php } ?>
	</div>
	<!-- / Conteudo Admin -->
		
	<div id="rodape">
		<h4>Rodapé</h4>
	</div>
	<!-- / Rodapé -->
	
</div>
<!-- / Global -->

</body>
</html>
