<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style.css';?>">
 </head>
 <body>
  

    Arriba
     <h1>Menu</h1>
       <?php wp_nav_menu(
           array(
            'menu' => 'Menu2'
        ) ); ?>
