<?php require_once('../Connections/portal.php'); ?>
<?php
// *** Validate request to login to this site.
session_start();

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($accesscheck)) {
  $GLOBALS['PrevUrl'] = $accesscheck;
  session_register('PrevUrl');
}

if (isset($_POST['usu_email'])) {
  $loginUsername=$_POST['usu_email'];
  $password=md5($_POST['usu_senha']);
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login.php?login_errado=true";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_ConnImasters, $ConnImasters);
  
  $LoginRS__query=sprintf("SELECT usu_email, usu_senha FROM usuarios WHERE usu_email='%s' AND usu_senha='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $ConnImasters) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $GLOBALS['MM_Username'] = $loginUsername;
    $GLOBALS['MM_UserGroup'] = $loginStrGroup;	      

    //register the session variables
    session_register("MM_Username");
    session_register("MM_UserGroup");

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
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
			<li><a href="cadastro_usuario.php">Cadastrar usuário</a></li>
			<li><a href="noticia_inserir.php">Cadastrar notícias</a></li>
		</ul>
	</div>
	<!-- / Menu -->
	
	<div id="conteudo_admin">

<?php if(isset($_GET["login_errado"])) { ?>
<p class="alerta">O login e/ou senha não consta em nosso banco de dados.</p>
<?php } ?>
<form id="frm_login" method="POST" action="<?php echo $loginFormAction; ?>">
<h2>Informe seus dados de acesso.</h2>
	<p><input name="usu_email" type="text" id="usu_email" /></p>
	<p><input name="usu_senha" type="password" id="usu_senha" />
	</p>
	<p><input type="submit" name="Submit" value="Logar" /></p>
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
