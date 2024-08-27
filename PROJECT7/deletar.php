<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Alunos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label,
        input,
        select,
        button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        input[type="text"],
        select,
        button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Alunos</h1>
    <form action="deletarAluno.php" method="GET">
        <label for="nome">Qual matrícula deseja deletar:</label>
        <input type="text" id="id" name="matricula" required>



        <button type="submit">Deletar</button>
    </form>
</body>
</html>

