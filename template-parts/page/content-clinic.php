<section class="content py-10">
    <div class="container">
        <!-- header -->
        <header class="content__header mb-5">
            <h2><?= get_the_title(); ?></h2>
        </header>
        <!-- end of header -->

        <!-- description -->
        <div class="content__description">
            <p class="t-justify">A PL Saúde Ocupacional conta com clínicas espalhadas por todo o Brasil, equipadas com o que se há melhor na área de saúde e medicina ocupacional. Além disso, nossos profissionais são altamente qualificados para atender à todas as demandas.</p>

            <!-- section -->
            <section class="content__description__section mt-6">
                <!-- header -->
                <header class="content__description__section__header mb-3">
                    <h3>ASO</h3>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="content__description__section__content">
                    <p class="t-justify">O Atestado de Saúde Ocupacional (ASO) é um documento emitido para definir a aptidão ou inaptidão do colaborador para exercer uma determinada função. Este atestado é emitido por um médico do trabalho depois de examinar o trabalhador. A clínica da PL Saúde conta com estrutura e profissionais qualificados para a elaboração desses documentos</p>

                    <!-- subsection -->
                    <div class="content__description__section__content__subsection mt-5">
                        <!-- header -->
                        <header class="content__description__section__content__subsection__header mb-2">
                            <h4>Exames complementares</h4>
                        </header>
                        <!-- end of header -->

                        <p class="t-justify">A clínica da PL Saúde Ocupacional conta com equipamentos e profissionais qualificados para a realização de exames complementares como:</p>

                        <!-- row -->
                        <div class="content__description__section__content__subsection__row grid mt-5">
                            <?php
                            $jsonExams = file_get_contents(__DIR__ . '/../../includes/exams.json');
                            $examsList = json_decode($jsonExams, true);

                            foreach ($examsList['exams'] as $exam):
                                ?>

                                <!-- card -->
                                <article class="content__description__section__content__subsection__row__card bg-white-500 t-center shadow radius">
                                    <!-- header -->
                                    <header class="content__description__section__content__subsection__row__card__header mb-2">
                                        <h5><?= $exam['title']; ?></h5>
                                    </header>
                                    <!-- end of header -->

                                    <!-- body -->
                                    <div class="content__description__section__content__subsection__row__card__body t-justify">
                                        <p class="mb-4"><small><?= $exam['description']; ?></small></p>

                                        <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), 'Olá PL Saúde, gostaria de maiores informações sobre o exame complementar: ' . $exam['title'], 'Quero saber mais', 'btn btn-primary-500 d-inline', 'Vamos conversar pelo WhatsApp?'); ?>
                                    </div>
                                    <!-- end of body -->
                                </article>
                                <!-- end of card -->

                            <?php endforeach; ?>
                        </div>
                        <!-- end of row -->
                    </div>
                    <!-- end of subsection -->

                </div>
                <!-- end of content -->
            </section>
            <!-- end of section -->

            <!-- section -->
            <section class="content__description__section mt-6">
                <!-- header -->
                <header class="content__description__section__header mb-3">
                    <h3>Acompanhamento Psicológico</h3>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="content__description__section__content">
                    <p class="t-justify">A PL Saúde Ocupacional conta com o serviço de acompanhamento psicológico para os colaboradores da sua empresa. A cada dia mais se tem debatido sobre a saúde mental das pessoas. Dentro do ambiente de trabalho não deve ser diferente. O principal objetivo é buscar autonomia, qualidade de vida e alcance máximo das potencialidades das pessoas. Em nossa equipe, contamos com profissionais altamente qualificados, oferecendo terapia e psicoterapia.</p>
                </div>
            </section>
            <!-- end of section -->

            <!-- section -->
            <section class="content__description__section mt-6">
                <!-- header -->
                <header class="content__description__section__header mb-3">
                    <h3>Exame Toxilógico</h3>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="content__description__section__content">
                    <p class="t-justify">O exame toxicológico identifica na queratina presente em uma amostra de cabelo ou de pelo a presença de substancias psicoativas como cocaína, maconha, anfetaminas, metanfetaminas, opióides, entre outras. O objetivo é evitar que condutores dirijam sob efeito de substancias ilícitas, colocando a si e aos outros em perigo. O exame toxicológico é uma exigência a todo o motorista que pretende obter a CNH –  C, D ou E.  Com as mudanças estabelecidas Nova Lei do Trânsito, em vigor desde abril de 2021, todos os motoristas dessas categorias, com menos de 70 anos, devem realizar exames periódicos, no período de 2 anos e seis meses. O motorista flagrado com o exame fora do prazo estabelecido, incorrerá em infração gravíssima. As clínicas da PL Saúde Ocupacional estão equipadas para a realização desses exames.</p>
                </div>
            </section>
            <!-- end of section -->
        </div>
        <!-- end of description -->
    </div>
</section>