<?php
$args = array(
	'address'   => '',
	'width'      => '',
	'height'    => '',
	'zoom'      => '',
	'zoomwithmouse' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$apikey = ale_get_option('maps_api_key');
$icon = ale_get_option('map_icon');
$customstyle = ale_get_option('maps_style');


//Show custom Icon if exist image
if($icon){
	$map_icon = 'icon: "'.$icon.'"';
} else {
	$map_icon ='';
}

//Show Custom style if exist style in theme options.
if($customstyle ) {
	$customstyle = 'styles:'.$customstyle ;
} else {
	$customstyle = '';
}

//Zoom Setting from Shortcode
if($zoom){
	$zoom = $zoom;
} else {
	$zoom = 15;
}

//Mouse wheel zoom Setting from Shortcode
if($zoomwithmouse == 'yes'){
	$zoomwithmouse = 'true';
} else {
	$zoomwithmouse = 'false';
}


if( $address ) :
	wp_register_script( 'google-maps-api', 'https://maps.googleapis.com/maps/api/js?key='.$apikey );
	wp_print_scripts( 'google-maps-api' );

	$coordinates = ale_map_get_coordinates( $address );

	if( !is_array( $coordinates ) )
		return;

	$map_id = uniqid( 'ale_map_' );

	ob_start(); ?>
	<div class="ale_map_canvas" id="<?php echo esc_attr( $map_id ); ?>" style="height: <?php echo esc_attr( intval($height) ); ?>px; width: <?php echo esc_attr( $width ); ?>"></div>
	<script type="text/javascript">
		var map_<?php echo esc_attr($map_id); ?>;
		function ale_run_map_<?php echo esc_attr($map_id) ; ?>(){
			var location = new google.maps.LatLng("<?php echo esc_attr($coordinates['lat']); ?>", "<?php echo esc_attr($coordinates['lng']); ?>");
			var map_options = {
				zoom: <?php echo esc_attr($zoom); ?>,
				center: location,
				scrollwheel: <?php echo esc_attr($zoomwithmouse); ?>,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				<?php echo $customstyle; ?>
			}
			map_<?php echo esc_attr($map_id) ; ?> = new google.maps.Map(document.getElementById("<?php echo esc_attr($map_id) ; ?>"), map_options);
			var marker = new google.maps.Marker({
				position: location,
				map: map_<?php echo esc_attr($map_id) ; ?>,
				<?php echo $map_icon; ?>
			});
		}
		ale_run_map_<?php echo esc_attr($map_id) ; ?>();
	</script>
<?php
endif;


//Retrieve coordinates for an address
function ale_map_get_coordinates( $address, $force_refresh = false ) {

	$address_hash = md5( $address );

	$coordinates = get_transient( $address_hash );


	if ($force_refresh || $coordinates === false) {

		$args       = array( 'address' => urlencode( $address ), 'sensor' => 'false' );
		$url        = add_query_arg( $args, 'http://maps.googleapis.com/maps/api/geocode/json' );
		$response 	= wp_remote_get( $url );

		if( is_wp_error( $response ) )
			return;

		$data = wp_remote_retrieve_body( $response );

		if( is_wp_error( $data ) )
			return;

		if ( $response['response']['code'] == 200 ) {

			$data = json_decode( $data );

			if ( $data->status === 'OK' ) {

				$coordinates = $data->results[0]->geometry->location;

				$cache_value['lat'] 	= $coordinates->lat;
				$cache_value['lng'] 	= $coordinates->lng;
				$cache_value['address'] = (string) $data->results[0]->formatted_address;

				// cache coordinates for 3 months
				set_transient($address_hash, $cache_value, 3600*24*30*3);
				$data = $cache_value;

			} elseif ( $data->status === 'ZERO_RESULTS' ) {
				return esc_html__( 'No location for the address.', 'olins' );
			} elseif( $data->status === 'INVALID_REQUEST' ) {
				return esc_html__( 'Bad request. Did you enter an address name?', 'olins' );
			} else {
				return esc_html__( 'Error, please check if you have entered the shortcode correctly.', 'olins' );
			}

		} else {
			return esc_html__( 'Can\'t connect Google API.', 'olins' );
		}

	} else {
		// return cached results
		$data = $coordinates;
	}
	return $data;
}


//Fix bug with responsive
function ale_map_css() {
	echo '<style type="text/css">
            .ale_map_canvas img {
                max-width: none;
          }</style>';
}
add_action( 'wp_head', 'ale_map_css' );




