<?php 
/*
    Template Name: Trails Overview 
*/
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="trails" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
    
        <main class="main" role="main">
            <div class="wrapper wrapper-pad">
                <div class="home-content trails">
                    <h1 class="event">Moab 4x4 Trails</h1>
                    <div class="section-title"><span>Fullsize Rated Fun</span></div>

                    <?php
                        $post_id = 8;
                        $queried_post = get_post($post_id);
                        echo $queried_post->post_content;
                    ?>
                </div>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <ul class="post-list">
                    <li>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="trail-stats">
                            <span class="rating"><strong>Rating:</strong>  <?php echo get_post_meta($post->ID, 'Rating', true); ?></span>
                            <span class="distance"><strong>Length:</strong> <?php echo get_post_meta($post->ID, 'Length', true); ?></span>
                            <span class="time"><strong>Time:</strong>   <?php echo get_post_meta($post->ID, 'Time', true); ?></span>
                        </div>
                        <div class="p-wrap"><?php the_excerpt(); ?></div>
                    </li>
                </ul>
                <?php endwhile; ?>

                <div class="pagination">
                    <?php previous_posts_link( '<<' ); ?>
                    <?php pwim_pagination()?> 
                    <?php next_posts_link( '>>'); ?> 
                </div>

                <?php endif; ?>

            </div>

        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>