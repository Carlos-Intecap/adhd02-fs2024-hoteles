<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-body-secondary">
    <div class="container col-xl-3">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-2">Modificar Reservación</h1>
                <form action="<?=base_url('modificar_reservacion')?>" method="post">
                    <div class="mb-3">
                        <label for="txtReservacionId" class="form-label">Reservación ID</label>
                        <input type="number" id="txtReservacionId" name="txtReservacionId" class="form-control"
                            placeholder="Ingrese id de reservación" value="<?=$datos['reservacion_id'];?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">Fecha</label>
                        <input type="date" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="Ingrese fecha de reservación" value="<?=$datos['fecha'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">ID Cliente</label>
                        <input type="number" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese id del cliente" value="<?=$datos['cliente_id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label">ID Hotel</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese id del hotel" value="<?=$datos['hotel_id'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">Descripción</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control"
                            placeholder="Ingrese una descripción" value="<?=$datos['descripcion'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtUsuarioId" class="form-label">ID Usuario</label>
                        <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control"
                            placeholder="Ingrese id del usuario" value="<?=$datos['usuario_id'];?>">
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