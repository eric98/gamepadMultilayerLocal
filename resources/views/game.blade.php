<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Joc Eric</title>
    <script src="script.js"></script>
    <style>
        #ball {
            position: absolute;
            left: calc(50vw - 25px);
            top: calc(50vh - 25px);
            background-color: red;
            width: 50px;
            height: 50px;
            border-radius: 25px;
        }
    </style>
</head>

<body>
<h1>Jugador: {{$user->name}}</h1>
<p>Apreta un botó qualsevol per a activar el mando.</p>
<div id="ball"></div>
</body>

</html>