<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <<title>gestion usuarios</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h4> Gestion usuarios </h4>
        <div class="row">
        <div class="col-xl-12">
            <form action="{{route('cliente.index')}}" method="get">

                <div class="form-row">
                    <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">

                        
                    </div>
                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                        
                    </div>
                    <div class="col-auto my-1">
                        <a href="{{route('cliente.create')}}" class="btn btn-sucess">Nuevo</a>
                        
                    </div>
                    
                </div>

            </form>

        </div>   

        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Opciones</th>
                            <th>ID</th>
                            <th>Apellidos</th>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Teléfono</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($clientes)<=0)
                        <tr>
                           <td colspan="8">No hay resultados</td>
                        </tr>
                        @else

                        @foreach ($clientes as $cliente)
                      <tr>
                        <td><a href="{{route('cliente.edit', $cliente->id )}}" class="btn btn-warning btn-sm">Editar </a> 
                        <form action="{{route('cliente.destroy', $cliente->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">

                        </form></td>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->rut}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->email}}</td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                </table>
                {{$clientes->links()}}
            </div>
        </div>    
    </div>
    </div>
    </body>
</html>