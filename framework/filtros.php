<?php
/**
 * Filtrar resultados de búsqueda para que solo muestre
 * posts en el listado
 */

function buscar_solo_posts($query) {
 if($query->is_search) {
   $query->set('post_type','post');
 }
 return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');
?>
