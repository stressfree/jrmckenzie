<?php
drupal_add_css(
'http://fonts.googleapis.com/css?family=PT+Sans', 
array('group' => CSS_DEFAULT, 'every_page' => TRUE));

function jrmckenzie_show_sidebar($node) {
	$show_sidebar = false;
	if (isset($node) && isset($node->field_sidebar_image) && count($node->field_sidebar_image) > 0) {
		$show_sidebar = true;
	}
	if (isset($node) && isset($node->field_cover_image) && count($node->field_cover_image) > 0) {
		$show_sidebar = true;
	}
	return $show_sidebar;
}
?>