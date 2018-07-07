<?php
/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<div class="read-more"><a class="read-more-link" href="%1$s">%2$s</a><div>',
                    esc_url( get_permalink( esc_attr( get_the_ID() ) ) ),
                    __( 'Leer más', 'temana' )
                  );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>
