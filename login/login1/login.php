<?php

require_once 'classes/usuario.php';
$u = new Usuario;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>  
<h1>Entrar</h1>
    <form method="POST">
       <input type="email" placeholder="Usuário" name="email"/>
       <input type="password" placeholder="senha" name="senha"/>
       <input type="submit" value="ACESSAR"/>
       <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se</strong></a>
    </form>
    <?php
       if (isset($_POST['email'])) {

           $email = addslashes($_POST['email']);
           $senha = addslashes($_POST['senha']);
           
           if (!empty($email) && !empty($senha)) {
               
            $u->conectar("projeto_login","localhost","root","");  
              if ($u->msgErro == "") {

               if ($u->logar($email,$senha)) { // O metodo pode usar no if.
                     
                   header("location: AreaPrivada.php"); 

               } else {

                   echo "Email e/ou senha estão incorretos!";

               }
             } else {
                 echo "Erro: " . $u->msgErro;
             }  

           } else {
               echo "Preencha todos os campos!";
           }

       }
    
    
    
    ?>
</body>
</html>
