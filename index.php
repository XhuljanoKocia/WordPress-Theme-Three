<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                </div>
            </section>
            <section class="service">
                <div class="container">
                    <div class="row">Services</div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar">Sidebar</aside>
                        <div class="news">
                            <?php
                                if(have_posts()):
                                    while(have_posts()):
                                        the_post();
                            ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                <p>Categories: <?php the_category(' '); ?></p>
                                <p><?php the_tags('Tags: ', ', ') ?></p>
                                <p><?php the_content(); ?></p>
                            </article>
                            <?php
                                    endwhile;
                                else:
                            ?>
                            <p>There's nothing yet to be displayed!</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <div class="container">
                    <div class="row">Map</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>