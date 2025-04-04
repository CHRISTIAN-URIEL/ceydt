<!DOCTYPE html>
<html lang="es">
<head>
    <title>Turismo en Puebla</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" href="{{asset('assets/images/iconos/Logo_Puebla.ico')}}" type="image/x-icon">
    <!-- dependencias o paquetes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/regionP.css')}}" />
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/Logo_Puebla.webp') }}" loading="lazy" alt="Puebla Logo">
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
            </div>
        </div>
    </nav>

    <header class="hero">
        <h1>Puebla</h1>
        <p>Famosa por su arquitectura colonial, su rica historia y su gastronomía única.</p>
    </header>

    <main>
        <!-- Sección de Inicio -->
        <section id="region" class="region-info">
            <h2>Zacatlán, Puebla</h2>
            <div class="region-content">
                <img src="https://www.travelingness.com/wp-content/uploads/2023/04/IMG_0214-1536x1152.jpg" loading="lazy" alt="Puebla" class="region-image">
                <div class="region-text">
                    <p>Puebla es famosa por su impresionante arquitectura colonial, su rica historia y su gastronomía única. Con calles empedradas, plazas llenas de vida y una gran cantidad de iglesias barrocas, la ciudad ofrece una experiencia cultural inigualable. Es un destino ideal para los amantes de la historia, la arquitectura y la comida tradicional mexicana, además de contar con una vibrante escena artística y festivales durante todo el año.</p>
                    <div class="region-details">
                        <div class="detail-item">
                            <h4>Ubicación</h4>
                            <p>Centro de México, a 130 km de la Ciudad de México</p>
                        </div>
                        <div class="detail-item">
                            <h4>Clima</h4>
                            <p>Templado, con temperaturas promedio de 18°C a 22°C</p>
                        </div>
                    </div>
                    <div class="region-highlights">
                        <h4>Destacados</h4>
                        <ul>
                            <li>Centro Histórico declarado Patrimonio Cultural de la Humanidad </li>
                            <li>Catedral de Puebla y Capilla del Rosario</li>
                            <li>Cholula y su Gran Pirámide</li>
                            <li>Deliciosa gastronomía, como el mole poblano y los chiles en nogada</li>
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
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/ca/69/e8/acuario-michin-puebla.jpg?w=700&h=-1&s=1" loading="lazy" alt="Acuario Michin">
                        <div class="slide-content">
                            <h3>Acuario Michin, Puebla</h3>
                            <p>Un acuario interactivo con diversas especies marinas y actividades educativas para toda la familia, Ofrece experiencias como contacto con rayas y un túnel submarino.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/c2/f7/43/photo3jpg.jpg?w=700&h=-1&s=1" loading="lazy" alt="Biblioteca Palafoxiana">
                        <div class="slide-content">
                            <h3>Biblioteca Palafoxiana</h3>
                            <p>Una de las bibliotecas más antiguas de América, famosa por su arquitectura y su valiosa colección de libros antiguos.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/e4/ad/fe/dsc-1471-largejpg.jpg?w=700&h=-1&s=1" loading="lazy" alt="Zócalo de Puebla">
                        <div class="slide-content">
                            <h3>Zócalo de Puebla</h3>
                            <p>El corazón de la ciudad, rodeado de majestuosos edificios coloniales, perfecto para disfrutar de la vida urbana y la gastronomía local.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/9e/82/65/photo0jpg.jpg?w=1000&h=-1&s=1" loading="lazy" alt="Museo Internacional del Barroco">
                        <div class="slide-content">
                            <h3>Museo Internacional del Barroco</h3>
                            <p>Un museo moderno que destaca por su impresionante arquitectura y su exposición de arte barroco.</p>
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
                <!-- Card 1: Zócalo de Puebla -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0b/42/72/0c/puebla-zocalo-by-alberto.jpg?w=700&h=-1&s=1" loading="lazy" alt="Zócalo de Puebla">
                    <h3>Zócalo de Puebla</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Centro Histórico, Puebla</p>
                        <p>🚗 En auto: 5 min desde cualquier punto central, sigue la Avenida 2 Oriente hasta llegar al Zócalo,</p>
                        <p>🚌 Transporte público: Toma cualquier autobús que pase por el centro histórico y bajar en "Zócalo" (Costo $7-$10MXN)</p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g152773-d156070-Reviews-Zocalo_de_Puebla-Puebla_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 2: Museo Internacional del Barroco -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/7d/c3/2c/photo9jpg.jpg?w=700&h=-1&s=1" loading="lazy" alt="Museo Internacional del Barroco">
                    <h3>Museo Internacional del Barroco</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Vía Atlixcáyotl 2501, Puebla</p>
                        <p>🚗 Cómo llegar: 20 min desde el Zócalo, sigue la Vía Atlixcáyotl en dirección sureste.</p>
                        <p>🚌 Transporte público: Toma RUTA2 o RUTA1 y baja en la parada "Museo Internacional del Barroco" (Costo $7-$10MXN)</p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g152773-d10043505-Reviews-Museo_Internacional_del_Barroco-Puebla_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 3: Acuario Michin, Puebla -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/88/f2/48/increibles-espacios.jpg?w=700&h=-1&s=1" loading="lazy" alt="Acuario Michin, Puebla">
                    <h3>Acuario Michin, Puebla</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Plaza Parque Puebla, Calzada Ignacio Zaragoza 410, Puebla</p>
                        <p>🚗 Cómo llegar: 15 min desde el Zócalo, toma la Calzada Ignacio Zaragoza en dirección noreste.</p>
                        <p>🚌 Transporte público: Toma Toma RUTA 3 o RUTA 72A y baja en Plaza Parque Puebla. (Costo $7-$10MXN)</p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g152773-d19702785-Reviews-Acuario_Michin_Puebla-Puebla_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 4: Biblioteca Palafoxiana -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/c2/f7/43/photo3jpg.jpg?w=700&h=-1&s=1" loading="lazy" alt="Biblioteca Palafoxiana">
                    <h3>Biblioteca Palafoxiana</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Calle 5 de febrero 105, Puebla</p>
                        <p>🚗 En auto: 5 min desde el Zócalo, estaciona cerca en Calle 5 de febrero</p>
                        <p>🚌 Transporte público: Toma autobuses que pasen por el centro y baja en "Biblioteca Palafoxiana" (Costo $7-$10MXN)</p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g152773-d153873-Reviews-Biblioteca_Palafoxiana-Puebla_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 5: Fuertes de Loreto y Guadalupe -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/bb/d6/9a/images-5-largejpg.jpg?w=600&h=-1&s=1" loading="lazy" alt="Fuertes de Loreto y Guadalupe">
                    <h3>Fuertes de Loreto y Guadalupe</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Cerro de Loreto, Puebla</p>
                        <p>🚗 En auto: 10 min desde el Zócalo, sube por la Calle 4 Norte</p>
                        <p>🚌 Transporte público: Toma RUTA 29 o RUTA45A y baja cerca de la entrada. (Costo $7-$10MXN)</p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g152773-d153797-Reviews-Fuertes_de_Loreto-Puebla_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
                <!-- Card 6: Cuexcomate -->
                <div class="transport-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/eb/20/a2/caption.jpg?w=700&h=-1&s=1" loading="lazy" alt="Cuexcomate">
                    <h3>Cuexcomate</h3>
                    <div class="transport-option">
                        <p>📍 Ubicación: Colonia La Libertad, Puebla</p>
                        <p>🚗 Cómo llegar: 10 min desde el Zócalo, dirígete por la Avenida 11 Norte hasta llegar a la colonia La Libertad</p>
                        <p>🚌 Transporte público: Toma RUTA 4 o RUTA 44A y baja en la parada "Cuexcomate" (Costo $7-$10MXN) </p>
                        <a href="https://www.tripadvisor.com.mx/Attraction_Review-g152773-d3396135-Reviews-Cuexcomate-Puebla_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más detalles</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Sección de Hospedaje -->
        <section id="hospedaje" class="accommodation">
            <h2>Dónde Hospedarse</h2>
            <div class="accommodation-grid">
                <!-- Card 1: NH Puebla Centro Histórico -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/f1/f9/6d/f-nh-puebla-centro-historico.jpg?w=700&h=-1&s=1" loading="lazy" alt="NH Puebla Centro Histórico">
                    <h3>NH Puebla Centro Histórico</h3>
                    <p class="price">Desde $1,400 MXN/noche</p>
                    <p>Hotel moderno en el corazón del centro histórico de Puebla, ideal para explorar la ciudad a pie.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Gimnasio</span>
                        <span>Estacionamiento</span>
                        <span>Restaurante</span>
                    </div>
                    <a href="https://www.nh-hotels.com/mx/hotel/nh-puebla-centro-historico?utm_medium=metasearch-listings&utm_source=tripadvisor&utm_campaign=metasearch-listings_tripadvisor&utm_term=spanish-mx_hotelpage_desktop-fallback&utm_content=114440565&campid=8436102" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 2: Quinta Real Puebla -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/04/5c/d7/31/camino-real-puebla.jpg?w=700&h=-1&s=1" loading="lazy" alt="Quinta Real Puebla">
                    <h3>Quinta Real Puebla</h3>
                    <p class="price">Desde $2,800 MXN/noche</p>
                    <p>Hotel de lujo ubicado en un convento restaurado, con arquitectura colonial y espacios amplios para eventos.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Alberca</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.caminoreal.com/es/quintareal/quinta-real-puebla" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 3: Cartesiano Boutique & Wellness Hotel -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/25/a5/a9/17/cartesiano-urban-wellness.jpg?w=700&h=-1&s=1" loading="lazy" alt="Cartesiano Boutique & Wellness Hotel">
                    <h3>Cartesiano Boutique & Wellness Hotel</h3>
                    <p class="price">Desde $3,500 MXN/noche</p>
                    <p>Hotel boutique de lujo con spa, Gimnasio y restaurante, perfecto para una estancia de relajación.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Spa</span>
                        <span>Gimnasio</span>
                        <span>Restaurante</span>
                    </div>
                    <a href="https://www.hotelsone.com/puebla-hotels-mx/cartesiano-boutique-wellness-hotel.es.html?cur=MXN&uid=35ecc61c-ebf7-4ad2-ace6-aa864abbf9e3&cmpid=31123483&agid=1254544073354395&msid=e82d836155001d5b5e90e48ef7d24f0e&as=b&aid=78409130848958&dsti=21042925&dstt=8&utm_source=bing&utm_campaign=mx-Mexico-Hotels-oe-en-mx&utm_medium=cpc&utm_content=mx%20|%20puebla%20|%2021042925%20|%20cartesiano-boutique-wellness-hotel&msclkid=e82d836155001d5b5e90e48ef7d24f0e" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 4: La Quinta By Wyndham Puebla Palmas Angelópolis -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/f8/02/c7/exterior.jpg?w=700&h=-1&s=1" loading="lazy" alt="La Quinta By Wyndham Puebla Palmas Angelópolis">
                    <h3>La Quinta By Wyndham Puebla Palmas Angelópolis</h3>
                    <p class="price">Desde $1,200 MXN/noche</p>
                    <p>Hotel cómodo y moderno, ideal para viajes de negocios y placer, ubicado cerca de centros comerciales.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Gimnasio</span>
                        <span>Desayuno gratuito</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.tripadvisor.com.mx/Hotel_Review-g152773-d2454651-Reviews-La_Quinta_By_Wyndham_Puebla_Palmas_Angelopolis-Puebla_Central_Mexico_and_Gulf_Coast.html#/media/2454651/?albumid=101&type=ALL_INCLUDING_RESTRICTED&category=101" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 5: Casareyna Hotel -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-s/02/c0/4d/9c/casareyna-hotel.jpg?w=600&h=-1&s=1" loading="lazy" alt="Casareyna Hotel">
                    <h3>Casareyna Hotel</h3>
                    <p class="price">Desde $2,500 MXN/noche</p>
                    <p>Hotel boutique con un diseño único, restaurante gourmet y un ambiente relajado en el centro de Puebla.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Gimnasio</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                    </div>
                    <a href="https://www.booking.com/hotel/mx/casa-reyna-boutique.es-mx.html?aid=2276458&label=msn-HK68%2AOOlrGZK1pvrv_75RQ-80127046163802%3Atikwd-80127192421743%3Aloc-142562%3Aneo%3Amte%3Alp144398%3Adec%3Aqshotel%20casa%20reyna%20puebla&sid=580e28a4a376c4f3febe504ed2cfca1d&dest_id=-1690063&dest_type=city&dist=0&group_adults=2&group_children=0&hapos=1&hpos=1&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&sr_order=popularity&srepoch=1743758466&srpvid=e21141b2502305bc&type=total&ucfs=1&" target="_blank" class="btn">Reservar</a>
                </div>
                <!-- Card 6: Hotel San Pedro -->
                <div class="hotel-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/b1/c1/7a/fachada.jpg?w=700&h=-1&s=1" loading="lazy" alt="Hotel San Pedro">
                    <h3>Hotel San Pedro</h3>
                    <p class="price">Desde $1,000 MXN/noche</p>
                    <p>Agradable hotel económico en el centro de Puebla, con una ubicación conveniente cerca de atracciones turísticas.</p>
                    <div class="amenities">
                        <span>WiFi</span>
                        <span>Restaurante</span>
                        <span>Estacionamiento</span>
                        <span>Servicio de habitaciones</span>
                    </div>
                    <a href="https://www.hotelsanpedro.mx/" target="_blank" class="btn">Reservar</a>
                </div>
            </div>
        </section>


        <!-- Sección de Restaurantes -->
        <section id="restaurantes" class="restaurants">
            <h2>Dónde Comer</h2>
            <div class="restaurant-grid">
                <!-- Card 1: Kampai Puebla -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/e4/36/4e/sushi-set.jpg?w=700&h=-1&s=1" loading="lazy" alt="Kampai Puebla">
                    <h3>Kampai Puebla</h3>
                    <p class="cuisine">Comida Japonesa</p>
                    <p>Restaurante japonés especializado en sushi y platos tradicionales de la cocina asática, en un ambiente elegante.</p>
                    <div class="details">
                        <span>$$ • Abierto: 13:130 - 23:00</span>
                        <span>Platillo recomendado: Sushi Dragón</span>
                    </div>
                    <a href="https://www.kampai.mx/puebla" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 2: Comedor 360 -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2e/f8/a5/49/caption.jpg?w=700&h=-1&s=1" loading="lazy" alt="Comedor 360">
                    <h3>Comedor 360</h3>
                    <p class="cuisine">Cocina de Autor</p>
                    <p>Restaurante con una propesta innovadora y vistas panorámicas de la ciudad, ideal para cenas especiales</p>
                    <div class="details">
                        <span>$$ • Abierto: 13:00 - 23:00</span>
                        <span>Platillo recomendado: Short Rib con puré de camote</span>
                    </div>
                    <a href="https://www.cartesiano360.com/comedor" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 3: Terraza Quintal -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2d/fd/76/fc/caption.jpg?w=700&h=-1&s=1" loading="lazy" alt="Terraza Quintal">
                    <h3>Terraza Quintal</h3>
                    <p class="cuisine">Cocina Mexicana Contemporánea</p>
                    <p>Un lugar con terraza y un ambiente relajado para disfrutar de comida mexicana con un toque moderno..</p>
                    <div class="details">
                        <span>$$ • Abierto: 12:00 - 22:00</span>
                        <span>Platillo recomendado: Tlayuda con tasajo</span>
                    </div>
                    <a href="https://www.facebook.com/TerrazaQuintalPuebla/?locale=es_LA" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 4: Porfirio´s Puebla -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1a/e4/f3/f1/porfirios-puebla.jpg?w=700&h=-1&s=1" loading="lazy" alt="Porfirio´s Puebla">
                    <h3>Porfirio´s Puebla</h3>
                    <p class="cuisine">Cocina Mexicana Gourmet</p>
                    <p>Rest de alta cocina mexicana con platillos tradicionales reinventados en un ambiente sofisticado.</p>
                    <div class="details">
                        <span>$ • Abierto: 13:00 - 23:00</span>
                        <span>Platillo recomendado: Chiles en Nogada</span>
                    </div>
                    <a href="https://porfirios.com.mx/locaciones/restaurante-mexicano-en-puebla/" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 5: Animal Puebla -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/14/73/b3/caption.jpg?w=700&h=-1&s=1" loading="lazy" alt="Animal Puebla">
                    <h3>Animal Puebla</h3>
                    <p class="cuisine">Cortes y Parrilla</p>
                    <p>Restaurante especializado en cortes de carne premium y una seleccion de vinos y cócteles artesanales.</p>
                    <div class="details">
                        <span>$$ • Abierto: 13:00 - 00:00</span>
                        <span>Platillo recomendado: Tomahawk a las brasas</span>
                    </div>
                    <a href="https://costeno.com/animal/" target="_blank" class="btn">Visitar</a>
                </div>
                <!-- Card 6: Restaurante Casareyna -->
                <div class="restaurant-card">
                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/f7/ba/09/filete-de-res-en-salsa.jpg?w=700&h=-1&s=1" loading="lazy" alt="Restaurante Casareyna">
                    <h3>Restaurante Casareyna</h3>
                    <p class="cuisine">Cocina Poblana Gourmet</p>
                    <p>Ubicado en un hotel boutique, este restaurante es famoso por su auténtica comida poblana y su ambiente sofisticado.</p>
                    <div class="details">
                        <span>$$$ • Abierto: 08:00 - 23:00</span>
                        <span>Platillo recomendado: Chalupas poblanas</span>
                    </div>
                    <a href="https://www.casareyna.com/es/restaurante/" target="_blank" class="btn">Visitar</a>
                </div>
            </div>
        </section>

        <!-- Sección de Sitios Recomendados -->
        <section class="recommended-sites">
            <h2>Descubre más sobre Puebla</h2>
            <div class="sites-container">
                <!-- Sitio 1 -->
                <div class="site-card">
                    <a href="https://www.pueblacare.com/inicio" target="_blank">
                        <img src="https://turissam.com/wp-content/uploads/2022/08/logo-puebla-care.png" loading="lazy" alt="Puebla Care">
                        <div class="site-info">
                            <h3>Clúster de Turismo Médico</h3>
                            <p>Puebla Care esta integrado por reconocidos hospitales, hoteles de cadena, transportación especializada y servicios turísticos.</p>
                        </div>
                    </a>
                </div>

                <!-- Sitio 2 -->
                <div class="site-card">
                    <a href="https://creapuebla.org/" target="_blank">
                        <img src="https://media.licdn.com/dms/image/v2/D560BAQGkSaQlDXvYsg/company-logo_200_200/company-logo_200_200/0/1716311006633/crea_puebla_clster_de_la_economa_creativa_logo?e=2147483647&v=beta&t=BzqHnT1expLb2Sm9OJvl7zRKvDWdA0pMcABt6a8-txQ" loading="lazy" alt="CREA Puebla">
                        <div class="site-info">
                            <h3>Clúster de Economía Creativa</h3>
                            <p>Economía Creativa es el motor esencial para el desarrollo económico y cultural. Las industrias que integran este Clúster son Arte, Cine, Mercadotecnia y Videojuegos.</p>
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
                        <a href="#"><img src="{{ asset('assets/images/Logo_Puebla.webp') }}" loading="lazy" alt="Puebla Logo"></a>
                        <div class="line"></div>
                        <p>Descubre la magia de Puebla, un destino perfecto para explorar el pasado y disfrutar de la cultura mexicana.</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/BarriandoPue/"><i class="ri-facebook-fill"></i></a>
                            <a href="https://www.instagram.com/barriando_puebla/"><i class="ri-instagram-fill"></i></a>
                            <a href="https://twitter.com/barriando_puebla/"><i class="ri-twitter-fill"></i></a>
                            <a href="https://www.tiktok.com/@barriandopuebla?_t=8ZJG9VZqRRV&_r=1"><i class="ri-globe-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <h5 class="mb-0 text-white">Contacto</h5>
                        <div class="line"></div>
                        <ul>
                            <li>Puebla, México</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row g-4 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">© 2024 Turismo Puebla. Todos los derechos reservados.</p>
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
