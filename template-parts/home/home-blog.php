<section class="blog py-10">
    <div class="container">
        <!-- header -->
         <header class="blog__header mb-6">
             <p class="mb-2"><small>Artigos mais recentes</small></p>
             <h2>Blog <span class="clr-primary-500">PL Saúde</span></h2>
         </header>
        <!-- end of header -->

        <!-- row -->
         <div class="blog__row grid mb-6">
             <?php
             $argBlog = [
                 'post_type' => 'post',
                 'post__not_in' => get_option('sticky_posts'),
                 'posts_per_page' => 3,
                 'order' => 'DESC'
             ];

             $theQueryBlog = new WP_Query($argBlog);

             if($theQueryBlog -> have_posts()){
                 while ($theQueryBlog ->have_posts()){
                     $theQueryBlog -> the_post();
                     get_template_part('template-parts/home/content', 'blog');
                 }
             }else{
                 echo '<p>' . _e('Não existem artigos publicados no momento') . '</p>';
             }

             wp_reset_postdata();
             ?>
         </div>
        <!-- end of row -->

        <!-- content -->
         <div class="blog__content t-right t-uppercase mt-6">
             <a href="<?= get_the_permalink(get_page_by_title('Blog')); ?>" title="Conheça o blog da PL Saúde" target="_blank">Ver mais artigos <i class="icon-arrow ml-1"></i></a>
         </div>
        <!-- end of content -->
    </div>
</section>