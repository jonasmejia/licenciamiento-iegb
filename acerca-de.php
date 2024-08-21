<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de Hexágonos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f9f9f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .hexagon-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 3rem;
        }

        .hexagon {
            width: 20em;
            height: 20em;
            background-color: #fff;
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); /* Sombra ajustada */
            transition: transform 0.4s ease-in-out;
        }

        .hexagon img {
            width: 12rem;
            height: 10rem;
            object-fit: cover;
        }

        .hexagon:before,
        .hexagon:after {
            content: "";
            width: 20em;
            height: 20em;
            background-color: inherit;
            position: absolute;
            left: 0;
            z-index: -1;
            clip-path: inherit;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); /* Sombra ajustada */
        }

        .hexagon:before {
            top: -10em;
        }

        .hexagon:after {
            bottom: -10em;
        }

        /* Responsivo para hexágonos */
        @media (max-width: 768px) {
            .hexagon-container {
                gap: 1rem;
            }

            .hexagon {
                width: 10em;
                height: 10em;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
            }

            .hexagon:before,
            .hexagon:after {
                width: 10em;
                height: 10em;
                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
            }

            .hexagon img {
                width: 8rem;
                height: 6rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center hexagon-container">
            <div class="col-4 col-md-2">
                <div class="hexagon"><img src="assets/img/escudo-iegb.webp" alt="Imagen 1"></div>
            </div>
            <div class="col-4 col-md-2">
                <div class="hexagon"><img src="assets/img/nosotros/egb-bandera.png" alt="Imagen 2"></div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
