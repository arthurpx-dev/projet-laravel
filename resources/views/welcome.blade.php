<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #1E90FF, #ffffff);
            overflow: hidden;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(30, 144, 255, 0.7);
            box-shadow: 0 10px 30px rgba(0, 0, 255, 0.2);
            animation: pulse 1s infinite;
        }

        .circle-1 {
            width: 150px;
            height: 150px;
            top: 20%;
            left: 15%;
            background: rgba(30, 144, 255, 1);
        }

        .circle-2 {
            width: 250px;
            height: 250px;
            top: 40%;
            left: 25%;
            background: rgba(30, 144, 255, 0.6);
        }

        .circle-3 {
            width: 200px;
            height: 200px;
            top: 60%;
            left: 45%;
            background: rgba(30, 144, 255, 0.4);
        }

        .circle-4 {
            width: 300px;
            height: 300px;
            top: 70%;
            left: 75%;
            background: rgba(30, 144, 255, 0.3);
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .container {
            position: relative;
            z-index: 1;
        }

        .title {
            font-size: 2.5em;
            margin: 0;
            color: #fff;
            font-weight: bold;
        }

        .description {
            font-size: 1.2em;
            color: #fff;
            margin: 10px 0;
        }

        .button {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background: #1E90FF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background: #4682b4;
        }
    </style>
</head>

<body>
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

    <div class="container">
        <h1 class="title">Bem-vindo</h1>
        <p class="description">Aplicação de estudo Laravel.</p><br>
        <a href="/segunda-pagina" class="button">Entrar</a>
    </div>
</body>

</html>