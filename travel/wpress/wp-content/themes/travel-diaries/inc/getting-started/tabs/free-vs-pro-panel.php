<?php
/**
 * Free Vs Pro Panel.
 *
 * @package Travel_Diaries
 */
?>
<!-- Free Vs Pro panel -->
<div id="free-pro-panel" class="panel-left">
	<div class="panel-aside">               		
		<img src="<?php echo esc_url( get_template_directory_uri() . '/inc/getting-started/images/free-vs-pro.png' ); //@todo change respective images.?>" alt="<?php esc_attr_e( 'Free vs Pro', 'travel-diaries' ); ?>"/>
		<a class="button button-primary" href="<?php echo esc_url( 'https://rarathemes.com/wordpress-themes/travel-diaries-pro/' ); ?>" title="<?php esc_attr_e( 'View Premium Version', 'travel-diaries' ); ?>" target="_blank">
            <?php esc_html_e( 'View Pro', 'travel-diaries' ); ?>
        </a>
	</div><!-- .panel-aside -->
</div>