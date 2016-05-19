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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE noticias SET not_titulo=%s, not_conteudo=%s, not_data=%s, not_status=%s, not_fonte=%s, not_usuario_id=%s WHERE not_id=%s",
                       GetSQLValueString($_POST['not_titulo'], "text"),
                       GetSQLValueString($_POST['not_conteudo'], "text"),
                       GetSQLValueString($_POST['not_data'], "date"),
                       GetSQLValueString($_POST['not_status'], "text"),
                       GetSQLValueString($_POST['not_fonte'], "text"),
                       GetSQLValueString($_POST['not_usuario_id'], "text"),
                       GetSQLValueString($_POST['not_id'], "int"));

  mysql_select_db($database_ConnImasters, $ConnImasters);
  $Result1 = mysql_query($updateSQL, $ConnImasters) or die(mysql_error());

  $updateGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_rsEditarNoticia = "1";
if (isset($_GET['not_id'])) {
  $colname_rsEditarNoticia = (get_magic_quotes_gpc()) ? $_GET['not_id'] : addslashes($_GET['not_id']);
}
mysql_select_db($database_ConnImasters, $ConnImasters);
$query_rsEditarNoticia = sprintf("SELECT * FROM noticias WHERE not_id = %s", $colname_rsEditarNoticia);
$rsEditarNoticia = mysql_query($query_rsEditarNoticia, $ConnImasters) or die(mysql_error());
$row_rsEditarNoticia = mysql_fetch_assoc($rsEditarNoticia);
$totalRows_rsEditarNoticia = mysql_num_rows($rsEditarNoticia);
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
	<h2>Alterar as notícias</h2>
	
	



	
     <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
     	<table align="center">
     		<tr valign="baseline">
     			<td nowrap align="right">Not_titulo:</td>
     			<td><input type="text" name="not_titulo" value="<?php echo $row_rsEditarNoticia['not_titulo']; ?>" size="32"></td>
     			</tr>
     		<tr valign="baseline">
     			<td nowrap align="right" valign="top">Not_conteudo:</td>
     			<td><textarea name="not_conteudo" cols="50" rows="5"><?php echo $row_rsEditarNoticia['not_conteudo']; ?></textarea>
     				</td>
     			</tr>
     		<tr valign="baseline">
     			<td nowrap align="right">Not_data:</td>
     			<td><input type="text" name="not_data" value="<?php echo $row_rsEditarNoticia['not_data']; ?>" size="32"></td>
     			</tr>
     		<tr valign="baseline">
     			<td nowrap align="right">Not_status:</td>
     			<td><select name="not_status">
     					<option value="ON" <?php if (!(strcmp("ON", $row_rsEditarNoticia['not_status']))) {echo "SELECTED";} ?>>ON</option>
     					<option value="OFF" <?php if (!(strcmp("OFF", $row_rsEditarNoticia['not_status']))) {echo "SELECTED";} ?>>OFF</option>
     					</select>
     				</td>
     			</tr>
     		<tr valign="baseline">
     			<td nowrap align="right">Not_fonte:</td>
     			<td><input type="text" name="not_fonte" value="<?php echo $row_rsEditarNoticia['not_fonte']; ?>" size="32"></td>
     			</tr>
     		<tr valign="baseline">
     			<td nowrap align="right">&nbsp;</td>
     			<td><input type="submit" value="Atualizar"></td>
     			</tr>
     		</table>
     	<input type="hidden" name="not_id" value="<?php echo $row_rsEditarNoticia['not_id']; ?>">
     	<input type="hidden" name="not_usuario_id" value="<?php echo $row_rsEditarNoticia['not_usuario_id']; ?>">
     	<input type="hidden" name="MM_update" value="form1">
     	<input type="hidden" name="not_id" value="<?php echo $row_rsEditarNoticia['not_id']; ?>">
     	</form>

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
<?php
mysql_free_result($rsEditarNoticia);
?>
