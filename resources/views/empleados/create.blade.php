<form action="{{ route('empleados.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" id="nombres" required>
    </div>
    <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" id="apellidos" required>
    </div>
    <div>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required>
    </div>
    <div>
        <label for="celular">Celular:</label>
        <input type="text" name="celular" id="celular" required>
    </div>
    <button type="submit">Registrar</button>
</form>
