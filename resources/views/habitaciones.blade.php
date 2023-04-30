@extends("layout")
@section("contenido")
<div class="container">

    <h1>Habitaciones disponibles</h1>
    <form action="{{route('habitacion.disponible', $cliente)}}" method="get">
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
            <button type="submit" class="btn btn-primary">Consultar</button>
        </div>
    </form>

    @if ($habitaciones->isEmpty())
    <div class="alert alert-danger" role="alert">
        No hay habitaciones disponibles
        @else
        <form action="{{route('habitacion.reservacion', $cliente )}}" method="get">
            @csrf   
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
                        <td><input type="radio" name="seleccionado" value={{ $habitacion['id'] }}></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="form_group mt-4">
                <button type="submit" class="btn btn-primary">Reservar</button>
            </div>
        </form>
        @endif
    </div>

    @endsection("contenido")