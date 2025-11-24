<?php
if (!function_exists('cashback_theme_setup')) {
    function cashback_theme_setup()
    {

        add_theme_support('automatic-feed-links');

        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        // menu
        register_nav_menus(array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'footer-menu' => __('Footer Menu', 'text_domain'),
        ));




        $sidebar = array(
            'name' => 'Main Sidebar',
            'id'    => 'main-sidebar',
            'description' => 'main-sidebar',
            'class' => 'main-sidebar',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   =>  '</h3>',
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'cashback_theme_setup');
}

if (!function_exists('cashback_menu')) {
    function cashback_menu($menu)
    {
        $menu = array(
            'theme_location'    => $menu,
            'container'     => '',
            'container_class'   => $menu,
            'menu_class'    => 'nav-bar-menu',
        );
        wp_nav_menu($menu);
    }
}

function pagination_baongoc($query)
{
    $listString = paginate_links(array(
        'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => 'Trước',
        'next_text' => 'Sau',
        'type'  => 'list',
    ));
    $listString = str_replace("<ul class='page-numbers'>", '<ul class="pagination">', $listString);
    $listString = str_replace('prev page-numbers', 'page-link btn_text', $listString);
    $listString = str_replace('next page-numbers', 'page-link btn_text', $listString);
    $listString = str_replace('page-numbers', 'page-link', $listString);
    $listString = str_replace('<li>', '<li class="page-item">', $listString);
    $listString = str_replace(
        '<li class="page-item"><span aria-current="page" class="page-link current">',
        '<li class="page-item"><span class="page-link active">',
        $listString
    );
    echo $listString;
}
// gọi ra bằng cách truyền $query vào pagination_baongoc($query);
// cần có 2 tham số bên dưới trong query
// 'posts_per_page' => $wp_query->query_vars['posts_per_page'],
//             'paged' => $paged,

function loadStyle(){

    wp_enqueue_style('bootsraps-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('swiper-bundle-css', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css');
    wp_enqueue_style('style-css', get_stylesheet_directory_uri().'/assets/css/style.css');

    wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.6.0.min.js');
    wp_enqueue_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');
    wp_enqueue_script('swiper-bundle-js', 'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js');
    wp_enqueue_script('index-js', get_stylesheet_directory_uri().'/assets/js/index.js');
    
}
add_action('wp_enqueue_scripts', 'loadStyle');