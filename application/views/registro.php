<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestión de Alumnos</title>

        <!-- Bootstrap -->
        <link href="http://localhost/registro-alumno/media/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-inverse" role="navigation">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">Gestión de Usuarios - UTP</a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form id="formulario" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" id="nombre" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">apellido</label>
                                    <input type="text"  name="apellido" class="form-control" id="apellido">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DNI</label>
                                    <input type="text"  name="dni" class="form-control" id="dni" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">provincia</label>
                                    <input type="text"  name="provincia" class="form-control" id="provincia" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">distrito</label>
                                    <input type="text"  name="distrito" class="form-control" id="distrito" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">dirección</label>
                                    <input type="text"  name="direccion" class="form-control" id="direccion" >
                                </div>
                                <a id="btn-save" class="col-md-12 btn btn-success">Guardar</a>
                                <input name="id" type="text" id="id" class="hide" value="">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>DNI</th>
                                        <th>Provincia</th>
                                        <th>Distrito</th>
                                        <th>Dirección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($aAlumno as $oAlumno): ?>
									<tr data-info="<?php echo $oAlumno->id ?>">
										<td><?php echo $oAlumno->nombre ?></td>
										<td><?php echo $oAlumno->apellido ?></td>
										<td><?php echo $oAlumno->dni ?></td>
										<td><?php echo $oAlumno->provincia ?></td>
										<td><?php echo $oAlumno->distrito ?></td>
										<td><?php echo $oAlumno->direccion ?></td>
									</tr>
									<?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://localhost/registro-alumno/media/js/jquery-1.11.1.min.js"></script>
    <script src="http://localhost/registro-alumno/media/js/bootstrap.min.js"></script>
    <script src="http://localhost/registro-alumno/media/js/customize.js"></script>
</body>
</html>