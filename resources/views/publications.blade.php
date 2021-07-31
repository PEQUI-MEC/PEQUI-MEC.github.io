@extends('layouts.app')

@section('content')

<div class="page inner teams">

    <div class="inner-header">

        <div class="background">
            <div class="background-inner">
                <img src="{{ asset('assets/img/equipes/home/primeiro_robo.jpg') }}"/>
            </div>
        </div>

        <div class="header-content">
            <div class="container title">
                <h1>Publicações</h1>
                <small>Trabalhos Científicos</small>
            </div>
        </div>

    </div>
    
    <section>

        <div class="container">

            <div class="team-wrapper">

                <div class="title">
                    <h1>Artigos e Trabalhos</b></h1>
                </div>

                <div class="texts links">
                    @foreach ($pubs_general as $p)
                    <a href="{{ $p["link_pdf"] }}" target="_blank" class="link"><p>{{ $p["titulo"] }} - {{ $p["ano"] }}</p></a>
                    @endforeach
                </div>

            </div>

            <div class="team-wrapper">

                <div class="title">
                    <h1>TDP's</b></h1>
                </div>

                <div class="texts">
                    @foreach ($pubs_tdp as $p)
                    <a href="{{ $p["link_pdf"] }}" target="_blank" class="link"><p>{{ $p["ano"] }} - {{ $p["equipe"] }}</p></a>
                    @endforeach
                </div>

            </div>

            <div class="team-wrapper">

                <div class="title">
                    <h1>Repositórios Abertos</b></h1>
                </div>

                <div class="texts">
                    <a href="https://github.com/PEQUI-MEC/" target="_blank" class="link"><p>GitHub - Pequi Mecânico</p></a>
                    <a href="https://github.com/pmec-home/" target="_blank" class="link"><p>GitHub - PMEC @Home</p></a>
                </div>

            </div>

        </div>

    </section>

</div>

@endsection