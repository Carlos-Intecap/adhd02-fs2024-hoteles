<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-body-secondary">
    <div class="container col-xl-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Modificar hotel</h1>
                <form action="<?=base_url('modificar_hotel')?>" method="post">
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label">Hotel Id</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese id del hotel" value="<?=$datos['hotel_id'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese nombre del hotel" value="<?=$datos['nombre'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCorreo" class="form-label">Correo electrónico</label>
                        <input type="email" id="txtCorreo" name="txtCorreo" class="form-control"
                            placeholder="Ingrese correo electrónico" value="<?=$datos['correoelectronico'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelefono" class="form-label">Teléfono</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control"
                            placeholder="Ingrese teléfono" value="<?=$datos['telefono'];?>">
                    </div>
                    <div class="mb-8">
                        <label for="txtDireccion" class="form-label">Dirección</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control"
                            placeholder="Ingrese dirección" value="<?=$datos['direccion']?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCiudadId" class="form-label">ID Ciudad</label>
                        <input type="number" id="txtCiudadId" name="txtCiudadId" class="form-control"
                            placeholder="Ingrese id de ciudad" value="<?=$datos['ciudad_id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCategoriaId" class="form-label">ID Categoria</label>
                        <input type="number" id="txtCategoriaId" name="txtCategoriaId" class="form-control"
                            placeholder="Ingrese id de categoría" value="<?=$datos['categoria_id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtUsuarioId" class="form-label">ID Usuario</label>
                        <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control"
                            placeholder="Ingrese id de usuario" value="<?=$datos['usuario_id'];?>">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-success form-control mt-2" value="Guardar cambios">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>