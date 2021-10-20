<section class="content py-10">
    <div class="container">
        <!-- header -->
        <header class="content__header mb-5">
            <h2><?= get_the_title(); ?></h2>
        </header>
        <!-- end of header -->

        <!-- description -->
        <div class="content__description">
            <p class="t-justify">A medicina ocupacional, ou medicina do trabalho, é área que associa a segurança do trabalho com a saúde dos colaboradores visando não só a prevenção de acidentes e doenças do trabalho, como também a promoção a saúde e qualidade de vida. Indo além de obrigações trabalhistas, a medicina ocupacional é uma ferramenta de reforço nas relações empregador/empregado agregando valor e credibilidade ao empreendimento.</p>

            <!-- row -->
            <div class="content__description__row grid mt-9">
                <?php
                $jsonOccupational = file_get_contents(__DIR__ . '/../../includes/occupational.json');
                $occupationalList = json_decode($jsonOccupational, true);

                foreach ($occupationalList['occupational'] as $service):
                    ?>

                    <!-- card -->
                    <article class="content__description__row__card bg-white-500 t-center shadow radius">
                        <!-- header -->
                        <header class="content__description__row__card__header mb-2">
                            <h3><?= $service['title']; ?></h3>
                        </header>
                        <!-- end of header -->

                        <!-- body -->
                        <div class="content__description__row__card__body">
                            <p class="mb-4"><small>Clique no botão abaixo para maiores informações sobre este serviço.</small></p>

                            <a class="btn btn-primary-500 d-inline" href="<?= get_the_permalink(get_page_by_title($service['title'])); ?>" title="Conheça mais sobre esse nosso serviço" target="_blank">Quero saber mais</a>

                        </div>
                        <!-- end of body -->
                    </article>
                    <!-- end of card -->

                <?php endforeach; ?>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of description -->
    </div>
</section>