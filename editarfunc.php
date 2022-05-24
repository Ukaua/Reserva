<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $sql = "UPDATE funcionario SET nome=?, celular=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização: ".$conn->errno." - ".$conn->error;
    }
    $stmt->bind_param('ssi', $nome, $celular, $id);
    $stmt->execute();
    $conn->close();
    header("Location: visufunc.php");
?>