<?php require_once('Connections/PetShop.php'); ?>
<?php
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex = mysql_query($query_rsNoticiaIndex, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex = mysql_fetch_assoc($rsNoticiaIndex);
$totalRows_rsNoticiaIndex = mysql_num_rows($rsNoticiaIndex);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias = "SELECT * FROM noticias WHERE not_id = '2'";
$rsRelacaoUltimasNoticias = mysql_query($query_rsRelacaoUltimasNoticias, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias = mysql_fetch_assoc($rsRelacaoUltimasNoticias);
$totalRows_rsRelacaoUltimasNoticias = mysql_num_rows($rsRelacaoUltimasNoticias);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex2 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex2 = mysql_query($query_rsNoticiaIndex2, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex2 = mysql_fetch_assoc($rsNoticiaIndex2);
$totalRows_rsNoticiaIndex2 = mysql_num_rows($rsNoticiaIndex2);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias2 = "SELECT * FROM noticias WHERE not_id = '3'";
$rsRelacaoUltimasNoticias2 = mysql_query($query_rsRelacaoUltimasNoticias2, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias2 = mysql_fetch_assoc($rsRelacaoUltimasNoticias2);
$totalRows_rsRelacaoUltimasNoticias2 = mysql_num_rows($rsRelacaoUltimasNoticias2);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex3 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex3 = mysql_query($query_rsNoticiaIndex3, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex3 = mysql_fetch_assoc($rsNoticiaIndex3);
$totalRows_rsNoticiaIndex3 = mysql_num_rows($rsNoticiaIndex3);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias3 = "SELECT * FROM noticias WHERE not_id = '4'";
$rsRelacaoUltimasNoticias3 = mysql_query($query_rsRelacaoUltimasNoticias3, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias3 = mysql_fetch_assoc($rsRelacaoUltimasNoticias3);
$totalRows_rsRelacaoUltimasNoticias3 = mysql_num_rows($rsRelacaoUltimasNoticias3);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex4 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex4 = mysql_query($query_rsNoticiaIndex4, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex4 = mysql_fetch_assoc($rsNoticiaIndex4);
$totalRows_rsNoticiaIndex4 = mysql_num_rows($rsNoticiaIndex4);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias4 = "SELECT * FROM noticias WHERE not_id = '5'";
$rsRelacaoUltimasNoticias4 = mysql_query($query_rsRelacaoUltimasNoticias4, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias4 = mysql_fetch_assoc($rsRelacaoUltimasNoticias4);
$totalRows_rsRelacaoUltimasNoticias4 = mysql_num_rows($rsRelacaoUltimasNoticias4);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex5 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex5 = mysql_query($query_rsNoticiaIndex5, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex5 = mysql_fetch_assoc($rsNoticiaIndex5);
$totalRows_rsNoticiaIndex5 = mysql_num_rows($rsNoticiaIndex5);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias5 = "SELECT * FROM noticias WHERE not_id = '6'";
$rsRelacaoUltimasNoticias5 = mysql_query($query_rsRelacaoUltimasNoticias5, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias5 = mysql_fetch_assoc($rsRelacaoUltimasNoticias5);
$totalRows_rsRelacaoUltimasNoticias5 = mysql_num_rows($rsRelacaoUltimasNoticias5);

//

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex6 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex6 = mysql_query($query_rsNoticiaIndex6, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex6 = mysql_fetch_assoc($rsNoticiaIndex6);
$totalRows_rsNoticiaIndex6 = mysql_num_rows($rsNoticiaIndex6);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias6 = "SELECT * FROM noticias WHERE not_id = '7'";
$rsRelacaoUltimasNoticias6 = mysql_query($query_rsRelacaoUltimasNoticias6, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias6 = mysql_fetch_assoc($rsRelacaoUltimasNoticias6);
$totalRows_rsRelacaoUltimasNoticias6 = mysql_num_rows($rsRelacaoUltimasNoticias6);

//

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex7 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex7 = mysql_query($query_rsNoticiaIndex7, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex7 = mysql_fetch_assoc($rsNoticiaIndex7);
$totalRows_rsNoticiaIndex7 = mysql_num_rows($rsNoticiaIndex7);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias7 = "SELECT * FROM noticias WHERE not_id = '8'";
$rsRelacaoUltimasNoticias7 = mysql_query($query_rsRelacaoUltimasNoticias7, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias7 = mysql_fetch_assoc($rsRelacaoUltimasNoticias7);
$totalRows_rsRelacaoUltimasNoticias7 = mysql_num_rows($rsRelacaoUltimasNoticias7);

//

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex8 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex8 = mysql_query($query_rsNoticiaIndex8, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex8 = mysql_fetch_assoc($rsNoticiaIndex8);
$totalRows_rsNoticiaIndex8 = mysql_num_rows($rsNoticiaIndex8);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias8 = "SELECT * FROM noticias WHERE not_id = '9'";
$rsRelacaoUltimasNoticias8 = mysql_query($query_rsRelacaoUltimasNoticias8, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias8 = mysql_fetch_assoc($rsRelacaoUltimasNoticias8);
$totalRows_rsRelacaoUltimasNoticias8 = mysql_num_rows($rsRelacaoUltimasNoticias8);

//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex9 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex9 = mysql_query($query_rsNoticiaIndex9, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex9 = mysql_fetch_assoc($rsNoticiaIndex9);
$totalRows_rsNoticiaIndex9 = mysql_num_rows($rsNoticiaIndex9);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias9 = "SELECT * FROM noticias WHERE not_id = '10'";
$rsRelacaoUltimasNoticias9 = mysql_query($query_rsRelacaoUltimasNoticias9, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias9 = mysql_fetch_assoc($rsRelacaoUltimasNoticias9);
$totalRows_rsRelacaoUltimasNoticias9 = mysql_num_rows($rsRelacaoUltimasNoticias9);

//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex10 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex10 = mysql_query($query_rsNoticiaIndex10, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex10 = mysql_fetch_assoc($rsNoticiaIndex10);
$totalRows_rsNoticiaIndex10 = mysql_num_rows($rsNoticiaIndex10);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias10 = "SELECT * FROM noticias WHERE not_id = '12'";
$rsRelacaoUltimasNoticias10 = mysql_query($query_rsRelacaoUltimasNoticias10, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias10 = mysql_fetch_assoc($rsRelacaoUltimasNoticias10);
$totalRows_rsRelacaoUltimasNoticias10 = mysql_num_rows($rsRelacaoUltimasNoticias10);

//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex11 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex11 = mysql_query($query_rsNoticiaIndex11, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex11 = mysql_fetch_assoc($rsNoticiaIndex11);
$totalRows_rsNoticiaIndex11 = mysql_num_rows($rsNoticiaIndex11);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias11 = "SELECT * FROM noticias WHERE not_id = '13'";
$rsRelacaoUltimasNoticias11 = mysql_query($query_rsRelacaoUltimasNoticias11, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias11 = mysql_fetch_assoc($rsRelacaoUltimasNoticias11);
$totalRows_rsRelacaoUltimasNoticias11 = mysql_num_rows($rsRelacaoUltimasNoticias11);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex12 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex12 = mysql_query($query_rsNoticiaIndex12, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex12 = mysql_fetch_assoc($rsNoticiaIndex12);
$totalRows_rsNoticiaIndex12 = mysql_num_rows($rsNoticiaIndex12);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias12 = "SELECT * FROM noticias WHERE not_id = '15'";
$rsRelacaoUltimasNoticias12 = mysql_query($query_rsRelacaoUltimasNoticias12, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias12 = mysql_fetch_assoc($rsRelacaoUltimasNoticias12);
$totalRows_rsRelacaoUltimasNoticias12 = mysql_num_rows($rsRelacaoUltimasNoticias12);
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
  left:50px;}
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
      <div id="site_title"><a href="" rel="nofollow"></a></div>
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
          <li><a href="faqs.php">Dúvidas</a></li>
          <li style="left:150px;"><a href="login.php">Login</a></li>
          <!--<li><a href="about.html">Desenvolvedores</a></li>--->
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
              <li><a href="categorias/roedores/roedores.php">Roedores</a></li>
              <li><a href="categorias/adocoes/adocoes.php">Adoções</a></li>
              <li><a href="categorias/resgatando_vidas/resgatandovidas.php">Resgatando 
                Vidas</a></li>
              <li><a href="categorias/animaisexot/animais_exoticos.php">Animais 
                Exóticos</a></li>
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
		<h2>Produtos</h2>
        <p><h3 align="center">Casinhas</h3>
        </p>  <br />
        
		<!-- Slideshow HTML -->
        <div id="slideshow"> 
          <div id="slidesContainer"> 
            <div class="slide"> 
              <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias['not_id']; ?>"><img src="Produtos/Gato/casacomalmofada.jpg" alt="" width="160" height="160"/></a> 
                <h3>Casa Com Almofada</h3>
                <p class="product_price">R$60</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias3['not_id']; ?>"><img src="Produtos/Peixes/aquario4.jpg" alt="" width="160" height="160"/></a> 
                <h3>Cama Aquario</h3>
                <p class="product_price">R$530</p>
                <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias3['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box no_margin_right"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias4['not_id']; ?>"><img src="Produtos/Peixes/aquario3.jpg" alt="" width="160" height="160"/></a> 
                <h3>Aquario Grego</h3>
                <p class="product_price">R$320</p>
                <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias4['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
            </div>
            <div class="slide"> 
              <div class="product_box no_margin_right"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias2['not_id']; ?>"><img src="images/product/casinha_de_cachorro_sustentavel.jpg" alt="" width="160" height="160"/></a> 
                <h3>Casinha de Cachorro Sustentável</h3>
                <p class="product_price">R$200</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias2['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box no_margin_right"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias5['not_id']; ?>"><img src="images/product/personalizadas.jpg" alt="" width="160" height="160"/></a> 
                <h3>Casinhas Personalizadas</h3>
                <p class="product_price">R$300</p>
                <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias5['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box no_margin_right"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias6['not_id']; ?>"><img src="images/product/casinha_hamster.jpg" alt="" width="160" height="160"/></a> 
                <h3>Casinha Para Hamster</h3>
                <p class="product_price">R$80</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias6['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
            </div>
            <div class="slide"> 
              <div class="product_box no_margin_right"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias7['not_id']; ?>"> <img src="images/product/casinha-pet-cave-p-caes-e-gatos-com-almofada-azul.jpg" alt="" width="160" height="160"/></a> 
                <h3>Casinha Para Cães e Gatos</h3>
                <p class="product_price">R$220</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias7['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div></p>
              </div>
          </div>
        </div>
  <!-- Slideshow HTML -->
  <br />  <p> <h3 align="center"> Diversos </h3>
  </p>  <br />
  <!-- Slideshow HTML -->
        <div id="slideshow2"> 
          <div id="slidesContainer2"> 
            <div id="slideInner2"> 
              <div class="slide2"> 
                <div class="product_box no_margin_right"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias8['not_id']; ?>"><img src="Produtos/Cachorro/roupa.jpg" alt="" width="160" height="160"/></a> 
                  <h3>Roupas para Cães</h3>
                  <p class="product_price">R$170</p>
                  <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias8['not_id']; ?>">+Detalhes</a> 
                    <!-- <a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias9['not_id']; ?>"> <img src="Produtos/Cachorro/caixa-de-transporte.jpg" alt="" width="160" height="160" /></a> 
                  <h3>Caixa de Transporte</h3>
                  <p class="product_price">R$140</p>
                  <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias9['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias10['not_id']; ?>"><img src="Produtos/Gato/pente_anti-pulga.jpg" alt="" width="160" height="160"/></a> 
                  <h3>Pente Anti-Pulga</h3>
                  <p class="product_price">R$10</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias10['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
              </div>
              <div class="slide2"> 
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias11['not_id']; ?>"><img src="Produtos/Passaros/racao2.jpg" alt="" width="160" height="160"/></a> 
                  <h3>Alpiste</h3>
                  <p class="product_price">R$10</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias11['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias12['not_id']; ?>"><img src="Produtos/Roedores/Globo-de-Exercícios.jpg" alt="" width="160" height="160"/></a> 
                  <h3>Globo de Exercícios</h3>
                  <p class="product_price">R$10</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias12['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
  <!--        -->
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
<?php
mysql_free_result($rsNoticiaIndex);
mysql_free_result($rsRelacaoUltimasNoticias);
?>