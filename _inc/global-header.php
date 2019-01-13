<header class="header-main"> 
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
                    <a href="/2019-sign-up-form/" class="btn" title="Register Now">REGISTER NOW</a>
                </li>
            </ul>
        </nav>

    </div>
</header>