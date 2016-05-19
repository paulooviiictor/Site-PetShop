<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_PetShop = "localhost";
$database_PetShop = "PetShop";
$username_PetShop = "root";
$password_PetShop = "";
$ConnPetShop = mysql_pconnect($hostname_PetShop, $username_PetShop, $password_PetShop) or trigger_error(mysql_error(),E_USER_ERROR); 
?>