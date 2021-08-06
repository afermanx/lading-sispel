
<!-- About -->
<div id="a-sispel" class="basic-4">
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/details-2-office-team-work.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>A Sispel</h2>

                        <p class="text-justify">A SISPEL é uma importante integradora de soluções para tecnologia da informação, com mais de 16 anos de atuação no Estado de Rondônia, congrega importantes softwares e soluções para implementar na Gestão Pública, em especial destaque nas ferramentas de Gestão para Prefeituras e Administrações Publicas (Executivo e Legislativo).</p>
                        <p>Atendemos a:</p>
                        <div class="row counters">


                            <div class="col-lg-4 col-6 text-center">
                              <span class="count">14</span>
                              <p>Prefeituras</p>
                            </div>

                            <div class="col-lg-4 col-6 text-center">
                              <span class="count">4</span>
                              <p>Câmaras</p>
                            </div>

                            <div class="col-lg-4 col-6 text-center">
                              <span class="count">28</span>
                              <p>Autarquias</p>
                            </div>


                          </div>
                </div> <!-- end of col -->



            </div> <!-- end of row -->

        </div> <!-- end of container -->

    </div> <!-- end of basic-2 -->
</div> <!-- end of basic-4 -->
<!-- end of about -->

@section('jsMain')
<script>
$(document).ready(function(){
    // Se tiveres outro botão ou outro "Trigger" para ser usado, modifica a linha abaixo para por exemplo: $('.bt-fechar, .outraClassFecha').click(function(){
    $('.sispel').click(function(){

        $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

    });
});





</script>


@endsection
