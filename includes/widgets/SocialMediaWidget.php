<?php 
class Social_Media_Widget extends WP_Widget{
	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'my_widget',
			'description' => 'My Widget is awesome',
		);
		parent::__construct( 'social_media_widget', 'Social Media', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$widget_id = $args['widget_id'];
		if(have_rows('account', 'widget_' . $widget_id)){
			?>
			<h3>Follow Us:</h3>
			<ul class="social-media-widget">
				<?php 
					$accounts = get_field('account', 'widget_' . $widget_id);
					foreach($accounts as $account){
						?>
						<li class="account">
							<a href="<?php echo $account['url'] ?>" target="_blank">
								<?php echo $account['account']; ?>
							</a>
						</li>
						<?php 
					}
					?>
			</ul>
			<?php 
			
		}
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action('widgets_init', 'mww_custom_widgets');
function mww_custom_widgets(){
	register_widget('Social_Media_Widget');
}