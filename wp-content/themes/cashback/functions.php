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

add_action('init', 'create_broker_post_type');
function create_broker_post_type() {

    $labels = array(
        'name'               => 'Sàn giao dịch',
        'singular_name'      => 'Sàn',
        'menu_name'          => 'Sàn giao dịch',
        'name_admin_bar'     => 'Sàn',
        'add_new'            => 'Thêm sàn mới',
        'add_new_item'       => 'Thêm sàn mới',
        'edit_item'          => 'Sửa sàn',
        'new_item'           => 'Sàn mới',
        'view_item'          => 'Xem sàn',
        'search_items'       => 'Tìm kiếm sàn',
        'not_found'          => 'Không tìm thấy sàn nào',
        'not_found_in_trash' => 'Không có sàn nào trong thùng rác',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'san-giao-dich'),
        'menu_icon'          => 'dashicons-chart-line',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true, // hỗ trợ Gutenberg + API
    );

    register_post_type('broker', $args);
}

add_action('init', 'create_broker_taxonomy');
function create_broker_taxonomy() {
    register_taxonomy(
        'broker_type',
        'broker',
        array(
            'label'        => 'Loại sàn',
            'rewrite'      => array('slug' => 'loai-san'),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}

function template_include_broker($terms = null) {

    if(isset($terms)){
        $query = new WP_Query([
            'post_type' => 'broker',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'broker_type',
                    'field'    => 'slug',
                    'terms'    => $terms
                ]
            ]
        ]);
    }else{
        $query = new WP_Query([
            'post_type' => 'broker',
            'posts_per_page' => -1,
        ]);
    }

    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();
            $logo = get_field('logo');
            $type = get_field('loai');
            $code = get_field('ma_gioi_thieu');
            $example = get_field('vi_du');
            $rebate = get_field('hoan_phi');
            ?>
            <div class="exchanges">
                <a href="<?php the_permalink(); ?>">
                    <div class="logo">
                        <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '' ?>">
                    </div>
                </a>

                <div class="content">
                    <div class="title"><?php the_title(); ?></div>

                    <div class="w-100 d-flex justify-content-between gap-4 mb-2">
                        <div class="name">Type:</div>
                        <div class="value"><?php echo $type ?: '—'; ?></div>
                    </div>

                    <div class="w-100 d-flex justify-content-between gap-4 mb-2">
                        <div class="name">Ref code:</div>
                        <div class="value d-flex align-items-center gap-2">
                            <?php echo $code ?: '—'; ?>
                            <div class="copy-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M13.3334 10.7503V14.2503C13.3334 17.167 12.1667 18.3337 9.25002 18.3337H5.75002C2.83335 18.3337 1.66669 17.167 1.66669 14.2503V10.7503C1.66669 7.83366 2.83335 6.66699 5.75002 6.66699H9.25002C12.1667 6.66699 13.3334 7.83366 13.3334 10.7503Z" stroke="#101828" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.3334 5.75033V9.25033C18.3334 12.167 17.1667 13.3337 14.25 13.3337H13.3334V10.7503C13.3334 7.83366 12.1667 6.66699 9.25002 6.66699H6.66669V5.75033C6.66669 2.83366 7.83335 1.66699 10.75 1.66699H14.25C17.1667 1.66699 18.3334 2.83366 18.3334 5.75033Z" stroke="#101828" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <span class="tooltip-copy">Đã sao chép liên kết</span>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 d-flex justify-content-between gap-4 mb-2">
                        <div class="name">Example</div>
                        <div class="value"><?php echo $example ?: '—'; ?></div>
                    </div>

                    <div class="d-flex justify-content-between gap-4 backcom">
                        <div class="name">Commission up to</div>
                        <div class="value"><?php echo $rebate ?: '—'; ?>%</div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p>No crypto exchanges found.</p>';
    endif;

}