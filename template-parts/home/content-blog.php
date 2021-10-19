<!-- card -->
 <article class="blog__row__card">
     <!-- image -->
      <div class="blog__row__card__image radius">
          <a href="<?= get_the_post_thumbnail_url(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" target="_blank">
              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" loading="lazy">
          </a>
      </div>
     <!-- end of image -->

     <!-- body -->
      <div class="blog__row__card__body mt-2">
          <p><small>Publicado em <?= get_the_date('j \d\e F \d\e Y'); ?></small></p>

          <!-- header -->
           <header class="blog__row__card__body__header my-2">
               <h3><?= get_the_title(); ?></h3>
           </header>
          <!-- end of header -->

          <a href="<?= get_the_permalink(); ?>" title="Veja esse nosso artigo sobre: <?= get_the_title(); ?>" class="link-primary-500" target="_blank">Leia mais</a>
      </div>
     <!-- end of body -->
 </article>
<!-- end of card -->