<header class="header">
    <!-- information -->
     <div class="header__information bg-primary-500 py-1">
         <div class="container">
             <!-- container -->
              <div class="header__information__container clr-white-500">
                 <ul>
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
                 </ul>
              </div>
             <!-- end of container -->
         </div>
     </div>
    <!-- end of information -->

    <div class="container">
        <!--navbar-->
        <div class="header__navbar">
            <!-- brand -->
            <div class="header__navbar__brand">
                <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>">
                    <img src="<?= image('logo-topo.svg'); ?>" alt="PL Saúde Ocupacional" title="PL Saúde Ocupacional">
                </a>
            </div>
            <!-- end of brand -->


            <div class="header__navbar__section py-4">
                <!-- toggle -->
                <div class="header__navbar__section__toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- end of toggle -->

                <!-- container -->
                <div class="header__navbar__section__container">
                    <!-- nav -->
                    <nav class="header__navbar__section__container__nav">
                        <h2 class="d-none">Menu de Navegação</h2>
                        <?php
                        if(is_home()){
                            wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => ''));
                        }else {
                            wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => ''));
                        }
                        ?>
                    </nav>
                    <!-- end of nav -->
                </div>
                <!-- end of container -->

            </div>
        </div>
        <!--end of navbar-->
    </div>
</header>