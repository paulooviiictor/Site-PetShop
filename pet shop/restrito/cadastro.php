							<?php 
								 $login = $_POST['login'];
								 $senha = MD5($_POST['senha']);
								 $connect = mysql_connect('localhost','root','');
								 $db = mysql_select_db('petshop');
								 $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
								 $select = mysql_query($query_select,$connect);
								 $array = mysql_fetch_array($select);
								 $logarray = $array['login'];
								 if($login == "" || $login == null)
								 {
									echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='checkout.php';</script>";
								 }
								 else
								 {
									if($logarray == $login)
									{
										echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='checkout.php';</script>";
										die();
									}
									else 
									{
									    $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
									    $insert = mysql_query($query,$connect);
										if($insert)
										{
											echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
										}
										else
										{
											echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='checkout.php'</script>";
										}
									}
								 }
							?>