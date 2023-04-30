@extends("layout")
@section("contenido")
<div class="container">

    <h1>Habitaciones disponibles</h1>
    <form action="{{route('habitacion.disponible')}}" method="get">
        <div class="form_group mt-4">
            <label for="fecha_reserva">Fecha:</label>
            <input type="date" name="fecha_reserva" id="fecha_reserva" class="form-control">
            @error('fecha_reserva')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form_group mt-4">
            <label for="cupo">Cantidad de personas:</label>
            <input type="numb" name="cupo" id="cupo" class="form-control">
            @error('cupo')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form_group mt-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>nombre</th>
                <th>cupo</th>
                <th>observacion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($habitaciones as $habitacion)
            <tr>
                <td>{{ $habitacion['nombre'] }}</td>
                <td>{{ $habitacion['cupo'] }}</td>
                <td>{{ $habitacion['observacion'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection("contenido")