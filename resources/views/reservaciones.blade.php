@extends("layout")
@section("contenido")
<div>
    <form action="{{route('reservacion.actualizar')}}" method="get">
        <table class="table">
            <thead>
                <tr>
                    <th>Numero de dias</th>
                    <th>Fecha inicio</th>
                    <th>Fecha fin</th>
                    <th>Nombre Cliente</th>
                    <th>Estado</th>
                    <th>Responsable</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva['numero_dias'] }}</td>
                    <td>{{ $reserva['fecha_inicio'] }}</td>
                    <td>{{ $reserva['fecha_fin'] }}</td>
                    <td>{{ $reserva['nombre_cliente'] }}</td>
                    <td>{{ $reserva['estado'] }}</td>
                    <td>{{ $reserva['responsable'] }}</td>
                    <td><input type="radio" name="seleccionado" value={{ $reserva['id'] }}></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form_group mt-4">
            <button type="submit" class="btn btn-primary">Cambiar estado</button>
        </div>
    </form>

</div>
@endsection("contenido")