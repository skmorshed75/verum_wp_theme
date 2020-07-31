<?php
// Class 4.21
// Adds widget: VerumFlickrWidget
class Verumflickrwidget_Widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'verumflickrwidget_widget',
			esc_html__( 'Verum Flickr Widget', 'verum' ),
			array( 'description' => esc_html__( 'Flickr Widget', 'verum' ), ) // Args
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Flickr ID',
			'id' => 'verum_flickr_id',
			'type' => 'text',
		),
		array(
			'label' => 'Number of Photos',
			'id' => 'verum_number_photos',
			'default' => '12',
			'type' => 'text',
		),
	);

	public function widget( $args, $instance ) {
		echo wp_kses_post($args['before_widget']);

		// Output generated fields
		echo '<p>'.$instance['verum_flickr_id'].'</p>';
        echo '<p>'.$instance['verum_number_photos'].'</p>';
        $flickr_output = wp_remote_get("https://www.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=b679440c220959b5f454efc343e50caf&user_id={$instance['verum_flickr_id']}&per_page={$instance['verum_number_photos']}&format=json&nojsoncallback=1");
        if(is_array($flickr_output)){
            $photos = json_decode($flickr_output['body'],true);
            //  echo '<pre>';
            //  print_r($photos);
            //  echo '</pre>';
            ?>
            <div class="flickr-photo-section">
                <div class="flickr-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flickr.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/flickr@2x.jpg 2x" alt=""/>
                </div>
                <div class="flickr_gallery owl-carousel owl-theme">
                <?php
                foreach($photos['photos']['photo'] as $photo){
                    $url = 'https://farm{$photo['farm']}.staticflickr.com/{$photo['server']}/{$photo['id']}_{$photo['secret']}_z.jpg';
                    ?>
                    <div class="item">
                        <a href="#"><img class="img-fluid" src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($photo['title']); ?>"/></a>
                    </div>
                    <?php
                }
                ?>
                </div>
            </div>
            <?php
        }
		
		echo wp_kses_post($args['after_widget']);
	}

	public function field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$default = '';
			if ( isset($widget_field['default']) ) {
				$default = $widget_field['default'];
			}
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'verum' );
			switch ( $widget_field['type'] ) {
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'verum' ).':</label> ';
				 	$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.esc_attr($widget_field['type']).'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$this->field_generator( $instance );
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
}

function register_verumflickrwidget_widget() {
	register_widget( 'Verumflickrwidget_Widget' );
}
add_action( 'widgets_init', 'register_verumflickrwidget_widget' );