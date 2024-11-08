<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu</title>

    <style>
        body{
            height: 100vh;
            gap: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .form{
            gap: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>Controle de [TITULO]</h1>

    <div class="form">
        <input type="button" class="btn btn-success" value="Cadastrar" onclick="window.open('cadastro.php','_top');">
        <input type="button" class="btn btn-warning" value="Consultar" onclick="window.open('consulta.php','_top');">
    </div>
    
    
</body>
</html>