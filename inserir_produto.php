<?php
include('conexao.php');
if (isset($_POST["inserir"])){
    $nome = $_POST[ "nome" ];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $valor_unitario = $_POST["valor_unitario"];
    $quantidade_estoque = $_POST[ "quantidade_estoque"];
    $cor = $_POST[ "cor"];
    $disponivel = $_POST["disponivel"];
    $link_imagem = $_POST["link_imagem"] ;
    $foto = $_FILES['foto'];
    $nome_foto = $foto[ 'name' ];
    $tmp_name = $foto[' tmp_name'];
    $destination= 'img_produtos/' .$nome_foto;
    if (move_uploaded_file($tmp_name, $destination)) {
        echo "arquivo enviado com sucesso!"
    }else{
        echo "Erro ao envia arquivo!"
    }

    $sql = "INSERT INTO insert into produtos(nome, tipo, descricao, valor_unitario, quantidade_estoque, cor, disponivel, link_imagem, foto)
    VALUES ('$nome', '$tipo', '$descricao', '$valor_unitario', '$quantidade_estoque', '$cor', '$disponivel', '$link_imagem', '$foto')";
    if ($conn->query($sql)=== TRUE ) {
        echo "Produto inserido com sucesso!"; echo "redirecionamento... Login";
        echo "‹! -- Redireciona para uma URL específica em html -->
    ‹meta http-equiv='refresh' content='3;
        url=inserir_produto.html'›";
    y else €
    echo "Erro ao inserir produto:" - $conn-›error; echo "xiii deu erro, volte para a pagina de inserção";
    echo "‹! -- Redireciona para uma URL específica em html -->
    ‹meta http-equiv='refresh' content='10; url-inserir_produto.html'>"
    }

}

?>