<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $sql = "INSERT INTO funcionario(nome,celular) VALUES ('$nome','$celular')";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro inserido com sucesso!');
            window.location.href='visufunc.php'
            </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro não foi inserido!');
            window.location.href='visufunc.php'
            </script>";
    }
    mysqli_close($conn);
?>