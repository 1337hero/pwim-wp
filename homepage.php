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
      
        <main class="main" role="main">

            <section id="scrollto" class="summary" >
                <div class="wrapper" data-aos="slide-up" data-aos-offset="40" data-aos-duration="800" data-aos-delay="0">
                    <h1 class="main-title">POWER WAGONS IN MOAB</h1>
                    <div class="details">
                        <span class="dates">April 29th - May 3rd</span>
                        <a class="location" href="https://www.google.com/maps/place/Moab,+UT+84532/@38.5743927,-109.5864378,13z/data=!3m1!4b1!4m5!3m4!1s0x8747e1e59ab82d8d:0xb32b17af1d5c42d!8m2!3d38.5733155!4d-109.5498395" rel="nofollow" target="_blank">Moab, Utah, U.S.A</a>
                    </div>

                    <div class="content">
                        <p>Is it on your bucket list to experience Moab? Would you like to tackle some of Moab’s most famous trails but don’t want to go alone? Are you looking to learn new skills and conquer new challenges off-road? Do you own a Power Wagon?</p>
                        <p>Then come join us at Power Wagons in Moab! No previous 4x4 experience is required. Our guides will lead you through some of the toughest to the most scenic trails iconic Moab has to offer. We'll provide you with tips and tricks to build your 4-wheeling skills and help you discover the full off-road capability of your Power Wagon. It’s an adventure like no other!</p>
                        
                    </div>
                </div>
            </section>

            <section class="featured" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>2018 HIGHLIGHTS</span></h2>
                    <ul class="highlights">
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/highlights/thumb-01.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/highlights/thumb-02.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/highlights/thumb-03.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/highlights/thumb-04.jpg"></li>
                        <li><img src="<?php bloginfo('template_directory'); ?>/assets/img/highlights/thumb-05.jpg"></li>
                    </ul>
                </div>
            </section>
            
            <section class="details" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>TRAIL LIST<span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="desktop-list">
                        <ul class="trail-list"  data-aos="slide-up" data-aos-offset="0" data-aos-duration="800" data-aos-delay="100">
                            <li class="level">
                                <i class="fas fa-map-signs"></i><h3 class="easy">EASY TRAILS</h3>
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Canyonlands Loop
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Onion Creek to La Sal Loop
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Hurrah Pass & Chicken Corners
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Tusher Tunnel & Hidden Canyon
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Dome Plateau
                            </li>
                        </ul>
                        <ul class="trail-list" data-aos="slide-up" data-aos-offset="0" data-aos-duration="800" data-aos-delay="200">
                            <li class="level">
                                <i class="fas fa-map-signs"></i><h3 class="moderate">MODERATE TRAIL</h3>
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Tip Toe thru Hell's Revenge
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Bull Canyon & Gemini Bridges Hike
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Sevenmile Rim
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Fins & Things
                            </li>
                            <li>
                                <i class="fas fa-circle"></i> Tower Arch & Hike
                            </li>
                        </ul>
      
                        <ul class="trail-list last" data-aos="slide-up" data-aos-offset="0" data-aos-duration="800" data-aos-delay="300">
                            <li class="level">
                                <i class="fas fa-map-signs"></i><h3 class="hard">HARDCORE TRAILS</h3></li>
                            <li>
                                <i class="fas fa-circle"></i> Poison Spider & Where Eagles Dare</li>
                            <li>
                                <i class="fas fa-circle"></i> Flat Iron Mesa</li>
                            <li>
                                <i class="fas fa-circle"></i> Hell's Revenge (Full Challenge)</li>
                            <li>
                                <i class="fas fa-circle"></i> Metal Masher</li>
                            <li>
                                <i class="fas fa-circle"></i> Moab Rim</li>
                        </ul>  
                    </div>  
                </div>
            </section>

            <section class="sponsors" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>OUR PARTNERS</span></h2>
                    
                    <div class="logos">
                        <a href="https://www.aev-conversions.com/" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsors/logo-aev.png">
                        </a>
                        <a href="" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsors/logo-maple.png">
                        </a>
                        <a href="" target="_blank" rel="nofollow">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/sponsors/logo-opp.png">
                        </a>
                    </div>
                    
                </div>
            </section>

            <section class="latest-news" data-aos="slide-up" data-aos-offset="60" data-aos-duration="800" data-aos-delay="0">
                <div class="wrapper">
                    <h2><span>LATEST NEWS</span></h2>

                    <div class="latest-posts">
                        <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        
                        <a class="post" href="href="<?php the_permalink() ?>">
                            <div class="post-img">
                                <?php if ( has_post_thumbnail() ) {
                                        the_post_thumbnail();
                                    } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/images/image-placeholder.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>
                            </div>
                            <div class="post-content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>

                        <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </div>
            </section>


        </main>

        <?php get_template_part( '_inc/global', 'footer') ?>

    </body>
</html>