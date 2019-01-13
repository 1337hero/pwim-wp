<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="post" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
    
        <main class="main" role="main">
            <div class="wrapper wrapper-pad">
                <?php while ( have_posts() ) : the_post(); ?> 
                <div class="post-heading">
                    <h1><?php the_title(); ?></h1>
                </div>
                <article class="post post-repeat">
                        <div class="entry-content-page">
                            <?php the_content(); ?> 
                        </div>
                </article>
                <?php endwhile; wp_reset_query(); ?>
            </div>

        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>
        
    </body>
</html>