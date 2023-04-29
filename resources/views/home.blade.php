@extends("layout")
@section("contenido")
<div>
    <form action="{{route('cliente.validar')}}" method="get">
        @csrf
        <div class="form_group mt-4">
            <label for="tipo_documento">Tipo de documento</label>
            <select name="tipo_documento" id="tipo_documento_id" class="form-control">
                @foreach ($tipo_documentos as $tipo_documento)
                <option value="{{ $tipo_documento->id }}">{{ $tipo_documento->nombre }}</option>
                @endforeach
            </select>
            @error('tipo_documento')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="form_group mt-4">
            <label for="numero_documento">Número de documento</label>
            <input type="text" name="numero_documento" id="numero_documento" class="form-control">
            @error('numero_documento')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form_group mt-4">
            <button type="submit" class="btn btn-primary">Consultar</button>
        </div>
    </form>
</div>
@endsection("contenido")