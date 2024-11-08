<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<a href="index.php">Menu</a>

<hr>

<h2>Consulta de [TITULO]</h2>

<form method="POST">
    RA: <br>
    <input type="text" name="ra" id="ra" size="10">
    <input type="submit" value="Consultar">
</form>


<hr>
</body>
</html>



<?php
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    include('conexaoBD.php');
    if(isset($_POST['ra']) && ($_POST['ra'] != "")){
        $ra = $_POST['ra'];

        $stmt = $pdo->prepare("select * from alunos where ra= :ra");
        $stmt->bindParam(':ra', $ra);
    }else{
        $stmt = $pdo->prepare("select * from alunos order by curso, nome");
    }
    try{
    
        echo "<table class='table table-info table-hover' border='1px' cellspacing=0>";
        echo "<tr>";
        echo "<th>RA</th>";
        echo "<th>Nome</th>";
        echo "<th>Curso</th>";
        echo "<th colspan = 2></th>";
        echo "</tr>";
        
        //buscando dados
        $stmt->execute();

        while($row = $stmt->fetch()){
            echo "<tr>";
            echo "<td style='padding-left: 5px; padding-right: 5px;'>".$row['ra']."</td>";
            echo "<td style='padding-left: 5px; padding-right: 5px;'>".$row['nome']."</td>";
            echo "<td style='padding-left: 5px; padding-right: 5px;'>".$row['curso']."</td>";
            
            echo "</tr>";
        }
        echo"</table>";
    }catch(PDOException $e){
        echo 'Error: '. $e->getMessage();
    }

    $pdo = null;
}//fechamento do IF do POST

?>