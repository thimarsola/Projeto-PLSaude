<section class="gallery py-10">
    <div class="container">
        <!-- header -->
        <header class="gallery__header mb-7">
            <h2>Conheça o espaço PL Saúde</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
         <div class="gallery__row grid">
             <?php for ($i = 1; $i < 8; $i++): ?>
                 <a href="<?= image('imagem-galeria-' . str_pad($i,2, 0, STR_PAD_LEFT) . '.jpg'); ?>" class="gallery__row__card">
                     <?= picture('imagem-galeria-' . str_pad($i,2, 0, STR_PAD_LEFT), 'Conheça o espaço PL Saúde'); ?>
                 </a>
             <?php endfor; ?>
         </div>
        <!-- end of row -->
    </div>
</section>