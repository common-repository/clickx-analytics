<div class="row">
	<div class="five columns">
		<h1>ClickX Analytics Options</h1>
		<form method="POST">
		    <label for="clickx_code">Your Analytics Code</label>
		    <input type="text" name="clickx_code" id="clickx_code" class="clickx_text" value="<?php echo $value;?>">
		    <?php echo wp_nonce_field( 'clickx_option_page_action', 'clickx_noncefield' );?>
		    <br><br>
		    <input type="submit" value="Save" class="button button-primary button-large">
		</form>
		<div>
			<p class="clickx-para-padding">
				<b>Need​ ​ClickX​ ​Support?</b>
				Please check the <a href="http://support.clickx.io/support/home" title="ClickX Support">Clickx Support</a> first. If you have any problems with the Clickx WP plugin or any suggestions for improvements or new features, please feel free to <a href="https://www.clickx.io/contact-us/" title="Contact Us">contact us.</a></p>
		</div>
	</div>
</div>

<div class="row">
	<div class="seven columns">
		<p> 
			Locate your Clickx Tracking ID by:Logging into Your <code>Profile > Dashboard</code> Click on the 3 vertical dots to get link to settings page.
		</p>
		<a href="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/clickX-guide-one.jpg'; ?>" target="_blank"><img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/clickX-guide-one.jpg'; ?>" alt="Guide ClickX"></a>
		<p>In <code>Settings > Tracking Code</code>
		To enable Clickx tracking, enter your Tracking ID for WordPress Plugin in the box below:</p>
		<a href="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/clickX-guide-two.jpg'; ?>" target="_blank"><img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/clickX-guide-two.jpg'; ?>" alt="Guide ClickX"></a>
	</div>
</div>