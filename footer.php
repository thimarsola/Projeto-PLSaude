</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer clr-white-500">

    <!-- cta -->
    <div class="container">
        <div class="footer__cta bg-primary-500 d-flex gp-2 ai-center jc-between">
            <p>Vamos conversar? Ligue-nos a qualquer momento!</p>

            <!-- content -->
            <div class="footer__cta__content">
                <a class="link-white-500" rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" title="Vamos conversar?" target="_blank"><?= CONTACT['phone']['01']; ?></a>
                <p><small>Ligue agora</small></p>
            </div>
            <!-- end of content -->
        </div>
    </div>
    <!-- end of cta -->

    <!-- content -->
    <div class="footer__content bg-dark-blue-500 t-justify">
        <div class="container">
            <!-- row -->
            <div class="footer__content__row grid">
                <!-- brand -->
                <div class="footer__content__row__brand">
                    <img src="<?= image('logo-rodape.svg'); ?>" alt="PL Saúde Ocupacional" title="PL Saúde Ocupacional" loading="lazy">

                    <!-- content -->
                    <div class="footer__content__row__brand__content mt-4">
                        <p class="mb-2">A PL Saúde Ocupacional é um braço do Grupo PL Engenharia e parte integrante da holding Capital 33</p>

                        <ul class="d-flex gp-1 ai-center">
                            <li class="mr-2">
                                <a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" title="Siga a PL Saúde no Facebook" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li class="mr-2">
                                <a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" title="Siga a PL Saúde no Instagram" target="_blank">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= CONTACT['linkedin']; ?>" title="Siga a PL Saúde no Linkedin" target="_blank">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end of content -->
                </div>
                <!-- end of brand -->

                <!-- sitemap -->
                <div class="footer__content__row__sitemap">
                    <!-- header -->
                    <div class="footer__content__row__sitemap__header mb-2">
                        <h2>Mapa do site</h2>
                    </div>
                    <!-- end of header -->

                    <?php
                    if(is_home()){
                        wp_nav_menu([
                            'theme_location' => 'header_home',
                            'container_class' => ''
                        ]);
                    }else{
                        wp_nav_menu([
                            'theme_location' => 'header_menu',
                            'container_class' => ''
                        ]);
                    }
                    ?>
                </div>
                <!-- end of sitemap -->

                <!-- contact -->
                 <div class="footer__content__row__contact">
                     <!-- header -->
                     <div class="footer__content__row__contact__header mb-2">
                         <h2>Contato</h2>
                     </div>
                     <!-- end of header -->

                     <ul>
                         <li>
                             <i class="icon-clock mr-1"></i>
                             Seg-Sex: 7:00 às 17:00
                         </li>
                         <li>
                             <a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= CONTACT['addressLink']; ?>" target="_blank" title="Venha conhecer a PL Saúde">
                                 <i class="icon-target mr-1"></i>
                                 <?= CONTACT['address']; ?>
                             </a>
                         </li>
                         <li>
                             <a class="link-white-500" rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" target="_blank" title="Vamos conversar pelo telefone?">
                                 <i class="icon-phone mr-1"></i>
                                 <?= CONTACT['phone']['01']; ?>
                             </a>
                         </li>
                         <li>
                             <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], '<i class="icon-whatsapp mr-1"></i>'.CONTACT['whatsapp']['number'], 'link-white-500', 'Vamos conversar pelo WhatsApp?') ?>
                         </li>
                     </ul>
                 </div>
                <!-- end of contact -->

                <!-- about -->
                 <div class="footer__content__row__about">
                     <!-- header -->
                      <div class="footer__content__row__about__header mb-2">
                          <h2>PL Saúde Ocupacional</h2>
                      </div>
                     <!-- end of header -->

                     <p>A PL Saúde Ocupacional conta com profissionais altamente qualificados e especializados prontos para atendê-los de forma personalizada, pensando sempre na melhor solução de problemas e no melhor custo benefício para a sua empresa.</p>
                 </div>
                <!-- end of about -->
            </div>
            <!-- end of row -->
        </div>
    </div>
    <!-- end of content -->

    <!-- copyright -->
    <div class="footer__content__copyright bg-light-gray-500 clr-gray-500 t-center py-1">
        <div class="container">
            <small><?= date('Y') . " - " . SITE['name'] ?> &COPY; - Todos os direitos reservados</small>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
    <div class="footer__developer bg-primary-500 py-1">
        <div class="container">

            <!-- row -->
            <div class="footer__developer__row d-flex gp-1 jc-between ai-center">

                <!-- agency -->
                <div class="footer__developer__row__agency">
                    <p>
                        <small>
                            Desenvolvido por
                            <b><a class="link-white-500" rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b>
                        </small>
                    </p>
                </div>
                <!-- end of agency -->

                <!-- validator -->
                <?php if(!is_404()): ?>
                    <div class="footer__developer__row__validator">
                        <?php
                        $protocols = array('http://', 'http://www.', 'https://', 'https://www.', 'www.');

                        if (is_home()) {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl'));
                        }elseif(is_single()){
                            $urlBase = str_replace($protocols, "", get_the_permalink());
                        }
                        else {
                            $urlBase = str_replace($protocols, "", get_bloginfo('wpurl')) . '/' . (get_page_uri());
                        }
                        ?>

                        <a class="link-white-500" rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                            <small>
                                <i class="icon-html mr-1"></i>
                                W3C Validator
                            </small>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- end of validator -->
            </div>
            <!-- end of row -->

        </div>
    </div>
    <!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

</body>

</html>