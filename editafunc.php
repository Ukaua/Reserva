<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SENAI - Reserva de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: linear-gradient(to right, white, rgb(2, 0, 36));
        }

        .header {
            float: right;
        }

        .letra {
            font-size: small;
        }
    </style>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="scripts/bootstrap5/js/bootstrap.min.js"></script>
    <center>
        <h1>
            <p class="text-white">ReservaCAR</p>
        </h1>
        <br />
        <a href="cadcarro.php"><button type="button" class="btn btn-outline-light">Cadastrar Carro</button></a>
        <a href="cadfunc.php"><button type="button" class="btn btn-outline-light">Cadastrar Funcionário</button></a>
        <a href="reserva.php"><button type="button" class="btn btn-success">Reservar Carro</button></a>
    </center>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 fw-normal"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                </svg>&nbsp;&nbsp;Funcionários</b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'conecta.php';
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM funcionario WHERE id=$id";
                            $query = $conn->query($sql);
                            while($dados = $query->fetch_assoc()){
                                $id = $dados['id'];
                                $nome = $dados['nome'];
                                $celular = $dados['celular'];
                            }
                        ?>
                        <form action="editarfunc.php?id=<?php echo $id; ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Celular</label>
                                <input type="text" class="form-control" name="celular" value="<?php echo $celular; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Atualizar</button>
                            <a href="index.php"><button type="button" class="btn btn-outline-secondary">Voltar</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>