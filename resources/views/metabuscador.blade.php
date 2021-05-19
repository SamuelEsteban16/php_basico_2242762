<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form class="form-horizontal"
            method="POST"
            action="{{ url('buscar') }}">
            @csrf
        <fieldset>


        <!-- Form Name -->
        <legend>Buscador de diferentes motores de busqueda</legend>



        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="terminor">1.ingrese el termino a buscar</label>
          <div class="col-md-4">
          <input id="termino" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>



        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="motores">2.Seleccione Motor de búsqueda</label>
          <div class="col-md-4">
          <div class="radio">
            <label for="motores-0">
              <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
              Google
            </label>
            </div>
          <div class="radio">
            <label for="motores-1">
              <input type="radio" name="motores" id="motores-1" value="2">
              Bing
            </label>
            </div>
            <div class="radio">
                <label for="motores-1">
                  <input type="radio" name="motores" id="motores-1" value="3">
                  Duckduckgo
                </label>
                </div>
            <div class="radio">
                    <label for="motores-1">
                      <input type="radio" name="motores" id="motores-1" value="4">
                      Baidu
                    </label>
                    </div>
            <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="motores-1" value="5">
                          Yahoo
                        </label>
                        </div>
            <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="motores-1" value="6">
                          Yandex
                        </label>
                        </div>
            <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="motores-1" value="7">
                          naver
                        </label>
                        </div>
            <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="motores-1" value="8">
                          ecosia
                        </label>
                        </div>
            <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="motores-1" value="9">
                          wolframalpha
                        </label>
                        </div>
            <div class="radio">
                        <label for="motores-1">
                          <input type="radio" name="motores" id="motores-1" value="10">
                          qwant
                        </label>
                        </div>
          </div>
        </div>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
              <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-success">Buscar</button>
            </div>
          </div>


        </fieldset>
        </form>


</body>
</html>
