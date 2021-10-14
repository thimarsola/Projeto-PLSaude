<!-- card -->
 <article class="units__row__card bg-white-500 shadow radius p-4">
     <!-- image -->
      <div class="units__row__card__image">
          <img src="<?= image('vetor-unidade.svg') ?>" alt="Conheça esta unidade PL Saúde" loading="lazy">
      </div> 
     <!-- end of image -->

     <!-- content -->
      <div class="units__row__card__content">
          <!-- header -->
           <header class="units__row__card__content__header mb-1">
               <h3><?= get_the_title(); ?></h3>
           </header>
          <!-- end of header -->

          <!-- body -->
           <div class="units__row__card__content__body">
               <p><?= the_field('endereco'); ?></p>
               <p><?= the_field('bairro'); ?></p>
               <p><?= the_field('cidade'); ?></p>
               <p><?= the_field('estado'); ?></p>
               <p><a rel="nofollow noreferrer noopener" href="tel:<?= formatPhone(get_field('telefone')); ?>" title="Vamos conversar?" target="_blank">Tel: <?= the_field('telefone'); ?></a></p>
           </div>
          <!-- end of body -->
      </div>
     <!-- end of content -->
 </article>
<!-- end of card -->