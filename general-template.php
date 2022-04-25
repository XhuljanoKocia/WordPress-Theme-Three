<?php
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>" alt="">
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="general-template">
                        <?php
                            if(have_posts()):
                                while(have_posts()):
                                    the_post();
                        ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </article>
                        <p>This page template is the same on all selected pages</p>
                        <?php
                                endwhile;
                            else:
                        ?>
                        <p>There's nothing yet to be displayed!</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>