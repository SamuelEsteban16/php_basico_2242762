<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Lista de paises</h1>

<table class="table table-hover">

    <tr>
        <th class="text-secondary">Nombre</th>
        <th class="text-danger">Capital</th>
        <th class="text-info">Moneda</th>
        <th   class="success" >Poblacion</th>
    </tr>
    @foreach($naciones as $nombre=>$nacion)
        <tr>
            <td>{{  $nombre   }}</td>
            <td>{{  $nacion["capital"]}}</td>
            <td>{{  $nacion["Moneda"]}}</td>
            <td>{{  $nacion["poblacion"]}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
