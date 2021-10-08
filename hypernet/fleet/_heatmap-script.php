<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1_8C5Xz9RpEeJSaJ3E_DeBv8i7j_p6Aw&libraries=visualization&callback=initMap">
    </script>

    <script>

        function initMap() {

            var map = new google.maps.Map(document.getElementById('heat1'), {
                zoom: 15,
                mapTypeId: 'terrain',
              
                center: { lat: 45.768632, lng: 4.8489903 }
            });


            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            var markers = locations.map(function (location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length]
                });
            });


            var markerCluster = new MarkerClusterer(map, markers,
                { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });






            var map2 = new google.maps.Map(document.getElementById('heat2'), {
                zoom: 12,
                mapTypeId: 'roadmap',
                center: { lat: 45.776542, lng: 4.874342 }
            });


            var markers2 = locations2.map(function (location, i) {
                return new google.maps.Marker({
                    position: location,
                    label: labels[i % labels.length]
                });
            });


            var markerCluster = new MarkerClusterer(map2, markers2,
                { imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' });





        }

    </script>