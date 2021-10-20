<section class="posts py-10">
    <div class="container">

        <!-- header -->
        <header class="posts__header mb-4">
            <h2>Conheça as nossas outras publicações</h2>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="posts__row grid pb-7">
            <?php
            $argLast = [
                'post_type' => 'post',
                'post__not_in' => get_option('sticky_posts'),
                'posts_per_page' => 3,
                "orderby" => 'rand',
            ];

            $theQueryPosts = new WP_Query($argLast);

            if($theQueryPosts->have_posts()){
                while ($theQueryPosts->have_posts()){
                    $theQueryPosts->the_post();
                    get_template_part('template-parts/single/content', 'posts');
                }
            }else{
                echo '<p>' . _e('Não existem artigos cadastrados no momento.') . '</p>';
            }
            wp_reset_postdata();
            ?>
        </div>
        <!-- end of row -->

    </div>
</section>