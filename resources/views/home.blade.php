@extends('layouts.app')

@section('content')

<div class="page home">

    <section class="carousel-section">

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"></div>
                <div class="swiper-slide"></div>
                <div class="swiper-slide"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="message-wrapper">
            <div class="message-inner container">
                <div class="title"><h2>LARC 2021</h2></div>
                <div class="text"><p>Contagem de dias para o evento mais esperado do ano!</p></div>
                <div class="countdown">
                    <!-- <div><h2 id="month">02</h2><p>meses</p></div> -->
                    <div><h2 id="day">00</h2><p>dias</p></div>
                    <div><h2 id="hour">00</h2><p>horas</p></div>
                    <div><h2 id="min">00</h2><p>minutos</p></div>
                    <div><h2 id="sec">00</h2><p>segundos</p></div>
                </div>
                <!--
                <div class="buttons">
                    <button type="button" class="btn btn-primary">Purchase now</button>
                    <button type="buttoN" class="btn btn-dark">Learn more</button>
                </div>
                -->
            </div>
        </div>

    </section>
    <!--
    <section class="sponsors-section">

        <div class="container1">

            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @for ($i = 0; $i < 10; $i++)
                        <div class="swiper-slide">
                            <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Black.png"/>
                        </div>
                    @endfor

                </div>
            </div>

        </div>

    </section>
    -->
    <section class="about-section">

        <div class="container">

            <div class="section-content">

                <div class="section-title">
                    <h2>Sobre o Pequi Mecânico</h2>
                    <p>O núcleo de robótica da Universidade Federal de Goiás</p>
                </div>

                <div class="texts">
    
                    <div class="item left">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/bg3.jpg') }}"/>
                        </div>
                        <div class="text">
                            <p>Em 2010 quatro alunos da Universidade Federal de Goiás (UFG) foram participar do Torneio de Robótica Universitária (TRU) que acontecia na Universidade federal de Uberlândia (UFU) e, após participar da competição, decidiram fundar um núcleo de robótica com o objetivo de juntar mais pessoas com o mesmo interesse e participar de mais competições, e assim nasceu o Pequi Mecânico.</p>
                            <p>A primeira competição a participarem foi a IEEE Standart Educacional Kit (SEK), categoria esta que até hoje o núcleo marca presença em todos os anos e que o núcleo já conquistou primeiro e terceiro lugar na Latin American Robotic Competition (LARC).</p>
                        </div>
                    </div>
    
                    <div class="item right">
                        <div class="text">
                            <p>Depois dessa primeira participação, o núcleo foi, a cada ano, aderindo a mais categorias, chegando a participar do IEEE Very Small Size Soccer, IEEE OPEN, Robocup Humanoid Racing, Robocup Simulation 2D, Open Flight (Desafio de Robótica Petrobrás), Robocup Humanoid Soccer, Robocup @home.</p>
                            <p>Além das competições, o núcleo participou de diversos projetos educacionais, levando a robótica a diversas cidades do interior de Goiás com minicursos, workshops, eventos demonstrativos e parcerias com prefeituras no treinamento de alunos e professores da rede pública.</p>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset('assets/img/home1.jpg') }}"/>
                        </div>
                    </div>
    
                    <div class="item left">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/home2.jpg') }}"/>
                        </div>
                        <div class="text">
                            <p>Aqueles quatro alunos, em 2010, não tinham ideia do que eles estavam criando, mas, conseguiram acender uma chama no coração de muitas pessoas que foram abraçando a ideia de criar não só um núcleo de robótica, mas uma grande família de desenvolvedores e entusiastas que sonham em poder democratizar, e desmistificar a robótica como algo de outro mundo, tornando-se uma referência na área em todo o centro oeste.</p>
                        </div>
                    </div>
    
                </div>

            </div>

        </div>

    </section>

    <section class="teams-section">

        <div class="container">

            <div class="section-content">

                <div class="section-title">
					<h2>Equipes</h2>
					<p>Conheça as equipes que fazem parte do Pequi Mecânico</p>
                </div>

                <div class="teams">

                    <div class="team">
                        <div class="team-inner">
                            <a href="{{ url('equipes/@home') }}" class="team-link">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/equipes/home/primeiro_robo.jpg') }}"/>
                                </div>
                                <div class="text">
                                    <h2>@HOME</h2>
                                    <p>A liga RoboCup @Home visa desenvolver tecnologia de serviço e robô de assistência para futuras aplicações domésticas pessoais.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="team">
                        <div class="team-inner">
                            <a href="{{ url('equipes/humanoide') }}" class="team-link">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/equipes/humanoide/2.jpg') }}"/>
                                </div>
                                <div class="text">
                                    <h2>Humanóide</h2>
                                    <p>Desenvolvem robôs autônomos com plano corporal humano e sentidos humanos capazes de jogar futebol</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="team">
                        <div class="team-inner">
                            <a href="{{ url('equipes/sek') }}" class="team-link">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/equipes/sek/sek2.jpg') }}"/>
                                </div>
                                <div class="text">
                                    <h2>SEK</h2>
                                    <p>Conheça a porta de entrada do núcleo, onde estudantes tem contato com conceitos base de robótica!</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="team">
                        <div class="team-inner">
                            <a href="{{ url('equipes/vsss') }}" class="team-link">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/equipes/vsss/vss1.jpg') }}"/>
                                </div>
                                <div class="text">
                                    <h2>VSSS</h2>
                                    <p>Conheça a equipe que tem como objetivo de desenvolver a pesquisa em visão, controle, eletrônica e estrutura com partidas de futebol!</p>
                                </div>
                            </a>
                        </div>  
                    </div>
                
                </div>
        
            </div>

        </div>

    </section>

    <!-- <section class="section2-section">

        <div class="container">

            <div class="section2-content">

                <div class="section-title">
                    <h2>We have built a Amazing Landing Page Multi purpose kit</h2>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="icon-box">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <h4>Responsive</h4>
                            <p>Lorem ipsum dolor sit amet consec tetur itaque autem neque adipi sicing elit repudiandae fugiat illo.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="icon-box">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <h4>Responsive</h4>
                            <p>Lorem ipsum dolor sit amet consec tetur itaque autem neque adipi sicing elit repudiandae fugiat illo.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="icon-box">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <h4>Responsive</h4>
                            <p>Lorem ipsum dolor sit amet consec tetur itaque autem neque adipi sicing elit repudiandae fugiat illo.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="icon-box">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                            <h4>Responsive</h4>
                            <p>Lorem ipsum dolor sit amet consec tetur itaque autem neque adipi sicing elit repudiandae fugiat illo.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section> -->

    <!-- <section class="section3-section">

        <div class="container">

            <div class="section3-content">

                <div class="section-title">
                    <h2>Features of Minutes</h2>
                    <p>Suspendisse egestas mattis rhoncus pellen tesque euismod erat at sed do eiusmod tempor posuere molestie lorem lectus interdum augue</p>
                </div>

                <div class="row">
                    <div class="col-md-4 fc-inner">
                        <div class="fc-thumb">
                            <img src="https://theme.express/minutes/images/other/2.jpg" class="img-responsive" alt="">
                        </div>
                        <h4>Marketing Concepts</h4>
                        <p>Sed commodo suscipit neque et libero sed finibus. Morbi elit nulla, rutrum eu nulla eu, lacinia tincidunt ligula. </p>
                        <a href="#" class="btn btn-primary btn-xs">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4 fc-inner">
                        <div class="fc-thumb">
                            <img src="https://theme.express/minutes/images/other/3.jpg" class="img-responsive" alt="">
                        </div>
                        <h4>Device Optimized</h4>
                        <p>Sed commodo suscipit neque et libero sed finibus. Morbi elit nulla, rutrum eu nulla eu, lacinia tincidunt ligula. </p>
                        <a href="#" class="btn btn-primary btn-xs">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <div class="col-md-4 fc-inner">
                        <div class="fc-thumb">
                            <img src="https://theme.express/minutes/images/other/4.jpg" class="img-responsive" alt="">
                        </div>
                        <h4>Target Audience</h4>
                        <p>Sed commodo suscipit neque et libero sed finibus. Morbi elit nulla, rutrum eu nulla eu, lacinia tincidunt ligula. </p>
                        <a href="#" class="btn btn-primary btn-xs">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="section4-section">

        <div class="container">

            <div class="section4-content">

                <div class="section-title">
					<h2>What our clients say</h2>
					<p>Suspendisse egestas mattis rhoncus pellen tesque euismod erat at sed do eiusmod tempor posuere molestie lorem lectus interdum augue</p>
                </div>
                
                <div class="swiper-container">

                    <div class="swiper-wrapper">

                        @for ($i = 0; $i < 10; $i++)
    
                            <div class="swiper-slide">
                                <div class="quote-item">
                                    <div class="quote-info">
                                        <p class="quote">It's iaculis lectus sed mattis nibh phasellus iaculis pulvinar purus vitae ligula interdum at mattis dui sodales non neque sit amet enim</p>
                                        <div class="author">
                                            <div class="author-avatar">
                                                <img src="{{ 'https://theme.express/minutes/images/quote/'.($i%2==0?'1':'2').'.jpg' }}" alt="">
                                            </div>
                                            <div class="author-info">
                                                <div class="name">Joseph Doe</div>
                                                <div class="company">@company</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        @endfor

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

            </div>

        </div>

    </section> -->

</div>

@endsection