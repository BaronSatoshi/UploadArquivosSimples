<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid mt-3">
        <h2>Upload Arquivos</h2>
<div class="card">
    <div class="card-body">
        <form action="envia.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <input type="submit" value="Enviar">
        </form>
    </div>
</div>

    <h6 class="mt-3">Arquivos Enviados</h6>
    <?php require 'lista.php'; ?>
</body>
</html>