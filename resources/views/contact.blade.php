<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: beige; 
        }
    </style>
</head>
<body>
    <h1>Grazie per averci contattato</h1>
    <h4>Riepilogo della richiesta</h4>
    <ul>
        <li>
            Nome e Cognome:{{$name}}
        </li>
        <li>
            Email:{{$email}}
        </li>
        <li>
            Messaggio:{{$msg}}
        </li>
    </ul>
</body>
</html>