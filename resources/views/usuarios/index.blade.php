<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <br><br>
    <a href="{{url('/usuarios/create')}}"><button type="button" class="btn btn-outline-secondary" style="margin-left: 820px; width: 300px;">Agregar usuario</button></a>
    
    <br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cédula</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                
            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->cedula}}</td>
                <td>{{$usuario->direccion}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>
                    
    
                    
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="{{url('/usuarios/'.$usuario->id.'/edit')}}">
                                <button type="button" class="btn btn-outline-warning form-control btn-block">Editar</button>
                            </a>
                        </div>
                        <div class="col">
                        <form method="post" action="{{url('/usuarios/'.$usuario->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-outline-danger form-control btn-block" onclick="return confirm('¿Deseas eliminar el usuario?')">Eliminar</button>
                        </form>                  
                        </div>
                    </div>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>