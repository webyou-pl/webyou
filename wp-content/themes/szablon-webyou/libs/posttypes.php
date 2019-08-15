<?php

add_action('init', 'webyou_init_posttypes');

function webyou_init_posttypes(){

    // Rejestracaj postów/ dodanie nowej pozycji w menu administratora

    $post_args = array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio',
            'all_items' => 'Wszystkie projekty',
            'add_new' => 'Dodaj nowy projekt',
            'add_new_item' => 'Dodaj nowy projekt',
            'edit_item' => 'Edtuj projekt',
            'new_item' => 'Nowy projekt',
            'view_item' => 'Zobacz N',
            'seartch_items' => 'Szukaj N',
            'not_fount' => 'Nie znaleziono N',
            'not_found_in_trash' => 'Brak N',
            'parent_item_colon' => ''
        ),
        'public' => true,
        'pubilic_gueryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'post-formats'
        ),
        'has_archive' => true
    );

    register_post_type('portfolio', $post_args);
    
    
}

add_action('init', 'webyou_init_taxonomies');

function webyou_init_taxonomies(){
    register_taxonomy(
        'ingrecients',
        array('portfolio'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Technologie',
                'singular_name' => 'Technologie',
                'search_items' =>  'Wyszukaj technologie',
                'popular_items' => 'Najpopularniejsze technologie',
                'all_items' => 'Wszystkie t0echnologie',
                'most_used_items' => '1',
                'parent_item' => '2',
                'parent_item_colon' => '3',
                'edit_item' => 'Edytuj technologie', 
                'update_item' => 'Aktualizuj technologie',
                'add_new_item' => 'Dodaj nową techologie',
                'new_item_name' => 'Nazwa nowego skadnika',
                'separate_items_with_commas' => 'Oddziel technologie przecinkiem',
                'add_or_remove_items' => 'Dodaj lub usuń technologie',
                'choose_from_most_used' => 'Wybierz spośród najczęścież używanych technologi',
                'menu_name' => 'Technologie',
            ),
            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewite' => array('slug' => 'ingredinet')
        )
    );
}

add_action('admin_head', 'lte_admin_icons');
    function lte_admin_icons () {
        // $ICON_URL = WEBYOU_THEME_URL.'images/admin/';
?>
<style>
    /* icony dla menu galleri https://developer.wordpress.org/resource/dashicons/#camera-alt
        
     */
	
    #menu-posts-portfolio .dashicons-admin-post:before{
        content: "\f322";
    }
    
</style>


<?php } ?>
