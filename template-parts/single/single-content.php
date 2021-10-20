<section class="content py-8">
    <div class="container">
        <!-- image -->
        <div class="content__image mb-4">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
        </div>
        <!-- end of image -->

        <!-- header -->
        <header class="content__header mb-5">
            <p class="mb-2"><small>Publicado em <?= get_the_date('d/m/y'); ?></small></p>
            <p class="content__header__title"><?= get_the_title(); ?></p>
        </header>
        <!-- end of header -->

        <!-- body -->
        <div class="content__body t-justify">
            <?php
                the_content();
            ?>
        </div>
        <!-- end of body -->
    </div>
</section>