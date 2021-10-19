<section id="medicina-assistencial" class="care py-10">
    <div class="container">
        <!-- header -->
        <header class="care__header t-center">
            <h2 class="mb-5">Medicina Assistencial</h2>
            <p>Nossas clínicas estão preparadas para oferecer serviços de Medicina Assistencial, cuidando, tratando e reabilitando pessoas que necessitam de algum tratamento ou acompanhamento médico, como por exemplo:</p>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="care__row grid mt-8">
            <?php
            $jsonCare = file_get_contents(__DIR__ . '/../../includes/care.json');
            $careList = json_decode($jsonCare, true);

            foreach ($careList['care'] as $service):
                ?>

                <!-- card -->
                <article class="care__row__card bg-white-500 t-center shadow radius">
                    <!-- header -->
                    <header class="care__row__card__header mb-2">
                        <h3><?= $service['title']; ?></h3>
                    </header>
                    <!-- end of header -->

                    <!-- body -->
                    <div class="care__row__card__body">
                        <p class="mb-4"><small>Clique no botão abaixo para maiores informações sobre este serviço.</small></p>
                        <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), $service['message'] . $service['title'], 'Quero saber mais', 'btn btn-primary-500', 'Vamos conversar pelo WhatsApp?'); ?>
                    </div>
                    <!-- end of body -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>