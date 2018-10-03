<!DOCTYPE html>
<html lang="en">
<head>
    <title>Health</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health medical template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/main.css') }}">
</head>
<body>

<div class="super_container" id="home">


    <!-- Header -->
    @include('frontend.includes.header')

    <!-- Menu -->
    @include('frontend.includes.menu')

    <!-- Home -->
    <div class="home">

        @yield('frontend.background_image')

        <div class="home_container">
            @yield('frontend.home_container')
        </div>
    </div>

    <!-- Info Boxes -->
    <div class="about pb-5 pt-5" id="about">
        <br>
        <div class="container">
            <div class="row mb-4">
                <div class="col text-center">
                    <div class="section_title">Sobre</div>
                    {{--<div class="section_subtitle">to choose from</div>--}}
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col">
                    <div class="text-dark">
                        A <strong>UROFISIO PRIME</strong> é uma clínica de fisioterapia focada no bem estar e saúde do paciente. Com atendimento humanizado a clínica oferece os melhores tratamentos em Fisioterapia, Pilates, Fisioterapia em Uroginecologia e traz o que há de mais moderno em tratamentos estéticos.<br><br>A clínica conta com profissionais altamente capacitados:<br><br><strong>Leda Valadares Gomes</strong> - Responsável Técnica da Clínica com Crefito nº 246234-F. Fisioterapeuta e pós graduanda em Uroginecologia e Obstetrícia, com qualificação em Ventosaterapia, Dry Needling e Pilates.<br><br><strong>Larissa Nunes Rocha</strong> - Crefito 246215-F. Fisioterapeuta com qualificação em Ventosaterapia, Aprimoramento em Respiratória e Pilates.<br><br><strong>Aline França</strong> - Crefito 229957-F. Fisioterapeuta e pós graduanda em Uroginecologia e Obstetrícia, com qualificação em Ventosaterapia, UTI, Kinesiotape e Pilates.<br><br><strong>Jeronilce Torres</strong> <strong>de Araujo&nbsp;</strong>- Crefito 247564-F. Fisioterapeuta com qualificação em Micro agulhamento, Criolipólise, Massagem Estética Modeladora, Drenagem Linfática, Pré e Pós Operatório, Massagem Relaxante e Anti Stress, Limpeza de Pele Profunda - Associada a Eletrodermofototerapia, Peelings Físicos, Químicos e Mecânicos, Carboxterapia e Foto Depilação.
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>

    <!-- Services -->
    <div class="services pt-5 pb-5" id="services">
        <br>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">Serviços</div>
                    {{--<div class="section_subtitle">to choose from</div>--}}
                </div>
            </div>
            <br><br>
            <div class="row mt-5">

                @php
                    $services = [
                        [
                            'title' => 'Fisioterapia',
                            'text' => 'Reabilitação com profissionais qualificados e tecnologia avançada',
                            'bg_image' => '/images/physiotherapy.jpg',
                            'description' => 'Na Urofisio Prime você faz sua reabilitação com profissionais altamente qualificados, nas especialidades de Ortopedia, Neurologia, Geriatria, Pediatria e Saúde da Mulher, utilizando as principais e modernas técnicas de Cinesioterapia, Ventosaterapia, Dry Needling, Pilates, Eletroterapia e outras técnicas com utilização de tecnologia avançada.'
                        ],
                        [
                            'title' => 'Estética',
                            'text' => 'Tratamentos avançados para você ter mais saúde e beleza.',
                            'bg_image' => '/images/aesthetics.jpg',
                            'description' => 'Na Urofisio Prime você encontra tratamentos estéticos personalizados, respeitando a individualidade de cada organismo, utilizando-se dos mais qualificados produtos e equipamentos de tecnologia avançada.<br><br>Dispomos de técnicas de Drenagem Linfática modo Le Duc, Massagem Modeladora, Massagem Relaxante, Eletroterapias (Heccus, Eletrolipólise e outros), Pré e Pós Operatório de Cirurgias Estéticas, Limpeza de Pele, Peeling Mecânico (Cristal e Diamante), microagulhamento e Criolipólise. '
                        ],
                        [
                            'title' => 'Saúde da Mulher',
                            'text' => 'Tratamento especializado nas disfunções uroginecológica.',
                            'bg_image' => '/images/woman_health.jpg',
                            'description' => 'Na Urofisio Prime você encontra um programa de reabilitação das disfunções uroginecológicas, como o tratamento das incontinências urinárias e fecais, constipação, urgência miccional, disfunções sexuais (vaginismo, dispareunia e outras), dor perineal, pré e pós operatório de cirurgias colo-proctológicas e biofeedback.'
                        ],
                        [
                            'title' => 'Pilates',
                            'text' => 'Técnica eficaz que ajuda a evitar doenças e eliminar stress.',
                            'bg_image' => '/images/pilates.jpg',
                            'description' => 'Na Urofisio Prime você encontra um estúdio de Pilates moderno para realização atividades que ajudam na prevenção de doenças e reabilitação física, auxiliando no equilíbrio e coordenação, com exercícios seguros para homens, mulheres, adolescentes, idosos e gestantes.<br><br>O Pilates auxilia no tratamento de doenças como escoliose, artrite, osteoporose, influenciando positivamente a memória, circulação e dores lombares. Alivia o stress e tensões do dia a dia, melhorando a qualidade do sono e a qualidade de vida.'
                        ],
                    ];
                @endphp
                @foreach($services as $index => $service)
                    <!-- Icon Box -->
                    <div class="col-xl-3 col-lg-3">
                        <div class="icon_box mb-2">
                            <div class="icon_box_title_container d-flex flex-column align-items-center justify-content-start">
                                <div class="icon_box_icon">
                                    <img class="rounded-circle" src="{{$service['bg_image']}}" alt="">
                                </div>
                                <div class="icon_box_title mt-2">{{$service['title']}}</div>
                            </div>
                            <div class="icon_box_text text-center">
                                {{$service['text']}}
                            </div>
                            <div class="button home_button" data-toggle="modal" data-target="#service_modal_{{$index}}" style="margin: 36px auto 0 auto;">
                                <a href="#"><span>Saiba mais</span><span>Saiba mais</span></a>
                            </div>
                        </div>
                    </div>
                    @include('frontend.services_modal', compact('service', 'index'))
                @endforeach
            </div>
        </div>
    </div>

    <!-- Cursos -->
    <div class="courses pb-5 pt-5" id="courses">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">Cursos</div>
                    {{--<div class="section_subtitle">to choose from</div>--}}
                </div>
            </div>
            <br>
            <div class="row mt-5">
                @php
                    $courses = [
                        [
                            'title' => 'Drenagem Linfática',
                            'day' => '10',
                            'month' => 'Nov',
                            'date' => '10/11/2018 20:00',
                            'bg_image' => 'images/drainage.jpg',
                            'description' => 'Breve...'
                        ],
                        [
                            'title' => 'Limpeza de Pele',
                            'day' => '17',
                            'month' => 'Nov',
                            'date' => '17/11/2018 09:31',
                            'bg_image' => 'images/cleaning.jpg',
                            'description' => 'Breve...'
                        ],
                        [
                            'title' => 'Massagem Modeladora',
                            'day' => '24',
                            'month' => 'Nov',
                            'date' => ' 24/11/2018 21:00',
                            'bg_image' => 'images/massage.jpg',
                            'description' => 'Breve...'
                        ]
                    ];
                @endphp
                @foreach($courses as $index => $course)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <div class="event-date">{!! $course['day'] !!}<small>{!! $course['month'] !!}</small></div>
                            <img class="card-img-top" src="{{$course['bg_image']}}" alt="">
                            <div class="card-body">
                                <h4 class="card-title text-dark">{{$course['title']}}</h4>
                                {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                                <div class="button home_button" data-toggle="modal" data-target="#course_modal_{{$index}}">
                                    <a href="#"><span>Saiba mais</span><span>Saiba mais</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('frontend.courses_modal', compact('course', 'index'))
                @endforeach
            </div>
        </div>
        <br>
    </div>

    <!-- Galeria -->
    <div class="galleries pb-5 pt-5" id="gallery">

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">Galeria</div>
                    {{--<div class="section_subtitle">to choose from</div>--}}
                </div>
            </div>
            <br>
            <div class="mt-4">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-light bg-main-color active" id="pills-main-tab" data-toggle="pill" href="#pills-main" role="tab" aria-controls="pills-home" aria-selected="true" style="margin: 0 5px 0 5px">
                            Principal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light bg-main-color" id="pills-galeria-tab" data-toggle="pill" href="#pills-galerie" role="tab" aria-controls="pills-profile" aria-selected="false" style="margin: 0 5px 0 5px">
                            Galeria
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-main" role="tabpanel" aria-labelledby="pills-main-tab">
                        @include('frontend.tab_main')
                    </div>
                    <div class="tab-pane fade" id="pills-galerie" role="tabpanel" aria-labelledby="pills-galeria-tab">
                        @include('frontend.tab_galerie')
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>

    <!-- Footer -->
    @include('frontend.includes.footer')
</div>

<script src="{{ mix('js/main.js') }}"></script>
</body>
</html>