<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mediación Familiar Privada</title>

    <!-- Links -->
    <link rel="stylesheet" href="{{ asset('/build/assets/app-927a87df.css') }}" />
    <link rel="stylesheet" href="{{ asset('/build/assets/app-bd4f8341.css') }}" />

    <!-- Scripts -->
    <script type="module" src="{!! asset('/build/assets/app-eec74061.js') !!}" async></script>
    <script type="module" src="{!! asset('/build/assets/_commonjsHelpers-23102255.js') !!}" async></script>
    <script type="module" src="{!! asset('/build/assets/bootstrap-0d7e4f50.js') !!}" async></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Icono -->
    <link rel="icon" href="{{ asset('images/a&b.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/a&b.ico') }}" type="image/x-icon">

    <!-- Init Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf7jQQpAAAAADsX_QPKIe4c82-JEXnqQ5ukaFe-"></script>
    <script>
        document.addEventListener('submit', function (e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('6Lf7jQQpAAAAADsX_QPKIe4c82-JEXnqQ5ukaFe-', {
                    action: 'submit'
                }).then(function (token) {
                    let form = e.target;
                    let input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'g-recaptcha-response';
                    input.value = token;

                    form.appendChild(input);
                    form.submit();
                });
            });
        });

    </script>

    <!-- Vite -->
    @vite(['resources/css/app.css',
    'resources/js/app.js',
    'resources/js/bootstrap.js'])
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="p-3 p-auto">
                    <a class="navbar-brand link-body-emphasi" href="#seccion_inicio">
                        <img src="{{ asset('images/logo_v3.png') }}" class="logo">
                        <span>Abogado Mediador</span>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a href="#seccion_inicio" class="nav-link" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item"><a href="#servicio_abogado" class="nav-link">Servicios Abogado</a></li>
                        <li class="nav-item"><a href="#servicio_mediacion" class="nav-link">Servicios Mediación</a></li>
                        <li class="nav-item"><a href="#seccion_contacto" class="nav-link">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Seccion Inicio -->
    <div class="container-fluid">
        <div class="section_inicio">
            <div class="transparencia-inicio">
                <section id="seccion_inicio">
                    <div class="row justify-content-center align-items-center text-center">
                        <div class="col-md-12 cabecera">
                            <h1>"ABOGADO MEDIADOR"</h1>
                            <p>Miguel Andrés Arriagada Cuadro</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Contacto whatsapp -->
    <div class="container">
        <section>
            <div class="row justify-content-center align-items-center text-center whapp_inter scroll-content fadeTop">
                <div class="col-md-6 what">
                    <h5>Contáctanos vía Whatsapp</h5>
                </div>
                <div class="col-md-6 what-ico">
                    <a class="link-body-emphasis"
                        href="https://api.whatsapp.com/send?phone=56930512849&text=Hola,%20solicito%20informaci%C3%B3n%20para%20una%20cotizaci%C3%B3n"
                        target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-whatsapp fa-4x custom-icon-fan"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Seccion Servicios Abogado -->
    <section id="servicio_abogado">
        <div class="container section_four scroll-content fadeTop mb-5">
            <div class="row justify-content-center align-items-center text-center mb-3">
                <h2>Servicios Abogado</h2>
            </div>
            {{-- 1 --}}
            <div class="row justify-content-start align-items-center">
                <div class="col-md-8 text-start">
                    <h5 class="m-0">Incluye todos los siguientes servicios con sus valores:</h5>
                </div>
                <div class="col-md-2 text-start">
                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseServicios" role="button"
                        aria-expanded="false" aria-controls="collapseServicios">
                        <i class="fa-solid fa-chevron-down fa-2x custom-icon"></i>
                    </a>
                </div>
            </div>
            <div class="row text-start">
                <div class="multi-collapse collapse" id="collapseServicios" style="">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">- Autorización para salir del país: $350.000 pesos.</li>
                        <li class="list-group-item">- Demanda de divorcio de común acuerdo: $400.000 pesos.</li>
                        <li class="list-group-item">- Demanda de declaración de bien familiar: $500.000 pesos.</li>
                        <li class="list-group-item">- Demanda de violencia intrafamiliar: $500.000 pesos.</li>
                        <li class="list-group-item">- Demanda de divorcio unilateral: $550.000 pesos.</li>
                        <li class="list-group-item">- Demanda de pensión de alimentos: $600.000 pesos.</li>
                        <li class="list-group-item">- Demanda de cese de pensión de alimentos: $600.000 pesos.</li>
                        <li class="list-group-item">- Demanda de aumento de pensión de alimentos: $600.000 pesos.</li>
                        <li class="list-group-item">- Demanda de relación directa y regular: $600.000 pesos.</li>
                        <li class="list-group-item">- Pago de deudas de pensión de alimentos con los fondos de AFP: 20%
                            total de la deuda.</li>
                        <li class="list-group-item">- Posesión efectiva intestada o sin testamento: $250.000.</li>
                        <li class="list-group-item">- Inscripción de propiedades en el Conservador de Bienes Raíces:
                            $200.000.</li>
                        <li class="list-group-item">- Estudio de títulos: $300.000.</li>
                        <li class="list-group-item">- Servicio de corretaje de propiedades respecto a la gestión de
                            arriendos y compraventas de inmuebles.</li>
                        <li class="list-group-item">- Confección de contratos de arriendo, compraventa, promesa de
                            compraventa: $100.000.</li>
                        <li class="list-group-item">- Demanda por despido injustificado en derecho laboral: Pago
                            conforme a lo ganado en juicio.</li>
                    </ul>
                </div>
            </div>
            {{-- 2 --}}
            <div class="row justify-content-start align-items-center">
                <div class="col-md-8 text-start">
                    <h5 class="m-0">Orientaciones jurídicas $ 30.000 pesos por una hora, sobre las siguientes
                        materias: </h5>
                </div>
                <div class="col-md-2 text-start">
                    <a class="collapsed" data-bs-toggle="collapse" href="#collapseOrientaciones" role="button"
                        aria-expanded="false" aria-controls="collapseOrientaciones">
                        <i class="fa-solid fa-chevron-down fa-2x custom-icon"></i>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="multi-collapse collapse text-start" id="collapseOrientaciones">
                    <ol class="list-group list-group-numbered list-group-flush">
                        <li class="list-group-item">Mediación Familiar.</li>
                        <li class="list-group-item">Derecho sobre el pago de pensión de alimentos.</li>
                        <li class="list-group-item">Derecho de Relación Directa y Regular con los hijos, hijas o
                            adolescentes.</li>
                        <li class="list-group-item">Posesiones efectivas (con o sin testamento).</li>
                        <li class="list-group-item">Derecho de herencias.</li>
                        <li class="list-group-item">Derecho laboral.</li>
                    </ol>
                    <div class="col-md-12 p-3">
                        <p>“Todas las orientaciones jurídicas se realizarán por un Abogado habilitado para el
                            ejercicio de la profesión, con una duración de una hora aproximadamente, que se llevarán
                            a cabo, mediante videoconferencia y tendrán un valor de 30. 0000 pesos por consulta”.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Seccion Servicio Mediación -->
    <section id="servicio_mediacion">
        <div class="container section_two scroll-content fadeTop mb-5">

            <div class="row justify-content-center align-items-center text-center">
                <h2>Materias que son objeto de una Mediación Familiar</h2>
                <div class="row justify-content-center align-items-center py-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Pensión de Alimentos</h5>
                        </div>
                        <div class="col-md-4">
                            <h5>Relación Directa y Regular con los hijos, hijas o adolescentes</h5>
                        </div>
                        <div class="col-md-4">
                            <h5>Cuidado Personal Compartido de los hijos, hijas o adolescentes</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <a class="" data-bs-toggle="collapse" href="#collapseAlimentos" role="button"
                                aria-expanded="false" aria-controls="collapseAlimentos">
                                <i class="fa-solid fa-scale-balanced fa-3x custom-icon"></i>
                            </a>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="multi-collapse collapse" id="collapseAlimentos" style="">
                                        <h5>¿De qué se trata?</h5>
                                        <p>“Es la obligación de dar alimentos, fijada o aprobada judicialmente.
                                            Tratándose de niños, niñas y adolescentes, incluye, además, enseñanza
                                            básica, media y el aprendizaje de alguna profesión u oficio”
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseRelacion" role="button"
                                aria-expanded="false" aria-controls="collapseRelacion">
                                <i class="fa-solid fa-scale-balanced fa-3x custom-icon"></i>
                            </a>
                            <div class="col-md-12">
                                <div class="multi-collapse collapse" id="collapseRelacion" style="">
                                    <h5>¿De qué se trata?</h5>
                                    <p>“Aquella que propende a que el vínculo familiar entre el padre o madre que no
                                        ejerce el cuidado personal y su hijo se mantenga a través de un contacto
                                        periódico y estable”</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapseCuidado" role="button"
                                aria-expanded="false" aria-controls="collapseCuidado">
                                <i class="fa-solid fa-scale-balanced fa-3x custom-icon"></i>
                            </a>
                            <div class="col-md-12">
                                <div class="multi-collapse collapse" id="collapseCuidado" style="">
                                    <h5>¿De qué se trata?</h5>
                                    <p>“Es un régimen de vida que procura estimular la corresponsabilidad de ambos
                                        padres que viven separados, en la crianza y educación de los hijos comunes,
                                        mediante un sistema de residencia que asegure su adecuada estabilidad y
                                        continuidad”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-md-12">
                    <h2>¿Qué se entiende por mediación familiar?</h2>
                    <p>La mediación familiar es un sistema de resolución de conflictos a que llegan las partes,
                        ayudadas
                        por
                        un tercero imparcial llamado mediador familiar. El mediador los ayuda a obtener una solución
                        que
                        surja de ellos mismos, a través de sesiones realizadas fuera del tribunal, en un ambiente
                        que
                        favorece el entendimiento.</p>
                </div>
                <div class="col-md-12">
                    <h2>¿Qué beneficios otorga una mediación familiar?</h2>
                    <p><u>Ahorro de dinero:</u> El costo de la mediación familiar es inferior en comparación al pago de
                        los
                        honorarios que se deben realizar al abogado patrocinante y evitándose los costos de un
                        juicio.
                        <br><br><u>Permite ahorrar tiempo:</u> Debido a que una audiencia de mediación dura menos que un
                        proceso
                        judicial ante los Tribunales de Familia. Los Acuerdos llegados en la Mediación Familiar, son
                        aprobados por el tribunal de familia, que tienen el mismo valor que una sentencia judicial
                        firme
                        o ejecutoriada.<br><br><u>Llegar a un acuerdo es voluntario:</u> Si las partes no llegan a
                        acuerdo,
                        se
                        retoma
                        el curso normal de un juicio. Promueve la igualdad de condiciones entre las partes. Es
                        confidencial.</p>
                </div>
                <div class="col-md-12">
                    <h2>¿En qué casos la mediación familiar es obligatoria?</h2>
                    <p>Pension de alimentos.<br>Relación directa y regular con los hijos (régimen de
                        visitas).<br>Cuidado
                        personal de los hijos (antiguamente llamada “tuición”).</p>
                </div>
            </div>

            <!-- Valores -->
            <div class="row justify-content-center align-items-center text-center">
                <h2 class="p-4">Valores año 2024</h2>
                <div class="row justify-content-center align-items-md-center text-center">
                    <div class="card border-light col-md-10">
                        <div class="card-header border">
                            <h3>Mediación con o sin acuerdo en la sesión familiar</h3>
                            <h2>$100.000</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5>Incluyen las tres materias mediables: Pensión de alimentos, Relación Directa y
                                    Regular y Cuidado Personal de los niños, niñas o adolescentes.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <h2>Territorio Jurisdiccional</h2>
                    <div class="col-md-4 p-3">
                        <h5>El Bosque / La Cisterna / La Granja / La Pintana / Lo Espejo / Pedro Aguirre Cerda / San
                            Joaquín / San Miguel / San Ramón</h5>
                    </div>
                    <div class="col-md-4 p-3">
                        <h5>Santiago / Cerrillos / Conchalí / Estación Central / Huechuraba / Independencia / La Florida
                            / La Reina / Las Condes / Lo Barnechea / Macul / Ñuñoa / Peñalolen / Providencia / Quilicura
                            / Recoleta / Renca / Vitacura</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseImportante" role="button"
                            aria-expanded="false" aria-controls="collapseImportante">
                            <i class="fa-solid fa-circle-exclamation fa-5x p-1 custom-icon-arrow"></i>
                        </a>
                        <h4>IMPORTANTE</h4>
                    </div>
                    <div class="multi-collapse collapse" id="collapseImportante" style="">
                        <p>“No se agendarán horas sin previo abono de la sesión base”<br>
                            “No se arriesgue y llegue a un buen acuerdo, para no tener problemas judiciales a
                            futuro”</p>
                        <p>*Algunos mediadores familiares que se encuentran en el mercado, "NO SON ABOGADOS”. En nuestro
                            centro de mediación familiar privado, el servicio será realizado por
                            un abogado mediador, quien se encuentra en pleno conocimiento de las reformas y leyes
                            vigentes en materia de Familia</p>
                        <p>*Antes de agendar hora con el abogado mediador, deben ser abonados los $70.000 pesos que
                            corresponden a la sesión base (sesión sin acuerdo), si durante la sesión se llega a un
                            acuerdo, se deberá abonar los $30.000 pesos faltantes y posteriormente, se redactará el acta
                            de mediación y se enviará al tribunal competente</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- <!-- Seccion Valores -->
    <div class="container section_five scroll-content fadeTop mb-5">
        <section id="seccion_valores">
            <div class="row justify-content-center align-items-center text-center">
                <h2>Valores año 2023</h2>
                <div class="row justify-content-center align-items-md-center text-center">
                    <div class="card border-light col-md-10">
                        <div class="card-header border">
                            <h3>Mediación con o sin acuerdo en la sesión familiar</h3>
                            <h2>$100.000</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5>Incluyen las tres materias mediables: Pensión de alimentos, Relación Directa y
                                    Regular y Cuidado Personal de los niños, niñas o adolescentes.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <h2>Territorio Jurisdiccional</h2>
                    <div class="col-md-4 p-3">
                        <h5>El Bosque / La Cisterna / La Granja / La Pintana / Lo Espejo / Pedro Aguirre Cerda / San
                            Joaquín / San Miguel / San Ramón</h5>
                    </div>
                    <div class="col-md-4 p-3">
                        <h5>Santiago / Cerrillos / Conchalí / Estación Central / Huechuraba / Independencia / La Florida
                            / La Reina / Las Condes / Lo Barnechea / Macul / Ñuñoa / Peñalolen / Providencia / Quilicura
                            / Recoleta / Renca / Vitacura</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseImportante" role="button"
                            aria-expanded="false" aria-controls="collapseImportante">
                            <i class="fa-solid fa-circle-exclamation fa-5x p-1 custom-icon-arrow"></i>
                        </a>
                        <h4>IMPORTANTE</h4>
                    </div>
                    <div class="multi-collapse collapse" id="collapseImportante" style="">
                        <p>“No se agendarán horas sin previo abono de la sesión base”<br>
                            “No se arriesgue y llegue a un buen acuerdo, para no tener problemas judiciales a
                            futuro”</p>
                        <p>*Algunos mediadores familiares que se encuentran en el mercado, "NO SON ABOGADOS”. En nuestro
                            centro de mediación familiar privado, el servicio será realizado por
                            un abogado mediador, quien se encuentra en pleno conocimiento de las reformas y leyes
                            vigentes en materia de Familia</p>
                        <p>*Antes de agendar hora con el abogado mediador, deben ser abonados los $70.000 pesos que
                            corresponden a la sesión base (sesión sin acuerdo), si durante la sesión se llega a un
                            acuerdo, se deberá abonar los $30.000 pesos faltantes y posteriormente, se redactará el acta
                            de mediación y se enviará al tribunal competente</p>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}

    <!-- Seccion Contacto -->
    <section id="seccion_contacto">
        <div class="container scroll-content fadeTop mb-5">

            <div class="row section_six text-center">
                {{-- INICIO FORMULARIO --}}
                <div class="container">
                    <h2>Contáctanos vía correo electrónico</h2>

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{route('contact.send')}}" method="POST">
                        @csrf
                        <div class="row px-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre" id="nombre"
                                        name="nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Correo Electrónico" id="correo"
                                        name="correo" required>
                                </div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Teléfono / Whatsapp"
                                        id="telefono" name="telefono" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ciudad / Comuna" id="ciudad"
                                        name="ciudad" required>
                                </div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje / Consulta / Asunto"
                                        id="mensaje" name="mensaje" rows="4" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="col-md-12">
                                <button type="submit" class="button effect3">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- FIN FORMULARIO --}}
            </div>

        </div>
    </section>
</body>

<footer class="bg-dark pt-4">
    <div class="container">
        <div class="row justify-content-center align-items-center py-3">
            <div class="col-md-5 text-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d26607.282400474538!2d-70.68559250058553!3d-33.529717720180045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAvenida%20Argentina%209052%2C%20comuna%20de%20La%20Cisterna!5e0!3m2!1ses-419!2scl!4v1694658394755!5m2!1ses-419!2scl"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-md-4">
                <h5>Contacto</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Región Metropolitana</li>
                    <li><i class="fas fa-map-marker-alt"></i> Avenida Argentina 9052, La Cisterna</li>
                    <li><i class="fa-solid fa-mobile-screen-button"></i> Teléfono celular: +56 9 30512849</li>
                    <li><i class="fas fa-phone"></i> Teléfono fijo: +56 2 33455422</li>
                    <li><i class="fas fa-envelope"></i> Correo electrónico: mediacionayb@gmail.com</li>
                    <li><i class="fas fa-scale-balanced"></i> Número de registro de mediador familiar: 7009</li>
                </ul>
            </div>
            <div class="col-md-3 mb-3">
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="link-body-emphasis"
                            href="https://api.whatsapp.com/send?phone=56930512849&text=Hola,%20solicito%20informaci%C3%B3n%20para%20una%20cotizaci%C3%B3n"
                            target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-whatsapp fa-4x custom-icon-fan"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-sm-row justify-content-center align-items-center text-center border-top pt-3">
            <p>Mediaci&oacuten Familiar &copy; - Todos los derechos reservados</p>
        </div>
    </div>
</footer>

</html>
