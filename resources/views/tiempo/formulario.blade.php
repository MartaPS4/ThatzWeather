<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ThatzWeather</title>
</head>
<body>
    <div id="container">
        <p>Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</p>
        <!-- Introducir CP y enviar -->
            <form action="{{ action('myController@recibir') }}" method="POST">
                {{ csrf_field() }}
                <div id="formularioCp">
                    <input type="number" name="cp" placeholder="Introduce el código postal" /><br />
                    <input type="submit"value="Buscar"/>
                </div>
            </form>
        <!-- Introducir CP y enviar -->
        <p>¡Que la lluvia no te pare!</p>
    </div>
</body>
</html>
