<?php
/**
 * Custom Text widget class
 *
 * @since 1.0.0
 */
class Bavotasan_Custom_Text_Widget extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'classname' => 'bavotasan_custom_text_widget', 'description' => __( 'Custom Text Widget with Image and Icon', 'national' ) );
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct( 'bavotasan_custom_text_widget', '(' . BAVOTASAN_THEME_NAME . ') ' . __( 'Image, Icon & Text', 'national' ), $widget_ops, $control_ops );

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	function admin_enqueue_scripts( $hook ) {
	    if ( 'widgets.php' == $hook ) {
    		wp_enqueue_media();
    		wp_enqueue_script( 'bavotasan_image_widget', BAVOTASAN_THEME_URL . '/library/js/admin/image-widget.js', array( 'jquery', 'media-upload', 'media-views' ), '', true );

    		wp_enqueue_style( 'bavotasan_image_widget_css', BAVOTASAN_THEME_URL . '/library/css/admin/image-widget.css' );
            wp_enqueue_style( 'font_awesome', BAVOTASAN_THEME_URL .'/library/css/font-awesome.css', false, '4.1.0', 'all' );
        }
	}

	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$text = apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		$icon =  ( empty( $instance['icon'] ) ) ? '' : '<i class="fa ' . esc_attr( $instance['icon'] ). '"></i>';
		$url = ( empty( $instance['url'] ) ) ? '' : esc_url( $instance['url'] );
		$button_text = ( empty( $instance['button_text'] ) ) ? '' : $instance['button_text'];

		$title_string = ( $url ) ? '<a href="' . $url . '">'. $title . '</a>' : $title;

		echo $before_widget;

		if ( $icon )
			echo $icon;

		if ( ! empty( $instance['image'] ) )
			echo ( $url ) ? '<a href="' . $url . '"><img src="' . esc_url( $instance['image'] ). '" alt="" /></a>' : '<img src="' . esc_url( $instance['image'] ). '" alt="" />';

		if ( $title )
			echo $before_title . $title_string . $after_title;
		?>

		<div class="textwidget">
			<?php echo ( ! empty( $instance['filter'] ) ) ? wpautop( $text ) : $text; ?>
		</div>
		<?php

		if ( $url && $button_text )
			echo '<p class="btn-container"><a href="' . $url . '" class="btn">' . strip_tags( $button_text ) . '</a></p>';

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['icon'] = strip_tags( $new_instance['icon'] );
		$instance['image'] = esc_url( $new_instance['image'] );
		$instance['url'] = esc_url( $new_instance['url'] );
		$instance['button_text'] = strip_tags( $new_instance['button_text'] );

		if ( current_user_can( 'unfiltered_html' ) )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes( $new_instance['text'] ) ) ); // wp_filter_post_kses() expects slashed

		$instance['filter'] = isset( $new_instance['filter'] );

		return $instance;
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '', 'icon' => '', 'image' => '', 'url' => '', 'button_text' => '' ) );
		extract( $instance );
		$img_tag = ( $image ) ? '<img src="' . esc_url( $image ) . '" alt="" />' : '';
		$icon_tag = ( $icon ) ? '<i class="fa ' . esc_attr( $icon ) . '"></i>' : '';
		?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'national' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>

		<p><label><?php _e( 'Icon:', 'national' ); ?></label>
		<span class="custom-icon-container"><?php echo $icon_tag; ?></span>
		<a href="#" class="view-icons"><?php _e( 'View Icons', 'national' ); ?></a> | <a href="#" class="delete-icon"><?php _e( 'Remove Icon', 'national' ); ?></a>
		<?php bavotasan_font_awesome_picker(); ?>
		<input class="image-widget-custom-icon" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="hidden" value="<?php echo esc_attr( $icon ); ?>" /></p>

		<p><label><?php _e( 'Image:', 'national' ); ?></label>
		<span class="custom-image-container"><?php echo $img_tag; ?></span>
		<a href="#" class="select-image"><?php _e( 'Select Image', 'national' ); ?></a> | <a href="#" class="delete-image"><?php _e( 'Remove Image', 'national' ); ?></a>
		<input class="image-widget-custom-image" name="<?php echo $this->get_field_name( 'image' ); ?>" type="hidden" value="<?php echo esc_url( $image ); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'url' ); ?>"><?php _e( 'URL:', 'national' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'url' ); ?>" name="<?php echo $this->get_field_name( 'url' ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>" /></p>

		<p><label for="<?php echo $this->get_field_id( 'button_text' ); ?>"><?php _e( 'Button Text:', 'national' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'button_text' ); ?>" name="<?php echo $this->get_field_name( 'button_text' ); ?>" type="text" value="<?php echo esc_attr( $button_text ); ?>" /></p>

		<textarea class="widefat" rows="8" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo esc_textarea( $text ); ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked( isset( $filter ) ? $filter : 0 ); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e( 'Automatically add paragraphs', 'national' ); ?></label></p>
		<?php
	}
}
register_widget( 'Bavotasan_Custom_Text_Widget' );