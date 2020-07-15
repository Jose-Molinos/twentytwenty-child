<?php
/**
 * Template Name: Nueva plantilla
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Child
 * @since Twenty Twenty Child 1.0
 */

get_header();
?>

<div id="main" class="container">

    <?php

    if (have_posts()) {

        while (have_posts()) {
            the_post();
    ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <div class="cabecera row">
                    <img class="col-sm-4" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'twentytwenty-fullscreen'); ?>">
                    <?php the_title("<h1 class='col-sm-8'>", "</h1>", true); ?>
                </div>
                <div class="contenido row">
                    <nav class="navegacion col-sm-4">

                    <?php
					if ( has_nav_menu( 'primary' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="menu_vertical">

								<?php
								if ( has_nav_menu( 'vertical' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'vertical',
										)
									);

								} 
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						<?php
					}
?>


                    </nav>
                    <section class="col-sm-8 contenido_principal">
                        <?php echo the_content(); ?>
                    </section>
                </div>

            </article>
    <?php
        }
    }

    ?>

</div>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>