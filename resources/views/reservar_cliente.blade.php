@extends("layout")
@section("contenido")
<div>
    <form action="{{route('habitacion.reserva', $cliente)}}" method="post">
        @csrf
        <div class="form_group mt-4">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" class="form-control">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
            @error('estado')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form_group mt-4">
            <label for="nombre_cliente">Nombre cliente:</label>
            <input type="text" name="nombre_cliente" id="nombre_cliente" value="{{$cliente->nombre}} {{$cliente->apellido}}" class="form-control">

        </div>

        <div class="form_group mt-4">
            <label for="numero_dias">Numero de dias:</label>
            <input type="number" readonly name="numero_dias" id="numero_dias" class="form-control" on>
        </div>

        <div class="form_group mt-4">
            <label for="fecha_inicio">Fecha de inicio:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control">
        </div>

        <div class="form_group mt-4">
            <label for="fecha_fin">Fecha de fin:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" onchange="calcularNumeroDias()">
        </div>

        <div class="form_group mt-4">
            <label for="encargado">Responsable:</label>
            <input type="text" name="responsable" id="responsable"  class="form-control">
        </div>


        <div class="form_group mt-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
        <input type="hidden" name="habitacion_id" id="habitacion_id"  value="{{$habitacion_id}}">

    </form>
</div>
<script>
    // función para calcular el número de días entre dos fechas
    function calcularNumeroDias() {
        // obtener las fechas de inicio y fin
        var fechaInicio = new Date(document.getElementById('fecha_inicio').value);
        var fechaFin = new Date(document.getElementById('fecha_fin').value);

        // calcular la diferencia en milisegundos
        var diferenciaMs = fechaFin - fechaInicio;

        // convertir la diferencia en días
        var numeroDias = Math.round(diferenciaMs / (1000 * 60 * 60 * 24));

        // actualizar el campo de número de días
        document.getElementById('numero_dias').value = numeroDias;
    }

    // agregar eventos onchange a los campos de fecha
    document.getElementById('fecha_inicio').addEventListener('change', calcularNumeroDias);
    document.getElementById('fecha_fin').addEventListener('change', calcularNumeroDias);
</script>
@endsection("contenido")