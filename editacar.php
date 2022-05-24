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
                        <h4 class="my-0 fw-normal"><b><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-fan" viewBox="0 0 16 16">
  		                <path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668Zm0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254Zm-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8Zm-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"/>
  		                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14Zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16Z"/>
		                </svg>&nbsp;&nbsp;Carros</b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'conecta.php';
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM carro WHERE id=$id";
                            $query = $conn->query($sql);
                            while($dados = $query->fetch_assoc()){
                                $id = $dados['id'];
                                $placa = $dados['placa'];
                                $modelo = $dados['modelo'];
                            }
                        ?>
                        <form action="editarcar.php?id=<?php echo $id; ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Placa</label>
                                <input type="text" class="form-control" name="placa" value="<?php echo $placa; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Modelo</label>
                                <input type="text" class="form-control" name="modelo" value="<?php echo $modelo; ?>" required>
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