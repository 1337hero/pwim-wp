<footer class="footer">

    <nav>
        <?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'Nav-3', 'menu_class' => 'footer-menu' ) ); ?>
    </nav>

    <div class="footer-copyright">
        <p class="copyright">Copyright 2017-2018 PowerWagonsinMoab.com</p>
        <p class="copyright">Ram, and Power Wagon are registered trademarks of FCA US LLC.</p>
    </div>

</footer>



    <!-- SIDEBAR NAVIGATION FOR MOBILE -->
    <div id="sidebar-navigation" class="sidebar-navigation">
        <a class="close-menu" href="#"><span class="icon-cancel"></span></a>

        <a class="btn" href="/2019-sign-up-form/">REGISTER NOW</a>

        <nav>
            <?php wp_nav_menu( array( 'container'=> false, 'theme_location' => 'Nav-2', 'menu_class' => 'sidebar-menu' ) ); ?>
        </nav>

        <ul class="sidebar-info">
            <li class="share">
                <a href="https://www.facebook.com/pwinmoab/"><span class="icon-facebook"></span></a>
                <a href="https://www.instagram.com/offroadpowerwagon/"><span class="icon-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UCRiS7tB1ruZmmAXBnzWyyOQ"><span class="icon-youtube"></span></a>
            </li>
            <li>
                <a href="/event-disclaimer/">Disclaimer & Terms</a>
            </li>
            <li class="legal">
                Ram, and Power Wagon are registered trademarks of FCA US LLC.
            </li>


        </ul>
    </div>

    
<?php wp_footer(); ?>