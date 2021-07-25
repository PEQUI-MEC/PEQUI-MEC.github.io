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
                <div class="title"><h2>LARC 2020</h2></div>
                <div class="text"><p>Lorem ipsum dolor sit amet ipsum lectus neumew nulla rhoncus eu quam sit amet varius lectus eget ligula eleifend rutrum ac vel justo.</p></div>
                <div class="countdown">
                    <div><h2>02</h2><p>meses</p></div>
                    <div><h2>03</h2><p>dias</p></div>
                    <div><h2>10</h2><p>horas</p></div>
                    <div><h2>12</h2><p>minutos</p></div>
                    <div><h2>50</h2><p>segundos</p></div>
                </div>
                <div class="buttons">
                    <button type="button" class="btn btn-primary">Purchase now</button>
                    <button type="buttoN" class="btn btn-dark">Learn more</button>
                </div>
            </div>
        </div>

    </section>

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
                            <img src="https://wallpaperaccess.com/full/783261.jpg">
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum feugiat enim, id varius risus. Curabitur hendrerit orci turpis, vitae fringilla diam molestie nec. Praesent eu lectus sed mauris cursus porta. Aliquam convallis dictum dolor. Sed porta bibendum ante quis dignissim. Sed tristique ex eget rutrum congue. Nunc elit nisi, dictum eget egestas ac, pulvinar eget erat. Sed consequat ultricies imperdiet. Cras porttitor sit amet nibh sit amet congue.</p>
                            <p>Maecenas gravida sapien ac nunc ultricies, ac tincidunt enim interdum. Nam nisi dolor, vehicula in aliquam a, aliquam sed mauris. Duis sagittis hendrerit facilisis. Duis ullamcorper neque vitae magna eleifend semper. Praesent ultrices neque orci, at tristique nulla viverra vel. In ac lorem mauris. Proin sollicitudin porta quam, varius aliquam justo consequat quis.</p>
                        </div>
                    </div>
    
                    <div class="item right">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum feugiat enim, id varius risus. Curabitur hendrerit orci turpis, vitae fringilla diam molestie nec. Praesent eu lectus sed mauris cursus porta. Aliquam convallis dictum dolor. Sed porta bibendum ante quis dignissim. Sed tristique ex eget rutrum congue. Nunc elit nisi, dictum eget egestas ac, pulvinar eget erat. Sed consequat ultricies imperdiet. Cras porttitor sit amet nibh sit amet congue.</p>
                            <p>Maecenas gravida sapien ac nunc ultricies, ac tincidunt enim interdum. Nam nisi dolor, vehicula in aliquam a, aliquam sed mauris. Duis sagittis hendrerit facilisis. Duis ullamcorper neque vitae magna eleifend semper. Praesent ultrices neque orci, at tristique nulla viverra vel. In ac lorem mauris. Proin sollicitudin porta quam, varius aliquam justo consequat quis.</p>
                        </div>
                        <div class="thumb">
                            <img src="https://wallpaperaccess.com/full/783261.jpg">
                        </div>
                    </div>
    
                    <div class="item left">
                        <div class="thumb">
                            <img src="https://wallpaperaccess.com/full/783261.jpg">
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum feugiat enim, id varius risus. Curabitur hendrerit orci turpis, vitae fringilla diam molestie nec. Praesent eu lectus sed mauris cursus porta. Aliquam convallis dictum dolor. Sed porta bibendum ante quis dignissim. Sed tristique ex eget rutrum congue. Nunc elit nisi, dictum eget egestas ac, pulvinar eget erat. Sed consequat ultricies imperdiet. Cras porttitor sit amet nibh sit amet congue.</p>
                            <p>Maecenas gravida sapien ac nunc ultricies, ac tincidunt enim interdum. Nam nisi dolor, vehicula in aliquam a, aliquam sed mauris. Duis sagittis hendrerit facilisis. Duis ullamcorper neque vitae magna eleifend semper. Praesent ultrices neque orci, at tristique nulla viverra vel. In ac lorem mauris. Proin sollicitudin porta quam, varius aliquam justo consequat quis.</p>
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

                    @for ($i = 0; $i < 4; $i++)

                    <div class="team">
                        <div class="team-inner">
                            <div class="thumb">
                                <img src="https://wallpaperaccess.com/full/783261.jpg">
                            </div>
                            <div class="text">
                                <h2>Título da equipe</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra varius tellus. Mauris ut mi vel urna tempus aliquet. Praesent eget dolor sit amet risus suscipit sagittis. Mauris quis lobortis neque. Quisque euismod, lorem a pulvinar mollis, leo sem semper dolor, in tempus quam lorem lobortis justo. In ultrices eros posuere nibh blandit, at auctor neque placerat. Integer dapibus hendrerit velit id auctor. Nunc eu risus erat. Aenean pulvinar cursus justo sit amet scelerisque. Suspendisse nec tincidunt tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse finibus finibus dolor, sed dapibus neque convallis in. Sed faucibus, magna sit amet elementum faucibus, sapien est tincidunt augue, vel vulputate nulla dolor nec nisl. Etiam blandit urna et dui porta pulvinar. Nunc venenatis fermentum diam pulvinar blandit.</p>
                            </div>
                        </div>
                    </div>

                    @endfor

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