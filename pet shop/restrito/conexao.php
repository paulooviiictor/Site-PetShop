<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
        //nome do host, o padrão na máquina local é localhost
        $host = 'localhost';
        //nome do usuário, o padrão na máquina local é root
        $user = 'root';
        //nome da senha, o padrão na máquina local é em branco
        $pass = '';
        //nome do banco de dados criado por você
        $bd   = 'petshop';
 
        /*Uamos o mysql_connect para conectar com o banco de dados.
          Utilizamos o or die(mysql_error()) para caso dê algum erro(OR), para a execução (die)
          e mande uma mensagem de error(mysql_error)
        */
        mysql_connect($host, $user, $pass) or die(mysql_error());
        /*usamos o mysql_select_db para selecionarmos o banco de dados
            Utilizamos o or die(mysql_error()) para caso dê algum erro(OR), para a execução (die)
          e mande uma mensagem de error(mysql_error)
        */
        mysql_select_db($bd) or die(mysql_error());
?>
</body>
</html>
