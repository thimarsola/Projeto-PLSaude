<?php if(!is_paged()): ?>

    <section class="featured py-10">
        <div class="container">

            <!-- header -->
            <header class="featured__header mb-9">
                <p class="mb-2">Blog PL Saúde</p>
                <h2>Publicações em <span class="clr-primary-500">Destaque</span></h2>
            </header>
            <!-- end of header -->

            <!-- row -->
            <div class="featured__row">
                <?php

                $argFeatured = [
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__in' => get_option('sticky_posts'),
                    'ignore_sticky_posts' => 1,
                    'order' => 'DESC'
                ];

                $theQueryFeatured = new WP_Query($argFeatured);

                if($theQueryFeatured->have_posts()){
                    while ($theQueryFeatured->have_posts()){
                        $theQueryFeatured->the_post();
                        get_template_part('template-parts/blog/content', 'featured');
                    }
                }else{
                    echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
                }

                wp_reset_postdata();
                ?>
            </div>
            <!-- end of row -->

        </div>
    </section>

<?php endif; ?>