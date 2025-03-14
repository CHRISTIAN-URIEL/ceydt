<!DOCTYPE html>
<html lang="es">
<head>
    <title>Turismo en Cholula</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/region.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" src="{{ asset('assets/js/region.js') }}"></script>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-cholula.png" loading="lazy" alt="Cholula Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#region">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#atracciones">Atracciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#transporte">Cómo Llegar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hospedaje">Dónde Quedarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#restaurantes">Dónde Comer</a>
                    </li>
                </ul>
                <a href="#" class="btn btn-brand ms-lg-3">Reservar Tour</a>
            </div>
        </div>
    </nav>

    <header class="hero">
    <h1>Cholula Mágica</h1>
    <p>Pueblo Mágico con la pirámide más grande del mundo</p>
    </header>

    <main>
    <section id="region" class="region-info">
        <h2>Cholula, Puebla</h2>
        <div class="region-content">
        <img src="https://th.bing.com/th/id/OIP.BSvAouf-WgMOcBs4z-ax6wHaE7?rs=1&pid=ImgDetMain" alt="Cholula" class="region-image">
        <div class="region-text">
            <p>Cholula, reconocida como Pueblo Mágico desde 2012, es una ciudad que combina historia milenaria, tradición colonial y vida contemporánea. Hogar de la pirámide más grande del mundo por volumen y el Santuario de Nuestra Señora de los Remedios, Cholula ofrece una experiencia única donde el pasado prehispánico se encuentra con la arquitectura colonial española.</p>

            <div class="region-details">
            <div class="detail-item">
                <h4>Ubicación</h4>
                <p>A 15 km de la ciudad de Puebla</p>
            </div>
            <div class="detail-item">
                <h4>Clima</h4>
                <p>Templado subhúmedo, temperatura promedio de 22°C</p>
            </div>
            </div>

            <div class="region-highlights">
            <h4>Destacados</h4>
            <ul>
                <li>Más de 365 iglesias, una para cada día del año</li>
                <li>Zona arqueológica con túneles explorables</li>
                <li>Gastronomía tradicional poblana</li>
                <li>Vista privilegiada a los volcanes Popocatépetl e Iztaccíhuatl</li>
            </ul>
            </div>
        </div>
        </div>
    </section>

    <section id="atracciones" class="attractions">
        <h2>Puntos de Interés</h2>
        <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <img src="https://th.bing.com/th/id/R.07c67b646bcc1b72ba852322448a6edd?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" alt="Gran Pirámide">
            <div class="slide-content">
                <h3>Gran Pirámide de Cholula</h3>
                <p>La pirámide más grande del mundo por volumen. Incluye un museo de sitio y túneles que puedes explorar.</p>
            </div>
            </div>
            <div class="swiper-slide">
            <img src="https://media.istockphoto.com/id/1128059207/es/foto/nuestra-se%C3%B1ora-de-los-remedios.webp?a=1&b=1&s=612x612&w=0&k=20&c=IXKH_bsWkDKuolusJ42Ewx5Ud42fAGb_YX60tEu_CvQ=" alt="Santuario">
            <div class="slide-content">
                <h3>Santuario de los Remedios</h3>
                <p>Iglesia colonial ubicada en la cima de la pirámide, con vistas panorámicas de la ciudad y los volcanes.</p>
            </div>
            </div>
            <div class="swiper-slide">
            <img src="https://www.identidadpuebla.com/wp-content/uploads/2021/06/PortalesCholula3.jpeg" alt="Portal Guerrero">
            <div class="slide-content">
                <h3>Portal Guerrero</h3>
                <p>Centro histórico con restaurantes, cafés y tiendas de artesanías locales.</p>
            </div>
            </div>
            <div class="swiper-slide">
            <img src="https://images.unsplash.com/photo-1629813366051-b58137b2792c?w=800" alt="Zócalo">
            <div class="slide-content">
                <h3>Zócalo de Cholula</h3>
                <p>Plaza principal con el Ex Convento de San Gabriel y mercados tradicionales.</p>
            </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        </div>
    </section>

    <section id="transporte" class="transportation">
        <h2>Cómo Llegar a los Puntos Turísticos</h2>
        <div class="transport-grid">
            <!-- Card 1: Gran Pirámide de Cholula -->
            <div class="transport-card">
                <img src="https://th.bing.com/th/id/R.07c67b646bcc1b72ba852322448a6edd?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" alt="Gran Pirámide de Cholula">
                <h3>Gran Pirámide de Cholula</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 15 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Tomar cualquier colectivo con dirección "Pirámide"</p>
                    <p>🚕 Taxi: 5 minutos, aproximadamente $50 MXN</p>
                    <a href="https://www.inah.gob.mx/zonas/106-zona-arqueologica-de-cholula" target="_blank" class="btn">Más Información</a>
                </div>
            </div>

            <!-- Card 2: Santuario de Nuestra Señora de los Remedios -->
            <div class="transport-card">
                <img src="https://media.istockphoto.com/id/1128059207/es/foto/nuestra-se%C3%B1ora-de-los-remedios.webp?b=1&s=612x612&w=0&k=20&c=IXKH_bsWkDKuolusJ42Ewx5Ud42fAGb_YX60tEu_CvQ=" alt="Santuario de los Remedios">
                <h3>Santuario de los Remedios</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 20 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Santuario"</p>
                    <p>🚕 Taxi: 7 minutos, aproximadamente $60 MXN</p>
                    <a href="https://www.pueblosmexico.com.mx/santuario-de-nuestra-senora-de-los-remedios-cholula-puebla/" target="_blank" class="btn">Más Información</a>
                </div>
            </div>

            <!-- Card 3: Iglesia de Santa María Tonantzintla -->
            <div class="transport-card">
                <img src="https://th.bing.com/th/id/R.0c6d9c1b1b1b1b1b1b1b1b1b1b1b1?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" alt="Iglesia de Santa María Tonantzintla">
                <h3>Iglesia de Santa María Tonantzintla</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 25 minutos</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Tonantzintla"</p>
                    <p>🚕 Taxi: 10 minutos, aproximadamente $70 MXN</p>
                    <a href="https://www.mexicodesconocido.com.mx/iglesia-de-santa-maria-tonantzintla-puebla.html" target="_blank" class="btn">Más Información</a>
                </div>
            </div>

            <!-- Card 4: Convento de San Gabriel -->
            <div class="transport-card">
                <img src="https://th.bing.com/th/id/R.1b1b1b1b1b1b1b1b1b1b1b1b1b1b1?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" alt="Convento de San Gabriel">
                <h3>Convento de San Gabriel</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 10 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "San Gabriel"</p>
                    <p>🚕 Taxi: 5 minutos, aproximadamente $50 MXN</p>
                    <a href="https://www.mexicodesconocido.com.mx/convento-de-san-gabriel-cholula-puebla.html" target="_blank" class="btn">Más Información</a>
                </div>
            </div>

            <!-- Card 5: Mercado Tradicional de Cholula -->
            <div class="transport-card">
                <img src="https://th.bing.com/th/id/R.2b2b2b2b2b2b2b2b2b2b2b2b2b2b2b?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" alt="Mercado Tradicional de Cholula">
                <h3>Mercado Tradicional de Cholula</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 5 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Mercado"</p>
                    <p>🚕 Taxi: 3 minutos, aproximadamente $30 MXN</p>
                    <a href="https://www.pueblosmexico.com.mx/mercado-tradicional-de-cholula-puebla.html" target="_blank" class="btn">Más Información</a>
                </div>
            </div>

            <!-- Card 6: Plaza de la Concordia -->
            <div class="transport-card">
                <img src="https://th.bing.com/th/id/R.3b3b3b3b3b3b3b3b3b3b3b3b3b3b3b?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" alt="Plaza de la Concordia">
                <h3>Plaza de la Concordia</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 8 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Concordia"</p>
                    <p>🚕 Taxi: 4 minutos, aproximadamente $40 MXN</p>
                    <a href="https://www.mexicodesconocido.com.mx/plaza-de-la-concordia-cholula-puebla.html" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
        </div>
    </section>

    <section id="hospedaje" class="accommodation">
        <h2>Dónde Hospedarse</h2>
        <div class="accommodation-grid">
        <div class="hotel-card">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?w=800" alt="Hotel Boutique">
            <h3>Hotel Boutique Casareyna</h3>
            <p class="price">Desde $2,500 MXN/noche</p>
            <p>Hotel boutique con arquitectura colonial, spa y restaurante gourmet. A 5 minutos del centro.</p>
            <div class="amenities">
            <span>WiFi</span>
            <span>Piscina</span>
            <span>Restaurante</span>
            <span>Spa</span>
            </div>
            <a href="https://www.booking.com" target="_blank" class="btn">Reservar</a>
        </div>
        <div class="hotel-card">
            <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=800" alt="Hotel Plaza">
            <h3>Hotel Plaza Cholula</h3>
            <p class="price">Desde $1,800 MXN/noche</p>
            <p>Ubicado en el corazón de Cholula, con vistas a la pirámide y acceso directo al zócalo.</p>
            <div class="amenities">
            <span>WiFi</span>
            <span>Estacionamiento</span>
            <span>Desayuno</span>
            </div>
            <a href="https://www.booking.com" target="_blank" class="btn">Reservar</a>
        </div>
        <div class="hotel-card">
            <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?w=800" alt="Posada">
            <h3>Hotel San Pedro</h3>
            <p class="price">Desde $1,200 MXN/noche</p>
            <p>Posada tradicional con ambiente familiar y decoración mexicana contemporánea.</p>
            <div class="amenities">
            <span>WiFi</span>
            <span>Jardín</span>
            <span>Cocina</span>
            </div>
            <a href="https://www.airbnb.mx" target="_blank" class="btn">Reservar</a>
        </div>
        </div>
    </section>

    <section id="restaurantes" class="restaurants">
        <h2>Dónde Comer</h2>
        <div class="restaurant-grid">
        <div class="restaurant-card">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800" alt="Restaurante Colonial">
            <h3>Casa Real</h3>
            <p class="cuisine">Cocina Poblana Tradicional</p>
            <p>Restaurante en casona colonial con los mejores chiles en nogada y mole poblano de la región.</p>
            <div class="details">
            <span>$$$ • Abierto: 13:00 - 23:00</span>
            <span>Reservaciones recomendadas</span>
            </div>
            <a href="tel:+522222222222" class="btn">Reservar Mesa</a>
        </div>
        <div class="restaurant-card">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800" alt="Café Container">
            <h3>Café Container</h3>
            <p class="cuisine">Café y Brunch</p>
            <p>Espacio moderno con los mejores desayunos, café de especialidad y repostería artesanal.</p>
            <div class="details">
            <span>$$ • Abierto: 8:00 - 20:00</span>
            <span>No requiere reservación</span>
            </div>
        </div>
        <div class="restaurant-card">
            <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=800" alt="Pizzería">
            <h3>La Terraza</h3>
            <p class="cuisine">Pizza y Cocina Italiana</p>
            <p>Restaurante con vista a la pirámide, especializado en pizzas artesanales y pasta fresca.</p>
            <div class="details">
            <span>$$ • Abierto: 14:00 - 23:00</span>
            <span>Terraza con vista panorámica</span>
            </div>
            <a href="https://www.laterraza.com" target="_blank" class="btn">Menú</a>
        </div>
        </div>
    </section>
    </main>

    <!-- FOOTER -->
    <footer class="bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4 col-sm-6">
                        <a href="#"><img src="assets/images/logo-cholula.png" alt="Cholula Logo"></a>
                        <div class="line"></div>
                        <p>Descubre la magia de Cholula, un Pueblo Mágico lleno de historia, cultura y tradición.</p>
                        <div class="social-icons">
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">Contacto</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Cholula, Puebla, México</li>
                            <li>Teléfono: 22-21627455</li>
                            <li>Email: turismo.cholula@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© 2024 Turismo Cholula. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
