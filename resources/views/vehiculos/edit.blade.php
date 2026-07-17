<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Vehículo</title>
</head>
<body>
    <h1>Editar Vehículo</h1>

    <form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Placa:</label>
        <input type="text" name="placa" value="{{ old('placa', $vehiculo->placa) }}">
        @error('placa')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <br>

        <label>Marca:</label>
        <input type="text" name="marca" value="{{ old('marca', $vehiculo->marca) }}">
        @error('marca')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <br>

        <label>Modelo:</label>
        <input type="text" name="modelo" value="{{ old('modelo', $vehiculo->modelo) }}">
        @error('modelo')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <br>

        <label>Año:</label>
        <input type="number" name="anio" value="{{ old('anio', $vehiculo->anio) }}">
        @error('anio')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <br>

        <label>Color:</label>
        <input type="text" name="color" value="{{ old('color', $vehiculo->color) }}">
        @error('color')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <br>

        <label>Propietario:</label>
        <input type="text" name="propietario" value="{{ old('propietario', $vehiculo->propietario) }}">
        @error('propietario')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit">Actualizar</button>
        <a href="{{ route('vehiculos.index') }}">Cancelar</a>
    </form>
</body>
</html>