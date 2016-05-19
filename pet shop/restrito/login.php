		  <?php
								$login_cookie = $_COOKIE['login'];
								if(isset($login_cookie))
								{ 
									
									
									
								}
								else
								{
									echo"Bem-Vindo, convidado <br>";
									
									echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
									
									echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
								}
							?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>

<div id="templatemo_wrapper_sp">
<div id="templatemo_header_wsp">
	<div id="templatemo_header" class="header_subpage"> 
      <div id="site_title"><a href="" rel="nofollow"></a></div>
      <div id="templatemo_menu" class="ddsmoothmenu"> 
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Produtos</a> 
            <!-- <ul>
              <li><a href="#" rel="nofollow">Rações</a></li>
              <li><a href="#" rel="nofollow">Roupas</a></li>
              <li><a href="#" rel="nofollow">Brinquedos</a></li>
              <li><a href="#" rel="nofollow">Remédios</a></li>
              <li><a href="#" rel="nofollow">Banho e tosa</a></li>
            </ul>-->
          </li>
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="checkout.php" >Cadastro</a></li>
          <li><a href="contact.php">Contatos</a></li>
          <li><a href="faqs.php">Dúvidas</a></li>
          <li style="left:40px;"><a href="login.php"class="selected"> 
            <?php echo $login_cookie ?>
            </a></li>
          <li style="left:50px;"> 
            <?php echo "<a href=\"../logout.php\">Sair</a>"; ?>
          </li>
          <!-- <li><a href="about.html">Desenvolvedores</a></li>--->
        </ul>
        <div id="templatemo_search"> 
          <form action="busca.php" method="get">
            <input type="text" value="Procurar" name="s" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
            <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
          </form>
        </div>
        <br style="clear: left" />
      </div>
      <!-- end of templatemo_menu -->
    </div>
    <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span> 
          <h3>Categorias</h3>
          <div class="content"> 
            <ul class="sidebar_list">
              <li><a href="categorias/gatos/gatos.php">Gatos</a></li>
              <li><a href="categorias/cachorros/cachorros.php">Cachorros</a></li>
              <li><a href="categorias/passaros/passaros.php">Pássaros</a></li>
              <li><a href="categorias/peixes/peixes.php">Peixes</a></li>
              <li><a href="categorias/roedores/roedores.phpç">Roedores</a></li>
              <li><a href="categorias/adocoes/adocoes.php">Adoções</a></li>
              <li><a href="categorias/resgatando_vidas/resgatandovidas.php">Resgatando 
                Vidas</a></li>
              <li><a href="categorias/animaisexot/animais_exoticos.php">Animais 
                Exóticos</a></li>
              <li><a href="faqs.html">Perguntas mais frequentes</a></li>
            </ul>
          </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span> 
          <h3>Especial da Semana</h3>
          <div class="content special"> <img src="images/especial/images (1).jpg" alt="Flowers" /> 
            <a href="#">Casal de Pombas Rosa</a> 
            <p> Preço: <span class="price normal_price">R$500</span>&nbsp;&nbsp; 
              <span class="price special_price">R$300</span> </p>
          </div>
        </div>
    </div>
    
    <div id="content" class="right">
    	<h2><?php echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";?></h2>
        
		
        

            
            <div class="content_half right form_field">
            	
			  </div>
            
            
    </div>
    
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	
	<div class="footer_right">
		<p><a href="index.php">Home</a> | <a href="products.php">Produtos</a> | <a href="galeria.php">Galeria</a> | <a href="checkout.php">Cadastro</a> | <a href="contact.php">Contatos</a> | <a href="faqs.php">Dúvidas</a> | <a href="about.php">Desenvolvedores</a></p>
        <p><font color="#FFFF00">Trabalho:</font> ellenmenezespes@gmail.com , georgemasullo@gmail.com 
          , paulooviiictor@gmail.com </p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
<script type='text/javascript' src='js/logging.js'></script>
</html>