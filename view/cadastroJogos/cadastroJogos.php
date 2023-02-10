<?php
require '../../cabecalho.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de Jogos</title>
</head>

<body style="background-color: whitesmoke;">
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body ">
                        <form action="../../controller/cadastroJogo/action.php" method="post">
                            <div class="form-group">
                                <label for="nomeNovoJogo">Insira o nome do Jogo</label>
                                <input name="nomeNovoJogo" type="text" class="form-control" id="nomeNovoJogo">
                            </div>

                            <div class="form-group">
                                <label for="descricaoNovoJogo">Insira a descrição para seu jogo</label>
                                <textarea name="descNovoJogo" class="form-control" id="descricaoNovoJogo" rows="3"></textarea>
                            </div>

                            <div class="row text-center">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary ">Enviar dados</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>