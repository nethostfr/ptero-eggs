<?php
// Get the PHP version
$phpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNetHost FR</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            width: 80%;
            max-width: 600px;
        }

        h1 {
            font-size: 2.5em;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            color: #34495e;
            margin-bottom: 30px;
        }

        .php-version {
            background-color: #2980b9;
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .message {
            font-size: 1.2em;
            font-weight: bold;
            color: #27ae60;
            margin-bottom: 30px;
        }

        .footer {
            font-size: 1em;
            color: #7f8c8d;
        }

        .footer a {
            color: #2980b9;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            h1 {
                font-size: 2em;
            }
            p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Le serveur web est bien installé</h1>
    <p>Version PHP :</p>
    <div class="php-version"><?php echo $phpVersion; ?></div>
    <div class="message">Les fichiers pour votre site web se trouve dans le dossier webroot.</div>
    <div class="footer">
        <p>Hébergé par <a href="https://nethost.fr" target="_blank">NetHost FR</a></p>
    </div>
</div>

</body>
</html>
