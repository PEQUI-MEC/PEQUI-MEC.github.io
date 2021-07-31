@extends('layouts.app')

@section('content')

<div class="page inner teams sek">

    <div class="inner-header">

        <div class="background">
            <div class="background-inner">
                <img src="{{ asset('assets/img/equipes/sek/sek1.jpg') }}"/>
            </div>
        </div>

        <div class="header-content">
            <div class="container title">
                <h1>Equipe <b>SEK</b></h1>
                <small>IEEE - Standard Educational Kit </small>
            </div>
        </div>

    </div>
    
    <section>

        <div class="container">

            <div class="texts">
                <p>A SEK (Standard Educational Kit) é uma equipe que tem como objetivo ser a porta de entrada para o núcleo. Os membros têm o primeiro contato com a robótica e seus desafios: o trabalho em equipe, conhecer os conceitos básicos de como estruturar, planejar e organizar a construção de um robô, além de usar a criatividade para lidar com limitações de hardware e executar as provas.</p>
                <p>A equipe é estruturada em montagem e programação, já que o uso do kit LEGO dispensa mexer com a eletrônica e permite focar nos outros aspectos.</p>
                <p>A prova de 2019/2020 é montar um robô "anfíbio" que consiga consertar um gasoduto submerso. Ele tem que ser capaz de encontrar os canos, o gasoduto, identificar as partes faltantes e consertá-las de maneira apropriada. Dois robôs competem ao mesmo tempo, um de cada lado do gasoduto.</p>
            </div>

            <div class="team-wrapper">

                <div class="title">
                    <h1>Conheça a <b>equipe</b></h1>
                    <!--
                    <span></span>
                    <p> Nunc non tempus quam, non faucibus magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                    -->
                </div>
                <div class="texts">
                    <p><b>Capitã(o) de Equipe:</b> Rafael Caetano - <a href="mailto:rafaelcaetano.eng@gmail.com">rafaelcaetano.eng@gmail.com</a></p>
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