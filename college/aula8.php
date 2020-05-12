<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="aula8_pt2.php" method="POST">
        <fieldset>
            <legend>Cadastro de CD</legend>
            <p><label for="artista">Artista: <input type="text" name="Nome_Artista" placeholder="Nome do artista" id=""></label></p>

            <p><label for="titulo">Título: <input type="text" name="Titulo_CD" placeholder="Título do CD" id=""></label></p>

            <p>Descrição:</p>
            <p><textarea name="Descricao" id="" cols="20" rows="10"></textarea></p>

            <p><label for="preco">Preço: <input type="number" name="Preco_CD" id=""></label></p>

            <p><label for="ano">Ano: <input type="date" name="Data_Lancamento" id=""></label></p>
            
            <p><label for="estilo musical">Estilo musical: <input type="text" name="Estilo_Musical" id=""></label></p> 

            <p>
                <label for="Gravadora">
                    Gravadora:
                    <select name="Gravadora" id="">
                        <option value="Joia mordena" name="Joia_Modena">Joia Modena</option>
                        <option value="Sete taças" name="Sete_Tacas">Sete taças</option>
                        <option value="Novo tempo" name="Novo_Tempo">Novo Tempo</option> 
                        <option value="Velas de areia" name="Velas_de_Areia">Velas de areia</option>       
                    </select>
                </label>
            </p>   

            <p>Música:</p>
            <p><textarea name="Musica" id="" cols="20" rows="10"></textarea></p>
             
            <input type="submit" value="Inserir" name="button">
            <input type="submit" value="Selecionar" name="button">
            <input type="submit" value="atualizar" name="button">
            <input type="submit" value="deletar" name="button">
            <input type="submit" value="limpar" name="button">

        </fieldset>
    </form>
</body>

</html>