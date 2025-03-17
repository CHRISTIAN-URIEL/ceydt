<!DOCTYPE html>
<html lang="es">
<head>
    <title>Turismo en Zacatlán</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/region.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/Log_cholula.webp') }}" loading="lazy" alt="Zacatlán Logo">
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
                    <!-- Menú desplegable de regiones
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegiones" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Regiones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownRegiones">
                            <li><a class="dropdown-item" href="region-puebla.html">Puebla....</a></li>
                            <li><a class="dropdown-item" href="{{ route('regiones.RegCholula') }}">Cholula</a></li>
                            <li><a class="dropdown-item" href="region-guerrero.html">Atlixco....</a></li>
                            <li><a class="dropdown-item" href="{{ route('regiones.RegZacatlan') }}">Zacatlán</a></li>
                            <li><a class="dropdown-item" href="region-otras.html">Sierra Oriental....</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <h1>Zacatlán, Puebla</h1>
        <p>Un Pueblo Mágico lleno de naturaleza, tradición y sabor</p>
    </header>

    <main>
        <!-- Sección de Inicio -->
        <section id="region" class="region-info">
            <h2>Zacatlán, Puebla</h2>
            <div class="region-content">
                <img src="https://www.zacatlansabordealtura.com/images/hero.jpg" loading="lazy" alt="Zacatlán" class="region-image">
                <div class="region-text">
                    <p>Zacatlán es un Pueblo Mágico ubicado en la Sierra Norte de Puebla, famoso por su clima fresco, su producción de manzanas y su reloj floral. Es un destino ideal para disfrutar de la naturaleza, la gastronomía y la cultura.</p>
                    <div class="region-details">
                        <div class="detail-item">
                            <h4>Ubicación</h4>
                            <p>Sierra Norte de Puebla, a 130 km de la ciudad de Puebla</p>
                        </div>
                        <div class="detail-item">
                            <h4>Clima</h4>
                            <p>Fresco y templado, temperatura promedio de 16°C</p>
                        </div>
                    </div>
                    <div class="region-highlights">
                        <h4>Destacados</h4>
                        <ul>
                            <li>Reloj Floral, uno de los más grandes del mundo</li>
                            <li>Valle de las Piedras Encimadas</li>
                            <li>Producción de sidra y vinos de manzana</li>
                            <li>Arquitectura colonial y calles empedradas</li>
                        </ul>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn btn-primary">Más información</a>
                </div>
            </div>
        </section>

        <!-- Sección de Atracciones -->
        <section id="atracciones" class="attractions">
            <h2>Puntos de Interés</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://www.zacatlansabordealtura.com/images/reloj-floral.jpg" loading="lazy" alt="Reloj Floral">
                        <div class="slide-content">
                            <h3>Reloj Floral</h3>
                            <p>Uno de los relojes florales más grandes del mundo, ubicado en el centro de Zacatlán.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.zacatlansabordealtura.com/images/piedras-encimadas.jpg" loading="lazy" alt="Valle de las Piedras Encimadas">
                        <div class="slide-content">
                            <h3>Valle de las Piedras Encimadas</h3>
                            <p>Formaciones rocosas naturales que parecen estar apiladas, un paisaje único en México.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.zacatlansabordealtura.com/images/cascada-tuliman.jpg" loading="lazy" alt="Cascada Tulimán">
                        <div class="slide-content">
                            <h3>Cascada Tulimán</h3>
                            <p>Una impresionante cascada rodeada de naturaleza, ideal para los amantes del ecoturismo.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>

        <!-- Sección de Transporte -->
        <section id="transporte" class="transportation">
            <h2>Cómo Llegar a los Lugares Turísticos</h2>
            <div class="transport-grid">
                <!-- Card 1: Reloj Floral -->
                <div class="transport-card">
                    <img src="https://www.zacatlansabordealtura.com/images/reloj-floral.jpg" loading="lazy" alt="Reloj Floral">
                    <h3>Reloj Floral</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro de Zacatlán</p>
                        <p>🚶‍♂️ Cómo llegar: A pie desde el zócalo.</p>
                        <p>🚗 En auto: Estacionamiento disponible a 100 metros.</p>
                        <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 2: Valle de las Piedras Encimadas -->
                <div class="transport-card">
                    <img src="https://www.zacatlansabordealtura.com/images/piedras-encimadas.jpg" loading="lazy" alt="Valle de las Piedras Encimadas">
                    <h3>Valle de las Piedras Encimadas</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: A 30 km de Zacatlán</p>
                        <p>🚗 Cómo llegar: En auto por la carretera Zacatlán-Chignahuapan.</p>
                        <p>🚌 Transporte público: Autobuses locales desde el centro.</p>
                        <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 3: Cascada Tulimán -->
                <div class="transport-card">
                    <img src="https://www.zacatlansabordealtura.com/images/cascada-tuliman.jpg" loading="lazy" alt="Cascada Tulimán">
                    <h3>Cascada Tulimán</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: A 15 km de Zacatlán</p>
                        <p>🚗 Cómo llegar: En auto por la carretera Zacatlán-Tulimán.</p>
                        <p>🚶‍♂️ Caminata: 20 minutos desde el estacionamiento.</p>
                        <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 4: Museo de Relojería -->
                <div class="transport-card">
                    <img src="https://www.zacatlansabordealtura.com/images/museo-relojeria.jpg" loading="lazy" alt="Museo de Relojería">
                    <h3>Museo de Relojería</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro de Zacatlán</p>
                        <p>🚶‍♂️ Cómo llegar: A 5 minutos a pie del zócalo.</p>
                        <p>🚗 En auto: Estacionamiento cercano.</p>
                        <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 5: Iglesia de San Pedro y San Pablo -->
                <div class="transport-card">
                    <img src="https://www.zacatlansabordealtura.com/images/iglesia-san-pedro.jpg" loading="lazy" alt="Iglesia de San Pedro y San Pablo">
                    <h3>Iglesia de San Pedro y San Pablo</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro de Zacatlán</p>
                        <p>🚶‍♂️ Cómo llegar: A 3 minutos a pie del zócalo.</p>
                        <p>🚗 En auto: Estacionamiento en la plaza principal.</p>
                        <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 6: Fábrica de Sidra "Don Ferrete" -->
                <div class="transport-card">
                    <img src="https://www.zacatlansabordealtura.com/images/fabrica-sidra.jpg" loading="lazy" alt="Fábrica de Sidra Don Ferrete">
                    <h3>Fábrica de Sidra "Don Ferrete"</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: A 5 km del centro</p>
                        <p>🚗 Cómo llegar: En auto por la carretera Zacatlán-Chignahuapan.</p>
                        <p>🚌 Transporte público: Autobuses locales desde el centro.</p>
                        <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Sección de Hospedaje -->
        <section id="hospedaje" class="accommodation">
            <h2>Dónde Hospedarse</h2>
            <div class="accommodation-grid">
                <!-- Card 1: Hotel Boutique Zacatlán -->
                <div class="hotel-card">
                    <img src="https://www.zacatlansabordealtura.com/images/hotel-1.jpg" loading="lazy" alt="Hotel Boutique Zacatlán">
                    <h3>Hotel Boutique Zacatlán</h3>
                    <p class="price">Desde $1,200 MXN/noche</p>
                    <p>Habitaciones cómodas en el centro de Zacatlán.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Desayuno incluido</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>

                <!-- Card 2: Cabañas del Bosque -->
                <div class="hotel-card">
                    <img src="https://www.zacatlansabordealtura.com/images/hotel-2.jpg" loading="lazy" alt="Cabañas del Bosque">
                    <h3>Cabañas del Bosque</h3>
                    <p class="price">Desde $1,500 MXN/noche</p>
                    <p>Cabañas rústicas rodeadas de naturaleza.</p>
                    <div class="amenities">
                        <span>Chimenea</span>
                        <span>Terraza privada</span>
                        <span>Senderos</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>

                <!-- Card 3: Hotel Posada del Reloj -->
                <div class="hotel-card">
                    <img src="https://www.zacatlansabordealtura.com/images/hotel-3.jpg" loading="lazy" alt="Hotel Posada del Reloj">
                    <h3>Hotel Posada del Reloj</h3>
                    <p class="price">Desde $1,000 MXN/noche</p>
                    <p>Ubicado cerca del Reloj Floral.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>

                <!-- Card 4: Hotel Las Manzanas -->
                <div class="hotel-card">
                    <img src="https://www.zacatlansabordealtura.com/images/hotel-4.jpg" loading="lazy" alt="Hotel Las Manzanas">
                    <h3>Hotel Las Manzanas</h3>
                    <p class="price">Desde $1,300 MXN/noche</p>
                    <p>Ambiente familiar y servicio personalizado.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Desayuno incluido</span>
                        <span>Jardín</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>

                <!-- Card 5: Cabañas Tulimán -->
                <div class="hotel-card">
                    <img src="https://www.zacatlansabordealtura.com/images/hotel-5.jpg" loading="lazy" alt="Cabañas Tulimán">
                    <h3>Cabañas Tulimán</h3>
                    <p class="price">Desde $1,800 MXN/noche</p>
                    <p>Vistas espectaculares a la cascada Tulimán.</p>
                    <div class="amenities">
                        <span>Chimenea</span>
                        <span>Terraza</span>
                        <span>Senderos</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>

                <!-- Card 6: Hotel Valle Encantado -->
                <div class="hotel-card">
                    <img src="https://www.zacatlansabordealtura.com/images/hotel-6.jpg" loading="lazy" alt="Hotel Valle Encantado">
                    <h3>Hotel Valle Encantado</h3>
                    <p class="price">Desde $1,400 MXN/noche</p>
                    <p>Ubicado cerca del Valle de las Piedras Encimadas.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>
            </div>
        </section>


        <!-- Sección de Restaurantes -->
        <section id="restaurantes" class="restaurants">
            <h2>Dónde Comer</h2>
            <div class="restaurant-grid">
                <!-- Card 1: Restaurante El Mirador -->
                <div class="restaurant-card">
                    <img src="https://www.zacatlansabordealtura.com/images/restaurante-1.jpg" loading="lazy" alt="Restaurante El Mirador">
                    <h3>Restaurante El Mirador</h3>
                    <p class="cuisine">Cocina Mexicana y Regional</p>
                    <p>Vista espectacular al valle y platillos tradicionales.</p>
                    <div class="details">
                        <span>$$ • Abierto: 12:00 - 22:00</span>
                        <span>Reservaciones recomendadas</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 2: La Sidrería -->
                <div class="restaurant-card">
                    <img src="https://www.zacatlansabordealtura.com/images/restaurante-2.jpg" loading="lazy" alt="La Sidrería">
                    <h3>La Sidrería</h3>
                    <p class="cuisine">Especializado en sidra y platillos con manzana</p>
                    <p>Ambiente rústico y familiar.</p>
                    <div class="details">
                        <span>$$ • Abierto: 11:00 - 20:00</span>
                        <span>No se requieren reservaciones</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Ver Menú</a>
                </div>
                <!-- Card 3: Café de Altura -->
                <div class="restaurant-card">
                    <img src="https://www.zacatlansabordealtura.com/images/restaurante-3.jpg" loading="lazy" alt="Café de Altura">
                    <h3>Café de Altura</h3>
                    <p class="cuisine">Café y repostería artesanal</p>
                    <p>Ideal para desayunos y meriendas.</p>
                    <div class="details">
                        <span>$ • Abierto: 8:00 - 18:00</span>
                        <span>WiFi gratuito</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 4: Restaurante Las Manzanas -->
                <div class="restaurant-card">
                    <img src="https://www.zacatlansabordealtura.com/images/restaurante-4.jpg" loading="lazy" alt="Restaurante Las Manzanas">
                    <h3>Restaurante Las Manzanas</h3>
                    <p class="cuisine">Cocina de autor con ingredientes locales</p>
                    <p>Menú degustación disponible.</p>
                    <div class="details">
                        <span>$$$ • Abierto: 13:00 - 23:00</span>
                        <span>Reservaciones obligatorias</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 5: Taquería Don Juan -->
                <div class="restaurant-card">
                    <img src="https://www.zacatlansabordealtura.com/images/restaurante-5.jpg" loading="lazy" alt="Taquería Don Juan">
                    <h3>Taquería Don Juan</h3>
                    <p class="cuisine">Tacos al pastor y especialidades</p>
                    <p>Ambiente casual y económico.</p>
                    <div class="details">
                        <span>$ • Abierto: 10:00 - 22:00</span>
                        <span>Para llevar disponible</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Ordenar</a>
                </div>
                <!-- Card 6: Restaurante La Casona -->
                <div class="restaurant-card">
                    <img src="https://www.zacatlansabordealtura.com/images/restaurante-6.jpg" loading="lazy" alt="Restaurante La Casona">
                    <h3>Restaurante La Casona</h3>
                    <p class="cuisine">Cocina tradicional mexicana</p>
                    <p>Ambiente acogedor y familiar.</p>
                    <div class="details">
                        <span>$$ • Abierto: 12:00 - 21:00</span>
                        <span>Reservaciones recomendadas</span>
                    </div>
                    <a href="https://www.zacatlansabordealtura.com/" target="_blank" class="btn">Reservar</a>
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
                        <a href="#"><img src="{{ asset('assets/images/Log_cholula.webp') }}" loading="lazy" alt="Zacatlán Logo"></a>
                        <div class="line"></div>
                        <p>Descubre la magia de Zacatlán, un Pueblo Mágico lleno de naturaleza, tradición y sabor.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">Contacto</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Zacatlán, Puebla, México</li>
                            <li>Teléfono: 22-21627455</li>
                            <li>Email: turismo.zacatlan@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© 2024 Turismo Zacatlán. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="module" src="{{ asset('assets/js/region.js') }}"></script>
</body>
</html>
