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
mysql_select_db($database_ConnImasters, $ConnImasters);
$query_rsRelatorioNoticias = "SELECT * , date_format(not_data, '%d/%m/%Y') as not_data FROM noticias INNER JOIN usuarios ON noticias.not_usuario_id = usuarios.usu_id ORDER BY not_id DESC";
$rsRelatorioNoticias = mysql_query($query_rsRelatorioNoticias, $ConnImasters) or die(mysql_error());
$row_rsRelatorioNoticias = mysql_fetch_assoc($rsRelatorioNoticias);
$totalRows_rsRelatorioNoticias = mysql_num_rows($rsRelatorioNoticias);
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
	<h2>Relatório das notícias</h2>
	
	
	
	
	
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
     	<tr>
     		<th scope="col">T&iacute;tulo</th>
     		<th scope="col">Data</th>
     		<th scope="col">Status</th>
     		<th scope="col">Respons&aacute;vel</th>
     		<th colspan="2" scope="col">Fun&ccedil;&otilde;es</th>
     		</tr>
     	<?php do { ?>
     	<tr>
     			<td><?php echo $row_rsRelatorioNoticias['not_titulo']; ?></td>
     			<td><?php echo $row_rsRelatorioNoticias['not_data']; ?></td>
     			<td><?php echo $row_rsRelatorioNoticias['not_status']; ?></td>
     			<td><?php echo $row_rsRelatorioNoticias['usu_nome']; ?></td>
     			<td><a href="noticia_editar.php?not_id=<?php echo $row_rsRelatorioNoticias['not_id']; ?>"><img src="../img/editar.gif" width="16" height="16" border="0" /></a></td>
     			<td><a href="noticia_excluir.php?not_id=<?php echo $row_rsRelatorioNoticias['not_id']; ?>"><img src="../img/delete.gif" width="16" height="16" /></a></td>
     		</tr>
     	<?php } while ($row_rsRelatorioNoticias = mysql_fetch_assoc($rsRelatorioNoticias)); ?>
     	</table>
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
mysql_free_result($rsRelatorioNoticias);
?>
