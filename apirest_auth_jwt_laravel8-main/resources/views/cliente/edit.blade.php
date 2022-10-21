<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gestion cliente</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h4>Editar clientes</h4>
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('cliente.update', $cliente->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" required maxlength="50" value="{{$cliente->apellidos}}">
                            </div>

                            <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" required maxlength="30" value="{{$cliente->nombre}}">
                            </div>

                            <div class="form-group">
                            <label for="rut">Rut</label>
                            <input type="text" class="form-control" name="rut" required maxlength="15" value="{{$cliente->rut}}">
                            </div>

                            <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" required maxlength="150" value="{{$cliente->direccion}}">
                            </div>

                            <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" required maxlength="15" value="{{$cliente->telefono}}">
                            </div>

                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" required maxlength="50" value="{{$cliente->email}}">
                            </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                            <input type="reset" class="btn btn-default" value="Cancelar">
                            <a href="javascript:history.back()">Ir al listado</a>
                            
                        </div>
                    </form>


                    
                </div>
                
            </div>
            
        </div>
    
    </body>
</html>