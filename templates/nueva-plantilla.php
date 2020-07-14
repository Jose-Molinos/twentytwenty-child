<?php
/**
 * Template Name: Nueva plantilla
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<div id="main">
<?php

if (have_posts()) {

    while (have_posts()) {
        the_post();
        ?>
        <article <?php post_class();?> id="post-<?php the_ID();?>">
    <div class="cabecera">
        <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) ?>"></img>
        <?php the_title("<h1>", "</h1>", true);?>
        </div>
        <div class="contenido">
            <nav class="navegacion"></nav>
            La mosca peluda te pica, pica, pica, ...
            <section>
                <?php echo the_content(); ?>
            </section>
        </div>
        </article>

        <?php
}
}

?>

</div>