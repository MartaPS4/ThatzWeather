<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Muli" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>ThatzWeather</title>
</head>
<body>
    <div id="container">
        <div id="logo">
            <img src="img/desk/d-logo.png" alt="Logo">
        </div>
        <!-- Introducir CP y enviar -->
            <form id="formularioCp" action="{{ route('myController.recibir') }}" method="POST" >
            {{ csrf_field() }}  
            <p>Entérate del tiempo en la zona exacta que te interesa <br/> buscando por código postal.</p>  
                <div class="row">
                    <div>
                        <input type="number" name="cp" id="specificSizeInputName" placeholder="Introduce el código postal">
                    </div>
                    <br>
                    <div id= "btn">
                        <button type="submit" class="btn btn-primary btn-lg">Buscar <img id="lupa" src="img/desk/d-lupa.png" /></button>
                    </div>
                </div>
            </form>        
        <!-- Introducir CP y enviar -->
        <p id="fin">¡Que la lluvia no te pare!</p>
    </div>
</body>
</html>
