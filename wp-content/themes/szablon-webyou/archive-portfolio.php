<!-- pobieranie innego pliku -->
<?php get_header(); ?>

<main>

<!-- Wyszukiwarka  -->

<?php $search = getQuerySingleParam('search'); ?>

<form class="search" method="get" action="<?php getCurrentPageUrl(); ?>">
    <label for="search">SZUKAJ CO CHESZ</label>
    <fieldset>
        <input type="text" name="search" id="search" value="<?= $search ?>" />
        <input type="submit" value="Szukaj" />
    </fieldset>
</form>

<?php
    $query_params = getQueryParams();
        if(isset($query_params['search'])){
            $query_params['post_title_like'] = $query_params['search'];
            unset($query_params['search']);
        }

    $loop = new WP_Query($query_params);

?>



<!-- Wywołanie postów -->
<?php if($loop->have_posts()) :?>

<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<?php 
    // echo post_class('entry') //dodaje class
    // echo the_ID(); // dodaje id artykułu
    // echo the_permalink(); //link do artykułu
    echo the_post_thumbnail(); //obrazek ??
    echo the_title(); //tytuł strony
    echo get_the_excerpt(); // wartosc tekstu pobiera pierw z zajawki a jezeli jest pusta pobiera główną zawartość
?>
<br/>
<?php  endwhile; ?>

<?php else: ?>
mamy else
<?php endif ?>


    <!-- Paginacja -->
    <div class="pagination">
        <?php 
            generatePagination(get_query_var('paged'), $loop);
        ?>
    </div>

</main>

<?php get_footer('home'); ?>