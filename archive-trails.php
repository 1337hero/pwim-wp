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

            <section class="summary">
                <div class="wrapper">
                    <h1 class="main-title"><span>Moab 4x4 Trails</span></h1>
                    <div class="details"><span class="dates">Fullsize Rated Fun</span></div>
                    <?php
                        $post_id = 8;
                        $queried_post = get_post($post_id);
                        echo $queried_post->post_content;
                    ?>
                </div>
            </section>
            
            <section class="trail-archive">
                <div class="wrapper">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <ul class="post-list">
                    <li>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="trail-stats">
                            <div>
                                <strong>Rating:</strong> 
                                <span class="level <?php echo get_post_meta($post->ID, 'level', true); ?>"></span>
                                <span class="rating <?php echo get_post_meta($post->ID, 'level', true); ?>"> <?php echo get_post_meta($post->ID, 'Rating', true); ?></span> 
                            </div>
                            <div>
                                <span class="distance"><strong>Length:</strong> <?php echo get_post_meta($post->ID, 'Length', true); ?></span>
                            </div>
                            <div>
                                <span class="time"><strong>Time:</strong>   <?php echo get_post_meta($post->ID, 'Time', true); ?></span>
                            </div>
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
        </section>

            <?php get_template_part( '_inc/global', 'sponsors') ?>

        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>