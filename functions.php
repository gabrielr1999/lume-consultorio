<?php 

  add_theme_support('post-thumbnails');

  // registra o custom Navigation walker
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

  /* Registrando menu de navegação */
  function registrar_menu_navegacao() {
    register_nav_menus( array(
      'header-menu' => _('Menu Header'),
      'footer-menu' => _('Menu Footer')
    ));
  }

  add_action('init', 'registrar_menu_navegacao');

  function wordpress_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages
    ) );
  }

  function remove_category_slug_url($query_string){ 
    if ($query_string['name'] == 'page' && isset($query_string['page'])) { 
      unset($query_string['name']); 
      list($delim, $page_index) = preg_split('//', $query_string['page']); 
      $query_string['paged'] = $page_index; 
    } 
    return $query_string; 
  } 
  add_filter('request', 'remove_category_slug_url'); 