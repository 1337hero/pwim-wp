<? /** Template name: Event Page **/ ?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="itinerary" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global', 'header' ) ?>
        <?php get_template_part( '_inc/global', 'banner' ) ?>
    
        <main class="main" role="main">
            <div class="wrapper">
                <?php while ( have_posts() ) : the_post(); ?> 
                    <?php the_content(); ?> 
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>