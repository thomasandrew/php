<?php

class Usuario {
      
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha) {
        global $pdo; // Para entender que é o mesmo que de cima.
        global $msgErro; 

        try {
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch(PDOExeption $e) {
            $msgErro = $e->getMessage();
        }
    }

    public function cadastrar($nome, $telefone, $email, $senha) {
        global $pdo;
        
        // Verificar se já existe o email cadastrado.
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email); // O bindValue serve para substituir o :e para o email que o usuário digitou.            
        $sql->execute();  

        if ($sql->rowCount() > 0) { // rowCount conta as linhas que veio do banco de dados.
            return false; // Já está cadastrado.   
        } else {
            // Inserir no banco de dados.
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));

            $sql->execute();

          return true; // Tudo ok   
        }    


    }

    public function logar($email, $senha) {
        global $pdo;
        //verificar se o email e senha estao cadastrados, se sim
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");

        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
          
        if ($sql->rowCount() > 0) {

            $dado = $sql->fetch(); // fetch() pega tudo que está no banco de dados e transforma em um array com os nomes da coluna.
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario']; // Agora somente o usuario que está cadastrado vai poder logar.
            return true; // Cadastro com sucesso.  
        } else {
            return false; // Não conseguiu logar. 
        }  



    }

}
