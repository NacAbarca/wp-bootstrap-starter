<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-12">
		<main id="main" class="site-main" role="main">

			<div class="alert alert-info" role="alert">
				<header class="page-header">
					<h1 class="alert-heading text-center"><i class="fa fa-info-circle"></i>&nbsp;<?php esc_html_e( 'Pucha! Esa página no se puede encontrar.', 'wp-bootstrap-starter' ); ?></h1>
				</header>
				<div class="page-content">
					<p><?php esc_html_e( 'Parece que no se encontró nada en esta ubicación. ¿Tal vez intente uno de los siguientes enlaces o una búsqueda?', 'wp-bootstrap-starter' ); ?></p>	
				</div>
				
				<hr>
				<?php get_search_form(); ?>
			</div>

			<img src="<?php echo ($_SERVER['HTTPS'] ? "https" : "http" ."://".$_SERVER[HTTP_HOST]); ?>/wp-content/uploads/2018/05/img-404.jpg" class="img-responsive">

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
