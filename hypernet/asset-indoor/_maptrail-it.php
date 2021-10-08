<div class="track-map inline-block">
    <div class="modal fade" id="Track" tabindex="-1">
        <div class="modal-dialog modal-sidebar modal-lg">
            <button type="button" class="close" data-dismiss="modal">
                <span>×</span>
            </button>
            <div class="mapbox   margin-bottom-0  ">

                <div id="map" style="height:100%;"></div>
                <script>
                    var map;

                    function initMap() {





                        var styledMapType = new google.maps.StyledMapType(
                            [
                                { elementType: 'geometry', stylers: [{ color: '#ebe3cd' }] },
                                { elementType: 'labels.text.fill', stylers: [{ color: '#523735' }] },
                                { elementType: 'labels.text.stroke', stylers: [{ color: '#f5f1e6' }] },
                                {
                                    featureType: 'administrative',
                                    elementType: 'geometry.stroke',
                                    stylers: [{ color: '#c9b2a6' }]
                                },
                                {
                                    featureType: 'administrative.land_parcel',
                                    elementType: 'geometry.stroke',
                                    stylers: [{ color: '#dcd2be' }]
                                },
                                {
                                    featureType: 'administrative.land_parcel',
                                    elementType: 'labels.text.fill',
                                    stylers: [{ color: '#ae9e90' }]
                                },
                                {
                                    featureType: 'landscape.natural',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#dfd2ae' }]
                                },
                                {
                                    featureType: 'poi',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#dfd2ae' }]
                                },
                                {
                                    featureType: 'poi',
                                    elementType: 'labels.text.fill',
                                    stylers: [{ color: '#93817c' }]
                                },
                                {
                                    featureType: 'poi.park',
                                    elementType: 'geometry.fill',
                                    stylers: [{ color: '#a5b076' }]
                                },
                                {
                                    featureType: 'poi.park',
                                    elementType: 'labels.text.fill',
                                    stylers: [{ color: '#447530' }]
                                },
                                {
                                    featureType: 'road',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#f5f1e6' }]
                                },
                                {
                                    featureType: 'road.arterial',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#fdfcf8' }]
                                },
                                {
                                    featureType: 'road.highway',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#f8c967' }]
                                },
                                {
                                    featureType: 'road.highway',
                                    elementType: 'geometry.stroke',
                                    stylers: [{ color: '#e9bc62' }]
                                },
                                {
                                    featureType: 'road.highway.controlled_access',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#e98d58' }]
                                },
                                {
                                    featureType: 'road.highway.controlled_access',
                                    elementType: 'geometry.stroke',
                                    stylers: [{ color: '#db8555' }]
                                },
                                {
                                    featureType: 'road.local',
                                    elementType: 'labels.text.fill',
                                    stylers: [{ color: '#806b63' }]
                                },
                                {
                                    featureType: 'transit.line',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#dfd2ae' }]
                                },
                                {
                                    featureType: 'transit.line',
                                    elementType: 'labels.text.fill',
                                    stylers: [{ color: '#8f7d77' }]
                                },
                                {
                                    featureType: 'transit.line',
                                    elementType: 'labels.text.stroke',
                                    stylers: [{ color: '#ebe3cd' }]
                                },
                                {
                                    featureType: 'transit.station',
                                    elementType: 'geometry',
                                    stylers: [{ color: '#dfd2ae' }]
                                },
                                {
                                    featureType: 'water',
                                    elementType: 'geometry.fill',
                                    stylers: [{ color: '#b9d3c2' }]
                                },
                                {
                                    featureType: 'water',
                                    elementType: 'labels.text.fill',
                                    stylers: [{ color: '#92998d' }]
                                }
                            ],
                            { name: 'Styled Map' });


                        map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: 41.998507,
                                lng: -93.639057
                            },
                            zoom: 15,
                            zoomControl: true,
                            mapTypeControl: false,
                            scaleControl: true,
                            streetViewControl: true,
                            rotateControl: true,
                            fullscreenControl: true,


                        });

                        //////////////////////

                        // var goldStar = {
                        //     path: 'M 125,5 155,90 245,90 175,145 200,230 125,180 50,230 75,145 5,90 95,90 z',
                        //     fillColor: 'yellow',
                        //     fillOpacity: 0.8,
                        //     scale: 1,
                        //     strokeColor: 'gold',
                        //     strokeWeight: 5
                        // };

                        // var marker = new google.maps.Marker({
                        //     position: map.getCenter(),
                        //     icon: goldStar,
                        //     map: map
                        // });


                        /////////////////////////////////
                        // var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                        // var beachMarker = new google.maps.Marker({
                        //     scaledSize: new google.maps.Size(32, 48),
                        //     position: {
                        //         lat: 41.998507,
                        //         lng: -93.639057
                        //     },
                        //     map: map,
                        //     icon: image
                        // });





                        marker = new google.maps.Marker({
                            map: map,
                            draggable: true,
                            animation: google.maps.Animation.DROP,
                            position: {
                                lat: 41.998507,
                                lng: -93.639057
                            }
                        });
                        marker.addListener('click', toggleBounce);


                        //////////////////////////////////

                        function toggleBounce() {
                            if (marker.getAnimation() !== null) {
                                marker.setAnimation(null);
                            } else {
                                marker.setAnimation(google.maps.Animation.BOUNCE);
                            }
                        }



                        //Associate the styled map with the MapTypeId and set it to display.
                        map.mapTypes.set('styled_map', styledMapType);
                        map.setMapTypeId('styled_map');
                    }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2Bmxj94s98D4DsrHSp-4PHDDMuFPsvZo&callback=initMap"
                    async defer></script>



                <div class="mapfilters">






                </div>

                <div class="icon" style="left:60%; top:25%;">
                    <a data-toggle="popover" data-original-title="RRT156" data-trigger="hover" data-container="body"
                        data-placement="top" data-html="true" href="#" id="start1">
                        <img src="images/icon-map-truck.png" alt="img">
                    </a>


                    <div id="popover-content-start1" class="hide">
                        <table class="table font-size-12 no-border margin-bottom-0 table-sm">
                            <tbody>
                                <tr>
                                    <th> Volume </th>
                                    <td class="text-left">70 %</td>
                                </tr>
                                <tr>
                                    <th> Last Updated </th>
                                    <td class="text-left">Feb 26,2018 10:05:11 am</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>