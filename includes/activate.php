<?php
function clickx_activate(){
	if(version_compare(get_bloginfo('version'),'4.2','<')){
		wp_die( __('latest version of 4.2 Required','drunkSpiderman'));
	}
}
?>