<section id="servico-emergencia" class="emergency py-10">
    <!-- container -->
     <div class="emergency__container">
         <!-- row -->
          <div class="emergency__container__row grid">
              <!-- images -->
               <div class="emergency__container__row__images grid">
                   <?php
                   for ($i = 1; $i < 4; $i++){
                       echo picture('imagem-emergencia-' . str_pad($i, 2, 0, STR_PAD_LEFT), 'Serviço de emergência PL Saúde');
                   }
                   ?>
               </div>
              <!-- end of images -->

              <!-- content -->
               <div class="emergency__container__row__content t-right">
                   <!-- header -->
                    <header class="emergency__container__row__content__header mb-5">
                        <h2>Serviço de emergência</h2>
                    </header>
                   <!-- header -->

                   <!-- body -->
                    <div class="emergency__container__row__content__body">
                        <p>As Equipes de Emergência são equipes qualificadas e especializadas em enfermagem do trabalho, aptas a atender eventos, obras, projetos, frentes de trabalho e montagens. Trabalhamos com ambulâncias dos tipos A, B C e D, em um serviço disponibilizado 24 horas por dia, nos 7 dias da semana. Um serviços personalizado, baseado em todas as necessidades do cliente.</p>

                        <!-- button -->
                         <div class="emergency__container__row__content__body__button mt-7">
                             <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), 'Olá PL Saúde, gostaria de maiores informações sobre o serviço de emergência', 'Quero saber mais', 'btn btn-primary-500', 'Vamos conversar pelo WhatsApp?'); ?>
                         </div>
                        <!-- end of button -->
                    </div>
                   <!-- end of body -->
               </div>
              <!-- end of content -->
          </div>
         <!-- end of row -->
     </div>
    <!-- end of container -->
</section>