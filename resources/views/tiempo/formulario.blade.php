<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://allfont.es/allfont.css?fonts=muli" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>ThatzWeather</title>
</head>
<body>
    <div id="container">
        <div id="logo">
            <img src="img/desk/d-logo.png" alt="Logo">
        </div>
        <!-- Introducir CP y enviar -->
        <div id="formularioCp">
            <p>Entérate del tiempo en la zona exacta que te interesa <br/> buscando por código postal.</p>
            <form action="{{ action('myController@recibir') }}" method="POST">
                {{ csrf_field() }}
                    <input type="number" name="cp" placeholder="Introduce el código postal" /><br />
                    <input type="submit"value="Buscar"/>
            </form>
        </div>
        <!-- Introducir CP y enviar -->
        <p id="fin">¡Que la lluvia no te pare!</p>
    </div>
</body>
</html>
