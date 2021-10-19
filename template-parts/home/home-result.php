<section class="result pt-10">
    <div class="container">
        <!-- header -->
        <header class="result__header t-center mb-6">
            <h2>Os resultados falam pela <span class="clr-primary-500">PL Saúde!</span></h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="result__row grid">
            <?php
            $jsonResults = file_get_contents(__DIR__ . '/../../includes/results.json');
            $resultsList = json_decode($jsonResults, true);

            foreach ($resultsList['results'] as $result):
                ?>

                <!-- card -->
                <article class="result__row__card bg-white-500 t-center shadow">
                    <!-- body -->
                    <div class="result__row__card__body clr-primary-500 mb-1">
                        <p><?= $result['result']; ?></p>
                    </div>
                    <!-- end of body -->

                    <!-- header -->
                     <header class="result__row__card__header">
                         <h3><?= $result['title']; ?></h3>
                     </header>
                    <!-- end of header -->
                </article>
                <!-- end of card -->

            <?php endforeach; ?>
        </div>
        <!-- end of row -->
    </div>
</section>