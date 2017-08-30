<style type="text/css">
		.circle-profile{
			border-radius: 100px;
			border: 3px solid #212121;
		}
		#map-container { 
			height: 30%; 
			width: 65%;
		}
</style>
@extends('layouts.app')

@section('content')
	<div class="row" style="padding: 5%">
	    <div class="col-md-6 col-md-offset-3 container-fluid" style="background-color: #EEEEEE;border-radius: 3px">
	    	<div class="col-md-offset-1">
	    		<h2>Contact Us...</h2>
	    	</div>
	    	<div>
	    		<div id="map-container" class="col-md-6"></div>
	    	</div>
	    	<div class="col-md-4">
	    		<h4>Address</h4>
	    		<address>
  					<strong>HBS, Inc.</strong><br>
  					1355 Market Street, Suite 900<br>
  					Mumbai, Munbai 400601<br>
  					<abbr title="Phone">P:</abbr> (123) 456-7890
				</address>

	    	</div>
	    	<div class="col-md-12 container-fluid" style="padding-top: 20%; padding-bottom: 10%">
	    		<div class="container col-md-4">
	    			<div class="circle-profile">
	    			<img src="{{URL::asset('/images/profile.png')}}" class="img-responsive img-circle img-border"></div>
	    			<p class="text-center" style="padding-top: 20%">
	    				Lorem ipsum dolor sit amet, tation putent ius te, est quem quodsi splendide id. Dolorum placerat invidunt ad vis. At vix conceptam omittantur, id nec epicurei postulant. 
	    			</p>
	    		</div>
	    		<div class="container col-md-4">
	    			<div class="circle-profile">
	    			<img src="{{URL::asset('/images/profile.png')}}" class="img-responsive img-circle img-border"></div>
	    			<p class="text-center" style="padding-top: 20%">
	    				Lorem ipsum dolor sit amet, tation putent ius te, est quem quodsi splendide id. Dolorum placerat invidunt ad vis. At vix conceptam omittantur, id nec epicurei postulant. 
	    			</p>
	    		</div>
	    		<div class="container col-md-4">
	    			<div class="circle-profile">
	    			<img src="{{URL::asset('/images/profile.png')}}" class="img-responsive img-circle img-border"></div>
	    			<p class="text-center" style="padding-top: 20%">
	    				Lorem ipsum dolor sit amet, tation putent ius te, est quem quodsi splendide id. Dolorum placerat invidunt ad vis. At vix conceptam omittantur, id nec epicurei postulant. 
	    			</p>
	    		</div>
	    	</div>
    	</div>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>	
 
      function init_map() {
		var var_location = new google.maps.LatLng(19.0760, 72.8777);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14,
          styles:
          [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": 20
            },
            {
                "color": "#000000"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#dbdbdb"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#212325"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#6b2f2f"
            },
            {
                "lightness": 21
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#858585"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    }
]
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Mumbai"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
@endsection