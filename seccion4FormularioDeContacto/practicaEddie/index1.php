<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container"><center>
    <form action="recibe.php" class="form-horizontal" method="post">
        <!-- <fieldset> -->
            <legend class="text-center header">Contacto Eddie TI</legend>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8">
                    <input id="" name="nombre" type="text" placeholder="Nombre(s)" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8">
                    <input id="" name="apellidoPaterno" type="text" placeholder="Apellido Paterno" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-8">
                    <input id="" name="apellidoMaterno" type="text" placeholder="Apellido Mterno" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                <div class="col-md-8">
                    <input id="" name="email" type="text" placeholder="Email" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                <div class="col-md-8">
                    <input id="phone" name="telefono" type="text" placeholder="Phone" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <div class="col-md-8">
                    <textarea class="form-control" id="" name="mensaje" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Enviar a DB</button>
                </div>
            </div>
        <!-- </fieldset> -->
    </form></center>
</div>    
</body>
</html>