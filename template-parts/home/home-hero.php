<section class="hero">
    <div class="container">

        <!-- container -->
         <div class="hero__container">
             <!-- header -->
             <header class="hero__container__header mb-5">
                 <h2 class="clr-primary-500">Exames Ocupacionais para a sua empresa!</h2>
             </header>
             <!-- end of header -->

             <!-- content -->
              <div class="hero__container__content t-justify mb-7">
                  <p>A PL Saúde Ocupacional conta com profissionais altamente qualificados e especializados prontos para atendê-los de forma personalizada, pensando sempre na melhor solução de problemas e no melhor custo benefício para a sua empresa.</p>
              </div>
             <!-- end of content -->
             
             <!-- buttons -->
              <div class="hero__container__buttons d-flex gp-6">
                  <a rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" class="btn btn-outline-primary-500" title="Vamos conversar por telefone?"><i class="icon-phone mr-1"></i><?= CONTACT['phone']['01']; ?></a>
                  <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], '<i class="icon-whatsapp mr-1"></i>'.CONTACT['whatsapp']['number'], 'btn btn-primary-500', 'Vamos conversar pelo WhatsApp?') ?>
              </div> 
             <!-- end of buttons -->
         </div>
        <!-- end of container -->

    </div>
</section>