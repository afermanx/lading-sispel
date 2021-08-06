
<!-- Contact -->
<div id="contato" class="form-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contato</h2>
                <ul class="list-unstyled li-space-lg">
                    <li class="address">Não hesite em nos ligar ou enviar uma mensagem através do formulário de contato</li>
                    <li><i class="fas fa-map-marker-alt"></i>R. Maringá, 2535 - Nova Brasília, Ji-Paraná - RO, 78964-000</li>
                    <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:0034249142">(69) 3424-9142</a></li>
                    <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:contato@sispel-ro.com.br">contato@sispel-ro.com.br</a></li>
                </ul>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.039895086686!2d-61.9094374855852!3d-10.884570224330893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93c99a8bbc4cc595%3A0x3eca10c0ab5c4fec!2sCecam-ro!5e0!3m2!1sen!2sbr!4v1628206021863!5m2!1sen!2sbr" allowfullscreen></iframe>
                </div>
            </div> <!-- end of col -->
            <div class="col-lg-6">

                <!-- Contact Form -->
                <form id="contactForm" data-toggle="validator" data-focus="false">
                    <div class="form-group">
                        <input type="text" class="form-control-input" id="cname" required>
                        <label class="label-control" for="cname">Nome</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control-input" id="cemail" required>
                        <label class="label-control" for="cemail">Email</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control-textarea" id="cmessage" required></textarea>
                        <label class="label-control" for="cmessage">Sua Mensagem</label>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group checkbox">
                        <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>Eu li e concordo com a declaração da Sispel <a href="privacy-policy.html">Política de Privacidade</a> e <a href="terms-conditions.html">Termos e Condições</a>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control-submit-button">Enviar Mensagem</button>
                    </div>
                    <div class="form-message">
                        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                    </div>
                </form>
                <!-- end of contact form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-2 -->
<!-- end of contact -->
