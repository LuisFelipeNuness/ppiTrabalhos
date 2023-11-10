<?php
    function mySqlConnect(){
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

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['data'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($conexao);
    }
?>