<section class="last py-10">
    <div class="container">

        <!-- header -->
        <header class="last__header t-center mb-5">
            <h2 class="mb-2">Últimas Publicações</h2>
            <p>Conheça as nossas últimas publicações!</p>
        </header>
        <!-- end of header -->

        <!-- row -->
        <div class="last__row grid">
            <?php
            $pagedLast = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

            $argLast = [
                'post_type' => 'post',
                'post__not_in' => get_option('sticky_posts'),
                'posts_per_page' => 9,
                "order" => 'DESC',
                'paged' => $pagedLast
            ];

            $theQueryLast = new WP_Query($argLast);

            if($theQueryLast->have_posts()){
                while ($theQueryLast->have_posts()){
                    $theQueryLast->the_post();
                    get_template_part('template-parts/blog/content', 'last');
                }
            }else{
                echo '<p>' . _e('Não existem artigos cadastrados para esta categoria no momento.') . '</p>';
            }
            wp_reset_postdata();
            ?>

        </div>
        <!-- end of row -->

        <!-- pagination -->
        <div class="last__pagination mt-8">
            <nav class="pagination__nav">
                <?php
                $big = 999999999; // need an unlikely integer

                $pages = pagination(
                    [
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $theQueryLast->max_num_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                        'type' => 'array',
                    ]
                );

                if (is_array($pages)) {
                    echo '<ul class="pagination__nav__list">';
                    foreach ($pages as $page) {
                        echo "<li class='pagination__nav__list__item'>$page</li>";
                    }
                    echo '</ul>';
                }
                ?>
            </nav>
        </div>
        <!-- end of pagination -->

    </div>
</section>