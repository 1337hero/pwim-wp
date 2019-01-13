<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="blog" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
        
        <main class="main" role="main">

            <div class="wrapper wrapper-pad">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post post-repeat">
                <div class="inner">
                    <div class="post-img">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                            } else { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/images/image-placeholder.jpg" alt="<?php the_title(); ?>" />
                        <?php } ?>
                    </div>
                    <div class="post-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="p-wrap"><?php the_excerpt(); ?></div>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>

            <div class="pagination">
                
            </div>

            <?php endif; ?>

            </div>
        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>