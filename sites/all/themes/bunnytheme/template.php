<?php 

function bunnytheme_field__field_category (&$vars) {

  // strip markup
}

function bunnytheme_preprocess_page(&$vars) {

	// highlight blog menu item for /blog pages, blog post category & tag pages, and comment form pages

	if(
		$vars['node']->type == 'blog' || 
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'blog_post_category' || 
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'tags' || 
		$vars['page']['content']['system_main']['node_type']['#value'] == 'comment_node_blog') {
			menu_set_active_item('blog');
		}
	
	// highlight rings menu item for ring taxonomy pages

	if(
		$vars['node']->type == 'rings' ||
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'size' || 
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'color' || 
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'gem_type' || 
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'gem_size' || 
		$vars['page']['content']['system_main']['term_heading']['term']['#term']->vocabulary_machine_name == 'price') {
			menu_set_active_item('rings');
		}

	}


?>