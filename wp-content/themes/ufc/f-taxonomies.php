<?


add_action( 'init', '_custom_taxonomies', 1);

function _custom_taxonomies() {


	register_taxonomy(  
		 'event_type',  
		 'events',	// post type  
		 array(  
			 'hierarchical' => true,
			 'label' => 'Event Type',  
			 'labels' => _custom_taxonomy_labels('Event Type','Event Types'),			 
			 'query_var' => true
		 )  
	); 


	register_taxonomy(  
		 'department',  
		 'careers',	// post type  
		 array(  
			 'hierarchical' => true,
			 'label' => '',  
			 'labels' => _custom_taxonomy_labels('Department','Departments'),			 
			 'query_var' => true
		 )  
	); 


	register_taxonomy(  
		 'sector',  
		 'team',	// post type  
		 array(  
			 'hierarchical' => true,
			 'label' => '',  
			 'labels' => _custom_taxonomy_labels('Sector','Sectors'),			 
			 'query_var' => true
		 )  
	); 

	flush_rewrite_rules();

}

function _custom_taxonomy_labels($name,$plur=null) {
	if(empty($plur))
		$plur = $name;

	return array(
		'name' => $plur,
		'singular_name' => $name,
		'search_items' =>  'Search '.$plur,
		'all_items' => 'All '.$plur,
		'parent_item' => 'Parent '.$name,
		'parent_item_colon' => 'Parent '.$name.':',
		'edit_item' => 'Edit '.$name, 
		'update_item' => 'Update '.$name,
		'add_new_item' => 'Add New '.$name,
		'new_item_name' => 'New '.$name.' Name',
		'menu_name' => $name,
	); 

}

?>