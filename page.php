<?php get_header(); ?>

<!-- thumbnail -->
<?php
if(!is_page('Blog')){
    get_template_part('template-parts/page/page', 'thumbnail');
}
?>
<!-- end of thumbnail -->

<!-- content -->
<?php
if(is_page('Medicina Ocupacional')){
    get_template_part('template-parts/page/content', 'occupational');
}elseif (is_page('Clínica')){
    get_template_part('template-parts/page/content', 'clinic');
}elseif (is_page('Gestão de vidas')){
    get_template_part('template-parts/page/content', 'management');
}elseif (is_page('PCMSO')){
    get_template_part('template-parts/page/content', 'pcmso');
}elseif (is_page('Pericia Médica e Técnica')){
    get_template_part('template-parts/page/content', 'expertise');
}elseif (is_page('Programa Qualidade de Vida')){
    get_template_part('template-parts/page/content', 'program');
}
?>
<!-- end of content -->

<?php if(is_page('Blog')): ?>

    <!-- featured -->
    <?php get_template_part('template-parts/blog/blog', 'featured'); ?>
    <!-- end of featured -->

    <!-- last -->
    <?php get_template_part('template-parts/blog/blog', 'last'); ?>
    <!-- end of last -->

<?php endif; ?>

<?php get_footer(); ?>
