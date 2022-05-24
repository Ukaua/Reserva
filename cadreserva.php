<?php
    include 'conecta.php';
    $funcionario = $_POST['funcionario'];
    $carro = $_POST['carro'];
    $datainicial = $_POST['datainicial'];
    $datafinal = $_POST['datafinal'];
    $descricao = $_POST['descricao'];
    $sql = "INSERT INTO reserva(id_funcionario,id_carro,data_inicial,data_final,descricao) VALUES ('$funcionario','$carro','$datainicial','$datafinal','$descricao')";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro inserido com sucesso!');
            window.location.href='visures.php'
            </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro não foi inserido!');
            window.location.href='visures.php'
            </script>";
    }
    mysqli_close($conn);
?>