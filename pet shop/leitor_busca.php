<?php require_once('Connections/PetShop.php');  require('conexao.php');?>
<?php


/**
 * Montamos agora o SQL, selecionamos todos os campos
 * da tabela, para isso utilizamos o asteristico,
 * escolhemos a tabela ( FROM artigos)
 * Filtramos  pelo campo ID
 */
$sql = "SELECT * FROM noticias WHERE not_id =".$_GET['not_id'];
 
//Executamos o SQL
$qr  = mysql_query($sql) or die(mysql_error());
 
//Recupera o valor do registro selecionado
$ln = mysql_fetch_assoc($qr);
 
//atribui o conteúdo do título a variável $titulo
$titulo = $ln['not_titulo'];
 
//atribui o conteúdo do Conteudo a variável $coteudo
$conteudo = $ln['not_conteudo'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Produtos</title>
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
.style1 {color: #FFFF00}
.style2 {font-size: 16px}
-->
#slideshow,#slideshow2 {
	margin:0 auto;
	width:640px;
	height:263px;
	background:transparent url(image/bg_slideshow.png) no-repeat 0 0;
	position:relative;
}
#slideshow #slidesContainer,#slideshow2 #slidesContainer2 {
  margin:0 auto;
  width:560px;
  height:363px;
  overflow:auto; /* allow scrollbar */
  position:relative;
  
}
#slideshow #slidesContainer .slide,#slideshow2 #slidesContainer2 .slide2 {
  margin:0 auto;
  width:540px; /* reduce by 20 pixels of #slidesContainer to avoid horizontal scroll */
  height:263px;
}
#slidesContainer .slide,#slidesContainer2 .slide2 {
left:20px;
}
.control,.control2 {
  display:block;
  width:39px;
  height:263px;
  text-indent:-10000px;
  position:absolute;
  cursor: pointer;
}
#leftControl,#leftControl2 {
  top:0;
  left:0;
  background:transparent url(images/control_left.png) no-repeat 0 0;
}
#rightControl,#rightControl2 {
  top:0;
  right:0;
  background:transparent url(images/control_right.png) no-repeat 0 0;
}

#pageContainer,#pageContainer2 {
  margin:0 auto;
  width:960px;

}
.slide,.slide2{  position:relative;
  left:50px;
   }
   #preco{
   position:relative;
   top:100px;
   
   }
</style>
<script type="text/javascript">
$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 560;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  // Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
    .wrapAll('<div id="slideInner"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth
    });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  // Insert controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
    .append('<span class="control" id="rightControl">Clicking moves right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control')
    .bind('click', function(){
    // Determine new position
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	// Hide / show controls
    manageControls(currentPosition);
    // Move slideInner using margin-left
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  // manageControls: Hides and Shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  var currentPosition2 = 0;
  var slideWidth2 = 560;
  var slides2 = $('.slide2');
  var numberOfSlides2 = slides2.length;

  // Remove scrollbar in JS
  $('#slidesContainer2').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides2
    .wrapAll('<div id="slideInner2"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth2
    });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner2').css('width', slideWidth2 * numberOfSlides2);

  // Insert controls in the DOM
  $('#slideshow2')
    .prepend('<span class="control2" id="leftControl2">Clicking moves left</span>')
    .append('<span class="control2" id="rightControl2">Clicking moves right</span>');

  // Hide left arrow control on first load
  manageControls2(currentPosition2);

  // Create event listeners for .controls clicks
  $('.control2')
    .bind('click', function(){
    // Determine new position
	currentPosition2 = ($(this).attr('id')=='rightControl2') ? currentPosition2+1 : currentPosition2-1;
    
	// Hide / show controls
    manageControls2(currentPosition2);
    // Move slideInner using margin-left
    $('#slideInner2').animate({
      'marginLeft' : slideWidth2*(-currentPosition2)
    });
  });

  // manageControls: Hides and Shows controls depending on currentPosition
  function manageControls2(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl2').hide() } else{ $('#leftControl2').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides2-1){ $('#rightControl2').hide() } else{ $('#rightControl2').show() }
  }	
});
</script>
</head>

<body>

<div id="templatemo_wrapper_sp">
<div id="templatemo_header_wsp">
	<div id="templatemo_header" class="header_subpage"> 
      <div id="site_title"><a href="#" rel="nofollow"></a></div>
      <div id="templatemo_menu" class="ddsmoothmenu"> 
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php" class="selected">Produtos</a> 
            <!-- <ul>
              <li><a href="#" rel="nofollow">Rações</a></li>
              <li><a href="#" rel="nofollow">Roupas</a></li>
              <li><a href="#" rel="nofollow">Brinquedos</a></li>
              <li><a href="#" rel="nofollow">Remédios</a></li>
              <li><a href="#" rel="nofollow">Banho e tosa</a></li>
            </ul>-->
          </li>
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="checkout.php">Cadastro</a></li>
          <li><a href="contact.php">Contatos</a></li>
          <li><a href="faqs.php">D&uacute;vidas</a></li>
          <li style="left:150px;"><a href="login.php">Login</a></li>
          <!--<li><a href="about.html">Desenvolvedores</a></li>--->
        </ul>
        <div id="templatemo_search"> 
          <form action="busca.php" method="get">
            <input type="text" value="Procurar" name="s" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onBlur="clearText(this)" class="txt_field" />
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
              <li><a href="categorias/passaros/passaros.php">P&aacute;ssaros</a></li>
              <li><a href="categorias/peixes/peixes.php">Peixes</a></li>
              <li><a href="categorias/roedores/roedores.php">Roedores</a></li>
              <li><a href="categorias/adocoes/adocoes.php">Ado&ccedil;&otilde;es</a></li>
              <li><a href="categorias/resgatando_vidas/resgatandovidas.php">Resgatando 
                Vidas</a></li>
              <li><a href="categorias/animaisexot/animais_exoticos.php">Animais 
                Ex&oacute;ticos</a></li>
              <li><a href="faqs.php">Perguntas mais frequentes</a></li>
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
		<?php 
    //imprimi o resultado
    echo "<h1>$titulo</h1>";?>
	<p style=" position:relative;">
	<?php
    echo $conteudo;
?>
		</p>
		<br>
		        <div class="blank_box">
        	<!--<a href="#" class="button left">Anterior</a> -->
			
        </div>
        <div class="cleaner h20"></div>
    	<div class="blank_box">
        	<a href="#"><img src="images/rodape.jpg" alt="Free Shipping" /></a>
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