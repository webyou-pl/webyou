<?php /* Template Name: Strona główna */ ?>
    <?php get_header(); ?>

    <!-- Main Slider - jak zrobić by go wywołać ??-->
    <section class="home-slider">
        <div id="webyou-carosel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#webyou-carosel" data-slide-to="0" class="active"></li>
                <li data-target="#webyou-carosel" data-slide-to="1"></li>
                <li data-target="#webyou-carosel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="h-100 w-100 carousel-image">
                        <img class="d-block w-100" src="http://localhost:3000/webyou/wp-content/themes/szablon-webyou/images/delete/1920x948.jpg" alt="First slide">
                    </div>

                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-caption--title">Nagłówek 1</h5>
                        <p class="carousel-caption--text">Text który jest na sliderze</p>
                        <a href="#!" class="btn btn-primary carousel-caption--btn">Zobacz więcej</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="h-100 w-100 carousel-image">
                        <img class="d-block w-100" src="http://localhost:3000/webyou/wp-content/themes/szablon-webyou/images/delete/2560x1600.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="carousel-caption--title">Nagłówek 2</h5>
                        <p class="carousel-caption--text">Text który jest na sliderze</p>
                        <a href="#!" class="btn btn-primary carousel-caption--btn">Zobacz więcej</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="h-100 w-100 carousel-image">
                        <img class="d-block w-100" src="http://localhost:3000/webyou/wp-content/themes/szablon-webyou/images/delete/5600x3150.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                            <h5 class="carousel-caption--title">Nagłówek 3</h5>
                            <p class="carousel-caption--text">Text który jest na sliderze</p>
                            <a href="#!" class="btn btn-primary carousel-caption--btn">Zobacz więcej</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#webyou-carosel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#webyou-carosel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- End main slider -->
    
    <main>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php else: ?>
            <?= $messageErrorPageForAdministrator; ?>
        <?php endif; ?>
    </main>
<?php get_footer('home'); ?>