<section class="units py-10 bg-primary-500">
    <div class="container">
        <!-- header -->
         <header class="units__header clr-white-500 t-center mb-7">
             <h2 class="mb-5">Nossas Unidades</h2>
             <p>Conheça nossas unidades da PL Saúde e encontre todas as informações para contato</p>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="units__row grid">
             <?php
             $argUnits = [
                 'post_type' => 'unidade',
                 'posts_per_page' => -1,
                 'order' => 'ASC'
             ];

             $theQueryUnits = new WP_Query($argUnits);

             if($theQueryUnits -> have_posts()){
                 while ($theQueryUnits ->have_posts()){
                     $theQueryUnits -> the_post();
                     get_template_part('template-parts/home/content', 'units');
                 }
             }else{
                 echo '<p>' . _e('Não existem unidades cadastradas no momento') . '</p>';
             }

             wp_reset_postdata();
             ?>
         </div>
        <!-- end of row -->
    </div>
</section>