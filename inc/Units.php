<?php
add_action( 'init', 'units' );
function units() {
    $args = [
        'label'  => esc_html__( 'Unidades', 'unidades' ),
        'labels' => [
            'menu_name'          => esc_html__( 'Unidades', 'Unidades' ),
            'name_admin_bar'     => esc_html__( 'Unidade', 'Unidades' ),
            'add_new'            => esc_html__( 'Adicionar unidade', 'Unidades' ),
            'add_new_item'       => esc_html__( 'Adicionar nova unidade', 'Unidades' ),
            'new_item'           => esc_html__( 'Nova unidade', 'Unidades' ),
            'edit_item'          => esc_html__( 'Editar unidade', 'Unidades' ),
            'view_item'          => esc_html__( 'Ver unidade', 'Unidades' ),
            'update_item'        => esc_html__( 'Ver unidade', 'Unidades' ),
            'all_items'          => esc_html__( 'Todas unidades', 'Unidades' ),
            'search_items'       => esc_html__( 'Procurar unidade', 'Unidades' ),
            'parent_item_colon'  => esc_html__( 'Unidade filho', 'Unidades' ),
            'not_found'          => esc_html__( 'Nenhuma unidades encontrada', 'Unidades' ),
            'not_found_in_trash' => esc_html__( 'Nenhuma unidade encontrada na lixeira', 'Unidades' ),
            'name'               => esc_html__( 'Unidades', 'Unidades' ),
            'singular_name'      => esc_html__( 'Unidade', 'Unidades' ),
        ],
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true,
        'capability_type'     => 'post',
        'hierarchical'        => true,
        'has_archive'         => true,
        'query_var'           => false,
        'can_export'          => false,
        'rewrite_no_front'    => false,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-home',
        'supports' => [
            'title',
        ],

        'rewrite' => true
    ];

    register_post_type( 'unidade', $args );
}