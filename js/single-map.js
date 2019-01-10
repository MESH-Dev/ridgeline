  var loadListings = function(listing_cat) {



    // Set the JSON file
    //var listingsFile = $dir + '/helpers/listings.json';
    var listingsFile = $home + '/wp-json/wp/v2/pages/'+$pid+'/';
    //console.log("The listings.json file is at "+listingsfile);

    //Declare this outside of the getJSON loop
    var map;
    var bounds = new google.maps.LatLngBounds();

     
    //Keep this out of the getJSON loop
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        //center: new google.maps.LatLng(38.3607728,-81.6441211),
        scrollwheel:  false,
        zoomControl: true,
        zoomControlOptions: {
          position: google.maps.ControlPosition.LEFT_BOTTOM,
        },
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        styles: $styles,
      });

    var infoWindow = new google.maps.InfoWindow();//, marker, i;

    //Create variable needed for Spider marker clustering
    var oms = new OverlappingMarkerSpiderfier(map, { 
            markersWontMove: true, 
            markersWontHide: true,
            basicFormatEvents: true,
            keepSpiderfied: true
          });
    
    //The JSON loop, parses the listings.json file for the information we need to make the map
    jQuery.getJSON(listingsFile).success(function(data) {
      var ctr = 1;
      //_data = data['acf']['map_locations'];
      var locs = data['acf']['map_locations'];

      var _lat = data['acf']['property_latitude'];
      var _long = data['acf']['property_longitude']

      console.log(data['acf']['map_locations']);
      //console.log(locs[i]);
      //console.log(data);
            // Loop through the JSON file adding the markers
      //for (var i = 0; i < locs.length; i++) {

        // if(data[i]['listing_category'] !== listing_cat){

        //   continue;
        // }
        // else if(data[i]['listing_category'] === listing_cat){
        //var lat = locs[i]['location_latitude'];
        //console.log(lat);
        //var _long = locs[i]['location_longitude'];
        //console.log(_long);

          var icon, text, type_class;
        var $basedir = $dir;
        var icon = $basedir+'/img/map-icon.png';
          // if(data[i]['primary_section'] == 'Outside &amp; In'){
          //   icon = '/img/outdoors-map-icon.png';
          //   type_class = 'outside-in-iw';
          // }else if(data[i]['primary_section'] == 'Culture &amp; Heritage'){
          //   icon = '/img/culture-map-icon.png';
          //   type_class = 'culture-iw';
          // }else if(data[i]['primary_section'] == 'Eat &amp; Drink'){
          //   icon = '/img/eat-map-icon.png';
          //   type_class = 'eat-drink-iw';
          // }else if(data[i]['primary_section'] == 'Sleep &amp; Relax'){
          //   icon = '/img/sleep-map-icon.png';
          //   type_class = 'sleep-relax-iw';
          // }else if(data[i]['primary_section'] == 'Shop In Town &amp; Out'){
          //   icon = '/img/shop-map-icon.png';
          //   type_class = 'shop-iw';
          // }
          
        //Scoop out the titles from our JSON file
        //var title = locs[i]['location_name'];
        //var color = data[i]['color'];

        //var slug = data[i]['slug'];

        // var address = data[i]['address'];
        // if (address != ''){
        //   $address = address;
        // }else{
        //   $address = '';
        // }
        // var city =  data[i]['city'];
        // if (city != ''){
        //   $city = city;
        // }else{
        //   $city = '';
        // }
        // var zip = data[i]['zip'];
        // if (zip != ''){
        //   $zip = zip;
        // }else{
        //   $zip = '';
        // }
        // var lat = locs[i]['location_latitude'];
        // console.log(lat);
        // var _long = locs[i]['location_longitude'];
        // console.log(_long);

        
        //$link = 'https://www.google.com/maps?saddr=My+location&daddr='+lat+','+_long;
      
          //Create the marker
          marker = new google.maps.Marker({
            //This is just the title of the blog post
            //title: title,
            //Style the dang label
            // label: {
            //   text:String(ctr),
            //   color:"#ffffff",
            //   fontSize:"2em",
            //   fontFamily:"alternate-gothic-no-1-d"
            // },
            position: new google.maps.LatLng(_lat, _long),
            map: map,
            //Create the custom icon
            // icon:{
            //   path: google.maps.SymbolPath.CIRCLE,
            //   scale: 15,
            //   fillColor:String(color),
            //   fillOpacity:1,
            //   strokeColor:'transparent',
            //  }
            icon: icon,
          });

          bounds.extend(marker.position);
        //var infoWindowContent = '<div class="map-marker-title '+type_class+'"><span class="section">'+data[i]['primary_section'] +'</span><span class="list-title"><a href="#'+slug+'">'+ctr+ '. ' + data[i]['title'] + '</a></span><span class="directions cta"><a class="cta-link" href="'+$link+'" target="_blank">Get Directions &#10165;</a></span></div>';

        //'click' has been changed to 'spider_click' to start marker clustering
         // google.maps.event.addListener(marker, 'spider_click', (function(marker, infoWindowContent, infoWindow) {
         //        return function() {
                  
         //            infoWindow.setContent(infoWindowContent);
         //            infoWindow.open(map, marker);
         //        }
                
         //    })(marker, infoWindowContent, infoWindow));

         //Add clustering to the markers
         //oms.addMarker(marker);

         

        //ctr++;
        //} // end else

      //}//end for loop
      map.fitBounds(bounds);
    }); //end $http.get
  }

var listing_cat = jQuery('.listing-grid').attr('data-category');
//var full = jQuery('main').attr('data-category');
//console.log(full);
// console.log(listing_cat);

loadListings(listing_cat);