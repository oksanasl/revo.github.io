<?
	add_theme_support('post-thumbnails');

	register_nav_menus( array(
		'menu' => 'Menu',
		'help' => 'Help Menu',
		'page_links' => 'Page Links Menu',
	) );
	
	function menu_mass($name){
	
		$menu_name = $name; 

		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
			$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

			$menu_items = wp_get_nav_menu_items($menu->term_id);
			
			$menu = array();
			$count = 0;
			$count_sub = 0;
			foreach($menu_items as $item):
				if($item->menu_item_parent == 0):
					$menu[$count]['title'] =  $item->title;
					$menu[$count]['url'] = $item->url;
				endif;
				foreach($menu_items as $item_sub):
					if($item_sub->menu_item_parent == $item->db_id):
					$menu[$count]['sub'][$count_sub]['title'] = $item_sub->title;
						$menu[$count]['sub'][$count_sub]['url'] = $item_sub->url;
						$count_sub++;
					endif;
				endforeach;
				$count++;
			endforeach;
		}
		return $menu;
	}
?>