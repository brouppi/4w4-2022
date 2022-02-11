<?php 

function cidw_4w4_enqueue(){
    wp_enqueue_style('style_css', get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");


    /*
    enregistrer le menu
    */
   function cidw_4w4_register_nav_menus(){
   register_nav_menus(array (
       'menu__principal' => __('Menu principale','cidw_4w4'),
        'menu__footer' => __('Menu footer', 'cidw_4w4'),
   ));
   }
   add_action('after_setup_theme','cidw_4w4_register_nav_menus',0);
   /*
   filtrer les choix du menu principale
   */
  function cidw_4w4_filtre_menu($obj_menu){
      
      foreach($obj_menu as $cle => $value){
          
           //$value->title = substr($value -> title,0,7);
           $value -> title = wp_trim_words($value -> title,3,"...");
      }
      return($obj_menu);
  }
   add_filter("wp_nav_menu_objects","cidw_4w4_filtre_menu")

?>