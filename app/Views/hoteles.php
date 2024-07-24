<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-body-secondary">
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body fs-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('/')?>"><i class="bi bi-house"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('clientes')?>">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url('hoteles')?>">Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('reservaciones')?>">Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">

        <h1 class="text-center mt-2">Hoteles</h1>

        <a href="nuevo_hotel" class="btn btn-success"><i class="bi-plus-circle"></i> Nuevo hotel</a>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>Hotel ID</th>
                    <th>Nombre</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad ID</th>
                    <th>Categoria ID</th>
                    <th>Usuario ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
              foreach($datos as $hotel):
              ?>
                <tr>
                    <td><?php echo $hotel['hotel_id'];?></td>
                    <td><?php echo $hotel['nombre'];?></td>
                    <td><?php echo $hotel['correoelectronico'];?></td>
                    <td><?php echo $hotel['telefono'];?></td>
                    <td><?php echo $hotel['direccion'];?></td>
                    <td><?php echo $hotel['ciudad_id'];?></td>
                    <td><?php echo $hotel['categoria_id'];?></td>
                    <td><?php echo $hotel['usuario_id'];?></td>
                    <td>
                        <a href="<?=base_url('buscar_hotel/').$hotel['hotel_id']?>" class="btn btn-info"><i
                                class="bi-pencil-square"></i></a>
                        <a href="<?=base_url('eliminar_hotel/').$hotel['hotel_id']?>" class="btn btn-danger"><i
                                class="bi-trash"></i></a>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>