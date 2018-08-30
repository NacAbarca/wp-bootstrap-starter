<?php
/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php _e( 'Alguien solicitó que se restablezca la contraseña para la siguiente cuenta:', 'wp-bootstrap-starter' ); ?></p>
<p><?php printf( __( 'Nombre de usuario: %s', 'wp-bootstrap-starter' ), $user_login ); ?></p>
<p><?php _e( 'Si esto fue un error, simplemente ignore este correo electrónico y no pasará nada.', 'wp-bootstrap-starter' ); ?></p>
<p><?php _e( 'Para restablecer su contraseña, visite la siguiente dirección:', 'wp-bootstrap-starter' ); ?></p>
<p>
	<a class="link" href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>">
			<?php _e( 'Haga clic aquí para restablecer la contraseña', 'wp-bootstrap-starter' ); ?></a>
</p>
<p></p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
