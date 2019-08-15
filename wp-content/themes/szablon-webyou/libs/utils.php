<?php

    function fetchRecentComments($limit = 3){

        global $wpdb;
        //dla bezpieczeństwa
		$limit = (int)$limit;

        $res = $wpdb->get_results("
            SELECT C.*, P.post_title
                FROM {$wpdb->comments} C
                    LEFT JOIN {$wpdb->posts} P ON C.comment_post_ID = P.ID
                WHERE comment_approved = 1
                ORDER BY comment_date_gmt DESC
                LIMIT {$limit}
        ");

        return $res;

    }


?>

<!-- Wyszukiwarka pobieranie elementów z pasku url(get) za pomoca tablicy-->

<?php

function getQueryParams(){

    global $query_string;
    $parts = explode('&',  $query_string);

    $return = array();
    foreach ($parts as $part) {
        $tmp = explode('=', $part);
        $return[$tmp[0]] = trim(urldecode($tmp[1]));
    }

    return $return;

}

?>

<!-- wyszukiwarka wyciogniecie jednego parapetru -->
<?php

    function getQuerySingleParam($name){
        $qparams = getQueryParams();
        if(isset($qparams[$name])){
            return $qparams[$name];
        }

        return NULL;
    }

?>

<!-- Pobiera url na którym się znajdujemy -->
<?php

    function getCurrentPageUrl(){
        $pageURL = 'http';

    if(isset($_SERVER["HTTPS"])){
            if($_SERVER["HTTPS"] == "on") {
                $pageURL .= "s";
            }
    }

    $pageURL .= "://";

    if($_SERVER["SERVER_PORT"] != "80"){
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    }else{
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }

    return $pageURL;
}

?>

<!-- Filtr z podobnymi wyszukiwaniami -->
<?php
    add_filter('posts_where', 'title_like_posts_where', 10, 2);
    function title_like_posts_where( $where, $wp_query ) {
        global $wpdb;

        if ($post_title_like = $wp_query->get('post_title_like')){
            $where .= ' AND '.$wpdb->posts.'.post_title LIKE \'%'.esc_sql(like_escape($post_title_like)).'%\'';
        }

        return $where;
    }

?>

<!-- Generowanie paginacji -->
<?php

    function generatePagination($paged, $loop) {

        $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, $paged ),
                'total' => $loop->max_num_pages,
                'prev_text' => '«',
                'next_text' => '»',
                'type' => 'list'
            ) );
    }

?>

