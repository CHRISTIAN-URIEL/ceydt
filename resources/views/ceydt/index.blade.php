<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CEYDT Clúster</title>
    <link rel="icon" href="{{asset('assets/images/iconos/ceydt.ico')}}" type="image/x-icon">
    <!-- dependencias o paquetes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('ceydt.index') }}">
                <img src="{{ asset('assets/images/ceydt-1-min.webp') }}" loading="lazy" alt="CEYDT Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#Inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Nosotros">Filosofía</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Servicios">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Ejes">Rectores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Instituciones">Instituciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Directorio">Directorio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Mesas">Mesas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Foro">Foro</a>
                    </li>
                    <!-- Menu desplgable de regiones -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRegiones" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Regiones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownRegiones">
                            <!-- <li><a class="dropdown-item" href="region-puebla.html">Puebla....</a></li> -->
                            <li><a class="dropdown-item" href="{{ route('regiones.RegCholula')}}">Cholula</a></li>
                            <li><a class="dropdown-item" href="{{ route('regiones.RegAtlixco')}}">Atlixco</a></li>
                            <li><a class="dropdown-item" href="{{ route('regiones.RegZacatlan')}}">Zacatlan</a></li>
                            <!-- <li><a class="dropdown-item" href="region-otras.html">Sierra Oriental....</a></li> -->
                        </ul>
                    </li>
                    <!-- Menu desplgable de regiones -->
                    <li class="nav-item">
                        <a class="nav-link" href="#Contacto">Contacto</a>
                    </li>
                </ul>
                <a href="{{ route('ceydt.ecommerce') }}" class="btn btn-brand ms-lg-3">E-commerce</a>
            </div>
        </div>
    </nav>

    <!-- INICIO -->
    <section id="Inicio" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">CEYDT</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">CLÚSTER DE EDUCACIÓN Y DESARROLLO DE TALENTO</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="#Nosotros" class="btn btn-brand me-2">Conoce más</a>
                        <a href="#Contacto" class="btn btn-light ms-2">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOSOTROS -->
    <section id="Nosotros" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Filosofía</h1>
                        <div class="line"></div>
                        <p class="text-justify">Somos una comunidad educativa colaborativa que trabaja para desarrollar y atraer talento,
                            formando profesionales e investigadores de alta calidad, capaces de proponer soluciones científicas
                            e innovadoras en diferentes sectores, como empresas, gobierno e instituciones.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="150">
                    <img src="{{ asset('assets/images/filosofia-min.webp') }}" loading="lazy" alt="Nosotros">
                </div>
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="150">
                    <h2>Misión</h2>
                    <p class="mt-3 mb-4">Ser el eje transversal que integre a la comunidad educativa de Puebla, Tlaxcala y México, estableciendo una red colaborativa que potencie el desarrollo y atracción de talento nacional e internacional.</p>
                    <h2>Visión</h2>
                    <p>Consolidarnos como el clúster educativo más influyente y de mayor alcance en México, reconocido internacionalmente por su capacidad de atraer, desarrollar y conectar talento de excelencia.</p>
                    <h2>Filosofía</h2>
                    <p>Creemos en la educación como motor de transformación social y en el
                        poder del talento humano como factor de desarrollo e innovación.
                        Desde una perspectiva de colaboración y solidaridad, impulsamos una
                        comunidad educativa que prioriza la calidad, el compromiso y la
                        pertinencia. Fomentamos un liderazgo ético, orientado a la equidad
                        social y al respeto por el medio ambiente. Nuestro trabajo se enfoca en
                        construir un futuro mejor para Puebla y para el mundo, donde el
                        conocimiento y la innovación sirvan como pilares para el desarrollo
                        humano y económico sustentable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section id="Servicios" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Servicios y Beneficios </h1>
                        <div class="line"></div>
                        <p>Ofrecemos servicios integrales para instituciones, estudiantes, empresas y aliados estratégicos; fortaleciendo la colaboración, innovación e impacto social.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-book-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Para Instituciones Educativas</h5>
                        <p>Visibilidad en proyectos, redes de colaboración académica, acceso a congresos y talleres exclusivos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Para Comunidad Estudiantil</h5>
                        <p>Formación integral en temas innovadores, oportunidades de vinculación laboral, becas y apoyos educativos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-building-2-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Para Empresas y Sector Productivo</h5>
                        <p>Acceso a talento preparado, proyectos de innovación y desarrollo científico y fortalecimiento de la responsabilidad social empresarial (RSE).</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-building-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Para Aliados Estratégicos y Sociedad </h5>
                        <p>Espacios para la colaboración multisectorial, Promoción y difusión, Incentivos para proyectos con impacto educativo, Acceso a eventos abiertos y Promoción de la equidad y sostenibilidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EJES RECTORES -->
    <section id="Ejes" class="section-padding bg-light">
        <div class="container">
        <div class="row text-center">
            <div class="col-12" data-aos="fade-down">
            <h1 class="display-4 fw-semibold">Ejes Rectores</h1>
            <div class="line"></div>
            <p>Lineamientos para la formación de talento y el desarrollo educativo.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3" data-aos="fade-up">
                <h3>Talento Humano Pertinente</h3>
                <p>Una respuesta integral a las necesidades de la zona, la problemática, la sociedad y el desarrollo.</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <h3>Calidad y Actualidad Profesional</h3>
                <p>Fomentamos la excelencia y la competitividad en la formación de talento, garantizando altos estándares y constante actualización.</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <h3>Prospección y Proyección</h3>
                <p>Un enfoque colaborativo y participativo que impulsa el futuro educativo y profesional de Puebla.</p>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <h3>Compromiso y respeto</h3>
                <p>Prácticas responsables para un futuro susentable y ético.</p>
            </div>
        </div>
        </div>
    </section>

        <!-- INSTITUCIONES Y ALIADOS -->
    <section id="Instituciones" class="section-padding">
        <div class="container">
        <div class="row text-center">
            <div class="col-12" data-aos="fade-down">
            <h1 class="display-4 fw-semibold">Instituciones Afiliadas y Aliados Estratégicos</h1>
            <div class="line"></div>
            <p>El Clúster de Educación y Desarrollo de Talento de Puebla reúne a una
                amplia comunidad educativa, empresarial y social comprometida con la
                transformación del sector educativo y el impulso del desarrollo de talento
                en la región.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6" data-aos="fade-up">
                <h3>Instituciones Participantes</h3>
                <p>
                    El clúster está integrado por 154 miembros, de los cuales 130 son instituciones educativas:
                </p>
                <li>Universidades públicas y privadas de Puebla, representando la mayoría de los integrantes</li>
                <li>Bachilleratos y colegios de nivel medio superior de la región</li>
                <li>Instituciones educativas públicasy privadas de los estados de Tlaxcala, Guerrero y Veracruz</li>
                <li>Organismos e instituciones nacionales e internacionales relacionadas con la educacion.</li>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h3>Aliados Estratégicos</h3>
                <p>
                    Además de las instituciones educativas, el clúster cuenta con una red
                    diversa de más de 70 aliados estratégicos, entre los que destacan:
                </p>
                <li><b>Cámaras y asociaciones empresariales </b>
                    que impulsan la vinculaciónentre el sector educativo y el productivo.
                </li>
                <li><b>Asociaciones civiles y fundaciones</b>
                    dedicadas a la promoción del acceso a la educación y el desarrollo social.
                </li>
                <li><b>Organismos educativos nacionales e internacionales,</b>
                    así como institutos de investigación que contribuyen con su experiencia y recursos en la generación de conocimiento e innovación.
                </li>
                <li><b>Proveedores de servicios y tecnología educativa,</b>
                    que fortalecen las capacidades del clúster en el ámbito académico y científico.
                </li>
            </div>
        </div>
        </div>
    </section>

    <!-- DIRECTORIO -->
    <section id="Directorio" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Directorio</h1>
                        <div class="line"></div>
                        <h3>Clúster de Educación y Desarrollo de Talento</h3>
                        <p>Conoce a nuestro equipo directivo.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('assets/images/Dir_Denise.webp') }}" loading="lazy" alt="Denise Costes Intriago">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Denise Costes Intriago</h4>
                            <p class="mb-0 text-white">Directora de Vinculación ICUM</p>
                            <p class="mb-0 text-white">Presidente del Clúster de Educación</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="team-member image-zoom">
                        <div class="image-zoom-wrapper">
                            <img src="{{ asset('assets/images/Dir_Ana.webp') }}" loading="lazy" alt="Ana Lilia Barbosa Villaseñor">
                        </div>
                        <div class="team-member-content">
                            <h4 class="text-white">Ana Lilia Barbosa Villaseñor</h4>
                            <p class="mb-0 text-white">Directora del Clúster de Educación - CEO Agora Educación</p>
                            <p class="mb-0 text-white">Directora General Comunicación y Logística Habla</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MESAS SECTORIALES -->
    <section id="Mesas" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Mesas Sectoriales</h1>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="150">
                    <p>Las Mesas Sectoriales son espacios estratégicos de diálogo y colaboración entre universidades, empresas y organismos públicos, organizados por áreas de interés o industrias clave. Estas reuniones permiten identificar las competencias y habilidades que demandan los sectores productivos, promoviendo así la alineación de los programas educativos con las necesidades del mercado laboral.</p>
                    <p>Entre los sectores involucrados destacan:</p>
                    <ul>
                        <li>Tecnologías de la información</li>
                        <li>Energías renovables</li>
                        <li>Industria automotriz</li>
                        <li>Turismo</li>
                        <li>Salud y biotecnología</li>
                    </ul>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="150">
                    <img src="{{ asset('assets/images/Mesa_sectorial.webp') }}" loading="lazy" alt="Mesas Sectoriales" class="img-fluid rounded">
                    <p>A través de estas mesas, se diseñan proyectos conjuntos como programas de capacitación, prácticas profesionales e iniciativas de investigación aplicada, fortaleciendo la competitividad regional. Además, se generan propuestas de políticas públicas y alianzas estratégicas que impulsan tanto el crecimiento económico como el desarrollo social en Puebla y las regiones participantes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FORO DE TALENTO HUMANO -->
    <section id="Foro" class="section-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <div class="section-title">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/iconos/ceydt.ico') }}" loading="lazy" alt="Foro de Talento Humano" class="img-fluid" style="max-width: 150px;">
                        </div>
                        <h1 class="display-4 fw-semibold">Foro de Talento Humano</h1>
                        <div class="line"></div>
                        <p class="lead">Reflexión, análisis y estrategias para el desarrollo del talento humano.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- Sección 1: ¿Qué es el Foro de Talento Humano? -->
                <div class="col-md-6 col-lg-3" data-aos="fade-right">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">¿Qué es el Foro de Talento Humano?</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="ri-checkbox-circle-fill text-primary me-2"></i>
                                    Es un evento anual que reúne a expertos, académicos, empresarios, estudiantes y líderes de opinión.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-checkbox-circle-fill text-primary me-2"></i>
                                    Incluye conferencias magistrales, paneles de discusión, talleres interactivos y espacios de networking.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sección 2: Objetivos Principales -->
                <div class="col-md-6 col-lg-3" data-aos="fade-right" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Objetivos Principales</h2>
                            <ol class="list-unstyled">
                                <li class="mb-3">
                                    <i class="ri-arrow-right-circle-fill text-primary me-2"></i>
                                    <strong>Inspirar y conectar:</strong> Reunir a actores clave para compartir experiencias y mejores prácticas.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-arrow-right-circle-fill text-primary me-2"></i>
                                    <strong>Fomentar la innovación educativa:</strong> Presentar proyectos, tecnologías y metodologías transformadoras.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Sección 3: Temáticas Relevantes -->
                <div class="col-md-6 col-lg-3" data-aos="fade-left" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Temáticas Relevantes</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="ri-arrow-right-s-line text-primary me-2"></i>
                                    Competencias digitales para la nueva era laboral.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-arrow-right-s-line text-primary me-2"></i>
                                    Tendencias en liderazgo y gestión del talento.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-arrow-right-s-line text-primary me-2"></i>
                                    Inclusión y diversidad en el desarrollo humano.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-arrow-right-s-line text-primary me-2"></i>
                                    Impacto de la inteligencia artificial y la automatización en la educación y el empleo.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Sección 4: Resultados Destacados -->
                <div class="col-md-6 col-lg-3" data-aos="fade-left" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Resultados Destacados</h2>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <i class="ri-checkbox-circle-fill text-primary me-2"></i>
                                    Creación de una agenda educativa alineada con las necesidades del mercado laboral.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-checkbox-circle-fill text-primary me-2"></i>
                                    Reconocimientos a proyectos innovadores en el ámbito educativo y social.
                                </li>
                                <li class="mb-3">
                                    <i class="ri-checkbox-circle-fill text-primary me-2"></i>
                                    Vinculación entre estudiantes, universidades y empresas mediante actividades prácticas y sesiones de networking.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section id="Contacto" class="section-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Contacto</h1>
                    <div class="line"></div>
                    <p>Estamos aquí para ayudarte. ¡Contáctanos!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" data-aos="fade-down" data-aos-delay="250">
            <div class="col-lg-8">
                <form action="{{ route('contacto.store') }}" method="POST" class="row g-3 p-lg-5 p-4 bg-white theme-shadow">
                    @csrf <!-- Token CSRF de Laravel -->
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" class="form-control" name="asunto" placeholder="Asunto" required>
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea name="mensaje" rows="5" class="form-control" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="form-group col-lg-12 d-grid">
                        <button type="submit" class="btn btn-brand">Enviar Mensaje</button>
                    </div>
                </form>
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
                        <a href="#"><img src="{{ asset('assets/images/ceydt-1-min.webp') }}" loading="lazy" alt="CEYDT Logo"></a>
                        <div class="line"></div>
                        <p>Clúster de Educación y Desarrollo de Talento - Puebla, México.</p>
                        <div class="social-icons">
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="module" src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
