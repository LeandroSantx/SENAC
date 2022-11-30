<?php

include("conexao.php");

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$datavistoria = $_POST['datavistoria'];
$dataconstrucao = $_POST['dataconstrucao'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
    $query = "INSERT INTO edificio (cep, numero, data_construcao, data_vistoria, complemento, nome_edificio) VALUES ('$cep','$numero','$dataconstrucao','$datavistoria','$complemento','$nome')";
    $insert = mysqli_query($conn,$query); 

    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Edificio cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse edificio');window.location
        .href='cadastroedificio.html'</script>";
      }
      

}


?>