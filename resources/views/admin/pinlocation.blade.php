<html>
    <head>
        <title>Google Map</title>
        <meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
        <style>          
          #map { 
            height: 300px;    
            width: 600px;            
          }          
        </style>        
    </head>    
    <body>        
        <div style="padding:10px">
            <div id="map"></div>
        </div>
        
        <script type="text/javascript">
        var text = '{"sid":"1","latitude":"11.0271653","longitude":"76.9790177"}';
        var obj = JSON.parse(text);

     
     // response=[{"sid":"1","latitude":"12.9716","longitude":"77.5946"}];
        
   //    for (var i =0; i< response.length ;i++) 
   //    {
   // arr=array(response[i].latitude.longitude);
   //    }


        function initMap() 
        {    

            // // temp=parseInt(val);                        
            //    arr=array(response[i].latitude.longitude);
            // var latitude = response[0]['latitude'];
            //  // YOUR LATITUDE VALUE
            // var longitude = response[0]['longitude']; // YOUR LONGITUDE VALUE
            
             // var myLatLng = {obj.latitude, obj.longitude};
             var myLatLng = {lat:parseFloat(obj.latitude), lng:parseFloat(obj.longitude)};
            // var myLatLng = {response[0].longitude,response[0].latitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14                    
            });
                    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              // title: 'Hello World'
              
              // setting latitude & longitude as title of the marker
              // title is shown when you hover over the marker
              title: latitude + ', ' + longitude 
            });            
        }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyz0RLbiDorXc15F46J9iWMCrb95nDaY8&callback=initMap">
      </script>
    </body>    
</html>