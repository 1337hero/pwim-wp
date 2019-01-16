<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="post" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
    
        <main class="main" role="main">
            <section class="regular">
                <div class="wrapper ">
                    <?php while ( have_posts() ) : the_post(); ?> 
                    <div class="post-heading">
                        <h1 class="page-title"><span><?php the_title(); ?></span></h1>
                    </div>
                    <article class="post post-repeat">
                            <div class="entry-content-page">
                                <?php the_content(); ?> 
                            </div>
                    </article>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </section>
            <?php get_template_part( '_inc/global', 'sponsors') ?>
            
        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>
        
    </body>
</html>