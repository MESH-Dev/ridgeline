<?php

//Add all custom functions, hooks, filters, ajax etc here

include('functions/start.php');

include('functions/clean.php');

//Custon wp-admin logo
function my_custom_login_logo() {
  echo '<style type="text/css">
		        h1 a {
		          background-size: 227px 85px !important;
		          margin-bottom: 20px !important;
		          background-image:url('.get_bloginfo('template_directory').'/img/logo.png) !important; }
		    </style>';
}

//Add Global options page for ACF
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Global Site Settings',
    'menu_title'  => 'Global Site Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

// Add ACF data to WP-json
add_action( 'rest_api_init', 'slug_register_acf' );
function slug_register_acf() {
  $post_types = get_post_types(['public'=>true], 'names');
  foreach ($post_types as $type) {
    register_rest_field( $type,
        'acf',
        array(
            'get_callback'    => 'slug_get_acf',
            'update_callback' => null,
            'schema'          => null,
        )
    );
  }
}
function slug_get_acf( $object, $field_name, $request ) {
    return get_fields($object[ 'id' ]);
}

//=========================================

//Dynamically retrieve our lat lng info based on the address provided
//** See Override above for situations where the use of this function is overriden per lisitng post
function getCoordinates($address){
          //var_dump($response)
          $address = urlencode($address);
          $url = "https://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address . "&key=AIzaSyDXR8bORut0sXyoust5FWnhi-9TA8TWktw";
          $response = file_get_contents($url);
          $json = json_decode($response,true);
          //Check to see if we received a good response from GoogleMaps
          if ($json['status'] == 'OK'){
            $lat = $json['results'][0]['geometry']['location']['lat'];
            $lng = $json['results'][0]['geometry']['location']['lng'];
          //If not, set lat lng values to 0 
          //** This should be good to narrow down issues with a particular listing,
          //   as problem listings will return a 0 value lat lng in our json file
          }else{
            $lat = 0;
            $lng = 0;
          }
          return array($lat, $lng);      
}

?>
