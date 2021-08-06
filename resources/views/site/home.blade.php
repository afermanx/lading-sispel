@extends('THEMES.SITE.main')
@section('titlePage','SISPEL - Sistema Integrados de Software')
@section('content')
@include('site.pages.header')
@include('site.pages.about')
@include('site.pages.soluction')
@include('site.pages.contact')
    <!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Aprovado por</h5>

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-1.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-2.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-3.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-4.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-5.png" alt="alternative">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="images/customer-logo-6.png" alt="alternative">
                                    </div>
                                </div>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->










    <!-- Details Cecam -->
    <!-- Details Cecam 1 -->
	<div id="cecam" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Sistema para Gestão de Administração Público</h3>
                    <hr>
                    <h5>CECAM</h5>
                    <p>Sistemas informatizados para as áreas financeiras e administrativas da gestão pública, desenvolvidos para trabalhar de forma integrada, compartilhando as informações do banco de dados. Desenvolvido com os mais avançados recursos sobre regras de negócios, assim como tecnologia da informação.</p>


                    <a class="btn-solid-reg mfp-close page-scroll" href="https://www.cecam.com.br/site/">Confira o Site</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Voltar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cecam-->
    <!-- end of details cecam -->

    <!-- Details viaescolar -->
    <!-- Details viaescolar -->
	<div id="viaescolar" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Sistema para Gestão de Transporte Escolar</h3>
                    <hr>
                    <h5>Via Escolar</h5>
                    <p>Ferramenta registrada e patenteada, com foco no atendimento ao transporte escolar público, a qual possui excelência na integração de todos os processos que envolvem desde a contratação, prestação da atividade, fiscalização, liquidação da despesa e controle.

                        A fim de contribuir para melhoria do transporte escolar, desenvolvemos um produto único, exclusivo e parametrizado as necessidades dos entes públicos que realizam o transporte de educandos.

                        Nossa plataforma é inovadora, moderna e adequada as necessidades, desenhada e entregue como uma solução tecnológica mais qualificada que atualmente existe no mercado, com uma contínua modernização e melhoria.</p>


                    <a class="btn-solid-reg mfp-close page-scroll" href="https://viaescolar.com/">Confira o Site</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Voltar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of viaescolar-->
    <!-- end of details viaescolar -->

    <!-- Details svgs -->
    <!-- Details svgs -->
	<div id="svgs" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-1.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Sistema para Gestão de Saúde Pública</h3>
                    <hr>
                    <h5>SVGS</h5>
                    <p>Tem como objetivo a descentralização da coleta de informações de várias frentes de atuação, bem como o processamento dos dados, tratamento e análise das atividades, permitindo uma grande rede de vigilância em epidemiológica, trazendo assim avanços significativos ao combate de diversas cepas, em especial a pandemia da SARS-CoV-2, bem como, poderá ser utilizada em outras ações de combate a vírus e vetores epidêmicos, tais como H1N1, e até mesmo o combate contra a dengue.</p>


                    <a class="btn-solid-reg mfp-close page-scroll" href="https://svgs.com.br/">Confira o Site</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Voltar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of svgs-->
    <!-- end of details svgs -->

    <!-- Details Lightbox 2 -->
	<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-lightbox-2.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <h3>Atendemos a:</h3>
                    <hr>
                    {{-- <h5>Core feature</h5>
                    <p>The emailing module basically will speed up your email marketing operations while offering more subscriber control.</p>
                    <p>Do you need to build lists for your email campaigns? It just got easier with Evolo.</p> --}}
                    <ul class="list-unstyled li-space-lg" style="font-size: 20px">
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">14 Prefeituras</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">4 Câmaras</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-check"></i><div class="media-body">28 Autarquias Municipais</div>
                        </li>

                    </ul>
                    {{-- <a class="btn-solid-reg mfp-close page-scroll" href="#request">REQUEST</a> --}}
                     <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Voltar</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox 2 -->
    <!-- end of details lightboxes -->
@endsection

