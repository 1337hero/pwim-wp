<?php 
/*
    Template name: Homepage
*/ 
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <?php get_template_part( '_inc/head' ) ?>
    </head>
    
    <body id="home" class="homepage">

        <div class="gradient-banner"></div>
        
        <?php get_template_part( '_inc/global',  'header' ) ?>
        <?php get_template_part( '_inc/global',  'banner' ) ?>
        <?php get_template_part( '_inc/homepage', 'video' ) ?>
        <?php get_template_part( '_inc/homepage', 'countdown' ) ?>
      
        <main class="main" role="main">

            <section id="scrollto" class="summary" data-aos="slide-up" data-aos-offset="200" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h1>POWER WAGONS IN MOAB</h1>
                    <div><span>2019</span></div>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.
                        </p>
                    </div>
                </div>
            </section>

            <section class="mobile-nav">
                <div class="wrapper">       
                    <?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'Nav-3', 'menu_class' => 'home-navigation' ) ); ?>
                </div>
            </section>

            <section class="sponsors">
                <div class="wrapper">
                    <h2>OUR SPONSORS</h2>
                </div>
            </section>
            
            <section class="details">
                <div class="wrapper">
                        
                </div>
            </section>

            <section class="latest-news">
                <div class="wrapper">
                        
                </div>
            </section>


        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>