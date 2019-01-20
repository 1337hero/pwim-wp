<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="blog" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
        
        <main class="main" role="main">
        
            <section class="news">
                <div class="wrapper">
                    <h1 class="page-title"><span>Latest News</span></h1>


                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="post post-repeat"  data-aos="slide-up" data-aos-offset="40" data-aos-duration="800" data-aos-delay="0">
                        <div class="inner">
                            <div class="post-img">
                                <a href="<?php the_permalink() ?>">
                                    <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('post-thumbnail', array('class' => 'lazy'));
                                        } else { ?>
                                        <img class="lazy" data-src="https://cdn.powerwagonsinmoab.com/img/default-bg.jpg" alt="<?php the_title(); ?>" />
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="post-content">
                                <h2><?php the_title(); ?></h2>
                                <div class="p-wrap"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>

                    <div class="pagination">
                        <?php previous_posts_link( '<<' ); ?>
                        <?php pwim_pagination()?> 
                        <?php next_posts_link( '>>'); ?> 
                    </div>

                    <?php endif; ?>

                </div>
            </section>
        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>