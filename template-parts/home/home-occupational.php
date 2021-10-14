<section id="medicina-ocupacional" class="occupational py-10">
    <!-- container -->
     <div class="occupational__container">
         <!-- row -->
          <div class="occupational__container__row grid">
              <!-- content -->
               <div class="occupational__container__row__content">
                    <!-- header -->
                     <header class="occupational__container__row__content__header mb-5">
                         <h2>Medicina Ocupacional</h2>
                     </header>
                    <!-- end of header -->

                   <!-- body -->
                    <div class="occupational__container__row__content__body">
                        <p class="t-justify">A medicina ocupacional, ou medicina do trabalho, é área que associa a segurança do trabalho com a saúde dos colaboradores visando não só a prevenção de acidentes e doenças do trabalho, como também a promoção a saúde e qualidade de vida. Indo além de obrigações trabalhistas, a medicina ocupacional é uma ferramenta de reforço nas relações empregador/empregado agregando valor e credibilidade ao empreendimento.</p>
                    </div>
                   <!-- end of body -->

                   <!-- services -->
                    <div class="occupational__container__row__content__services bg-primary-500 p-6 mt-8">
                        <!-- header -->
                         <header class="occupational__container__row__content__services__header t-center mb-4">
                             <h3>Nossos Serviços</h3>
                         </header>
                        <!-- end of header -->
                        
                        <!-- body -->
                         <div class="occupational__container__row__content__services__body">
                             <ul>
                                 <?php
                                 $jsonOccupational = file_get_contents(__DIR__ . '/../../includes/occupational.json');
                                 $occupationalList = json_decode($jsonOccupational, true);
                                 
                                 foreach ($occupationalList['occupational'] as $link):
                                 ?>
                                 
                                 <li>
                                     <a href="<?= get_the_permalink(get_page_by_title($link['title'])); ?>" title="Conheça mais sobre esse nosso serviço" target="_blank"><?= $link['title']; ?></a>
                                 </li>
                                 
                                 <?php endforeach; ?>
                             </ul>
                         </div> 
                        <!-- end of body -->
                    </div>
                   <!-- end of services -->
               </div>
              <!-- end of content -->

              <!-- image -->
               <div class="occupational__container__row__image">
                   <?= picture('imagem-medicina-ocupacional', 'Medicina Ocupacional - PL Saúde'); ?>
               </div>
              <!-- end of image -->
          </div>
         <!-- end of row -->
     </div>
    <!-- end of container -->
</section>