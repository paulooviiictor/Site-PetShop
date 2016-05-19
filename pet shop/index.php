<?php require_once('Connections/PetShop.php'); ?>
<?php
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex = mysql_query($query_rsNoticiaIndex, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex = mysql_fetch_assoc($rsNoticiaIndex);
$totalRows_rsNoticiaIndex = mysql_num_rows($rsNoticiaIndex);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias = "SELECT * FROM noticias WHERE not_id = '16'";
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
$query_rsRelacaoUltimasNoticias2 = "SELECT * FROM noticias WHERE not_id = '18'";
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
$query_rsRelacaoUltimasNoticias3 = "SELECT * FROM noticias WHERE not_id = '19'";
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
$query_rsRelacaoUltimasNoticias4 = "SELECT * FROM noticias WHERE not_id = '20'";
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
$query_rsRelacaoUltimasNoticias5 = "SELECT * FROM noticias WHERE not_id = '21'";
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
$query_rsRelacaoUltimasNoticias6 = "SELECT * FROM noticias WHERE not_id = '22'";
$rsRelacaoUltimasNoticias6 = mysql_query($query_rsRelacaoUltimasNoticias6, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias6 = mysql_fetch_assoc($rsRelacaoUltimasNoticias6);
$totalRows_rsRelacaoUltimasNoticias6 = mysql_num_rows($rsRelacaoUltimasNoticias6);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex7= "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex7 = mysql_query($query_rsNoticiaIndex7, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex7 = mysql_fetch_assoc($rsNoticiaIndex7);
$totalRows_rsNoticiaIndex7 = mysql_num_rows($rsNoticiaIndex7);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias7 = "SELECT * FROM noticias WHERE not_id = '23'";
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
$query_rsRelacaoUltimasNoticias8 = "SELECT * FROM noticias WHERE not_id = '24'";
$rsRelacaoUltimasNoticias8 = mysql_query($query_rsRelacaoUltimasNoticias8, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias8 = mysql_fetch_assoc($rsRelacaoUltimasNoticias8);
$totalRows_rsRelacaoUltimasNoticias8 = mysql_num_rows($rsRelacaoUltimasNoticias8);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex9 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex9 = mysql_query($query_rsNoticiaIndex6, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex9 = mysql_fetch_assoc($rsNoticiaIndex6);
$totalRows_rsNoticiaIndex9 = mysql_num_rows($rsNoticiaIndex6);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias9 = "SELECT * FROM noticias WHERE not_id = '25'";
$rsRelacaoUltimasNoticias9 = mysql_query($query_rsRelacaoUltimasNoticias9, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias9 = mysql_fetch_assoc($rsRelacaoUltimasNoticias9);
$totalRows_rsRelacaoUltimasNoticias9 = mysql_num_rows($rsRelacaoUltimasNoticias9);
//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex10 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex10= mysql_query($query_rsNoticiaIndex10, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex10 = mysql_fetch_assoc($rsNoticiaIndex10);
$totalRows_rsNoticiaIndex10 = mysql_num_rows($rsNoticiaIndex10);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias10 = "SELECT * FROM noticias WHERE not_id = '26'";
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
$query_rsRelacaoUltimasNoticias11 = "SELECT * FROM noticias WHERE not_id = '27'";
$rsRelacaoUltimasNoticias11 = mysql_query($query_rsRelacaoUltimasNoticias11, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias11 = mysql_fetch_assoc($rsRelacaoUltimasNoticias11);
$totalRows_rsRelacaoUltimasNoticias11 = mysql_num_rows($rsRelacaoUltimasNoticias11);

//
mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsNoticiaIndex12 = "SELECT *, date_format(not_data, '%d/%m/%Y') AS not_data FROM noticias WHERE not_status = 'ON' ";
$rsNoticiaIndex12 = mysql_query($query_rsNoticiaIndex6, $ConnPetShop) or die(mysql_error());
$row_rsNoticiaIndex12 = mysql_fetch_assoc($rsNoticiaIndex12);
$totalRows_rsNoticiaIndex12 = mysql_num_rows($rsNoticiaIndex12);

mysql_select_db($database_PetShop, $ConnPetShop);
$query_rsRelacaoUltimasNoticias12 = "SELECT * FROM noticias WHERE not_id = '28'";
$rsRelacaoUltimasNoticias12 = mysql_query($query_rsRelacaoUltimasNoticias6, $ConnPetShop) or die(mysql_error());
$row_rsRelacaoUltimasNoticias12 = mysql_fetch_assoc($rsRelacaoUltimasNoticias12);
$totalRows_rsRelacaoUltimasNoticias12 = mysql_num_rows($rsRelacaoUltimasNoticias12);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pet Shop Story</title>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type='text/javascript' src='js/logging.js'></script>
<script src="js/jquery142.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script src="js/scriptModal.js"></script>
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

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<script type="text/javascript">
           $(function () {
               $('#gallery a').lightBox();
           });
        </script>
		<style type="text/css">
	#gallery {
		background-color: #fff;
		padding: 10px;
		width: auto;
	}
	#gallery ul { list-style: none; }
	#gallery ul li { display: inline; }
	#gallery ul img {
		border: 5px solid #444444;
		border-width: 5px 5px 20px;
	}
	#gallery ul a:hover img {
		border: 5px solid #fff;
		border-width: 5px 5px 20px;
		color: #fff;
	}
	#gallery ul a:hover { color: #fff; }
	
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
/** 
 * Slideshow controls style rules.
 */
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

/** 
 * Style rules for Demo page
 */
/** {
  margin:0;
  padding:0;
  font:normal 11px Verdana, Geneva, sans-serif;
  color:#ccc;
}
a {
  color: #fff;
  font-weight:bold;
  text-decoration:none;
}
a:hover {
  text-decoration:underline;
}
body {
  background:#393737 url(img/bg_body.jpg) repeat-x top left;
}*/
#pageContainer,#pageContainer2 {
  margin:0 auto;
  width:960px;

}
.slide,.slide2{  position:relative;
  left:50px;}
.style1 {color: #FFFFFF}
/*#pageContainer h1 {
  display:block;
  width:960px;
  height:114px;
  background:transparent url(img/bg_pagecontainer_h1.jpg) no-repeat top left;
  text-indent: -10000px;
}
.slide h2, .slide p {
  margin:15px;
}
.slide h2 {
  font:italic 24px Georgia, "Times New Roman", Times, serif;
  color:#ccc;
  letter-spacing:-1px;
}
.slide img {
  float:right;
  margin:0 15px;
}*/
-->
	    </style>
<script type="text/javascript" src="js/jquery.min.js"></script>
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
<!--     -->
<div class="windows-popup">
        <div class="title-popup"><h4><font color="#FFFFFF">Login</font></h4> 
        <div title="Fechar" class="close-popup"></div></div>
        <div class="content-popup"></div>
                   <div id="contact_form">
           
    <form method="post" name="contact" action="login_entrar.php">
      <div class="col col13"> 
        <label for="nome">Nome:</label>
        <input name="login" type="text" class="input_field" id="name" maxlength="40" />
        <div class="cleaner h10"></div>
        <label for="senha">Senha:</label>
        <input name="senha" type="password" class="required input_field" id="email" maxlength="40" />
        <div class="cleaner h10"></div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="cleaner h10"></div>
      <input type="submit" class="submit_btn left" name="entrar" id="submit" value="Entrar" />
    </form>
		  <br><br>
    <a href="checkout.php">cadastre-se</a> 
    <!--<blockquote style="height:100px; width:200px; position:relative; top:-90px; border-width:2px; border-color:#339900">  </blockquote>-->
  </div>
 
</div></div>
            
        </div>
    </div>
    	
    <div class="mask-popup" style="position: fixed; left: 0; top: 0; opacity: 0.8; background-image:url(images/fundoModal.png); z-index:999;"></div>	

<!--     -->
<div id="templatemo_wrapper_h">
<div id="templatemo_header_wh">

	<div id="templatemo_header" class="header_home"> 
      <div id="site_title"><a href="#" rel="nofollow"></a></div>
      <div id="templatemo_menu" class="ddsmoothmenu"> 
        <ul>
          <li><a href="index.php" class="selected">Home</a></li>
          <li><a href="products.php">Produtos</a> 
            <!--<ul>
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
      <div class="slider-wrapper theme-orman"> 
        <div class="ribbon"></div>
        <div id="slider" class="nivoSlider"> <img src="images/portfolio/01.jpg" alt="slider image 1" /> 
          <img src="images/portfolio/02.jpg" alt="slider image 2" title="" /> 
          <img src="images/portfolio/03.jpg" alt="slider image 3" /> <img src="images/portfolio/04.jpg" alt="slider image 4" title="" /> 
          <img src="images/portfolio/05.jpg" alt="slider image 5" title="" /> 
        </div>
      </div>
      <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
      <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
      <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:false
			});
        });
        </script>
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
              <li><a href="categorias/resgatando_vidas/resgatandovidas.php">Projeto 
                Resgatando Vidas</a></li>
              <li><a href="categorias/animaisexot/animais_exoticos.php">Animais 
                Exóticos</a></li>
              <li><a href="faqs.php">Perguntas Mais frequentes</a></li>
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
		<h2>Seja Bem-Vindo!</h2>
		<p> Temos tratamentos e produtos de qualidade para os mais diversos tipos de mascotes. Esperamos sua visita ao nosso estabelecimento que fizemos com o intuito de cuidar dos seus bichinhos. Confira nossas novidades aqui abaixo. Lambeijos!</p>
        

            
			<!-- Slideshow HTML -->
        <div id="slideshow"> 
          <div id="slidesContainer"> 
            <div class="slide"> 
              <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias['not_id']; ?>"><img src="images/product/brinquedo2.jpg" alt="" /></a> 
                <h3><br>
                  Novo Mordedor Para Gatos</h3>
                <p class="product_price">R$10</p>
                <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias2['not_id']; ?>"><img src="images/product/aquario1.jpg" alt="floral set 5" /></a> 
                <h3>Aquário Natureza Selvagem</h3>
                <p class="product_price">R$150</p>
                <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias2['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias3['not_id']; ?>"><img src="images/product/racao1.jpg" alt="flowers 7" /></a> 
                <h3>Ração Para Pássaro Preto, Sabiá e Trinca-ferro</h3>
                <p class="product_price">R$10</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias3['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
            </div>
            <div class="slide"> 
              <div class="product_box"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias4['not_id']; ?>"><img src="images/product/brinquedo3.jpg" alt="floral 3" /></a> 
                <h3><br>
                  Novo Mordedor Para Cachorro</h3>
                <p class="product_price">R$10</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias4['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box no_margin_right"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias5['not_id']; ?>"><img src="images/product/brinquedo1.jpg" alt="flowers 4" /></a> 
                <h3><br>
                  Brinquedo Passa-tempo</h3>
                <p class="product_price">R$50</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias5['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
              <div class="product_box"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias6['not_id']; ?>"><img src="images/product/gaiola2.jpg" alt="floral set 1" /></a> 
                <h3>Gaiola Hamster em Acrílico Completa</h3>
                <p class="product_price">R$140</p>
                <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias6['not_id']; ?>">+Detalhes</a> 
                  <!--<a href="shoppingcart.html">+Carrinho</a>-->
                </p>
              </div>
            </div>
          </div>
        </div>
  <!-- Slideshow HTML -->
  <br /><br /><br /> 
  <!-- Slideshow HTML -->
        <div id="slideshow2"> 
          <div id="slidesContainer2"> 
            <div id="slideInner2"> 
              <div class="slide2"> 
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias7['not_id']; ?>"><img src="images/product/UnhaPosti%C3%A7aParaGatos.jpg" alt="Unha Postiça"></a> 
                  <h3><br>
                    Unha Postiça Para Gatos</h3>
                  <p class="product_price">R$50</p>
                  <p class="add_to_cart"> <a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias7['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias8['not_id']; ?>"><img src="images/product/VermífugoDrontalGatos.jpg" alt="Remédio Vermífogo"></a> 
                  <h3>Vermífogo Dontral Para Gatos</h3>
                  <p class="product_price">R$80</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias8['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias9['not_id']; ?>"><img src="images/product/principe.jpg" alt="flower set 6" /></a> 
                  <h3>Filhotes de Hamster Chinês</h3>
                  <p class="product_price">R$10</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias9['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
              </div>
              <div class="slide2"> 
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias10['not_id']; ?>"><img src="images/product/pedigree.jpg" alt="floral 8" /></a> 
                  <h3>Ração Para Cães Pedigree</h3>
                  <p class="product_price">R$80 "PROMOÇÃO"</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias10['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias11['not_id']; ?>"><img src="images/escovatirapelofurminator.jpg"  alt="floral 8" /></a> 
                  <h3>Escova Tira Pêlo Furminator</h3>
                  <p class="product_price">R$10 "PROMOÇÃO"</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias11['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
                <div class="product_box"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias12['not_id']; ?>"><img src="images/gaiolaparaperiquito.jpg"  alt="floral 8" /></a> 
                  <h3>Gaiola Para Periquito</h3>
                  <p class="product_price">R$100</p>
                  <p class="add_to_cart"><a href="leitor_noticia.php?not_id=<?php echo $row_rsRelacaoUltimasNoticias12['not_id']; ?>">+Detalhes</a> 
                    <!--<a href="shoppingcart.html">+Carrinho</a>-->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br /><br /><br /><br /><br />     	

        
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

</html>
<?php
mysql_free_result($rsNoticiaIndex);
mysql_free_result($rsRelacaoUltimasNoticias);
?>