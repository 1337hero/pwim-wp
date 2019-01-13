<?php
/*------------------------------------*\
    WIHP CUSTOM ADMIN LOGIN
\*------------------------------------*/

function my_login_logo() { ?>
    <style type="text/css">
        html {
             background: #f2f2f2;
        }
        /*body.login div#login h1 a {
            background: url(http://ahtop.devalias-aws.com/assets/themes/athop-prime/images/ahtop-logo.svg) center center no-repeat;
            width:320px; 
            height:84px;
            margin: 0 auto 40px;
        }*/
        body.login {
            background: transparent;
        }
        body.login #backtoblog a, 
        body.login #nav a {
            color:#434343;
            padding-bottom: 2px;
        }
        body.login #backtoblog a:hover, 
        body.login #nav a:hover {
            color:#2851af;
            border-bottom: 2px solid #2851af;
        }
        body.login #login_error, 
        body.login .message {
            border-left: 4px solid red;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
