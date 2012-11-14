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
	}
?>