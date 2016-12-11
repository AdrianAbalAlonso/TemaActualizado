<?php get_header(); ?>
<?php dynamic_sidebar( 'home_right_1' ); ?>
<h1>Hola sxe</h1>


<h1>Menu</h1>
       <?php wp_nav_menu(
           array(
            'menu' => 'MiMenu'
        ) ); 
        ?>
<?php  if(have_posts());{
while (have_posts()){
    the_post();
        the_content();
?>
        
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
<?php }
}
echo "LISTO";

?>
<?php get_footer(); ?>