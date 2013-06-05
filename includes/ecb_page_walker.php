<?php

class ECB_Page_Walker extends Walker {
  /**
   * @see Walker::$tree_type
   * @since 3.0.0
   * @var string
   */
  var $tree_type = array( 'post_type', 'taxonomy', 'custom' );

  /**
   * @see Walker::$db_fields
   * @since 3.0.0
   * @todo Decouple this.
   * @var array
   */
  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

  /**
   * @see Walker::start_lvl()
   * @since 3.0.0
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param int $depth Depth of page. Used for padding.
   */

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    if($item->object == "page"){
      $output .= $item->object_id . ",";
      // print_r( $post_ids );
    }
  }
}