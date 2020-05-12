<?php
// Itens obrigatórios
$host="localhost";
$user="root";
$pass="";
$banco="aula008";

$conexao=  mysqli_connect($host, $user, $pass) or die(mysqli_error($conexao));
mysqli_select_db($conexao,$banco) or die(mysqli_error($conexao));
// Itens obrigatórios

$artista= $_POST['Nome_Artista'];
$titulo = $_POST['Titulo_CD'];
$descricao = $_POST['Descricao'];
$preco = $_POST['Preco_CD'];
$ano = $_POST['Data_Lancamento'];
$estilo_musical = $_POST['Estilo_Musical'];
$gravadora = $_POST['Gravadora'];
$musica = $_POST['Musica'];

// Primeira forma:
// $sql = mysqli_query($conexao,"insert into cd(Nome_Artista, Titulo_CD, Descricao, Preco_CD, Data_Lancamento, Estilo_Musical, Gravadora, Musicas) values('$artista', '$titulo', '$descricao', '$preco', '$ano', '$estilo_musical', '$gravadora', '$musica' )");

// Segunda forma:
/*if ($_POST['button'] == "Inserir") {
    $sql = "insert into cd(Nome_Artista, Titulo_CD, Descricao, Preco_CD, Data_Lancamento, Estilo_Musical, Gravadora, Musicas) Values('$artista', '$titulo', '$descricao', '$preco', '$ano', '$estilo_musical', '$gravadora', '$musica')";
if (mysqli_query($conexao,$sql)) {
    echo "<center><h1> Cadastro realizado com sucesso!!! </h1></center>";
}
}*/

// Terceira forma:
if ($_POST['button'] == "Inserir") {
    $sql = "insert into cd(Nome_Artista, Titulo_CD, Descricao, Preco_CD, Data_Lancamento, Estilo_Musical, Gravadora, Musicas) values('$artista', '$titulo', '$descricao', '$preco', '$ano', '$estilo_musical', '$gravadora', '$musica')";
    if (mysqli_query($conexao,$sql)) {
        echo "<center><h1> Cadastro realizado com sucesso!!! </h1></center>";
    }
}


// Primeira forma:
/*if ($_POST["button"] == "Selecionar") {
    $sql = "Select * from cd where Nome_Artista='tho'";
    $res = mysqli_query($conexao,$sql);
    $linha = mysqli_num_rows($res);
    echo "$linha registros encontrado";
    mysqli_close($conexao);
}*/

// Segunda forma:
if ($_POST['button'] == "Selecionar") {
    $sql = "select * from cd where Nome_Artista='Thomas'";
    $res = mysqli_query($conexao,$sql);
    $linha = mysqli_num_rows($res);
    echo "{$linha} registros encontrados";
    mysqli_close($conexao);
}