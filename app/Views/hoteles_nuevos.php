<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-body-secondary">
    <div class="container col-xl-3">
        <h1 class="text-center mt-2">Agregar hotel</h1>
        <form action="agregar_hotel" method="post">
            <div class="mb-8">
                <label for="txtHotelId" class="form-label">Hotel Id</label>
                <input type="number" id="txtHotelId" name="txtHotelId" class="form-control" placeholder="Ingrese id del hotel">
            </div>
            <div class="mb-8">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Ingrese nombre del hotel">
            </div>
            <div class="mb-8">
                <label for="txtCorreo" class="form-label">Correo electrónico</label>
                <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Ingrese correo electrónico">
            </div>
            <div class="mb-8">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Ingrese teléfono">
            </div>
            <div class="mb-8">
                <label for="txtDireccion" class="form-label">Dirección</label>
                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Ingrese dirección">
            </div>
            <div class="mb-8">
                <label for="txtCiudadId" class="form-label">ID Ciudad</label>
                <input type="number" id="txtCiudadId" name="txtCiudadId" class="form-control" placeholder="Ingrese id de ciudad">
            </div>
            <div class="mb-8">
                <label for="txtCategoriaId" class="form-label">ID Categoría</label>
                <input type="number" id="txtCategoriaId" name="txtCategoriaId" class="form-control" placeholder="Ingrese id de categoría">
            </div>
            <div class="mb-8">
                <label for="txtUsuarioId" class="form-label">ID Usuario</label>
                <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control" placeholder="Ingrese id de usuario">
            </div>
            <div class="mb-8 text-center">
                <input type="submit" class="btn btn-success mt-2" value="Guardar" id="btGuardar" name="btnGuardar">
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>