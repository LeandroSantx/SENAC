<?php

include("conexao.php");

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$datanascimento = $_POST['data_de_nascimento'];
$cep = $_POST['cep'];

if($nome == "" || $nome == null)
{
    echo "Nome nao pode estar vazio!";
}
else
{
    $query = "INSERT INTO morador (cpf, nome, sexo, data_de_nascimento, cep) VALUES ('$cpf','$nome','$sexo','$datanascimento','$cep')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Morador cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse morador');window.location
        .href='cadastromorador.html'</script>";
      }

}


?>