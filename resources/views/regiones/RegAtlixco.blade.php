<!DOCTYPE html>
<html lang="es">
<head>
    <title>Turismo en Atlixco</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="{{asset('assets/images/iconos/L_Atlixco.ico')}}" type="image/x-icon">
    <!-- dependencias o paquetes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/regionA.css')}}" />
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/L_Atlixco.webp') }}" loading="lazy" alt="Atlixco Logo">
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
                    <li class="nav-item">
                        <a class="nav-link" href="#eventos">Eventos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <h1>Atlixco, Puebla</h1>
        <p>La Ciudad de las Flores, un destino lleno de color, tradición y naturaleza</p>
    </header>

    <main>
        <!-- Sección de Inicio -->
        <section id="region" class="region-info">
            <h2>Atlixco, Puebla</h2>
            <div class="region-content">
                <img src="https://www.lugaresturisticosenmexico.com/wp-content/uploads/2023/01/La-Escalera-Ancha-de-Atlixco.jpg" loading="lazy" alt="Atlixco" class="region-image">
                <div class="region-text">
                    <p>Atlixco es conocida como la "Ciudad de las Flores" por su clima templado y su producción de flores. Es un destino ideal para disfrutar de la naturaleza, la gastronomía y las tradiciones mexicanas.</p>
                    <div class="region-details">
                        <div class="detail-item">
                            <h4>Ubicación</h4>
                            <p>Valle de Atlixco, a 30 km de la ciudad de Puebla</p>
                        </div>
                        <div class="detail-item">
                            <h4>Clima</h4>
                            <p>Templado, temperatura promedio de 20°C</p>
                        </div>
                    </div>
                    <div class="region-highlights">
                        <h4>Destacados</h4>
                        <ul>
                            <li>Festival de las Flores en primavera</li>
                            <li>Ex haciendas y arquitectura colonial</li>
                            <li>Mercados tradicionales y gastronomía local</li>
                            <li>Vistas panorámicas desde el Cerro de San Miguel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Atracciones -->
        <section id="atracciones" class="attractions">
            <h2>Atracciones en Atlixco</h2>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Capilla del Cerro de San Miguel -->
                    <div class="swiper-slide">
                        <img src="https://liberway.com.mx/Data/Atracciones/Imagenes/20230407205800.webp" loading="lazy" alt="Capilla del Cerro de San Miguel">
                        <div class="slide-content">
                            <h3>Capilla del Cerro de San Miguel</h3>
                            <p>Un ícono religioso con vistas panorámicas de la ciudad y el valle. Ideal para fotos al atardecer.</p>
                        </div>
                    </div>
                    <!-- Zócalo de Atlixco -->
                    <div class="swiper-slide">
                        <img src="https://liberway.com.mx/Data/Atracciones/Imagenes/20240129174347.webp" loading="lazy" alt="Zócalo de Atlixco">
                        <div class="slide-content">
                            <h3>Zócalo de Atlixco</h3>
                            <p>El corazón de la ciudad, rodeado de portales, restaurantes y eventos culturales.</p>
                        </div>
                    </div>
                    <!-- Jardín Mágico -->
                    <div class="swiper-slide">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/f5/2f/5c/divertido.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Jardín Mágico">
                        <div class="slide-content">
                            <h3>Jardín Mágico</h3>
                            <p>Un laberinto de flores y plantas con juegos de luces nocturnas. Perfecto para familias.</p>
                        </div>
                    </div>
                    <!-- Parque Acuático Villa Krystal Green -->
                    <div class="swiper-slide">
                        <img src="https://edymx.b-cdn.net/wp-content/uploads/balneario_villa_krystal_green_puebla.jpg" loading="lazy" alt="Parque Acuático Villa Krystal Green">
                        <div class="slide-content">
                            <h3>Parque Acuático Villa Krystal Green</h3>
                            <p>Diversión acuática con toboganes, albercas y áreas verdes para días calurosos.</p>
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
            <h2>Cómo Llegar a las Atracciones</h2>
            <div class="transport-grid">
                <!-- Capilla del Cerro de San Miguel -->
                <div class="transport-card">
                    <img src="https://liberway.com.mx/Data/Atracciones/Imagenes/20230407202213.webp" loading="lazy" alt="Capilla del Cerro de San Miguel">
                    <h3>Capilla del Cerro de San Miguel</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Cerro de San Miguel, Atlixco</p>
                        <p>🚗 En auto: 10 min desde el centro por Av. Miguel Hidalgo.</p>
                        <p>🚶‍♂️ Caminata: 30 min desde el zócalo (sendero empedrado).</p>
                        <p>🚌 Transporte: Taxis locales ($50 MXN aprox).</p>
                        <a href="https://liberway.com.mx/Atracciones/Perfil/17" target="_blank" class="btn">Más información</a>
                    </div>
                </div>
                <!-- Zócalo de Atlixco -->
                <div class="transport-card">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/80/2c/fe/photo0jpg.jpg" loading="lazy" alt="Zócalo de Atlixco">
                    <h3>Zócalo de Atlixco</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro Histórico, Atlixco</p>
                        <p>🚗 En auto: Estacionamiento en calles aledañas.</p>
                        <p>🚌 Desde Puebla: Autobuses "Estrella Roja" ($40 MXN, 45 min).</p>
                        <a href="https://paseopormexico.com/lugares/124/z%C3%B3calo_de_atlixco" target="_blank" class="btn">Más información</a>
                    </div>
                </div>
                <!-- Jardín Mágico -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/f5/2f/5c/divertido.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Jardín Mágico">
                    <h3>Jardín Mágico</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Av. Juan de Palafox, Atlixco</p>
                        <p>🚗 En auto: 5 min desde el zócalo.</p>
                        <p>🚌 Transporte: Ruta "Centro-Jardín Mágico" ($10 MXN).</p>
                        <p>⏰ Horario: 9:00 - 21:00 hrs.</p>
                        <a href="https://www.lugaresturisticosenmexico.com/jardin-magico-de-atlixco-de-las-flores-puebla-un-sitio-espectacular/#google_vignette" target="_blank" class="btn">Más información</a>
                    </div>
                </div>
                <!-- Parque Acuático Villa Krystal Green -->
                <div class="transport-card">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/12/7c/64/61/parque-acuatico-villa.jpg" loading="lazy" alt="Parque Acuático Villa Krystal Green">
                    <h3>Parque Acuático Villa Krystal Green</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Carretera Atlixco-Huaquechula Km 3.5</p>
                        <p>🚗 En auto: 15 min desde el centro.</p>
                        <p>🚌 Transporte: Taxis colectivos ($30 MXN/persona).</p>
                        <p>💵 Entrada: $150 MXN adultos, $100 MXN niños.</p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g1941253-d13931805-Reviews-Parque_Acuatico_Villa_Krystal_Green-Atlixco_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más información</a>
                    </div>
                </div>
                <!-- Xtremo Parque -->
                <div class="transport-card">
                    <img src="https://th.bing.com/th?id=OLC.v+f8NzT6ToQWGQ480x360&rs=1&pid=ImgDetMain" loading="lazy" alt="Xtremo Parque">
                    <h3>Xtremo Parque</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Camino a San Pedro Benito Juárez</p>
                        <p>🚗 En auto: 20 min desde Atlixco (señalizado).</p>
                        <p>🚌 Tour organizado: Incluye transporte desde Puebla ($300 MXN).</p>
                        <p>🎟️ Precio: $250 MXN (incluye 5 actividades).</p>
                        <a href="https://www.xtremo.mx/" target="_blank" class="btn">Más información</a>
                    </div>
                </div>
                <!-- Museo de Bonsái John Naka -->
                <div class="transport-card">
                    <img src="https://maletadeviajes.com/wp-content/uploads/2024/06/IMG_9815-scaled.jpg" loading="lazy" alt="Museo de Bonsái John Naka">
                    <h3>Museo de Bonsái John Naka</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Privada de la Luz 101, Atlixco</p>
                        <p>🚗 En auto: 8 min desde el zócalo.</p>
                        <p>🚶‍♂️ Caminata: 25 min desde el centro.</p>
                        <p>⏰ Horario: 10:00 - 18:00 hrs (martes a domingo).</p>
                        <a href="https://maletadeviajes.com/visita-el-museo-del-bonsai-en-atlixco-puebla/estados/" target="_blank" class="btn">Más información</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Hospedaje -->
        <section id="hospedaje" class="accommodation">
            <h2>Dónde Hospedarse en Atlixco</h2>
            <div class="accommodation-grid">
                <!-- Hacienda Las Palomas -->
                <div class="hotel-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio/24.jpg" loading="lazy" alt="Hacienda Las Palomas">
                    <h3>Hacienda Las Palomas</h3>
                    <p class="price">Desde $2,200 MXN/noche</p>
                    <p>Antigua hacienda restaurada con alberca, jardines y arquitectura colonial. Ideal para eventos.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Alberca</span>
                        <span>Jardines</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/24/12/las-palomas" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Hacienda Santo Cristo -->
                <div class="hotel-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio/25.jpg" loading="lazy" alt="Hacienda Santo Cristo">
                    <h3>Hacienda Santo Cristo</h3>
                    <p class="price">Desde $1,800 MXN/noche</p>
                    <p>Hotel boutique con spa y temazcal en una hacienda del siglo XVIII. Ambiente romántico.</p>
                    <div class="amenities">
                        <span>Spa</span>
                        <span>Temazcal</span>
                        <span>Restaurante</span>
                        <span>WiFi</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/25/12/hacienda-santo-cristo" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Rincón Sagrado -->
                <div class="hotel-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio/29.jpg" loading="lazy" alt="Rincón Sagrado">
                    <h3>Rincón Sagrado</h3>
                    <p class="price">Desde $1,500 MXN/noche</p>
                    <p>Cabañas rústicas con vista al valle. Perfecto para desconectar y disfrutar de la naturaleza.</p>
                    <div class="amenities">
                        <span>Terraza</span>
                        <span>Vistas panorámicas</span>
                        <span>Chimenea</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/29/12/rincon-sagrado" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- La Moraleda -->
                <div class="hotel-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio/35.jpg" loading="lazy" alt="La Moraleda">
                    <h3>La Moraleda</h3>
                    <p class="price">Desde $1,600 MXN/noche</p>
                    <p>Hotel con alberca climatizada y amplios jardines. Excelente servicio familiar.</p>
                    <div class="amenities">
                        <span>Alberca</span>
                        <span>Área infantil</span>
                        <span>Restaurante</span>
                        <span>WiFi</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/35/12/la-moraleda" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Hotel Boutique La Rioja -->
                <div class="hotel-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio/27.jpg" loading="lazy" alt="Hotel Boutique La Rioja">
                    <h3>Hotel Boutique La Rioja</h3>
                    <p class="price">Desde $1,900 MXN/noche</p>
                    <p>Encantador hotel con decoración vinícola y terraza-bar. Ubicado en el centro histórico.</p>
                    <div class="amenities">
                        <span>Terraza-bar</span>
                        <span>Desayuno incluido</span>
                        <span>WiFi</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/27/12/hotel-boutique-la-rioja-atlixco" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Rio Tinto Hotel Boutique & Spa -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/99/cd/05/rio-tinto-hotel-boutique.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Rio Tinto Hotel Boutique">
                    <h3>Rio Tinto Hotel Boutique & Spa</h3>
                    <p class="price">Desde $2,500 MXN/noche</p>
                    <p>Lujo contemporáneo con spa de aguas termales y restaurante gourmet. Experiencia premium.</p>
                    <div class="amenities">
                        <span>Spa termal</span>
                        <span>Restaurante gourmet</span>
                        <span>Alberca</span>
                        <span>WiFi</span>
                    </div>
                    <a href="https://riotinto.mx/" target="_blank" class="btn">Reservar</a>
                </div>
            </div>
        </section>

        <!-- Sección de Restaurantes -->
        <section id="restaurantes" class="restaurants">
            <h2>Dónde Comer</h2>
            <div class="restaurant-grid">
                <!-- Card 1: The Italian Cucina Gourmet -->
                <div class="restaurant-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio2/43.jpg" loading="lazy" alt="The Italian Cucina Gourmet">
                    <h3>The Italian Cucina Gourmet</h3>
                    <p class="cuisine">Cocina Italiana</p>
                    <p>Exquisitos platillos italianos preparados con ingredientes frescos y auténticos.</p>
                    <div class="details">
                        <span>$$$ • Abierto: 13:00 - 22:00</span>
                        <span>Platillo recomendado: Pasta Carbonara</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/43/2/the-italian-cucina-gourmet" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 2: Aroma & Sabor -->
                <div class="restaurant-card">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/22/b9/e2/90/restaurante-mexicano.jpg" loading="lazy" alt="Aroma & Sabor">
                    <h3>Aroma & Sabor</h3>
                    <p class="cuisine">Cocina Mexicana</p>
                    <p>Un lugar acogedor con sabores auténticos y una experiencia gastronómica única.</p>
                    <div class="details">
                        <span>$$ • Abierto: 08:00 - 22:00</span>
                        <span>Platillo recomendado: Chiles en Nogada</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g1941253-d23963614-Reviews-Aroma_Sabor-Atlixco_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 3: Las Palomas -->
                <div class="restaurant-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio2/24.jpg" loading="lazy" alt="Las Palomas">
                    <h3>Las Palomas</h3>
                    <p class="cuisine">Cocina Tradicional</p>
                    <p>Disfruta de un ambiente rústico con platillos típicos de la región.</p>
                    <div class="details">
                        <span>$$ • Abierto: 12:00 - 22:00</span>
                        <span>Platillo recomendado: Mixiote de Borrego</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/24/2/las-palomas" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 4: Hacienda Santo Cristo -->
                <div class="restaurant-card">
                    <img src="https://www.vivoatlixco.com/imgNegocio2/25.jpg" loading="lazy" alt="Hacienda Santo Cristo">
                    <h3>Hacienda Santo Cristo</h3>
                    <p class="cuisine">Alta Cocina Mexicana</p>
                    <p>Un entorno elegante con platillos gourmet inspirados en la tradición mexicana.</p>
                    <div class="details">
                        <span>$$$$ • Abierto: 14:00 - 23:00</span>
                        <span>Platillo recomendado: Pato en Salsa de Ciruela</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/negocio/25/2/hacienda-santo-cristo" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 5: Enchiladas Lolita -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2b/1a/c8/82/caption.jpg?w=900&h=500&s=1" loading="lazy" alt="Enchiladas Lolita">
                    <h3>Enchiladas Lolita</h3>
                    <p class="cuisine">Cocina Mexicana</p>
                    <p>Un restaurante tradicional especializado en enchiladas con recetas caseras.</p>
                    <div class="details">
                        <span>$ • Abierto: 07:00 - 21:00</span>
                        <span>Platillo recomendado: Enchiladas Verdes</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g1941253-d27103830-Reviews-Enchiladas_Lolita-Atlixco_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Reservar Mesa</a>
                </div>
                <!-- Card 6: Nueva Tierra -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/a4/af/fd/vive-la-experiencia-de.jpg?w=700&h=-1&s=1" loading="lazy" alt="Nueva Tierra">
                    <h3>Nueva Tierra</h3>
                    <p class="cuisine">Cocina Saludable</p>
                    <p>Un restaurante que ofrece opciones saludables y sustentables para todos los gustos.</p>
                    <div class="details">
                        <span>$$ • Abierto: 09:00 - 20:00</span>
                        <span>Platillo recomendado: Ensalada de Quinoa</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g1941253-d26269697-Reviews-Nueva_Tierra-Atlixco_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Reservar Mesa</a>
                </div>
            </div>
        </section>

        <!-- Sección de Eventos -->
        <section id="eventos" class="events">
            <h2>Eventos Próximos</h2>
            <div class="events-grid">
                <!-- Card 1: Entre Flores y Colores -->
                <div class="events-card">
                    <h3>Entre flores y colores</h3>
                    <p class="cuisine">Festival Primaveral</p>
                    <p>Vive una experiencia inmersiva entre flores y colores en esta temporada de Primavera</p>
                    <div class="details">
                        <span>📅 28 Mar - 27 Abr 2025</span>
                        <span>📍 Zócalo de Atlixco</span>
                        <span>🕒 10:00 - 20:00 hrs</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/eventos" target="_blank" class="btn">Más información</a>
                </div>
                <!-- Card 2: Feria del Mezcal-->
                <div class="events-card">
                    <h3>Feria del Mezcal</h3>
                    <p class="cuisine">Exposición gastronómica</p>
                    <p>Exposición y degustación de mezcales artesanales con denominación de origen, acompañado de gastronomía y actividades artísticas.</p>
                    <div class="details">
                        <span>📅 13 - 15 Jun 2025</span>
                        <span>📍 Centro de Convenciones</span>
                        <span>🕒 12:00 - 22:00 hrs</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/eventos" target="_blank" class="btn">Más información</a>
                </div>
                <!-- Card 3: Feria de Atlixco 2025 -->
                <div class="events-card">
                    <h3>Feria de Atlixco 2025</h3>
                    <p class="cuisine">Feria Tradicional</p>
                    <p>Evento familiar con artistas nacionales, gastronomía local y productos artesanales en un ambiente festivo.</p>
                    <div class="details">
                        <span>📅 19 - 27 Jul 2025</span>
                        <span>📍 Centro de Convenciones</span>
                        <span>🕒 11:00 - 23:00 hrs</span>
                    </div>
                    <a href="https://www.vivoatlixco.com/eventos" target="_blank" class="btn">Más información</a>
                </div>
            </div>
        </section>

        <!-- Sección de Sitio Recomendado -->
        <section class="recommended-site">
            <h2>Descubre más sobre Atlixco</h2>
            <div class="site-container">
                <div class="site-card">
                    <a href="https://www.vivoatlixco.com/" target="_blank">
                        <img src="https://vivoatlixco.com/portal/imgs/logof.jpg" loading="lazy" alt="VivoAtlixco Logo">
                        <div class="site-info">
                            <h3>VivoAtlixco</h3>
                            <p>Un pintoresco pueblo mágico ubicado a solo 30 minutos de la ciudad de Puebla, famoso por su clima primaveral, calles coloridas y cultivos de flores.</p>
                        </div>
                    </a>
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
                        <a href="#"><img src="{{ asset('assets/images/L_Atlixco.webp') }}" loading="lazy" alt="Atlixco Logo"></a>
                        <div class="line"></div>
                        <p>Atlixco es un portal digital de publicidad para promover los negocios
                            y prestadores de servicios ademas del turismo, eventos,
                            la cultura y dar a conocer todo del municipio para los visitantes y habitantes.
                        </p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/VivoAtlixco/"><i class="ri-facebook-fill"></i></a>
                            <a href="https://www.instagram.com/vivoatlixco/"><i class="ri-instagram-fill"></i></a>
                            <a href="https://www.vivoatlixco.com/"><i class="ri-globe-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">Contacto</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Atlixco, Puebla, México</li>
                            <li>Email: info@vivoatlixco.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© 2024 Atlixco Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="module" src="{{ asset('assets/js/region.js') }}"></script>
