</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
    <!-- content -->
    <div class="footer__content bg-neutral-500 py-4">
        <div class="container">

            <!-- row -->
             <div class="footer__content__row">
                 <!-- brand -->
                 <img src="<?= image('logo-rodape.svg'); ?>" alt="Clínica Moderna Saúde" title="Clínica Moderna Saúde">
                 <!-- end of brand -->

                 <!-- social -->
                 <div class="footer__content__social">
                     <ul>
                         <li>
                             <a rel="nofollow noreferrer noopener" href="<?= CONTACT['instagram']; ?>" title="Conheça o nosso instagram" target="_blank"><i class="icon-instagram"></i></a>
                         </li>
                         <li>
                             <a rel="nofollow noreferrer noopener" href="<?= CONTACT['facebook']; ?>" title="Conheça o nosso facebook" target="_blank"><i class="icon-facebook"></i></a>
                         </li>
                     </ul>
                 </div>
                 <!-- end of social -->
             </div>
            <!-- end of row -->
        </div>
    </div>
    <!-- end of content -->

    <!-- copyright -->
    <div class="footer__content__copyright bg-neutral-600 py-1">
        <div class="container">
            <small><?= date('Y') . " - " . SITE['name'] ?> &COPY; - Todos os direitos reservados</small>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- developer -->
     <div class="footer__developer bg-primary-500 py-1">
         <div class="container">

             <!-- row -->
             <div class="footer__developer__row">

                 <!-- agency -->
                 <div class="footer__developer__row__agency">
                     <p>Desenvolvido por <b><a rel="nofollow noreferrer noopener" href="<?= DEV['url']; ?>" target="_blank" title="Agência Especializada em Marketing Digital"><?= DEV['name']; ?></a></b></p>
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

                         <a rel="nofollow noreferrer noopener" href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C">
                             <i class="icon-html"></i>
                             W3C Validator
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