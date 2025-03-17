<!DOCTYPE html>
<html lang="es">
<head>
    <title>Turismo en Zacatlán</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/region.css')}}" />
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/Logo_Zacatlan.webp') }}" loading="lazy" alt="Zacatlán Logo">
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
                <img src="https://deviajeyaventura.com/wp-content/uploads/2020/05/2-75.jpg" loading="lazy" alt="Zacatlán" class="region-image">
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
                </div>
            </div>
        </section>

        <!-- Sección de Atracciones -->
        <section id="atracciones" class="attractions">
            <h2>Puntos de Interés</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://th.bing.com/th/id/OIP.GJGXY9h7QX5-GCKTPdeR6AHaDo?rs=1&pid=ImgDetMain" loading="lazy" alt="Reloj Floral">
                        <div class="slide-content">
                            <h3>Reloj Floral</h3>
                            <p>Uno de los relojes florales más grandes del mundo, ubicado en el centro de Zacatlán.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2010/06/valle-de-piedras-encimadas-flickr.jpeg" loading="lazy" alt="Valle de las Piedras Encimadas">
                        <div class="slide-content">
                            <h3>Valle de las Piedras Encimadas</h3>
                            <p>Formaciones rocosas naturales que parecen estar apiladas, un paisaje único en México.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://ciudadtrendy.mx/wp-content/uploads/2021/11/zacatlan-de-las-manzanas-puebla-cascada-tuliman-Ciudad-Trendy.jpg" loading="lazy" alt="Cascada Tulimán">
                        <div class="slide-content">
                            <h3>Cascada Tulimán</h3>
                            <p>Una impresionante cascada rodeada de naturaleza, ideal para los amantes del ecoturismo.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://th.bing.com/th/id/OIP.tQrkajR9ZeY-pfyf1S13dwHaE7?rs=1&pid=ImgDetMain" loading="lazy" alt="Cascada Tulimán">
                        <div class="slide-content">
                            <h3>Mirador de Cristal</h3>
                            <p>Disfruta de una vista impresionantes de la serranía poblana desde este mirador de cristal que te hará sentirte entre las nubes.</p>
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
                    <img src="https://www.eluniversalpuebla.com.mx/sites/default/files/2022/12/03/conoce-origen-famoso-reloj-floral-zacatlan.jpg" loading="lazy" alt="Reloj Floral">
                    <h3>Reloj Floral</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro de Zacatlán</p>
                        <p>🚶‍♂️ Cómo llegar: A pie desde el zócalo.</p>
                        <p>🚗 En auto: Estacionamiento disponible a 100 metros.</p>
                        <a href="https://www.cabanascositazacatlan.com/2018/03/reloj-floral.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 2: Valle de las Piedras Encimadas -->
                <div class="transport-card">
                    <img src="https://www.yosoypuebla.com/wp-content/uploads/2023/03/zacatla-piedras-encimadas-ecoturismo.jpg" loading="lazy" alt="Valle de las Piedras Encimadas">
                    <h3>Valle de las Piedras Encimadas</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: A 30 km de Zacatlán</p>
                        <p>🚗 Cómo llegar: En auto por la carretera Zacatlán-Chignahuapan.</p>
                        <p>🚌 Transporte público: Autobuses locales desde el centro.</p>
                        <a href="https://piedrasencimadas.com/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 3: Cascada Tulimán -->
                <div class="transport-card">
                    <img src="https://ciudadtrendy.mx/wp-content/uploads/2021/11/zacatlan-de-las-manzanas-puebla-cascada-tuliman-Ciudad-Trendy.jpg" loading="lazy" alt="Cascada Tulimán">
                    <h3>Cascada Tulimán</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: A 15 km de Zacatlán</p>
                        <p>🚗 Cómo llegar: En auto por la carretera Zacatlán-Tulimán.</p>
                        <p>🚶‍♂️ Caminata: 20 minutos desde el estacionamiento.</p>
                        <a href="https://cascadastuliman.com.mx/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 4: Museo de Relojería -->
                <div class="transport-card">
                    <img src="https://www.mexicodesconocido.com.mx/wp-content/uploads/2019/06/5740_GEMD_PUE_Zacatlan_Museo-de-relojeria-Alberto-Olvera-Hernandez_MF.jpg" loading="lazy" alt="Museo de Relojería">
                    <h3>Museo de Relojería</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro de Zacatlán</p>
                        <p>🚶‍♂️ Cómo llegar: A 5 minutos a pie del zócalo.</p>
                        <p>🚗 En auto: Estacionamiento cercano.</p>
                        <a href="http://www.museodelreloj.com.mx/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 5: Parroquia de San Pedro y San Pablo -->
                <div class="transport-card">
                    <img src="https://cdn.horariodemisas.com/wp-content/uploads/2020/10/parroquia-de-san-pedro-y-san-pablo-used-1024x768.jpg" loading="lazy" alt="Parroquia de San Pedro y San Pablo">
                    <h3>Parroquia de San Pedro y San Pablo</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro de Zacatlán</p>
                        <p>🚶‍♂️ Cómo llegar: A 3 minutos a pie del zócalo.</p>
                        <p>🚗 En auto: Estacionamiento en la plaza principal.</p>
                        <a href="https://paseopormexico.com/lugares/1325/parroquia_de_san_pedro_y_san_pablo_en_zacatl%C3%A1n" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 6: Barranca de los Jilgueros Zacatlán -->
                <div class="transport-card">
                    <img src="https://th.bing.com/th/id/OIP.kKUHTmpekST4ocvMCs942wHaDn?rs=1&pid=ImgDetMain" loading="lazy" alt="Barranca de los Jilgueros Zacatlán">
                    <h3>Barranca de los Jilgueros Zacatlán</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: A 3 km del centro</p>
                        <p>🚗 Cómo llegar: En auto por la carretera Zacatlán-Pahuatlán.</p>
                        <p>🚌 Transporte público: Autobuses locales desde el centro.</p>
                        <a href="https://barrancadelosjilgueros.mx/" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Sección de Hospedaje -->
        <section id="hospedaje" class="accommodation">
            <h2>Dónde Hospedarse</h2>
            <div class="accommodation-grid">
                <!-- Card 1: Hotel Casa Madera -->
                <div class="hotel-card">
                    <img src="https://casamaderamx.com/wp-content/uploads/2024/07/1B.2Bedroom-copy-1024x657.jpg" loading="lazy" alt="Hotel Casa Madera">
                    <h3>Hotel Casa Madera</h3>
                    <p class="price">Desde $1,200 MXN/noche</p>
                    <p>Hotel rústico con un ambiente cálido y acogedor en el centro de Zacatlán.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Desayuno incluido</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://casamaderamx.com/" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 2: Hotel Frutos del Bosque -->
                <div class="hotel-card">
                    <img src="https://th.bing.com/th/id/OIP.R3cblM9VdKoUcYu5ftpJ0QHaFj?rs=1&pid=ImgDetMain" loading="lazy" alt="Hotel Frutos del Bosque">
                    <h3>Hotel Frutos del Bosque</h3>
                    <p class="price">Desde $1,300 MXN/noche</p>
                    <p>Ubicado entre la naturaleza, ofrece un ambiente relajante y de paz.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Hotel_Review-g2440580-d21507566-Reviews-Hotel_Frutos_del_Bosque-Zacatlan_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 3: Casa San Miguel Hotel Boutique y Spa -->
                <div class="hotel-card">
                    <img src="https://th.bing.com/th/id/OIP.sLpNTbE1qIjB6rYmTAOG5gHaE7?rs=1&pid=ImgDetMain" loading="lazy" alt="Casa San Miguel Hotel Boutique y Spa">
                    <h3>Casa San Miguel Hotel Boutique y Spa</h3>
                    <p class="price">Desde $2,000 MXN/noche</p>
                    <p>Elegante hotel boutique con spa para una estancia de lujo y relajación.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Spa</span>
                        <span>Restaurante</span>
                    </div>
                    <a href="https://www.casasanmiguelhotel.com/" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 4: Casa 1910 -->
                <div class="hotel-card">
                    <img src="https://cf.bstatic.com/xdata/images/hotel/max500/604230925.jpg?k=34e14cbc51e57fb328ef833d1bd4f6caccbe8e30bcca3a39f59a46204cdf8405&o=" loading="lazy" alt="Casa 1910">
                    <h3>Casa 1910</h3>
                    <p class="price">Desde $1,800 MXN/noche</p>
                    <p>Encantadora casa con arquitectura del siglo XX, ideal para descansar y disfrutar.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Hotel_Review-g2440580-d30235359-Reviews-Casa_1910-Zacatlan_Central_Mexico_and_Gulf_Coast.html#/media/30235359/?albumid=101&type=ALL_INCLUDING_RESTRICTED&category=101" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 5: Cabañas el Mirador -->
                <div class="hotel-card">
                    <img src="https://edicionesamargord.net/wp-content/uploads/2023/02/cabanas-el-mirador-768x512.jpg" loading="lazy" alt="Cabañas el Mirador">
                    <h3>Cabañas "El Mirador"</h3>
                    <p class="price">Desde $1,500 MXN/noche</p>
                    <p>Disfruta de la naturaleza con cabañas con vista espectacular al paisaje montañoso.</p>
                    <div class="amenities">
                        <span>Chimenea</span>
                        <span>Senderos</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.elmiradorzacatlan.com.mx/pages/cabanas.html" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 6: Quinta Luna de Zacatlán -->
                <div class="hotel-card">
                    <img src="https://imgservice.rentbyowner.com/500x325/hotel-quinta-luna-zacatl-mx-zacatl%c3%a1n-bc-10578912-1.jpg" loading="lazy" alt="Quinta Luna de Zacatlán">
                    <h3>Quinta Luna de Zacatlán</h3>
                    <p class="price">Desde $1,500 MXN/noche</p>
                    <p>Hotel con un ambiente acogedor y moderno, perfecto para una escapada romántica o una estancia familiar.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                        <span>Piscina</span>
                        <span>Gimnasio</span>
                    </div>
                    <a href="https://www.booking.com/searchresults.es-mx.html?aid=2276458&label=msn-dCyJyCDRoH5me3EW%2AsM7VQ-79852223841769%3Atikwd-79852413669016%3Aloc-142562%3Aneo%3Amte%3Alp144398%3Adec%3Aqshotel%20quinta%20luna%20zacatl%C3%A1n&utm_medium=cpc&utm_campaign=Hotel%20-%20Mexico%20-%20Zacatlan%20-%20UFI%3A-1709010&utm_term=dCyJyCDRoH5me3EW%2AsM7VQ&msclkid=aaefe423921f1fbe1d7e83fbdeb486fb&utm_source=bing&highlighted_hotels=10578912&checkin=2025-03-20&redirected=1&city=-1709010&hlrd=with_av&source=hotel&checkout=2025-04-16&keep_landing=1&sid=c519dab442a131ed496ed42e0eb95231" target="_blank" class="btn">Reservar</a>
                </div>
            </div>
        </section>


        <!-- Sección de Restaurantes -->
        <section id="restaurantes" class="restaurants">
            <h2>Dónde Comer</h2>
            <div class="restaurant-grid">
                <!-- Card 1: Restaurante Casa Fernández 1876 -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2a/bd/b4/b7/esta-casona-tiene-arboles.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Restaurante Casa Fernández 1876">
                    <h3>Restaurante Casa Fernández 1876</h3>
                    <p class="cuisine">Cocina Mexicana Tradicional</p>
                    <p>Un lugar con historia, ofreciendo platillos tradicionales mexicanos en un ambiente cálido y familiar.</p>
                    <div class="details">
                        <span>$$ • Abierto: 12:00 - 22:00</span>
                        <span>Platillo recomendado: Mole Poblano</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g2440580-d25571364-Reviews-Restaurante_Casa_Fernandez_1876-Zacatlan_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 2: Restaurante Agave Pulque Mezcal y Comida -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/a9/72/e8/la-bebida-de-los-dioses.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Restaurante Agave Pulque Mezcal y Comida">
                    <h3>Restaurante Agave Pulque Mezcal y Comida</h3>
                    <p class="cuisine">Especialidades con Agave</p>
                    <p>Disfruta de mezcal y pulque acompañados de platillos auténticos mexicanos en un ambiente único.</p>
                    <div class="details">
                        <span>$$ • Abierto: 11:00 - 22:00</span>
                        <span>Platillo recomendado: Tacos de Carnitas</span>
                    </div>
                    <a href="https://www.facebook.com/zacatlanagave/" target="_blank" class="btn">Ver Menú</a>
                </div>
                <!-- Card 3: Restaurante El Mirador -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4a/a0/86/photo0jpg.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Restaurante El Mirador">
                    <h3>Restaurante El Mirador</h3>
                    <p class="cuisine">Cocina Mexicana y Regional</p>
                    <p>Vista espectacular al valle y platillos tradicionales mexicanos.</p>
                    <div class="details">
                        <span>$$ • Abierto: 12:00 - 22:00</span>
                        <span>Platillo recomendado: Tacos de Bistec</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g2440580-d3646524-Reviews-Restaurant_El_Mirador-Zacatlan_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 4: Restaurante La Casa De La Abuela -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/24/10/4c/la-casa-de-la-abuela.jpg?w=700&h=-1&s=1" loading="lazy" alt="Restaurante La Casa De La Abuela">
                    <h3>Restaurante La Casa De La Abuela</h3>
                    <p class="cuisine">Comida Casera Mexicana</p>
                    <p>Un lugar acogedor donde podrás disfrutar de platillos tradicionales, como los que preparaba la abuela.</p>
                    <div class="details">
                        <span>$ • Abierto: 8:00 - 18:00</span>
                        <span>Platillo recomendado: Sopes de Pollo</span>
                    </div>
                    <a href="https://www.facebook.com/people/Restaurante-la-Casa-de-la-Abuela/100065125954325/#" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 5: Restaurante Mi Viejo Pueblito Zacatlán -->
                <div class="restaurant-card">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/2c/f9/3e/e8/fachada-1.jpg" loading="lazy" alt="Restaurante Mi Viejo Pueblito Zacatlán">
                    <h3>Restaurante Mi Viejo Pueblito Zacatlán</h3>
                    <p class="cuisine">Comida Regional</p>
                    <p>Un ambiente típico de pueblo con platillos frescos y auténticos de la región.</p>
                    <div class="details">
                        <span>$$ • Abierto: 10:00 - 22:00</span>
                        <span>Platillo recomendado: Tacos de Longaniza</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g2440580-d28044890-Reviews-Mi_Viejo_Pueblito_Zacatlan-Zacatlan_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Ordenar</a>
                </div>
                <!-- Card 6: Restaurante Altavista Zacatlán -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/80/a5/31/unico-laberinto-en-zacatlan.jpg?w=700&h=-1&s=1" loading="lazy" alt="Restaurante Altavista Zacatlán">
                    <h3>Restaurante Altavista Zacatlán</h3>
                    <p class="cuisine">Cocina Mexicana y de Autor</p>
                    <p>Un restaurante moderno con una vista impresionante, ideal para una comida elegante y única.</p>
                    <div class="details">
                        <span>$$$ • Abierto: 12:00 - 23:00</span>
                        <span>Platillo recomendado: Filete al Mole</span>
                    </div>
                    <a href="https://www.facebook.com/altavista.zacatlan" target="_blank" class="btn">Reservar</a>
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
                        <a href="#"><img src="{{ asset('assets/images/Logo_Zacatlan.webp') }}" loading="lazy" alt="Zacatlán Logo"></a>
                        <div class="line"></div>
                        <p>Descubre la magia de Zacatlán, un Pueblo Mágico lleno de naturaleza, tradición y sabor.</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/LATAMSaborea"><i class="ri-facebook-fill"></i></a>
                            <a href="https://www.instagram.com/s4borea/"><i class="ri-instagram-fill"></i></a>
                            <a href="https://api.whatsapp.com/send/?phone=522463329118&text&type=phone_number&app_absent=0"><i class="ri-whatsapp-line"></i></a>
                            <a href="https://www.zacatlansabordealtura.com/"><i class="ri-globe-fill"></i></a>
                        </div>
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
