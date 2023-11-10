<?php
    function mySqlConnect(){
        try{
            $host = 'sql111.infinityfree.com';
            $usuario = 'if0_34819720';
            $senha = '7w2D9hK9DnAw3';
            $banco = 'if0_34819720_cadastro';

            $conexao = new mysqli($host, $usuario, $senha, $banco);

            if (!$conexao) {
                die("Falha na conexão: " . mysqli_connect_error());
            }

            $sql = <<<SQL 
            SELECT * 
            FROM cadastro 
            SQL;
        
        $result = $pdo->query($sql);
        } catch (Exception $e) {
            exit('Ocorreu uma falha: ' . $e->getMessage());
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">Home</a>
      <a class="navbar-brand" href="cadastro.html">Cadastro</a>
      <a class="navbar-brand ml-auto" href="login.html">Login</a>
  </nav>

  <table id="example" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th>id</th>
              <th>Nome</th>
              <th>E-mail</th>
              <th>Data de Nascimento</th>
              <th>Senha</th>
          </tr>
      </thead>
      <tbody>
        <?php
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['data'] . "</td>";
                echo "<td>" . $row['senha'] . "</td>";
                echo "</tr>";
            }
        ?>
      </tbody>
  </table>

  <div class="footer fixed-bottom bg-dark text-white text-center">
      <div class="container">
          Trabalho 5 de Programação para Internet @ UFU – Luis Felipe Nunes Reis
      </div>
  </div>
</body>
</html>