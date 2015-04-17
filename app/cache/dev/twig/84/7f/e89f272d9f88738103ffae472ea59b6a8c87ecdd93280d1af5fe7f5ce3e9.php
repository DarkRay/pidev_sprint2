<?php

/* realEstateBundle:Offre/Filtres:Adresse.html.twig */
class __TwigTemplate_847fe89f272d9f88738103ffae472ea59b6a8c87ecdd93280d1af5fe7f5ce3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <script
            src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyBzE3mGNaIQaBLClCVVEwHb82y4zIFlEgA\">
        </script>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
        <script>
            function initialize() {
                
              
                var lat = document.getElementById(\"lat\").value;
                var long = document.getElementById(\"long\").value;
                var myCenter=new google.maps.LatLng(lat,long);
                var mapProp = {
                    center: new google.maps.LatLng(lat, long),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
           
          
             marker = new google.maps.Marker({
                position: myCenter,
                animation: google.maps.Animation.BOUNCE
            });
            marker.setMap(map);
            
  var latlong = new google.maps.LatLng(lat,long) ;
 var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlong }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                         var infowindow = new google.maps.InfoWindow({
  content: \"Adresse: \" + results[1].formatted_address
 
  });

infowindow.open(map,marker);
                    }
                }
            });
          
        google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
     
  });
   

function placeMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
var latlong = new google.maps.LatLng(location.lat(),location.lng()) ;
var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlong }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                       
                \$('#long').val(location.lng());
                \$('#lat').val(location.lat());
                \$('#adr').val(results[1].formatted_address); 
                         var infowindow = new google.maps.InfoWindow({
  content: \"Adresse: \" + results[1].formatted_address + \"<br>\" +
  \"Latitude: \" +location.lat() + \"<br>\"+ \"Longitude :\"+location.lng()
  });
               

infowindow.open(map,marker);
                    }
                }
            });
  
}

        }   
             google.maps.event.addDomListener(window, 'load', initialize);
             
             
         
        </script>


<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" >
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
      </div>
      <div class=\"modal-body\">
        <form method=\"POST\">
            <input id=\"lat\" name=\"lat\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo "\"/>
            <input id=\"long\" name=\"long\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo "\"/>  
            <input id=\"adr\" name=\"adr\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["adr"]) ? $context["adr"] : $this->getContext($context, "adr")), "html", null, true);
        echo "\"/> 
            <input type=\"Submit\" >
        </form>
        <div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>

  ";
    }

    public function getTemplateName()
    {
        return "realEstateBundle:Offre/Filtres:Adresse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 93,  115 => 92,  111 => 91,  19 => 1,);
    }
}
