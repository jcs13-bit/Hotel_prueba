
@extends("layout")
@section("contenido")
<div>
    <form action="{{route('cliente.registro')}}" method="post">
        @csrf
        <div class="form_group mt-4">
            <label for="tipo_documento_id">Tipo de documento</label>
            <select name="tipo_documento_id" id="tipo_documento_id" class="form-control">
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
            <input type="text" name="numero_documento" id="numero_documento" class="form-control" value="{{old('numero_documento')}}">
            @error('numero_documento')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form_group mt-4">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
            @error('nombre')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            
        </div>
        <div class="form_group mt-4">
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" class="form-control">
            @error('apellidos')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form_group mt-4">
            <label for="correo_electronico">Correo electrónico:</label>
            <input type="email" name="correo_electronico" id="correo_electronico" class="form-control">
            @error('correo_electronico')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror    
        </div>

        <div class="form_group mt-4">
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
            @error('fecha_nacimiento')
            <span class="role-alert-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form_group mt-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>
@endsection("contenido")
