<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Sinuca</title>
    <style>
        /* Estilo Geral do Corpo da Página */
        body {
            font-family: Arial, sans-serif;
            background-color: #84b084;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            padding: 20px;
            
        }

        /* Estilos do Header */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            width: 100%;
            margin-bottom: 30px;
        }

        /* Estilos do Formulário */
      
        /* Inputs e botões do formulário */
        form input, form button {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Estilo do botão (Cadastrar) */
        form button {
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        form button:hover {
            background-color: #575757;
        }

        /* Estilos dos Cards (Seções de Links) */
        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            margin-top: 40px;
            width: 100%;
            
        }
        .form{
            display: flex;
            flex-direction: column;
        }

        /* Estilo Geral dos Cards */
        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 5px;
            text-align: center;
            width: 22%; /* Aumento da largura do card */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            margin-bottom: 30px;
           
        }
        .card h2{
            margin-left: 10%;
        }
        .card:hover {
            transform: scale(1.05);
        }

        /* Ajuste nas Imagens dentro dos Cards */
        .card img {
            width: 100px;
            max-width: 180px;
            height: 80px;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        header nav{
            background-color: #333;
            
        }

        /* Estilos para o Link dentro do Card */
        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            color: #fff;
            background-color: #333;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        h2{
            margin-left: 30%;
        }
        .card a:hover {
            background-color: #575757;
        }

        /* Responsividade para telas pequenas */
        @media (max-width: 768px) {
            /* Ajusta os cards para que fiquem 2 por linha em telas menores */
            .card {
                width: 28%;
            }
        }

        @media (max-width: 480px) {
            /* Ajuste de estilo para telas ainda menores */
            .card {
                width: 100%;
            }
            form {
                padding: 15px;
                max-width: 100%;
            }
        }
    

        nav {
    background-color: #f2f2f2;
    overflow: hidden;
}


.logo {
    float: left;
}

.nav-links, .nav-actions {
    list-style-type: none;
    margin: 0;
    padding: 0;
    float: right;
    
}

.nav-links li, .nav-actions li {
    display: inline-block;
}

.nav-links li a, .nav-actions li a {
    color: #fff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.nav-links li a:hover, .nav-actions li a:hover {
    background-color: #ddd;
}
    </style>
</head>
<body>
    <header>
 
        <h1>Bem-vindo ao Site de Sinuca</h1>
        <nav>
            
            <ul class="nav-actions">
                <li><a href="login.php">Login</a></li>
                <li><a href="cliente.php">Cadastro</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
                
        <section class="mesas">
            <div class="card">
                <h2>Comprar 20 Fichas</h2>
                <img src="ficha.webp" alt="Imagem de fichas">
                <a href="login.php">Compre Aqui</a>
            </div>
            <div class="card">
                <h2>Comprar 50 Fichas</h2>
                <img src="ficha.webp" alt="Imagem de fichas">
                <a href="login.php">Compre Aqui</a>
            </div>
            <div class="card">
                <h2>Comprar 100 Fichas</h2>
                <img src="ficha.webp" alt="Imagem de fichas">
                <a href="login.php">Compre Aqui</a>
            </div>
            <div class="card">
                <h2>Comprar vários pacotes</h2>
                <img src="ficha.webp" alt="Imagem de fichas">
                <a href="login.php">Compre Aqui</a>
            </div>
            <div class="card">
                <h2>Horário de Mesas comum</h2>
                <img src="mesadesinucajpg" alt="Imagem de mesas">
                <a href="login.php">Alugue Aqui</a>
            </div>
                      
            <div class="card">
                <h2>Horário de Mesa Premium</h2>
                <img src="mesadesinucajpg" alt="Imagem de mesas">
                <a href="login.php">Alugue Aqui</a>
            </div>
                        
            <div class="card">
                <h2>Horário de Mesa Nobrese </h2>
                <img src="mesadesinucajpg" alt="Imagem de mesas">
                <a href="login.php">Alugue Aqui</a>
            </div>
            <div class="card">
                <h2>Horário de Mesa Super</h2>
                <img src="mesadesinucajpg" alt="Imagem de mesas">
                <a href="login.php">Alugue Aqui</a>
            </div>
           
           
    </section>
    </main>
</body>