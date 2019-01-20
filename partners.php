<?php /* Template Name: Partners */ ?>    
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>

    <body id="registration" <?php body_class($post->post_name); ?> >

        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
    
        <main class="main" role="main">
            <section class="sign-up">
                <div class="wrapper">
    
                    <h1 class="page-title"><span><?php the_title(); ?></span></h1>

                    <?php while ( have_posts() ) : the_post(); ?> 

                    <article class="post post-repeat">
                            <div class="entry-content-page">
                                <?php the_content(); ?> 
                            </div>
                    </article>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
            </section>
            
            <section class="sponsors" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>TITLE PARTNERS</span></h2>
                    <div class="logos title">
                        
                        <!-- Thuren -->
                        <a href="https://www.thurenfabrication.com/" target="_blank">
                            <img class="lazy" data-src="https://d1ztgczfr0nons.cloudfront.net/partner-logos/logo-thuren.png">
                        </a>
                    
                    </div>            
                </div>
            </section>

            <section class="sponsors" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>PREMIER PARTNERS</span></h2>
                                
                    <div class="logos">
                       
                        <!-- OPP -->            
                        <a href="https://offroadpowerproducts.com/" target="_blank" data-aos="slide-up" data-aos-offset="0" data-aos-duration="800" data-aos-delay="300">
                            <img class="lazy" data-src="https://d1ztgczfr0nons.cloudfront.net/partner-logos/logo-opp.png">
                        </a>

                        <!-- AEV -->
                        <a href="https://www.aev-conversions.com/" target="_blank">
                            <img class="lazy" data-src="https://d1ztgczfr0nons.cloudfront.net/partner-logos/logo-aev.png">
                        </a>
                        
                        <!-- Maple Offroad -->
                        <a href="#" target="_blank">
                            <img class="lazy" data-src="https://d1ztgczfr0nons.cloudfront.net/partner-logos/logo-maple.png">
                        </a>

                    </div>
                                
                </div>
            </section>

            <section class="sponsors" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>ADDITIONAL PARTNERS</span></h2>
                                
                    <div class="logos">

                        <!-- U4WDA -->              
                        <a href="http://u4wda.org/" target="_blank" rel="nofollow">
                            <img class="lazy" data-src="https://d1ztgczfr0nons.cloudfront.net/partner-logos/logo-u4wda.png">
                        </a>


                    </div>
                                
                </div>
            </section>
            

        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>