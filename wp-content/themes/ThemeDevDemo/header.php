<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?php bloginfo('name');?></title>
        <?php wp_head(); ?>
    </head>
    <header>
        <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?><a></h1>
        <h5><?php bloginfo('description');?></h5>
        <nav class="site-nav">
            <?php wp_nav_menu();?>
        </nav>
    </header>
    <body>