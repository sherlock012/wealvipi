<?php
add_action('init', 'register_post_types');

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version);

function index_styles()
{
    wp_enqueue_style('index', get_template_directory_uri() . '/assets/styles/index.css', [], THEME_VERSION);
    wp_enqueue_style('index-mobile', get_template_directory_uri() . '/assets/styles/index-mobile.css', [], THEME_VERSION);
}

add_action('add_index_style', 'index_styles');

function page_styles()
{
    wp_enqueue_style('page', get_template_directory_uri() . '/assets/styles/pages.css', [], THEME_VERSION);
    wp_enqueue_style('page-mobile', get_template_directory_uri() . '/assets/styles/pages-mobile.css', [], THEME_VERSION);
}

add_action('add_page_style', 'page_styles');

function wood_styles()
{
    wp_enqueue_style('wood', get_template_directory_uri() . '/assets/styles/wood.css', [], THEME_VERSION);
}

add_action('add_wood_style', 'wood_styles');

function aluminium_styles()
{
    wp_enqueue_style('aluminium', get_template_directory_uri() . '/assets/styles/aluminium.css', [], THEME_VERSION);
}

add_action('add_aluminium_style', 'aluminium_styles');

function wood_scripts()
{
    wp_enqueue_script('wood-js', get_template_directory_uri() . '/assets/scripts/wood.js', [], THEME_VERSION);
    wp_enqueue_script('page-js', get_template_directory_uri() . '/assets/scripts/pages.js', [], THEME_VERSION);
}

add_action('add_wood_scripts', 'wood_scripts');

function aluminium_scripts()
{
    wp_enqueue_script('aluminium-js', get_template_directory_uri() . '/assets/scripts/aluminium.js', [], THEME_VERSION);
    wp_enqueue_script('page-js', get_template_directory_uri() . '/assets/scripts/pages.js', [], THEME_VERSION);
}

add_action('add_aluminium_scripts', 'aluminium_scripts');


function register_post_types()
{
    add_theme_support('post-thumbnails');

    register_post_type('reviews', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Отзывы', // основное название для типа записи
            'singular_name'      => 'reviews', // название для одной записи этого типа
            'add_new'            => 'Добавить Отзывы', // для добавления новой записи
            'add_new_item'       => 'Добавление Отзывы', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Отзывы', // для редактирования типа записи
            'new_item'           => 'Новый Отзывы', // текст новой записи
            'view_item'          => 'Смотреть Отзывы', // для просмотра записи этого типа.
            'search_items'       => 'Искать Отзывы', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Отзывы ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-products',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('wood-windows', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Деревянные окна', // основное название для типа записи
            'singular_name'      => 'wood-windows', // название для одной записи этого типа
            'add_new'            => 'Добавить Деревянные окна', // для добавления новой записи
            'add_new_item'       => 'Добавление Деревянные окна', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Деревянные окна', // для редактирования типа записи
            'new_item'           => 'Новый Деревянные окна', // текст новой записи
            'view_item'          => 'Смотреть Деревянные окна', // для просмотра записи этого типа.
            'search_items'       => 'Искать Деревянные окна', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Деревянные окна ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-products',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('wood-doors', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Деревянные двери', // основное название для типа записи
            'singular_name'      => 'wood-doors', // название для одной записи этого типа
            'add_new'            => 'Добавить Деревянные двери', // для добавления новой записи
            'add_new_item'       => 'Добавление Деревянные двери', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Деревянные двери', // для редактирования типа записи
            'new_item'           => 'Новый Деревянные двери', // текст новой записи
            'view_item'          => 'Смотреть Деревянные двери', // для просмотра записи этого типа.
            'search_items'       => 'Искать Деревянные двери', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Деревянные двери ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-products',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));


    register_post_type('aluminium-windows', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Алюминевые окна', // основное название для типа записи
            'singular_name'      => 'aluminium-windows', // название для одной записи этого типа
            'add_new'            => 'Добавить Алюминевые окна', // для добавления новой записи
            'add_new_item'       => 'Добавление Алюминевые окна', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Алюминевые окна', // для редактирования типа записи
            'new_item'           => 'Новый Алюминевые окна', // текст новой записи
            'view_item'          => 'Смотреть Алюминевые окна', // для просмотра записи этого типа.
            'search_items'       => 'Искать Алюминевые окна', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Алюминевые окна ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-products',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('aluminium-doors', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Алюминевые двери', // основное название для типа записи
            'singular_name'      => 'aluminium-doors', // название для одной записи этого типа
            'add_new'            => 'Добавить Алюминевые двери', // для добавления новой записи
            'add_new_item'       => 'Добавление Алюминевые двери', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Алюминевые двери', // для редактирования типа записи
            'new_item'           => 'Новый Алюминевые двери', // текст новой записи
            'view_item'          => 'Смотреть Алюминевые двери', // для просмотра записи этого типа.
            'search_items'       => 'Искать Алюминевые двери', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Алюминевые двери ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-products',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('wood-projects', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Деревянные проекты', // основное название для типа записи
            'singular_name'      => 'wood-projects', // название для одной записи этого типа
            'add_new'            => 'Добавить Деревянные проекты', // для добавления новой записи
            'add_new_item'       => 'Добавление Деревянные проекты', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Деревянные проекты', // для редактирования типа записи
            'new_item'           => 'Новый Деревянные проекты', // текст новой записи
            'view_item'          => 'Смотреть Деревянные проекты', // для просмотра записи этого типа.
            'search_items'       => 'Искать Деревянные проекты', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Деревянные проекты ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-open-folder',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('aluminium-projects', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Алюминевые проекты', // основное название для типа записи
            'singular_name'      => 'aluminium-projects', // название для одной записи этого типа
            'add_new'            => 'Добавить Алюминевые проекты', // для добавления новой записи
            'add_new_item'       => 'Добавление Алюминевые проекты', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Алюминевые проекты', // для редактирования типа записи
            'new_item'           => 'Новый Алюминевые проекты', // текст новой записи
            'view_item'          => 'Смотреть Алюминевые проекты', // для просмотра записи этого типа.
            'search_items'       => 'Искать Алюминевые проекты', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Алюминевые проекты ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-open-folder',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));

    register_post_type('employees', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Сотрудики', // основное название для типа записи
            'singular_name'      => 'employees', // название для одной записи этого типа
            'add_new'            => 'Добавить Сотрудики', // для добавления новой записи
            'add_new_item'       => 'Добавление Сотрудики', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Сотрудики', // для редактирования типа записи
            'new_item'           => 'Новый Сотрудики', // текст новой записи
            'view_item'          => 'Смотреть Сотрудики', // для просмотра записи этого типа.
            'search_items'       => 'Искать Сотрудики', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Сотрудики ', // название меню
        ),
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true, // зависит от public
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-open-folder',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail', 'editor',),
        'taxonomies'          => array(),
        // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    ));
}


function wh_taxonomy_add_new_meta_field()
{
?>

    <div class="form-field">
        <label for="wh_meta_order"><?php _e('Порядок', 'wh'); ?></label>
        <input type="text" name="wh_meta_order" id="wh_meta_order">
    </div>
    <div class="form-field">
        <label for="wh_meta_hid"><?php _e('Прятать', 'wh'); ?></label>
        <input type="text" name="wh_meta_hid" id="wh_meta_hid">
    </div>
<?php
}

function wh_taxonomy_edit_meta_field($term)
{

    //getting term ID
    $term_id = $term->term_id;

    // retrieve the existing value(s) for this meta field.
    $wh_meta_order = get_term_meta($term_id, 'wh_meta_order', true);
    $wh_meta_hid = get_term_meta($term_id, 'wh_meta_hid', true);
?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="wh_meta_order"><?php _e('Порядок', 'wh'); ?></label></th>
        <td>
            <input type="text" name="wh_meta_order" id="wh_meta_order" value="<?php echo esc_attr($wh_meta_order) ? esc_attr($wh_meta_order) : ''; ?>">
        </td>
    </tr>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="wh_meta_hid"><?php _e('Прятать', 'wh'); ?></label></th>
        <td>
            <input type="text" name="wh_meta_hid" id="wh_meta_hid" value="<?php echo esc_attr($wh_meta_hid) ? esc_attr($wh_meta_hid) : ''; ?>">
        </td>
    </tr>
<?php
}

function allvipi_get_fields($name)
{
    $args = array(
        'orderby'        => 'date',
        'order'          => 'ASC',
        'post_type'      => $name,
        'post_parent'    => 0,
        'posts_per_page' => 100,
        'ignore_sticky_posts' => 1,
        'no_found_rows'  => 1,
        'hierarchical'   => 0,
    );

    $blocks = [];

    foreach (get_posts($args) as $key => $post) {
        $fields = get_fields($post->ID);

        $blocks[$key] = $fields;
    }

    return $blocks;
}

?>