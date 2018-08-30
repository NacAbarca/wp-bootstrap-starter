<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<section class="no-results not-found">
	<div class="alert alert-info" role="alert">
		<header class="page-header">
			<h1 class="page-title"><i class="fa fa-bullhorn"></i>&nbsp;<?php esc_html_e( ' No se ha encontrado', 'wp-bootstrap-starter' ); ?></h1>
		</header><!-- .page-header -->
		<hr>
		<div class="page-content">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php printf( wp_kses( __( '¿Listo para publicar su primer postear? <a href="%1$s"> Comienza aquí </a>.', 'wp-bootstrap-starter' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Lo sentimos, pero nada coincide con sus términos de búsqueda. Por favor, inténtelo de nuevo con algunas palabras clave diferentes.', 'wp-bootstrap-starter' ); ?></p>
				<?php
				get_search_form();

			else : ?>

				<p><?php esc_html_e( 'Parece que no podemos encontrar lo que estás buscando. Quizás la búsqueda puede ayudar.', 'wp-bootstrap-starter' ); ?></p>
				<?php
				get_search_form();

			endif; ?>
		</div><!-- .page-content -->
	</div>



</section><!-- .no-results -->
