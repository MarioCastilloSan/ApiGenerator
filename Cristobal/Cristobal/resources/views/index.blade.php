Mostrar la lista de Empleados

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>| ID |</th>
            <th>Nombre |</th>
            <th>ApellidoPaterno |</th>
            <th>ApellidoMaterno |</th>
            <th>Correo |</th>
            <th>Funciones |</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            
            <td>
                <a href="{{url('/empleado/'.$empleado->id.'/edit') }}">    
            Editar</td>

            <td>
                <form action="{{ url(('/empleado/'.$empleado->id))}}" method ="post">
                @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Eliminar"></td>
        </tr>
        @endforeach

        <td>
        </tbody>
</table><br>
<a href="{{url('empleado/create')}}">Ingresar Empleado</a>

