<form class="max-w-md mx-auto" action="../controlador/crearRegistro.php" method="post">
    <div class="mb-3">
        <label name="user_name" for="nameForm" class="form-label">Nombre</label>
        <input name="user_name" type="text" class="form-control" id="nameForm" placeholder="Mi Nombre">
    </div>
    <div class="mb-3">
        <label name="user_email" for="emailForm" class="form-label">Email</label>
        <input name="user_email" type="email" class="form-control" id="emailForm" placeholder="nombre@ejemplo.com">
    </div>
    <button
        type="submit"
        class="btn btn-primary"
        role="button">Registrar</button>
</form>