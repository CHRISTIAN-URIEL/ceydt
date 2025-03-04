<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEYDT E-Commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="./assets/images/ceydt-1.png" alt="CEYDT Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Ejes">Ejes Rectores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Eventos">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#Directorio">Directorio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- INICIO -->
    <section id="Inicio" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-uppercase text-white fw-semibold display-1">E-Commerce</h1>
                    <h5 class="text-white mt-3 mb-4">Servicios de comercio electrónico para impulsar tu negocio.</h5>
                    <div>
                        <a href="index.html" class="btn btn-brand me-2">Volver al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS DE E-COMMERCE -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Servicios de E-Commerce</h1>
                        <div class="line"></div>
                        <p>Ofrecemos soluciones integrales para que tu negocio crezca en el mundo digital.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-shopping-cart-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Tiendas en Línea</h5>
                        <p>Desarrollamos tiendas en línea personalizadas para que puedas vender tus productos en cualquier lugar.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-pie-chart-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Marketing Digital</h5>
                        <p>Estrategias de marketing digital para aumentar la visibilidad y ventas de tu negocio.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-customer-service-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Soporte Técnico</h5>
                        <p>Soporte técnico especializado para garantizar el funcionamiento óptimo de tu tienda en línea.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 col-sm-6">
                        <a href="index.html"><img src="./assets/images/ceydt-1.png" alt="CEYDT Logo"></a>
                        <div class="line"></div>
                        <p>Clúster de Educación y Desarrollo de Talento - Puebla, México.</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">Contacto</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Alborada 4702, Sta. Cruz Buenavista, Puebla</li>
                            <li>Teléfono: 22-21627455</li>
                            <li>Email: cluster.educacion.puebla@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© 2023 CEYDT. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
