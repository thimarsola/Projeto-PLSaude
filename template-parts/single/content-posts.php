<!-- card -->
<article class="posts__row__card">
    <!-- image -->
    <div class="posts__row__card__image mb-2">
        <a href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" loading="lazy">
        </a>
    </div>
    <!-- end of image -->

    <!-- body -->
    <div class="posts__row__card__body">
        <p class="mb-1"><small>Publicado em <?= get_the_date('d/m/y'); ?></small></p>

        <!-- header -->
        <header class="posts__row__card__body__header mb-2">
            <h3>
                <a class="link-dark-blue-500" href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">
                    <?= get_the_title(); ?>
                </a>
            </h3>
        </header>
        <!-- end of header -->

        <a class="link-primary-500" href="<?= get_the_permalink(); ?>" title="Leia o nosso artigo" target="_blank">Leia mais</a>
    </div>
    <!-- end of body -->
</article>
<!-- end of card -->