<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
body {
  background-image: url('https://imageio.forbes.com/specials-images/imageserve/5cdb058a5218470008b0b00f/Nobu-Ryokan-Malibu/0x0.jpg?format=jpg&height=1009&width=2000');
}
.card {
    background-color: rgba(255, 99, 71, 0.3);
}
h1 {
    color: white;
    margin: 100px 0;
}
.card-body {
    font-size: 200px;
    color: white;
}
.card-body:hover {
    color: rgb(255, 203, 167);
}
</style>

<body class="bg-body-secondary">
    <div class="container text-center">
    <h1>Hoteles</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <a href="clientes" class="col text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Clientes</h5>
                        <i class="bi bi-person-fill titulo"></i>
                    </div>
                </div>
            </a>
            <a href="hoteles" class="col  text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hoteles</h5>
                        <i class="bi bi-building-fill"></i>
                    </div>
                </div>
            </a>
            <a href="reservaciones" class="col text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Reservaciones</h5>
                        <i class="bi bi-card-checklist"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>