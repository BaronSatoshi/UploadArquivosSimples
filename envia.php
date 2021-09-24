<?php


//print_r($_FILES['arquivo']);

$nome_arquivo = $_FILES['arquivo']['name'];
$caminho_arquivo = $_FILES['arquivo']['tmp_name'];
$caminho_salvar = 'arquivos/'.$nome_arquivo;

if(move_uploaded_file($caminho_arquivo,$caminho_salvar)){
    header("Location: index.php");
} else{
    echo "<script>Arquivo não carregado</script>";
}


?>