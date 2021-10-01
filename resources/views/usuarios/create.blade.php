<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/crud/public/css/bootstrap.min.css">
    <script src="/crud/public/js/jquery.min.js"></script>
    <script src="/crud/public/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Agregar usuario</h1>
    <form action="{{url('/usuarios')}}" method="post" style="margin-top: 100px;">
        {{ csrf_field()}} 
        <div class="form-group row">
          <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm" style="margin-left: 50px;">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm"  name="Nombre" id="Nombre" placeholder="Nombre">
          </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm" style="margin-left: 50px;">Apellido</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" name="Apellido" id="Apellido" placeholder="Apellido">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm" style="margin-left: 50px;">Cédula</label>
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-sm" name="Cedula" id="Cedula" placeholder="Cédula">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm" style="margin-left: 50px;">Dirección</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" name="Direccion" id="Direccion" placeholder="Dirección">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-1 col-form-label col-form-label-sm" style="margin-left: 50px;">Teléfono</label>
            <div class="col-sm-10">
              <input type="number" class="form-control form-control-sm" name="telefono" id="Telefono" placeholder="Teléfono">
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#">
                        <button type="button submit" class="btn btn-outline-warning form-control btn-block">Agregar usuario</button>
                    </a>
                </div>
                <div class="col">
                    <a href="{{url('/usuarios')}}"><button type="button" class="btn btn-outline-danger form-control btn-block">Regresar</button></a>
                </div>
            </div>
        </div>
    </form>
</body>