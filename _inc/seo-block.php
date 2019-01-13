<section class="mobile-seo">
    <div class="wrapper">
        
        <h1 id="the-event" class="event">POWER WAGONS IN MOAB</h1>
        <div class="section-title">2019</div>

        <?php $seo_query = new WP_Query('page_id=26'); while ($seo_query->have_posts()) : $seo_query->the_post(); $do_not_duplicate = $post->ID;?>
          
            <?php the_content(); ?>
               
         <?php endwhile; wp_reset_query(); ?>

         <a href="/2019-sign-up-form/" class="btn" style="float: none">REGISTER NOW</a>
    </div> 
</section>