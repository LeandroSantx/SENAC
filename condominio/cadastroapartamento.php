<?php

include("conexao.php");

$numero = $_POST['numero_apartamento'];
$area = $_POST['area_apartamento'];
$codigoedificio = $_POST['codigo_edificio'];
$codigomorador = $_POST['codigo_morador'];
$valor = $_POST['valor'];

$query = "SELECT codigo_edificio  FROM edificio WHERE codigo_edificio = $codigoedificio";
    $inserte = mysqli_num_rows($conn, $query);
    if($inserte = 0){
        echo"<script language='javascript' type='text/javascript'>
        alert('edificio não existe!');window.location.
        href='index.html'</script>";
      }
    
$queryy = "SELECT codigo_morador  FROM morador, apartamento WHERE codigo_morador = $codigomorador";
    $insert = mysqli_num_rows($conn, $queryy);
    if($insert = 0 ){
        echo"<script language='javascript' type='text/javascript'>
        alert('morador não existe!');window.location.
        href='index.html'</script>";
      }

if($numero == "" || $numero == null)
{
    echo "Nome nao pode estar vazio!";
}
else
{
    $query = "INSERT INTO apartamento (numero_apto, area_apto, codigo_edificio, codigo_morador, valor) VALUES ('$numero','$area','$codigoedificio','$codigomorador','$valor')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Apartamento cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse Apartamento');window.location
        .href='cadastromorador.html'</script>";
      }

}

?>