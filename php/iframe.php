<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFRAME INICIAL</title>
    <link rel="stylesheet" href="../assets/css/others.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500;800;900&display=swap');

        body {
            background: url(../assets/img/mulher-atleta-pgi.jpg);
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        h1 {
            color: white;
            width: 50%;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-weight: 900;
        }

        .tipos-treinos {
            display: flex;
        }

        a {
            margin-top: 2rem;
            padding: 1rem 5rem;
            background-color: black;
            margin-right: 2rem;
            color: white;
            text-transform: uppercase;
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            border-radius: 10px;
            letter-spacing: 2px;
            transition: 0.15s all ease;
        }

        a:hover {
            transform: scale(1.05);
            background-color: rgb(12, 12, 12);
        }
    </style>
</head>


<body>
    <h1>ESCOLHA SEU TREINO</h1>
    <div class="tipos-treinos">
        <a href="superiores.php" target="iframe">Superiores</a>
        <a href="inferiores.php" target="iframe">Inferiores</a>
    </div>
</body>

</html>