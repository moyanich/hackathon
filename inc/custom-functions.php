<?php
/**
 * hackathon custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hackathon
 */


/*---------------------------------------------------------- 
** Add class to menu item
----------------------------------------------------------*/
/*function hackathon_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'primary') {
      $classes[] = 'nav-item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class', 'hackathon_menu_classes', 1, 3);
*/


  function mccu_theme_menu_classes($classes, $item, $args) {
	if ($args->theme_location == 'primary') {
		$classes[] = 'nav-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'mccu_theme_menu_classes', 10, 3);
