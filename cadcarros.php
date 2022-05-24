<?php
    include 'conecta.php';
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $sql = "INSERT INTO carro(placa,modelo) VALUES ('$placa','$modelo')";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro inserido com sucesso!');
            window.location.href='visucar.php'
            </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro não foi inserido!');
            window.location.href='visucar.php'
            </script>";
    }
    mysqli_close($conn);
?>