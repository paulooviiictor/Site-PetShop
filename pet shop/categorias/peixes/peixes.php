<?php require_once('../../Connections/PetShop.php'); ?>
<?php
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex = mysql_query($query_rsNoticiaIndex, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex = mysql_fetch_assoc($rsNoticiaIndex);
$totalRows_rsNoticiaIndex = mysql_num_rows($rsNoticiaIndex);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias = "SELECT * FROM noticias WHERE not_id = '31'";
$rsRelacaoUltimasNoticias = mysql_query($query_rsRelacaoUltimasNoticias, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias = mysql_fetch_assoc($rsRelacaoUltimasNoticias);
$totalRows_rsRelacaoUltimasNoticias = mysql_num_rows($rsRelacaoUltimasNoticias);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0051)file:///F:/pet%20shop/Categorias/peixes/peixes.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Peixes</title>
<meta name="keywords" content="free template, floral shop, ecommerce, online shopping, store">
<meta name="description" content="Floral Shop, Products, free website template for ecommerce shopping websites.">
<link href="../../templatemo_style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="../../css/orman.css" type="text/css" media="screen">
<link rel="stylesheet" href="../../css/nivo-slider.css" type="text/css" media="screen">

<link rel="stylesheet" type="text/css" href="../../css/ddsmoothmenu.css">

<script type="text/javascript" src="../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../js/ddsmoothmenu.js">

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
	background:transparent url(../../image/bg_slideshow.png) no-repeat 0 0;
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
  background:transparent url(../../images/control_left.png) no-repeat 0 0;
}
#rightControl,#rightControl2 {
  top:0;
  right:0;
  background:transparent url(../../images/control_right.png) no-repeat 0 0;
}
#pageContainer,#pageContainer2 {
  margin:0 auto;
  width:960px;

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
      <div id="templatemo_menu" class="ddsmoothmenu" style=""> 
        <ul>
          <li><a href="../../index.php">Home</a></li>
          <li><a href="../../products.php" class="selected">Produtos</a> 
            <!-- <ul>
              <li><a href="#" rel="nofollow">Rações</a></li>
              <li><a href="#" rel="nofollow">Roupas</a></li>
              <li><a href="#" rel="nofollow">Brinquedos</a></li>
              <li><a href="#" rel="nofollow">Remédios</a></li>
              <li><a href="#" rel="nofollow">Banho e tosa</a></li>
            </ul>-->
          </li>
          <li><a href="../../checkout.php">Galeria</a></li>
          <li><a href="../../checkout.php">Cadastro</a></li>
          <li><a href="../../contact.php">Contatos</a></li>
          <li><a href="../../faqs.php">Dúvidas</a></li>
          <li style="left:150px;"><a href="../../logim.php">Login</a></li>
          <!--<li><a href="about.html">Desenvolvedores</a></li>--->
        </ul>
        <div id="templatemo_search"> 
          <form action="../../busca.php" method="get">
            <input type="text" value="Procurar" name="s" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field">
            <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn">
          </form>
        </div>
        <br style="clear: left">
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
              <li><a href="../gatos/gatos.php">Gatos</a></li>
              <li><a href="../cachorros/cachorros.php">Cachorros</a></li>
              <li><a href="../passaros/passaros.php">Pássaros</a></li>
              <li><a href="peixes.php">Peixes</a></li>
              <li><a href="../roedores/roedores.php">Roedores</a></li>
              <li><a href="../adocoes/adocoes.php">Adoções</a></li>
              <li><a href="../resgatando_vidas/resgatandovidas.php">Resgatando 
                Vidas</a></li>
              <li><a href="../animaisexot/animais_exoticos.php">Animais Exóticos</a></li>
              <li><a href="../../faqs.html">Perguntas mais frequentes</a></li>
            </ul>
          </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span> 
          <h3>Especial da Semana</h3>
          <div class="content special"> <img src="../../images/especial/images%20(1).jpg" alt="Casal de Pombas"> 
            <a href="../../Categorias/peixes/peixes.html#">Casal de Pombas Rosa</a> 
            <p> Preço: <span class="price normal_price">R$500</span> <span class="price special_price">R$300</span> 
            </p>
          </div>
        </div>
    </div>
    
    <div id="content" class="right">
		<h2>Seção Para Peixes</h2>
        <p>
		</p><h4>Confira nossos preços!</h4>
		<p></p>
		<br> <br>
<br>
		
<!-- Slideshow HTML -->
        <div id="slideshow"> 
          <div id="slidesContainer"> 
            <div class="slide"> 
              <div class="product_box"><a href="../../leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias['not_id']; ?>">
                <img src="Enfeite-Boyu-para-Aquario-Casa.jpg"  alt="Peixes" width="160" height="160"></a> 
                <h3>Enfeite Boyu Para Aquario</h3>
                <p class="product_price">R$ 25,90</p>
                <p class="add_to_cart"><a href="../../leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
                <br>
              </div>
              <div class="product_box"> <a href="../../Categorias/peixes/productdetail.html"> 
                <img src="Racao_Allfish_Basic.jpg"alt="Peixes" width="160" height="160"></a> 
                <h3>Ração Allfish Basic</h3>
                <p class="product_price">R$ 4,90</p>
                <p class="add_to_cart"> <a href="../../Categorias/peixes/produtos/Ra%C3%A7%C3%A3oWhiskasParaAdultoDeCarne.html">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
                <br>
              </div>
              <div class="product_box"> <a href="../../Categorias/peixes/productdetail.html"> 
                <img src="Racao_Nutrafish_Basica_Granulado.jpg" alt="Peixes" width="160" height="160"></a> 
                <h3>Ração Nutrafish Básica Granulado</h3>
                <p class="product_price">R$ 1,90</p>
                <p class="add_to_cart"> <a href="../../Categorias/peixes/produtos/CasaCatCaveComAlmofada.html">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
                <br>
              </div>
            </div>
            <div class="slide"> 
              <div class="product_box no_margin_right"> <a href="../../Categorias/peixes/productdetail.html"> 
                <img src="Racao_Nutral_Plus_Camarao.jpg"  alt="Peixes" width="160" height="160"></a> 
                <h3>Ração Nutral Plus Camarão</h3>
                <p class="product_price">R$ 4,41</p>
                <p class="add_to_cart"> <a href="../../Categorias/peixes/BolinhasPl%C3%A1sticaComGuizoParaGatos.html">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box no_margin_right"> <a href="../../Categorias/peixes/productdetail.html"> 
                <img src="Racao_Alcon_Club_Top_Life.jpg" alt="Peixes" width="160" height="160"></a> 
                <h3>Ração Alcon Club Top Life</h3>
                <p class="product_price">R$ 9,90</p>
                <p class="add_to_cart"> <a href="../../Categorias/peixes/productdetail.html">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
            </div>
          </div>
        </div>
  
  <br> <br>
  <br> <br><br> <br><br> <br><br> <br>
 
        <div class="cleaner h20"></div>
    	<div class="blank_box">
        	<a href="#"><img src="../../images/rodape.jpg" alt=""></a>
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	
	<div class="footer_right">
	<p><a href="../../index.php">Home</a> | 
	<a href="../../products.php">Produtos</a> | 
	<a href="../../galeria.php">Galeria</a> | 
	<a href="../../checkout.php">Cadastro</a> | 
	<a href="../../contact.php">Contatos</a> | 
	<a href="../../faqs.php">Dúvidas</a> | 
	<a href="../../about.php">Desenvolvedores</a></p>
        <p><font color="#FFFF00">Trabalho:</font> ellenmenezespes@gmail.com , georgemasullo@gmail.com 
          , paulooviiictor@gmail.com </p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>


<script type="text/javascript" src="file:///F:/pet%20shop/js/logging.js"></script>
</body></html>