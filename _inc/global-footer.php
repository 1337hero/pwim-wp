<!-- site footer -->
<footer class="footer-main">
    
    <div class="the-closing">
        <div class="wrapper">
            
            <div>
                <h3>Quick Links</h3>
                <nav>
                    <?php wp_nav_menu( 
                        array( 
                            'theme_location' => 'Nav-2', 
                            'menu_class'    => 'quick-links',
                            'container'      => false
                        )
                    );?>
                    </nav>
                </div>

                <div>
                    <h3>Connect with Us</h3>
                    <ul class="details">
                         <li class="share">
                            <a target="_blank" href="https://www.facebook.com/pwinmoab/" title="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/offroadpowerwagon/" title="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/c/BoldAdventure?sub_confirmation=1" title="youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>EVENT QUESTIONS</li>
                        <li>JorDanee Key</li>
                        <li>
                            <i class="fa fa-envelope"></i> <a href="mailto:jordanee@powerwagonsinmoab.com">jordanee@powerwagonsinmoab.com</a>
                        </li>
                        <li>SPONSORSHIP INQUIRES</li>
                        <li>Lenzi Van Wagoneer</li>
                        <li>
                            <i class="fa fa-envelope"></i> <a href="mailto:lenzi@powerwagonsinmoab.com">lenzi@powerwagonsinmoab.com</a>
                        </li>     
                    </ul>
                </div>

            </div>
        </div>
    </div>
    
    <div class="copyright">
        <div class="wrapper">
            <span>Copyright 2019 © Offroad Treks, LLC </span><span class="divider">|</span><span> Designed & Built by <a href="https://mk3y.com/" target="_blank">Mike Key</a></span>
        </div>
    </div>

</footer>


<!-- hamburger btn -->
<button id="nav-toggle" class="menu-btn">
    <div class="menu-icon">
        <span></span><span></span><span></span>
    </div>
</button> 

<div class="sidebar-overlay"></div>
<div id="sidebar-navigation" class="sidebar-navigation">

    <nav>
        <?php wp_nav_menu( 
            array( 
                'theme_location' => 'Nav-3', 
                'menu_class'    => 'sidebar-menu',
                'container'      => false
            )
        );?>
    </nav>

</div>

<!-- mobile cta -->
<div class="mobile-reg">
    <div class="wrapper">
        <div class="mobile-cta">
            <span>REGISTRATION IS OPEN</span>
        </div>

        <a href="/2019-sign-up-form/" class="btn mobile-btn">REGISTER NOW</a>
    </div>
</div>

   
<?php wp_footer(); ?>