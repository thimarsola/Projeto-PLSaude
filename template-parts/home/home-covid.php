<section class="covid">
    <!-- container -->
    <div class="covid__container t-center py-10">
        <div class="container">

            <!-- header -->
            <header class="covid__container__header mb-4">
                <h2>Soluções <span class="clr-primary-500">COVID-19</span></h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="covid__container__content">
                <p>Preocupado com a saúde das pessoas em meio a pandemia do novo coronavírus, a PL Saúde Ocupacional oferece uma série de serviços contra a Covid-19, como por exemplo:</p>
                <span class="mt-6 shadow"></span>
            </div>
            <!-- end of content -->

        </div>
    </div>
    <!-- end of container -->

    <div class="container">
        <!-- row -->
         <div class="covid__row grid pb-10">
             <?php
             $covidList = file_get_contents(__DIR__ . '/../../includes/covid.json');
             $jsonCovid = json_decode($covidList, true);

             foreach ($jsonCovid['covid'] as $covid):
             ?>

             <!-- card -->
              <article class="covid__row__card bg-white-500 t-justify shadow radius p-4">
                  <!-- header -->
                  <header class="covid__row__card__header mb-2">
                      <h3><?= $covid['title']; ?></h3>
                  </header>
                  <!-- end of header -->

                  <!-- body -->
                   <div class="covid__row__card__body">
                       <?php foreach ($covid['description'] as $item): ?>
                       <p><?= $item; ?></p>
                       <?php endforeach; ?>

                       <!-- button -->
                        <div class="covid__row__card__body__button mt-3">
                            <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), 'Olá PL Saúde, gostaria de maiores informações sobre o serviço COVID-19: ' . $covid['title'], 'Quero saber mais', 'btn btn-primary-500', 'Vamos conversar pelo WhatsApp?'); ?>
                        </div>
                       <!-- end of button -->
                   </div>
                  <!-- end of body -->
              </article>
             <!-- end of card -->

             <?php endforeach; ?>
         </div>
        <!-- end of row -->
    </div>
</section>