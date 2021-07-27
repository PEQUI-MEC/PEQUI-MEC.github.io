@extends('layouts.app')

@section('content')

<div class="page inner teams @home">

    <div class="inner-header">

        <div class="background">
            <div class="background-inner">
                <img src="{{ asset('assets/img/equipes/humanoide/home.jpg') }}"/>
            </div>
        </div>

        <div class="header-content">
            <div class="container title">
                <h1>Equipe <b>@HOME</b></h1>
                <small>RoboCup – @Home </small>
            </div>
        </div>

    </div>
    
    <section>

        <div class="container">

            <div class="texts">
                <!-- <span>RoboCup Soccer Humanoid League<small>KidSize Class</small></span> -->
                <p>A equipe @Home do Pequi Mecânico começou em 2019 com o objetivo de participar da Latin American Competition of Robotics (LARC) na categoria Robocup @Home com o robô Zordon.</p>
                <p>A liga RoboCup @Home visa desenvolver tecnologia de serviço e robô de assistência para futuras aplicações domésticas pessoais. Os robôs precisam realizar tarefas e testes dentro de uma casa simulada, um ambiente realista e não padronizado.</p>
                <p>O foco está nos seguintes domínios: Interação e Cooperação Humano-Robô, Navegação e Mapeamento em ambientes dinâmicos, Visão Computacional e Reconhecimento de Objetos sob condições de luz natural, Manipulação de Objetos, Comportamentos Adaptativos, Integração de Comportamento, Inteligência Ambiental, Padronização e integração de sistemas.</p>
            </div>

            <div class="team-wrapper">

                <div class="title">
                    <h1>Conheça a <b>equipe</b></h1>
                    <!--
                    <span></span>
                    <p> Nunc non tempus quam, non faucibus magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                    -->
                </div>

                <div class="swiper-container">
                    
                    <div class="swiper-pagination"></div>
                    
                    <div class="swiper-wrapper">

                        @foreach ($team as $t)
                        <div class="swiper-slide">

                            <div class="team-member">

                                <div class="team-image">
                                    <img src="{{ $t['image'] }}">
                                </div>

                                <div class="team-desc">

                                    <h3>{{ $t["name"] }}</h3>
                                    <span>{{ $t["description"] }}</span>
                                    <!-- <p>{{ $t["text"] }}</span> -->

                                    @if (!empty($t['social']))

                                        <div class="social">
                                            
                                            @foreach ($t['social'] as $k => $v)
                                                <a href="{{ $v }}"><i class="{{ $k }}"></i></a>
                                            @endforeach

                                        </div>

                                    @endif

                                </div>

                            </div>

                        </div>
                        @endforeach

                    </div>

                </div>

            </div>
            
            <div class="gallery-wrapper">

                <div class="title">
                    <h1>Galeria de <b>Fotos</b></h1>
                    <!--
                    <span></span>
                    <p> Nunc non tempus quam, non faucibus magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                    -->
                </div>

                <div class="swiper-container">

                    <div class="swiper-pagination"></div>

                    <div class="swiper-wrapper">
                        @foreach ($gallery as $src)
                        <div class="swiper-slide">
                            <div class="responsive-square" style="background-image: url({{$src}})"></div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>

                <div class="masonry-grid">

                    @foreach ($gallery as $src)
                        <div class="grid-item"><img src="{{ $src }}"></div>
                    @endforeach
                    
                </div>

            </div>

        </div>

    </section>

</div>

@endsection