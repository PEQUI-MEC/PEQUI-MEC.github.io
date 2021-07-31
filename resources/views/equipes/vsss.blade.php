@extends('layouts.app')

@section('content')

<div class="page inner teams vsss">

    <div class="inner-header">

        <div class="background">
            <div class="background-inner">
                <img src="{{ asset('assets/img/equipes/vsss/_DSC5981.jpg') }}"/>
            </div>
        </div>

        <div class="header-content">
            <div class="container title">
                <h1>Equipe <b>VSSS</b></h1>
                <small>IEEE Very Small Size Soccer</small>
            </div>
        </div>

    </div>
    
    <section>

        <div class="container">

            <div class="texts">
                <p>Na categoria IEEE Very Small Size Soccer, dois times de três robôs autônomos se enfrentam em partidas de futebol, sem intervenção humana. Cada equipe desenvolve um software que utiliza visão computacional para estimar a localização dos robôs e da bola, decide a estratégia de jogo e envia comandos para os robôs através de rádio.</p>
                <p>Os robôs desenvolvidos têm até 7,5×7,5×7,5 cm, são do tipo diferencial e implementam um sistema de controle responsável por executar os comandos recebidos do computador.</p>
                <p>Neste projeto existem quatro áreas de pesquisa: Visão, Controle, Eletrônica e Estrutura.</p>
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
                    <p><b>Capitã(o) de Equipe:</b> Werikcyano Lima Guimarães - <a href="mailto:werikguimaraes@gmail.com">werikguimaraes@gmail.com</a></p>
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