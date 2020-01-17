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
<h1>Cadastrar</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome completo" maxlength="30">
        <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
        <input type="email" name="email" placeholder="Usuário" maxlength="40">
        <input type="password" name="senha" placeholder="senha" maxlength="15">
        <input type="password" name="confSenha" placeholder="Confimar senha" maxlength="15">
        <input type="submit" value="CADASTRAR">
    </form>
    <?php
      // Verificar se clicou no botão
      
      if (isset($_POST['nome'])) { 

        $nome = addslashes($_POST['nome']); // addslash serve para que hackers não façam algo malicioso.
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confimarSenha = addslashes($_POST['confSenha']); 
      
        // Verificar se está preenchido

        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confimarSenha)) { // empty() É para verificar se está vazio.
    
           $u->conectar("projeto_login","localhost","root",""); 
           
           if ($u->msgErro == "") { // Se msgErro estiver vazia vai está tudo ok

               if ($senha == $confimarSenha) {
                   
                   if ($u->cadastrar($nome,$telefone,$email,$senha)) {
                        
                       // echo "Cadastrado com sucesso! Acesse para entrar";
                       ?>
                          <div id="msg-sucesso">
                            Cadastrado com sucesso! Acesse para entrar
                          </div>
                       <?php

                   } else {
                        echo "Email já cadastrado!"; 
                   }

               } else {
                   echo "Senha e confirmar senha não correspondem!";
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