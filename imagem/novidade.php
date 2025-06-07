<?php
// Você pode futuramente substituir isso por dados vindos de um banco de dados.
$novidades = [
    [
        "titulo" => "Novo lançamento de produto!",
        "descricao" => "Acabamos de lançar nossa nova coleção de lingeries 2025.",
        "data" => "05/06/2025"
    ],
    [
        "titulo" => "Frete grátis por tempo limitado",
        "descricao" => "Aproveite o frete grátis em compras acima de R$150 até o final do mês!",
        "data" => "02/06/2025"
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Novidades | Meu Site</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        h1 {
            color: #cc3366;
            text-align: center;
        }
        .novidade {
            border-bottom: 1px solid #ddd;
            padding: 15px 0;
        }
        .novidade h2 {
            margin: 0;
            color: #333;
        }
        .novidade small {
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Novidades</h1>

        <?php foreach ($novidades as $item): ?>
            <div class="novidade">
                <h2><?php echo $item["titulo"]; ?></h2>
                <small>Data: <?php echo $item["data"]; ?></small>
                <p><?php echo $item["descricao"]; ?></p>
            </div>
        <?php endforeach; ?>
        
    </div>
</body>
</html>
