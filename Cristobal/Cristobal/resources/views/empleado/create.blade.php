<form action="{{ url('/empleado') }}" method="post">
@csrf

@include('empleado.form')

</form>