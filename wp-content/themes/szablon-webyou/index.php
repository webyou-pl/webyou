<!-- pobieranie innego pliku -->
<?php get_header(); ?>

    <section class="home-slider"></section>
    <main>
        <section>O NAS</section>
        <section>technologie</section>
        <section><p>Nasze realizacjie - <em>artykuły</em></p></section>
        <section>

        <!-- Ostatnie trzy opinie  -->
        <?php
            $recent_comms = fetchRecentComments(3);
            foreach ($recent_comms as $comment):
                $data = new \DateTime($comment->comment_data_gmt);
            ?>
                <?= $comment->comment_author; ?>
                <?= $data->format('d.m.Y'); ?>
                <?= $comment->post_title; ?>
                <?= $comment->comment_content; ?>

            <?php endforeach ?>


        <!-- ostatnie realizacje -->
        <Br>   Ostatnio dodane realizacje <Br>
        <?php

            $projects_query = new WP_Query(array(
                'numberposts' => 7,
                'orderby' => 'post_date',
                'order' => 'DESC',
                // 'posts_per_page' => 6, // ilosc
                'post_type' => 'portfolio', //która kategoria
                'post_status' => 'publish'
            ));

            if($projects_query->have_posts()){
                while($projects_query->have_posts()){
                    $projects_query->the_post();
                    the_permalink(); //link do artykułu
                    the_title();
                    echo '<br>---<br>';
                }
            }
        ?>
        Referencje/opinie
        </section>
    </main>
    <aside></aside>

<?php get_footer('home'); ?>