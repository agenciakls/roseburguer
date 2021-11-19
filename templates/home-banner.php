<div class="home-banner">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-12 h-100 d-flex flex-column justify-content-around">
                <div class="content-banner">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo-white-rose.png" class="img-banner" alt="Logo Fábio Freitas">
                </div>
                <div class="list-buttons">
                    <h3>FAÇA SEU PEDIDO!</h3>
                    <div class="buttons-content">
                        <div class="single-buttons">
                            <a href="<?php echo InfoVar::show('ifood'); ?>" target="_blank">
                                <button class="button-pedido button-ifood"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logos/img-ifood-white.png" alt=""></button>
                                <p>CLUBE IFOOD</p>
                            </a>
                        </div>
                        <div class="single-buttons">
                            <a href="<?php echo InfoVar::show('uber'); ?>" target="_blank">
                                <button class="button-pedido button-uber"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logos/img-ubereats-white.png" alt=""></button>
                                <p>UBER PASS</p>
                            </a>
                        </div>
                        <div class="single-buttons">
                            <a href="<?php echo InfoVar::show('goomer'); ?>" target="_blank">
                                <button class="button-pedido button-goomer"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logos/img-goomer-white.png" alt=""></button>
                                <p>MELHORES PREÇOS</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="home-banner-socials">
                    <h3>Nossos Links</h3>
                    <div class="list-socials">
                        <div class="single-social"><a href="<?php echo InfoVar::show('whatsapp'); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></div>
                        <div class="single-social"><a href="<?php echo InfoVar::show('instagram'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></div>
                        <div class="single-social"><a href="<?php echo InfoVar::show('facebook'); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></div>
                        <div class="single-social"><a href="<?php echo InfoVar::show('telefone'); ?>" target="_blank"><i class="fas fa-phone"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>