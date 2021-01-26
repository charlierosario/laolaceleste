<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Babysitter Lite
 */
?>
<header>
<h1 class="entry-title"><?php esc_html_e( 'No se encontro nada', 'babysitter-lite' ); ?></h1>
</header>
<div class="blog-post">
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
<p>
<?php /* translators: %s: publish post started */ 
printf( __( 'Listo para publicar tu primer post? <a href="%1$s">Empieza aquí</a>.', 'babysitter-lite' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
<?php elseif ( is_search() ) : ?>
<p><?php esc_html_e( 'Lo sentimos, pero no se encontraron coincidencias con los terminos de busqueda. Por favor intente nuevamente con diferentes palabras clave.', 'babysitter-lite' ); ?></p>
<?php get_search_form();  
	  else : ?>
<p><?php esc_html_e( 'Parece que no podemos encontrar lo que buscas. Talvez buscando puede ayudar.', 'babysitter-lite' ); ?></p>
<?php get_search_form();
	  endif; 
?>