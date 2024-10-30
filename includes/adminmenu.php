<?php
function clickx_menucreate(){
	add_options_page( 'Clickx Analytics', 'Clickx', 'manage_options', 'clickxanalytics_page', 'clickx_page_display', '', 24 );
}
function clickx_add_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=clickxanalytics_page">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
    return $links;
}
function clickx_page_display(){
	if (!current_user_can('manage_options')) {
        wp_die('Unauthorized user');
    }
    if (isset($_POST['clickx_noncefield']) && !wp_verify_nonce( $_POST['clickx_noncefield'], 'clickx_option_page_action' )) {
        wp_die('Nonce verification failed');
    }
	if (isset($_POST['clickx_code'])) {
        $clickx_codeset = sanitize_text_field($_POST['clickx_code']);
        if(strlen($clickx_codeset) < 15 ){
            $status = update_option('clickx_code', $clickx_codeset);
            $status_two = true;
        }
        else{
            $status_two = false;
            $status     = false;
        }
        $value = $_POST['clickx_code'];
        if($status_two == false){
            echo '<div class="error notice"><p>Oh-Oh! Doesn\'t look like a ClickX Code </p></div>';
        }
        else if($status == false){
            echo '<div class="error notice"><p>Oh-Oh! No Settings To Save!</p></div>';
        }
        else {
            echo '<div class="updated notice"><p>Awesome! Your settings has been saved!</p></div>';
        }
    }
    $value = get_option('clickx_code', 'XXXX');
	include ('clickx_form.php');
}?>