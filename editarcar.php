<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $sql = "UPDATE carro SET placa=?, modelo=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização: ".$conn->errno." - ".$conn->error;
    }
    $stmt->bind_param('ssi', $placa, $modelo, $id);
    $stmt->execute();
    $conn->close();
    header("Location: visucar.php");
?>