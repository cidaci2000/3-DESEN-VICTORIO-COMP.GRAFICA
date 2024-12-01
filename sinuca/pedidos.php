<?php
session_start();


// Conexão com o banco de dados
include_once('config.php');

// Verificando se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}

// Buscar todos os pedidos
$sql = "SELECT * FROM pedidos"; // Ajuste conforme o nome da tabela no seu banco de dados
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Pedidos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #84b084;
            margin: 0;
            padding: 0;
        }
        /* Barra lateral */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 12px;
            margin: 8px 0;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        /* Conteúdo Principal */
        .content {
            margin-left: 260px;
            padding: 20px;
            text-align: center;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        td a {
            text-decoration: none;
            color: #007bff;
        }
        td a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            margin: 10px 0;
            display: inline-block;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .btn-danger {
            background-color: #f44336;
        }
        .btn-danger:hover {
            background-color: #da190b;
        }
    </style>
</head>
<body>

    <!-- Barra Lateral -->
    <div class="sidebar">
        <h2 style="text-align: center; color: #fff;">Administração</h2>
        <a href="admin.php">Dashboard</a>
        <a href="usuarios.php">Gerenciar Usuários</a>
        <a href="produtos.php">Gerenciar Produtos</a>
        <a href="pedidos.php">Gerenciar Pedidos</a>
        <a href="logout.php">Sair</a>
    </div>

    <!-- Conteúdo Principal -->
    <div class="content">
        <header>
            <h1>Gerenciar Pedidos</h1>
        </header>

        <h2>Lista de Pedidos Realizados</h2>

        <!-- Exibindo a tabela de pedidos -->
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Cliente</th><th>Total</th><th>Status</th><th>Data do Pedido</th><th>Ações</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['cliente_nome'] . "</td>";
                echo "<td>" . number_format($row['total'], 2, ',', '.') . " R$</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['data_pedido'] . "</td>";
                // Botões de Editar e Remover
                echo "<td>
                        <a href='ver_pedido.php?id=" . $row['id'] . "' class='btn'>Ver Detalhes</a> | 
                        <a href='editar_pedido.php?id=" . $row['id'] . "' class='btn'>Editar</a> | 
                        <a href='deletar_pedido.php?id=" . $row['id'] . "' class='btn btn-danger' onclick='return confirm(\"Tem certeza que deseja remover este pedido?\")'>Remover</a>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Nenhum pedido encontrado.</p>";
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 - Sistema de Administração</p>
    </footer>

</body>
</html>