<section id="quem-somos" class="about py-10">
    <div class="container">
        <!-- row -->
         <div class="about__row grid">
             <!-- image -->
              <div class="about__row__image">
                  <?= picture('imagem-quem-somos', 'Quem é a PL Saúde'); ?>
              </div>
             <!-- end of image -->

             <!-- container -->
              <div class="about__row__container t-justify">
                  <!-- header -->
                   <header class="about__row__container__header mb-5">
                        <h2>Quem é a <span class="clr-primary-500">PL Saúde?</span></h2>
                   </header>
                  <!-- end of header -->

                  <!-- content -->
                   <div class="about__row__container__content mb-5">
                       <p>A PL Saúde Ocupacional é um braço do Grupo PL Engenharia e parte integrante da holding Capital 33. A mesma surgiu com a necessidade que alguns clientes possuíam em centralizar suas demandas de segurança do trabalho e saúde ocupacional em uma única consultoria.</p>
                       <br>
                       <p>A PL Saúde Ocupacional conta com profissionais altamente qualificados e especializados prontos para atendê-los de forma personalizada, pensando sempre na melhor solução de problemas e no melhor custo benefício para a sua empresa. Com o seu amplo portfólio, a PL Saúde Ocupacional é líder em gestão de vidas, elaboração de laudos e programas de qualidade de vida para os colaboradores.</p>
                       <br>
                       <p>Em 2020, foi inaugurado a primeira clínica de medicina ocupacional, localizada em São Bernardo do Campo, no estado de São Paulo. A clínica conta com profissionais preparados e humanizados, equipamentos de ponta e um sistema de agendamento por hora marcada para evitar filas e alto tempo de espera, garantindo assim uma ótima experiência para os colaboradores e empresas contratante dos serviços oferecidos.</p>
                       <br>
                       <p>Devido ao grande sucesso da marca, um plano de expansão da marca foi criado e em agosto de 2021 foi inaugurado a segunda unidade em Natal/RN.</p>
                   </div>
                  <!-- end of content -->

                  <?= whatsapp(formatPhone(CONTACT['whatsapp']['number']), CONTACT['whatsapp']['message'], 'Vamos conversar?', 'btn btn-primary-500', 'Vamos conversar pelo WhatsApp?') ?>
              </div>
             <!-- end of container -->
         </div>
        <!-- end of row -->
    </div>
</section>