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
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/Log_cholula.webp') }}" loading="lazy" alt="Cholula Logo">
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
                <!--<a href="{{ url('ceydt.index') }}" class="btn btn-brand ms-lg-3">Cluster</a>-->
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
        <img src="https://th.bing.com/th/id/OIP.BSvAouf-WgMOcBs4z-ax6wHaE7?rs=1&pid=ImgDetMain" loading="lazy" alt="Cholula" class="region-image">
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
                <img src="https://th.bing.com/th/id/R.07c67b646bcc1b72ba852322448a6edd?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" loading="lazy" alt="Gran Pirámide">
                <div class="slide-content">
                    <h3>Gran Pirámide de Cholula</h3>
                    <p>La pirámide más grande del mundo por volumen. Incluye un museo de sitio y túneles que puedes explorar.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://media.istockphoto.com/id/1128059207/es/foto/nuestra-se%C3%B1ora-de-los-remedios.webp?a=1&b=1&s=612x612&w=0&k=20&c=IXKH_bsWkDKuolusJ42Ewx5Ud42fAGb_YX60tEu_CvQ=" loading="lazy" alt="Santuario">
                <div class="slide-content">
                    <h3>Santuario de los Remedios</h3>
                    <p>Iglesia colonial ubicada en la cima de la pirámide, con vistas panorámicas de la ciudad y los volcanes.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://www.identidadpuebla.com/wp-content/uploads/2021/06/PortalesCholula3.jpeg" loading="lazy" alt="Portal Guerrero">
                <div class="slide-content">
                    <h3>Portal Guerrero</h3>
                    <p>Centro histórico con restaurantes, cafés y tiendas de artesanías locales.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://images.unsplash.com/photo-1629813366051-b58137b2792c?w=800" loading="lazy" alt="Zócalo">
                <div class="slide-content">
                    <h3>Zócalo de Cholula</h3>
                    <p>Plaza principal con el Ex Convento de San Gabriel y mercados tradicionales.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://lugares.inah.gob.mx/images/museos/portada/_thumb1/387_A_000_IMG_3323.jpg" loading="lazy" alt="Museo de Sitio de Cholula">
                <div class="slide-content">
                    <h3>Museo de Sitio de Cholula</h3>
                    <p>El Museo de Sitio de Cholula exhibe la historia y cultura de la zona arqueológica, destacando la Gran Pirámide y su importancia prehispánica a través de artefactos, maquetas e información interactiva.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="https://lh5.googleusercontent.com/p/AF1QipN_LFKlmNzS4ZJMObi5oAKKgiSMkdjrAQeg-ts_" loading="lazy" alt="La Casa de Frida">
                <div class="slide-content">
                    <h3>La Casa de Frida</h3>
                    <p>Restaurante conocido por su deliciosa variedad de platos tradicionales mexicanos en un ambiente acogedor y colorido.</p>
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
                <img src="https://th.bing.com/th/id/R.07c67b646bcc1b72ba852322448a6edd?rik=Z93Dh4Hwg3DpUQ&pid=ImgRaw&r=0" loading="lazy" alt="Gran Pirámide de Cholula">
                <h3>Gran Pirámide de Cholula</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 15 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Tomar cualquier colectivo con dirección "Pirámide"</p>
                    <p>🚕 Taxi: 5 minutos, aproximadamente $50 MXN</p>
                    <a href="https://www.tripadvisor.com.mx/Attraction_Review-g609126-d1432208-Reviews-or20-Great_Pyramid_of_Cholula-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
            <!-- Card 2: Zona Arqueológica de Cholula -->
            <div class="transport-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Gran_Pir%C3%A1mide_de_Cholula%2C_Puebla%2C_M%C3%A9xico%2C_2013-10-12%2C_DD_10.JPG/1280px-Gran_Pir%C3%A1mide_de_Cholula%2C_Puebla%2C_M%C3%A9xico%2C_2013-10-12%2C_DD_10.JPG" loading="lazy" alt="Zona Arqueológica de Cholula">
                <h3>Zona Arqueológica de Cholula</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 15 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Pirámide"</p>
                    <p>🚕 Taxi: 5 minutos, aproximadamente $50 MXN</p>
                    <a href="https://www.inah.gob.mx/zonas/zona-arqueologica-de-cholula" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
            <!-- Card 3: Iglesia de Santa María Tonantzintla -->
            <div class="transport-card">
                <img src="https://d2dzi65yjecjnt.cloudfront.net/816945-1.jpg" loading="lazy" alt="Iglesia de Santa María Tonantzintla">
                <h3>Iglesia de Santa María Tonantzintla</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 25 minutos</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Tonantzintla"</p>
                    <p>🚕 Taxi: 10 minutos, aproximadamente $70 MXN</p>
                    <a href="https://retodiario.com/cultura/2021/09/17/iglesia-de-tonantzintla-caracteristicas-leyenda-barroco-arquitectura-puebla/#google_vignette" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
            <!-- Card 4: Convento de San Gabriel -->
            <div class="transport-card">
                <img src="https://thumbs.dreamstime.com/b/convento-de-san-gabriel-en-cholula-m%C3%A9xico-124441655.jpg" loading="lazy" alt="Convento de San Gabriel">
                <h3>Convento de San Gabriel</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 10 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "San Gabriel"</p>
                    <p>🚕 Taxi: 5 minutos, aproximadamente $50 MXN</p>
                    <a href="https://tourbly.com.mx/atraccion/ex-convento-de-san-gabriel/" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
            <!-- Card 5: Portal Guerrero de Cholula -->
            <div class="transport-card">
                <img src="https://www.escapadah.com/u/fotografias/m/2023/8/11/f1280x720-24609_156284_5050.png" loading="lazy" alt="Portal Guerrero de Cholula">
                <h3>Portal Guerrero de Cholula</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 5 minutos desde el zócalo</p>
                    <a href="https://www.mexicodestinos.com/lugares/portal-guerrero" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
            <!-- Card 6: Museo de Sitio de cholula -->
            <div class="transport-card">
                <img src="https://lugares.inah.gob.mx/images/museos/portada/_thumb1/387_A_000_IMG_3323.jpg" loading="lazy" alt="Museo de Sitio de Cholula">
                <h3>Museo de Sitio de Cholula</h3>
                <div class="transport-option">
                    <h4>Desde el Centro de Cholula</h4>
                    <p>🚶‍♂️ Caminando: 12 minutos desde el zócalo</p>
                    <p>🚌 Ruta Local: Colectivo con dirección "Museo"</p>
                    <p>🚕 Taxi: 5 minutos, aproximadamente $45 MXN</p>
                    <a href="https://tourbly.com.mx/atraccion/museo-de-sitio-de-cholula/" target="_blank" class="btn">Más Información</a>
                </div>
            </div>
        </div>
    </section>

    <section id="hospedaje" class="accommodation">
    <h2>Dónde Hospedarse</h2>
    <div class="accommodation-grid">
        <!-- Hotel 1: Collection O Las Iglesias -->
        <div class="hotel-card">
            <img src="https://y.cdrst.com/foto/hotel-sf/ea660/granderesp/collection-o-las-iglesias-general-f8ea542.jpg" loading="lazy" alt="Collection O Las Iglesias">
            <h3>Collection O Las Iglesias</h3>
            <p class="price">Desde $1,500 MXN/noche</p>
            <p>Hotel de estilo colonial en el centro de San Pedro Cholula, cerca del Santuario de la Virgen de los Remedios.</p>
            <div class="amenities">
                <span>WiFi</span>
                <span>Piscina</span>
                <span>Restaurante</span>
                <span>Gimnasio</span>
            </div>
            <a href="https://tourbly.com.mx/hoteles/collection-o-las-iglesias/" target="_blank" class="btn">Reservar</a>
        </div>
        <!-- Hotel 2: Hotel Casa Calli -->
        <div class="hotel-card">
            <img src="https://pix10.agoda.net/hotelImages/367462/0/df62e2f6336f47fcf99f1b6ecb394041.jpeg?s=1024x768" loading="lazy" alt="Hotel Casa Calli">
            <h3>Hotel Casa Calli</h3>
            <p class="price">Desde $1,200 MXN/noche</p>
            <p>Ubicación céntrica con fácil acceso a la Gran Pirámide de Cholula y el Convento de San Gabriel.</p>
            <div class="amenities">
                <span>WiFi</span>
                <span>Estacionamiento</span>
                <span>Spa</span>
            </div>
            <a href="https://tourbly.com.mx/hoteles/hotel-casa-calli/" target="_blank" class="btn">Reservar</a>
        </div>
        <!-- Hotel 3: Maria Sofia Hotel Posada -->
        <div class="hotel-card">
            <img src="https://i.travelapi.com/lodging/5000000/4220000/4212000/4211998/41d6a18e_z.jpg" loading="lazy" alt="Maria Sofia Hotel Posada">
            <h3>Maria Sofia Hotel Posada</h3>
            <p class="price">Desde $1,000 MXN/noche</p>
            <p>Hotel con jardín, ambiente tranquilo y desayuno incluido. Ideal para familias y viajeros relajados.</p>
            <div class="amenities">
                <span>WiFi</span>
                <span>Jardín</span>
                <span>Desayuno</span>
            </div>
            <a href="https://tourbly.com.mx/hoteles/maria-sofia-hotel-posada/" target="_blank" class="btn">Reservar</a>
        </div>
        <!-- Hotel 4: Villas Hotel Cholula -->
        <div class="hotel-card">
            <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1280x900/133558838.jpg?k=bf72bae2cdcda4372cbbbc7c9e2418286d8457f7a9748f50c3c469224c49b0e6&o=" loading="lazy" alt="Villas Hotel Cholula">
            <h3>Villas Hotel Cholula</h3>
            <p class="price">Desde $900 MXN/noche</p>
            <p>Hotel acogedor a 2 km de la Gran Pirámide de Cholula, con habitaciones confortables y servicio familiar.</p>
            <div class="amenities">
                <span>WiFi</span>
                <span>Estacionamiento</span>
                <span>Servicio de transporte</span>
            </div>
            <a href="https://tourbly.com.mx/hoteles/villas-hotel-cholula/" target="_blank" class="btn">Reservar</a>
        </div>
        <!-- Hotel 5: Estrella de Belem -->
        <div class="hotel-card">
            <img src="https://media.staticontent.com/media/pictures/dbbf8d7f-2d59-4a9a-bb42-b4ebca604398" loading="lazy" alt="Estrella de Belem">
            <h3>Estrella de Belem</h3>
            <p class="price">Desde $2,800 MXN/noche</p>
            <p>Hotel boutique de lujo con habitaciones elegantes y atención personalizada cerca de la Gran Pirámide.</p>
            <div class="amenities">
                <span>WiFi</span>
                <span>Piscina</span>
                <span>Restaurante</span>
            </div>
            <a href="https://tourbly.com.mx/hoteles/estrella-de-belem/" target="_blank" class="btn">Reservar</a>
        </div>
        <!-- Hotel 6: Xoxula by Inmense -->
        <div class="hotel-card">
            <img src="https://pics.tui.com/pics/pics1600x1200/tui/e/e9c8f33f441fb9db092247769a63a475_ocpprod.jpg" loading="lazy" alt="Xoxula by Inmense">
            <h3>Xoxula by Inmense</h3>
            <p class="price">Desde $3,200 MXN/noche</p>
            <p>Hotel de estilo colonial en una calle pintoresca, a solo 4 minutos de la Gran Pirámide de Cholula.</p>
            <div class="amenities">
                <span>WiFi</span>
                <span>Estacionamiento</span>
                <span>Servicio de traslado</span>
            </div>
            <a href="https://tourbly.com.mx/hoteles/xoxula-by-inmense/" target="_blank" class="btn">Reservar</a>
        </div>
        </div>
    </section>


    <section id="restaurantes" class="restaurants">
    <h2>Dónde Comer</h2>
    <div class="restaurant-grid">
        <!-- Card 1: La Casa de Frida -->
        <div class="restaurant-card">
            <img src="https://lh5.googleusercontent.com/p/AF1QipN_LFKlmNzS4ZJMObi5oAKKgiSMkdjrAQeg-ts_" loading="lazy" alt="La Casa de Frida">
            <h3>La Casa de Frida</h3>
            <p class="cuisine">Cocina Mexicana y Latina</p>
            <p>Restaurante conocido por su deliciosa variedad de platos tradicionales mexicanos en un ambiente acogedor y colorido.</p>
            <div class="details">
                <span>$$$ • Abierto: 13:00 - 23:00</span>
                <span>Reservaciones recomendadas</span>
            </div>
            <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g609126-d1830408-Reviews-La_Casa_de_Frida-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html"  class="btn">Reservar Mesa</a>
        </div>
        <!-- Card 2: Cus Cus Cus -->
        <div class="restaurant-card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/d1/27/3a/terrace.jpg" loading="lazy" alt="Cus Cus Cus">
            <h3>Cus Cus Cus</h3>
            <p class="cuisine">Cocina Internacional</p>
            <p>Ofrece una fusión de sabores internacionales en un ambiente moderno y relajado, destacando por su creatividad culinaria.</p>
            <div class="details">
                <span>$$ • Abierto: 12:00 - 22:00</span>
                <span>No requiere reservación</span>
            </div>
            <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g609126-d3502289-Reviews-Cus_Cus_Cus-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html" class="btn">Reservar Mesa</a>
        </div>
        <!-- Card 3: Central de Agaves -->
        <div class="restaurant-card">
            <img src="https://reservandonos-cdn.s3.us-west-2.amazonaws.com/place/3355/logo/Restaurante-Central-de-Agaves-Puebla-con-Reservandonos-17.jpg" loading="lazy" alt="Central de Agaves">
            <h3>Central de Agaves</h3>
            <p class="cuisine">Cocina Mexicana Tradicional</p>
            <p>Especializado en platillos mexicanos auténticos y una amplia selección de mezcales y tequilas en un ambiente rústico.</p>
            <div class="details">
                <span>$$$ • Abierto: 14:00 - 23:00</span>
                <span>Reservaciones recomendadas</span>
            </div>
            <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g609126-d10493110-Reviews-Central_de_Agaves-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html" class="btn">Reservar Mesa</a>
        </div>
        <!-- Card 4: La Lunita -->
        <div class="restaurant-card">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0c/e6/a0/8c/photo0jpg.jpg" loading="lazy" alt="La Lunita">
            <h3>La Lunita</h3>
            <p class="cuisine">Bar y Pub</p>
            <p>Bar-pub que ofrece una variedad de bebidas y platillos en un ambiente relajado y amigable, ideal para pasar una noche agradable.</p>
            <div class="details">
                <span>$$ • Abierto: 18:00 - 02:00</span>
                <span>No requiere reservación</span>
            </div>
            <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g609126-d4085801-Reviews-La_Lunita-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html" class="btn">Reservar Mesa</a>
        </div>
        <!-- Card 5: Mostovoi -->
        <div class="restaurant-card">
            <img src="https://lh5.googleusercontent.com/p/AF1QipPPX4jcAG-YzVzNXIKOrwabvJaF9W_6o3HZzGE0" loading="lazy" alt="Mostovoi">
            <h3>Mostovoi</h3>
            <p class="cuisine">Panadería y Cafetería</p>
            <p>Panadería y cafetería reconocida por su pan artesanal y deliciosos desayunos en un ambiente acogedor y familiar.</p>
            <div class="details">
                <span>$ • Abierto: 07:00 - 15:00</span>
                <span>No requiere reservación</span>
            </div>
            <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g609126-d10026476-Reviews-Mostovoi-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html" class="btn">Reservar Mesa</a>
        </div>
        <!-- Card 6: Corazon de San Pedro -->
        <div class="restaurant-card">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1d/19/e0/1e/ven-y-conoce-nuestra.jpg" loading="lazy" alt="Chez Marie Bistró">
            <h3>Corazón de San Pedro</h3>
            <p class="cuisine">Cocina Francesa, Mexicana y Europea</p>
            <p>Ofrece servicio de mesa, opción para llevar, reservaciones y cuenta con asientos al aire libre. Los clientes elogian la belleza del lugar, la calidad de la comida y el excelente servicio.</p>
            <div class="details">
                <span>$$$ • Abierto: 14:30 - 00:00</span>
                <span>Reservaciones recomendadas</span>
            </div>
            <a href="https://www.tripadvisor.com.mx/Restaurant_Review-g609126-d12845178-Reviews-Corazon_de_San_Pedro-San_Pedro_Cholula_Central_Mexico_and_Gulf_Coast.html" class="btn">Reservar Mesa</a>
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
                        <a href="#"><img src="{{ asset('assets/images/Log_cholula.webp') }}" loading="lazy" alt="Cholula Logo"></a>
                        <div class="line"></div>
                        <p>Descubre la magia de Cholula, un Pueblo Mágico lleno de historia, cultura y tradición.</p>
                        <div class="social-icons">
                            <!-- <a href="#"><i class="ri-facebook-fill"></i></a>
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                            <a href="#"><i class="ri-instagram-fill"></i></a> -->
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
    <script type="module" src="{{ asset('assets/js/region.js') }}"></script>
</body>
</html>
