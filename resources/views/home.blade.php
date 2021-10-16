<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>&copy;Chevyplan</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body { font-family: 'Nunito', sans-serif; background-color: #ccc; }
            .logo{
                margin-top: 2%;
                width: 35%;
            }
            .panel{
                background-color: #fff;
                border-radius: 4px;
                padding: 10px;
                margin-top: 2%;
            }

            .pse{
                width: 200px;
                display: block;
                margin: 0 auto;
            }

            .title{
                color: #194990;
                font-weight: bold;
                font-size: 20px;
            }
            .descripcion{
                color: #A6B1BC;
                font-size: 17px;
            }
            .info{
                color: #A6B1BC;
                font-size: 17px;
                text-align: center;
            }
            .mt-3{
                margin-top: 3%;
            }

            label{
                font-weight: bold;
            }

            .form-select, .form-control{
                background-color: #ccc;
                margin-bottom: 2px solid #E13EFF;
            }

            .form-control:focus{
                background-color: #ccc;
            }

            .btn-search{
                background-color: #E13EFF;
                color: #fff;
            }

            .btn-search:hover{
                color: #fff;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <img src="{{url('/img/logo.svg')}}" class="logo">
            <div class="panel shadow">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-sm-12">
                        <br>
                            <p class="title">Aportes en linea rápidos y seguros</p>
                            <p class="descripcion">
                                Ahora puedes hacer tus aportes mensuales correspondientes a la cuota de tu Plan de Ahorro ingresando a nuestra platafdorma de pagos en linea
                            </p>
                    </div>
                    <div class="col-md-1 col-sm-12">
                        <img src="{{url('/img/pse.png')}}" class="pse">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p class="info">Debido a la emergencia por la que atravies el pais, te informamos que podrás realizar
                            tus aportes mensuales, a través de tarjetas de crédito. (Estará disponible hasta nuestra próxima Ceremonia de Sueños).
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <form action="{{url('/query')}}" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <label for="type_document">Tipo de documento</label>
                                <select class="form-select" name="type_document">
                                    <option selected>Tipo de documento</option>
                                    <option value="1">Cedula de ciudadanía</option>
                                    <option value="2">Cedula de exranjería</option>
                                    <option value="3">NIT</option>
                                    <option value="4">Pasaporte</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <label for="">Número de documento</label>
                                <input type="text" name="number_document" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" min="5" max="10" required>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-3">
                            <div class="col-md-3 col-sm-4">
                                <input type="submit" value="CONSULTAR" class="btn btn-search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
