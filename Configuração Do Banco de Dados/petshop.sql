-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 11-Jun-2014 às 07:02
-- Versão do servidor: 5.6.11-log
-- versão do PHP: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `not_titulo` text CHARACTER SET latin1 NOT NULL,
  `not_conteudo` longtext CHARACTER SET latin1 NOT NULL,
  `not_data` date NOT NULL,
  `not_status` varchar(3) CHARACTER SET latin1 NOT NULL,
  `not_fonte` text CHARACTER SET latin1,
  PRIMARY KEY (`not_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`not_id`, `not_titulo`, `not_conteudo`, `not_data`, `not_status`, `not_fonte`) VALUES
(1, 'Alimentador Eletr&ocirc;nico e Program&aacute;vel Premium Chalesco', '<div style="width:900px">\n  \n		 <div><img src="categorias/cachorros/Alimentador_Eletronico_e_Programavel_Premium_Chalesco.jpg" width="160" height="160" align="left" />O Alimentador Eletr&ocirc;nico e Program&aacute;vel Premium da Chalesco torna mais pr&aacute;tico o hor&aacute;rio correto das refei&ccedil;&otilde;es do seu c&atilde;o ou gato. Possuindo op&ccedil;&otilde;es com por&ccedil;&otilde;es de 1/4 a 3 x&iacute;caras de ra&ccedil;&atilde;o seca por hor&aacute;rio programado, assim, mesmo sem estar em casa ser&aacute; poss&iacute;vel saber de forma pr&aacute;tica a quantidade de vezes e de ra&ccedil;&atilde;o que o seu c&atilde;o consome ap&oacute;s o alimentador ser abastecido e programado.<br />\n      <br />\n* Requer pilhas de tamanho grande (D) - N&atilde;o inclu&iacute;das<br />\n<br />\nImportado por Chalesco:<br />\nInveste constantemente em pesquisas e no desenvolvimento de produtos, junto a fabricantes nacionais e internacionais, para oferecer a seus clientes uma linha variada, com alta tecnologia, qualidade, design e excelente rela&ccedil;&atilde;o custo-benef&iacute;cio.Sanar problemas de forma r&aacute;pida e eficiente, ouvir e incorporar cr&iacute;ticas e sugest&otilde;es, oferecer suporte t&eacute;cnico , produzir materiais adequados &agrave; comunica&ccedil;&atilde;o das marcas e &agrave; exposi&ccedil;&atilde;o dos produtos ao consumidor.</div>\n<div><h3>Especifica&ccedil;&otilde;es de Alimentadores e Bebedouros Autom&aacute;ticos</h3></div>\n<div style=" width:100px" align="left">\n<p align="left"><strong >Dica da Pet Story:</strong></p></div>\n<div style="width:800px; position:relative;top:-76px; left:100px;"><p>Uma &oacute;tima op&ccedil;&atilde;o para aquelas horas em que n&atilde;o ser&aacute; poss&iacute;vel dar toda aten&ccedil;&atilde;o que seu c&atilde;o ou gato merece na alimenta&ccedil;&atilde;o regular. Tamb&eacute;m pode auxiliar em dietas controladas para a melhor sa&uacute;de do seu pet.<br />\n      <br />\n      Modo de Usar:&nbsp;<br />\n      1 - Configure o hor&aacute;rio pressionando a tecla SET (hour) e aperte o bot&atilde;o UP ate chegar no hor&aacute;rio desejado.&nbsp;<br />\n      2 - Definido o hor&aacute;rio, poder&aacute; ser programado o numero de refei&ccedil;&otilde;es como: caf&eacute;, almo&ccedil;o e jantar, em seguida a quantidade de por&ccedil;&otilde;es para cada refei&ccedil;&atilde;o. O tamanho de cada por&ccedil;&atilde;o &eacute; de aproximadamente &frac14; de x&iacute;cara, podendo ser selecionado de 1 ate 12 por&ccedil;&otilde;es por refei&ccedil;&atilde;o.&nbsp;<br />\n      3 - &Eacute; poss&iacute;vel ainda gravar a voz para que o seu pet &ldquo;associe&rdquo; que seu dono esteja chamando-o na hora de cada refei&ccedil;&atilde;o.<br />\n      <br />\n      Indicado para alimentos secos e de gr&atilde;os pequenos, n&atilde;o utilizar com alimentos &uacute;midos ou gr&atilde;os grandes.<br />\n      <br />\n      Principais Vantagens:&nbsp;<br />\n      - Possui painel eletr&ocirc;nico para uma f&aacute;cil programa&ccedil;&atilde;o;&nbsp;<br />\n      - Capacidade para alimentos de diversos formatos e tamanhos;&nbsp;<br />\n      - Fun&ccedil;&atilde;o que calcula o n&uacute;mero de refei&ccedil;&otilde;es j&aacute; servidas;&nbsp;<br />\n      - Funcionamento com Pilhas( N&atilde;o Inclu&iacute;das);&nbsp;<br />\n    - Grava&ccedil;&atilde;o de voz para cada refei&ccedil;&atilde;o (at&eacute; 3 de 10 segundos).</p>\n</div>\n<div style=" width:100px; position:relative; top:-75px"><strong>Indica&ccedil;&atilde;o:</strong> </div>\n<div style="width:900px; position:relative;top:-93px; left:100px;">Cachorros, Gatos</div>\n<div style=" width:100px; position:relative; top:-95px"><strong>Ra&ccedil;a:</strong> </div>\n<div style="width:900px; position:relative;top:-110px; left:100px;">Ra&ccedil;as Pequenas e M&eacute;dias</div>\n<div style=" width:100px; position:relative; top:-110px"><strong>Idade:</strong> </div>\n<div style="width:900px; position:relative;top:-130px; left:100px;">Todas</div>\n<div style=" width:100px; position:relative; top:-130px"><strong>Marca:</strong> </div>\n<div style="width:900px; position:relative;top:-150px; left:100px;">Chalesco</div>\n<div style=" width:100px; position:relative; top:-150px"><strong>Material:</strong> </div>\n<div style="width:900px; position:relative;top:-170px; left:100px;">Pl&aacute;stico</div>\n<div style=" width:100px; position:relative; top:-170px"><strong>Cor:</strong> </div>\n<div style="width:900px; position:relative;top:-190px; left:100px;">Preto</div>\n<div style=" width:100px; position:relative; top:-190px"><strong>Tamanho:</strong> </div>\n<div style="width:900px; position:relative;top:-210px; left:100px;">Capacidade para 5 Litros</div>\n<div style=" width:100px; position:relative; top:-210px"><strong>Dimens&otilde;es Aproximadas:</strong> </div>\n<div style="width:900px; position:relative;top:-245px; left:100px;">Altura: 25 cm <br />\n		Largura: 40 cm <br />\n		Profundidade: 22 cm</div>\n</div>', '2014-06-06', 'ON', NULL),
(2, 'Casa Com Almofada', '<font size="+1"><h1"style="  position:relative; top:179px;font-size:30px; "> Pre&ccedil;o : R$60</h1></font>\n<table width="867" border="0"style="  position:relative; top:10px;">\n<tr> \n    <td rowspan="2"><p><img src="Produtos/Gato/casacomalmofada.jpg" alt="flowers 2" width="160" height="160"/></p></td>\n    <td><h3>Detalhes de Casa Dog Cave com Almofada</h3></td>\n  </tr>\n  <tr> \n    <td>Casa Dog Cave <br />\n      C&atilde;es s&atilde;o animais de toca. Isto &eacute;, costumam preferir \n      dormir e relaxar em pequenas tocas. Dentro delas se sentem protegidos do \n      mau tempo e do ataque de outros animais. Pensando nisso criamos as casinhas \n      caverna. Propondo, um novo conceito de beleza e conforto emocional. O formato \n      oval patenteado, fornece um cantinho escuro e aconchegante, garantindo um \n      sono mais prazeroso e com maior privacidade ao seu pet. <p>Guisa Pet<br />\n        Fundada em 2009, a Guisa Pet &eacute; uma empresa com atividades em todo \n        Brasil e Mex&iacute;co. Atua nos segmentos de fabrica&ccedil;&atilde;o, \n        comercializa&ccedil;&atilde;o e distribui&ccedil;&atilde;o de produtos \n        com design criativos e inovadores para animais domesticos.<br />\n        Tem a miss&atilde;o atuar de forma &eacute;tica, com responsabilidade \n        social e ambiental, nos mercados nacional e internacional, fornecendo \n        produtos diferenciados para atender as necessidades ,bem estar e desejos \n        de clientes e seus animais.</p></td>\n  </tr>\n  <tr> \n    <td colspan="2"><h3>Especifica&ccedil;&otilde;es de Casinhas</h3></td>\n  </tr>\n  <tr> \n    <td width="117"><strong>Dica da Pet Story</strong>:</td>\n    <td width="740">Para os c&atilde;es, a casinha &eacute; mais do que prote&ccedil;&atilde;o \n      contra o vento, chuva e frio. &Eacute; o lugar em que se sentem completamente \n      protegidos, um espa&ccedil;o realmente deles. Portanto, at&eacute; mesmo \n      o c&atilde;o que vive dentro de casa ou em apartamento deve ter casinha. \n      Mesmo que n&atilde;o a use constantemente, o simples fato de ela estar l&aacute; \n      proporciona a tranq&uuml;ilidade emocional de saber que h&aacute; abrigo \n      dispon&iacute;vel para ser usado quando for preciso. <p>** Recomendada para \n        c&atilde;es com menos de 7 kg, e gatos com menos de 8 kg.</p></td>\n  </tr>\n  <tr> \n    <td><strong>Indica&ccedil;&atilde;o:</strong></td>\n    <td>Cachorros, Gatos</td>\n  </tr>\n  <tr> \n    <td><strong>Ra&ccedil;a:</strong></td>\n    <td>Ra&ccedil;as Pequenas</td>\n  </tr>\n  <tr> \n    <td><strong>Idade:</strong></td>\n    <td>Todas</td>\n  </tr>\n  <tr> \n    <td><strong>Marca:</strong></td>\n    <td>Guisa Pet</td>\n  </tr>\n  <tr> \n    <td><strong>Material:</strong></td>\n    <td> <p>Pl&aacute;stico</p></td>\n  </tr>\n  <tr> \n    <td><strong>Tipo:</strong></td>\n    <td>Luxo</td>\n  </tr>\n  <tr> \n    <td><strong>Cor:</strong></td>\n    <td>Preto</td>\n  </tr>\n  <tr> \n    <td><strong>Tamanho:</strong></td>\n    <td>&Uacute;nico</td>\n  </tr>\n  <tr> \n    <td><strong>Dime&ccedil;&otilde;es  Aproximadas:</strong></td>\n    <td>Altura - 43cm <br />\n      Largura - 43cm <br />\n      Profundidade - 40cm</td>\n  </tr>\n</table>\n', '2014-06-07', 'ON', NULL),
(3, 'Casinha de Cachorro Sustent&aacute;vel', '<font size="+1"><h1 id=preco"style="  position:relative;top:179px; font-size:30px; "> Pre&ccedil;o : R$200</h1></font><table width="867" border="0"style="  position:relative; top:10px;">\n  <tr> \n    <td rowspan="2"><p><img src="images/product/casinha_de_cachorro_sustentavel.jpg" alt="flowers 4" width="160" height="160"/></p></td>\n    <td><h3>Detalhes de Casa Cachorro Sustent&aacute;vel</h3></td>\n  </tr>\n  <tr> \n    <td>Casa Dog Cave <br />\n      C&atilde;es s&atilde;o animais de toca. Isto &eacute;, costumam preferir \n      dormir e relaxar em pequenas tocas. Dentro delas se sentem protegidos do \n      mau tempo e do ataque de outros animais. Pensando nisso criamos as casinhas \n      caverna. Propondo, um novo conceito de beleza e conforto emocional. O formato \n      oval patenteado, fornece um cantinho escuro e aconchegante, garantindo um \n      sono mais prazeroso e com maior privacidade ao seu pet. <p>Guisa Pet<br />\n        Fundada em 2009, a Guisa Pet &eacute; uma empresa com atividades em todo \n        Brasil e Mex&iacute;co. Atua nos segmentos de fabrica&ccedil;&atilde;o, \n        comercializa&ccedil;&atilde;o e distribui&ccedil;&atilde;o de produtos \n        com design criativos e inovadores para animais domesticos.<br />\n        Tem a miss&atilde;o atuar de forma &eacute;tica, com responsabilidade \n        social e ambiental, nos mercados nacional e internacional, fornecendo \n        produtos diferenciados para atender as necessidades ,bem estar e desejos \n        de clientes e seus animais.</p></td>\n  </tr>\n  <tr> \n    <td colspan="2"><h3>Especifica&ccedil;&otilde;es de Casinhas</h3></td>\n  </tr>\n  <tr> \n    <td width="117"><strong>Dica da Pet Story</strong>:</td>\n    <td width="740"><p>Para os c&atilde;es, a casinha &eacute; mais do que prote&ccedil;&atilde;o \n        contra o vento, chuva e frio. &Eacute; o lugar em que se sentem completamente \n        protegidos, um espa&ccedil;o realmente deles. Portanto, at&eacute; mesmo \n        o c&atilde;o que vive dentro de casa ou em apartamento deve ter casinha. \n        Mesmo que n&atilde;o a use constantemente, o simples fato de ela estar \n        l&aacute; proporciona a tranq&uuml;ilidade emocional de saber que h&aacute; \n        abrigo dispon&iacute;vel para ser usado quando for preciso.</p>\n      <p>**Recomendada para c&atilde;es com menos de 7 kg, e gatos com menos de \n        8 kg.</p></td>\n  </tr>\n  <tr> \n    <td><strong>Indica&ccedil;&atilde;o:</strong></td>\n    <td>Cachorros, Gatos</td>\n  </tr>\n  <tr> \n    <td><strong>Ra&ccedil;a:</strong></td>\n    <td>Ra&ccedil;as Pequenas</td>\n  </tr>\n  <tr> \n    <td><strong>Idade:</strong></td>\n    <td>Todas</td>\n  </tr>\n  <tr> \n    <td><strong>Marca:</strong></td>\n    <td>Guisa Pet</td>\n  </tr>\n  <tr> \n    <td><strong>Material:</strong></td>\n    <td> <p>Pl&aacute;stico</p></td>\n  </tr>\n  <tr> \n    <td><strong>Tipo:</strong></td>\n    <td>Luxo</td>\n  </tr>\n  <tr> \n    <td><strong>Cor:</strong></td>\n    <td>Verde</td>\n  </tr>\n  <tr> \n    <td><strong>Tamanho:</strong></td>\n    <td>&Uacute;nico</td>\n  </tr>\n   <tr> \n    <td><strong>Composi&ccedil;&atilde;o:</strong></td>\n    <td>Pl&aacute;stico com tratamento UV e Anti Mofo. <br />\n      Material totalmente recicl&aacute;vel e duradouro.</td>\n  </tr>\n  <tr> \n    <td><strong>Dimensões Aproximadas:</strong></td>\n    <td>Altura - 43cm <br />\n      Largura - 43cm <br />\n      Profundidade - 40cm</td>\n  </tr>\n</table>\n', '2014-06-07', 'ON', NULL),
(4, 'Cama Aqu&aacute;rio ', '<img src="Produtos/Peixes/aquario4.jpg" alt="" width="160" height="160" align="left"/><p style="position:relative; left:10px;">Uma inova&ccedil;&atilde;o que une dois incr&iacute;veis objetos. Muito pr&aacute;tico \npara os amantes de peixes </p>\n<font size="+1"><h1"style="  position:relative; top:-979px;font-size:30px; "> Pre&ccedil;o : R$60</h1></font>\n<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', '2014-06-07', 'ON', NULL),
(5, 'Aqu&aacute;rio Grego', '<img src="Produtos/Peixes/aquario3.jpg" alt="" width="160" height="160" align="left"/><p style="position:relative; left:10px;">Um  aqu&aacute;rio de suporte grande, com dois metros de altura. Suporta quase todos os tipos de peixes </p>\n<font size="+1"><h1"style="  position:relative; top:-979px;font-size:30px; "> Pre&ccedil;o : R$30</h1></font>\n<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', '2014-06-07', 'ON', NULL),
(6, 'Casinhas personalizadas', '<img src="images/product/personalizadas.jpg" alt="" width="160" height="160" align="left"/><p style="position:relative; left:10px;">A decora&ccedil;&atilde;o que voc&ecirc; preferir, n&oacute;s fazemos na casinha \ndo seu bichano! Aqui s&atilde;o alguns modelos dos diversos que n&oacute;s temos! </p>\n<font size="+1"><h1"style="  position:relative; top:-979px;font-size:30px; "> Pre&ccedil;o : R$30</h1></font>\n<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', '2014-06-07', 'ON', NULL),
(7, 'Casinha Para Hamster', '<img src="images/product/casinha_hamster.jpg" alt="" width="160" height="160"/>\r\n<p style="position:relative; left:10px;">\r\n\r\nNovas cores e modelos para as casinhas do seu bichano, com qualidade e menor pre&ccedil;o. Aproveite os pre&ccedil;os, pode conferir &agrave; vontade!\r\n</p>', '2014-06-10', 'ON', NULL),
(8, 'Casinha Para C&atilde;es e Gatos', '<img src="images/product/casinha-pet-cave-p-caes-e-gatos-com-almofada-azul.jpg" alt="flowers 4" width="160" height="160"/>\n<p style="position:relative; left:10px;">\nNovos modelos de casinhas para c&atilde;es e gatos, de todos os tamanhos. Se caso o seu pet for grande ou pequeno demais, fale conosco sobre esse problema em <a href="contact.php">Contatos!</a>\n</p>', '2014-06-10', 'ON', NULL),
(9, 'Roupas para C&atilde;es', '<img src="Produtos/Cachorro/roupa.jpg" alt="floral 8" width="160" height="160"/></a> \n\n<p style="position:relative; left:10px;">\n\n Extensa variedade de roupas para c&atilde;es, nos mais diferentes modelos e tamanhos(PP,P,M,G,GG EXTRA G). Se divirta com os nossos diversos modelos!\n\n</p>', '2014-06-10', 'ON', NULL),
(10, 'Caixa de Transporte', '<img src="Produtos/Cachorro/caixa-de-transporte.jpg" alt="floral set 1" width="160" height="160" />\n\n<p style="position:relative; left:10px;">\n\n\nAo passear com seu pet, &eacute; necess&aacute;rio ter um local para manuse&aacute;-lo em transportes p&uacute;blicos ou nos seus pr&oacute;prios ve&iacute;culos. Por meio disso, existe a Caixa de Transporte, tanto para c&atilde;es como para gatos. Esta consiste em fazer essa fun&ccedil;&atilde;o amplamente, em diversos ambientes. Confira os diversos estilos!\n</P>', '2014-06-10', 'ON', NULL),
(12, 'Pente anti-pulga', '<img src="Produtos/Gato/pente_anti-pulga.jpg" alt="" width="160" height="160"/>\r\n<p style="position:relative; left:10px;"> Um bom m&eacute;todo para cuidar das pulgas do seu pet. Bastante eficaz na retirada de pulgas, tratando o p&ecirc;lo do bichano ao ser penteado. Simples e &uacute;til, at&eacute; mesmo em casos extremos. N&atilde;o deixe de conferir! </p>\r\n\r\n', '2014-06-11', 'ON', NULL),
(13, 'Alpiste', '<img src="Produtos/Passaros/racao2.jpg" alt="" width="160" height="160"/>\n<p style="position:relative; left:10px;">Alpiste: Comida para diversos p&aacute;ssaros, de diferentes g&ecirc;neros. Altamente conhecida no meio animal , pois se manteve sempre eficaz como ra&ccedil;&atilde;o para p&aacute;ssaros. Alimente bem seu passarinho com <b>Alpiste</b>! </p>', '2014-06-11', 'ON', NULL),
(15, 'Globo de exerc&iacute;cios', '<img src="Produtos/Roedores/Globo-de-Exerc&iacute;cios.jpg" alt="" width="160" height="160"/>\n<p style="position:relative; left:10px;"> Os hamsters e os esquilos s&atilde;o os que mais se identificam com esse objeto, por suas estaturas e tamb&eacute;m pelo funcionamento do Globo. A principal fun&ccedil;&atilde;o deste objeto &eacute; proporcionar ao seu bichano um momento animado e de descontra&ccedil;&atilde;o, at&eacute; mesmo dentro de sua pr&oacute;pria gaiola.</p>', '2014-06-11', 'ON', NULL),
(16, 'Novo mordedor para gatos', '<img src="images/product/brinquedo2.jpg" alt="" />\n <p style="position:relative; left:10px;"> Um brinquedo amplamente querido pelos felinos. Se voc&ecirc; possui um gato ou mais de um, vai ser muito divertida a experi&ecirc;ncia de v&ecirc;-los brincar com um mordedor. Aproveite esse modelo melhorado de um mordedor!</p>', '2014-06-11', 'ON', NULL),
(18, 'Aqu&aacute;rio natureza selvagem', '<img src="images/product/aquario1.jpg" alt="floral set 5" />\r\n<p style="position:relative; left:10px;"> \r\nO ambiente no aqu&aacute;rio &eacute; revestido como em uma floresta, dando a impress&atilde;o de que seus peixes cercam &aacute;rvores e montanhas. Um novo estilo de aqu&aacute;rio para quem gosta de verde!</p>', '2014-06-11', 'ON', NULL),
(19, 'Ra&ccedil;&atilde;o para p&aacute;ssaro preto, sabi&aacute; e trinca-ferro', '<img src="images/product/racao1.jpg" alt="flowers 7" />\n<p style="position:relative; left:10px;">\nRa&ccedil;&atilde;o voltada a tr&ecirc;s tipos de p&aacute;ssaros exclusivos(p&aacute;ssaro preto, sabi&aacute; e trinca-ferro), possui vitaminas pr&oacute;prias para essas aves se manterem saud&aacute;veis, fortes e bonitas!\n</p>', '2014-06-11', 'ON', NULL),
(20, 'Novo mordedor para cachorro', '<img src="images/product/brinquedo3.jpg" alt="floral 3" /> Um brinquedo amplamente querido pelos c&atilde;es. Vai ser muito divertida a experi&ecirc;ncia de v&ecirc;-los brincar com um mordedor. Aproveite esse modelo melhorado de um mordedor!', '2014-06-11', 'ON', NULL),
(21, 'Brinquedo passa-tempo', 'O Passa-tempo se refere a um brinquedo em forma de ratinho, que percorre dist&acirc;ncias de at&eacute; 5 metros em uma velocidade que corresponde com os reflexos do seu pet. Uma distra&ccedil;&atilde;o divertida para toda a fam&iacute;lia!', '2014-06-11', 'ON', NULL),
(22, 'Gaiola hamster em acr&iacute;lico completa', ' Feita por um material bastante resistente, consegue suportar mais peso que qualquer outra gaiola. Temos em v&aacute;rios tamanhos, confira!', '2014-06-11', 'ON', NULL),
(23, 'Unha posti&ccedil;a\n para gatos', ' Podem garantir a segurança de cortinas, sofás e poltronas de casa. Além de  protegerem a mobília da casa, também evitam que estes pets arranhem as pessoas.', '2014-06-11', 'ON', NULL),
(24, 'Verm&iacute;fogo dontral para gatos', 'Indicado para o tratamento e controle das verminoses intestinais em gatos, apresentando excelentes resultando contra parasitas cestoides (vermes chatos) e nemat&oacute;deos (vermes redondos). Drontal Gatos&reg; cont&eacute;m quatro comprimidos de 339mg cada, que trata entre 3 e 4kg de peso corp&oacute;reo dos gatos.', '2014-06-11', 'ON', NULL),
(25, 'Filhotes de hamster chin&ecirc;s', ' Mais uma variedade de bichanos que n&oacute;s temos, sendo esses os hamsters, animais que conquistaram as crian&ccedil;as no s&eacute;culo 21. Se depare com essas fofuras, voc&ecirc; vai amar!', '2014-06-11', 'ON', NULL),
(26, 'Ra&ccedil;&atilde;o para c&atilde;es pedigree:', ' Uma das ra&ccedil;&otilde;es mais bem conceituadas, sempre fazendo o melhor para a alimenta&ccedil;&atilde;o do seu bichano. Estamos em promo&ccedil;&atilde;o, ent&atilde;o, APROVEITE!', '2014-06-11', 'ON', NULL),
(27, 'Escova tira p&ecirc;lo furminator', ' Quando os p&ecirc;los do seu pet est&atilde;o grandes, sempre acabam fazendo emanharados pelo corpo do bichano. Para ajudar com esse problema, temos essa escova pr&oacute;pria para esse tipo de caso. Aproveite os pre&ccedil;os!', '2014-06-11', 'ON', NULL),
(28, 'Gaiola para periquito', ' Proporcionamos a voc&ecirc; diferentes estilos de gaiolas para periquitos. Essa gaiola, em especial, &eacute; bem ampla e confort&aacute;vel. Confira!', '2014-06-11', 'ON', NULL),
(29, 'Areia Sanit&aacute;ria para Gatos Micro Cristais Silicas Gel Chalesco - 1,8kg', '\r\nAreia Sanit&aacute;ria para Gatos Micro Cristais S&iacute;lica Gel,areia micro granulada de alt&iacute;ssima absor&ccedil;&atilde;o e durabilidade, alguns usu&aacute;rios relatam que duram at&eacute; 30 dias. Mais f&aacute;cil de manipular, n&atilde;o machuca a pata do felino, f&aacute;cil de limpar.Com os exclusivos &ldquo;crystais indicadores&rdquo; &uacute;nico no mercado. Cristais indicadores perdem colora&ccedil;&atilde;o depois de 30 dias &ndash; demonstrando que &eacute; tempo de troc&aacute;-los. Feitos com mat&eacute;ria-prima natural: areia, oxig&ecirc;nio e &aacute;gua. Sem adi&ccedil;&atilde;o de minerais, qu&iacute;micos ou silicato cristalino, eliminando os riscos para animais e seres humanos.', '2014-06-11', 'ON', NULL),
(30, 'Porta Ninho Mr Pet especial com Carpete', '\r\nCom seu formato espec&iacute;fico para a posi&ccedil;&atilde;o dos ovos das aves, o porta ninho al&eacute;m de ajudar as aves a fazer seu ninho ele ajudar as aves a deixarem seus ovinhos aquecido.', '2014-06-11', 'ON', NULL),
(31, 'Enfeite Boyu para Aqu&aacute;rio', ' Casa, feito em resina, super bem acabado e \r\npintado para decorar e alegrar o lar do seu peixe. ', '2014-06-11', 'ON', NULL),
(32, 'Alicate de Unha Gilhotina', '\r\nO Alicate de Unha Gilhotina &eacute; recomendado para c&atilde;es, gatos ou ferret. \r\nCorte o excesso de unhas de forma precisa e sem riscos de ferimentos. Al&eacute;m \r\ndisso, seu cabo emborrachado garante maior firmeza na hora de utiliz&aacute;-lo, \r\nevitando poss&iacute;veis acidentes. ', '2014-06-11', 'ON', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`) VALUES
('george', 'b40e0d3ec38b784c7504f09bc2ab6212'),
('ellen', 'b692ed7c39be684f88950544e409f15c'),
('naiarao', '756e4fb6a72e93033d9dde9b354b25cc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
