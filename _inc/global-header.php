<header class="header-main" data-aos="fade-down" data-aos-offset="0" data-aos-duration="600" data-aos-delay="0"> 
    <div class="wrapper">

        <a href="/" class="logo">
            <span>PWIM</span>
        </a>

        <nav>
           <ul class="main-menu">
                <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'Nav-1', 
                        'items_wrap'     => '%3$s', 
                        'container'      => false
                    )
                );?>
                <li>
                    <a href="/2019-sign-up-form/" class="btn" title="Register Now">REGISTER</a>
                </li>
            </ul>
        </nav>

    </div>
</header>