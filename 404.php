<!DOCTYPE html>
<html lang="en-US">
    
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <title></title>
        <meta name="description" content="" />

        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="HandheldFriendly" content="True" />

        <meta name="google-site-verification" content="MPiyPBND8MtnXo0IRMigHPmsSbmR74IpI9zmY6u13EQ" />

        <link rel="alternate" type="application/rss+xml" href="{{ site.url }}/feed.xml">
        <link rel="shortcut icon" href="{{ "/favicon.ico" | prepend: site.baseurl }}">
        <!-- <link rel="prefetch" href="{{ site.url }}"> -->
        <link rel="canonical" href="{{ page.url | replace:'index.html','' | prepend: site.baseurl | prepend: site.url }}">


        <meta property="fb:admins" content="1766326817015023" />

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Power Wagons in Moab">
        <meta itemprop="description" content="The 11th Annual Power Wagons in Moab, April 30th - May 6th, 2018">
        <meta itemprop="image" content="https://d1glualvwjiyij.cloudfront.net/facebook-logo.jpg">
        
        <link href="https://fonts.googleapis.com/css?family=Oswald:700|Slabo+27px" rel="stylesheet">

        <?php wp_head(); ?>

    </head>

    <body id="404">

        <?php include('_inc/header.php') ?>
    
        <main class="main" role="main">
            <div class="gradient-banner" style="opacity: 1;"></div>
            <div class="page-banner" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/substage-bg.jpg');">
            </div>
            <?php include('_inc/page-banner.php') ?>

            <div class="wrapper wrapper-pad">
               <h1> Sorry, can't find what you are looking for!</h1>
            </div>

        </main>

        <?php include('_inc/footer.php') ?>
        <?php include('_inc/scripts.php') ?>
    </body>
</html>