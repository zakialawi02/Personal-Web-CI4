<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="/css/styleCrud.css">
    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="/assets/css/pages/simple-datatables.css" />

    <script src="https://kit.fontawesome.com/80c2a21e0c.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <!-- leaflet Component -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />
    <link href='<?= base_url(); ?>/leaflet/L.Control.MousePosition.css' rel='stylesheet' />



    <style>
        #map {
            height: 72vh;
        }
    </style>





</head>

<body>
    <div id="app">
        <!-- SIDEBAR -->
        <?= $this->include('_Layout/gis/sidebar'); ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <?= $this->renderSection('content'); ?>

            <!-- Footer -->
            <?= $this->include('_Layout/gis/footer'); ?>

        </div>
    </div>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/assets/js/pages/simple-datatables.js"></script>

    <!-- datatable jquery -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

    <!-- Leafleat js Component -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <script src='<?= base_url(); ?>/leaflet/L.Control.MousePosition.js'></script>
    <!-- Leafleat Setting js-->
    <!-- initialize the map on the "map" div with a given center and zoom -->
    <script>
        // Base map
        var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiNjg2MzUzMyIsImEiOiJjbDh4NDExZW0wMXZsM3ZwODR1eDB0ajY0In0.6jHWxwN6YfLftuCFHaa1zw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        });

        var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiNjg2MzUzMyIsImEiOiJjbDh4NDExZW0wMXZsM3ZwODR1eDB0ajY0In0.6jHWxwN6YfLftuCFHaa1zw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/satellite-v9'
        });

        var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiNjg2MzUzMyIsImEiOiJjbDh4NDExZW0wMXZsM3ZwODR1eDB0ajY0In0.6jHWxwN6YfLftuCFHaa1zw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/dark-v10'
        });

        // input Lokasi disini
        let dlat = -7.274278428643941;
        let dlong = 112.78196182730862;
        let destination = ([dlat, dlong])

        // zoom map to center
        var map = L.map('map', {
            center: destination,
            zoom: 14,
            layers: [peta1]
        })

        // controller
        var baseLayers = {
            "Map": peta1,
            "Satellite": peta2,
            "OSM": peta3,
        };
        L.control.layers(baseLayers).addTo(map);

        map.addControl(new L.Control.Fullscreen({
            title: {
                'false': 'View Fullscreen',
                'true': 'Exit Fullscreen'
            }
        }));

        L.control.locate({}).addTo(map);
        L.control.mousePosition().addTo(map);
        L.control.scale().addTo(map);
        //make marker point
        // custom marker
        var locTempat = L.icon({
            iconUrl: '<?= base_url(); ?>/leaflet/images/locPos.png',
            iconSize: [40, 40],
            iconAnchor: [20, 40], // point of the icon which will correspond to marker's location
            popupAnchor: [0, -36] // point from which the popup should open relative to the iconAnchor
        });
        var locMe = L.icon({
            iconUrl: '<?= base_url(); ?>/leaflet/images/locMe.png',
            iconSize: [40, 40],
            iconAnchor: [20, 40], // point of the icon which will correspond to marker's location
            popupAnchor: [0, -36] // point from which the popup should open relative to the iconAnchor
        });

        // show marker to map
        L.marker(destination, {
            icon: locTempat
        }).addTo(map).bindPopup("Place!!");
        // L.marker([-7.251278894521319, 112.79007130631359], {
        //     icon: locTempat
        // }).addTo(map).bindPopup("Place2!!");


        var popup = L.popup()

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }
        map.on('click', onMapClick);


        // get current location
        setInterval(() => {
            getLocation();
        }, 2000);

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        var marker, circle;

        function showPosition(position) {
            // console.log(position)
            console.log('Route Sekarang', position.coords.latitude, position.coords.longitude, position.coords.accuracy)

            let lat = position.coords.latitude
            let long = position.coords.longitude
            let accuracy = position.coords.accuracy

            if (marker) {
                map.removeLayer(marker)
            }
            // if (circle) {
            //     map.removeLayer(circle)
            // }

            marker = L.marker([lat, long], {
                icon: locMe
            })
            // circle = L.circle([lat, long], {
            //     radius: accuracy
            // })

            var featureGroup = L.featureGroup([marker]).addTo(map)

            // map.fitBounds(featureGroup.getBounds())

            // // Routing

            // L.Routing.control({
            //     waypoints: [
            //         L.latLng([lat, long]),
            //         L.latLng(destination),
            //     ],
            //     routeWhileDragging: false,
            //     lineOptions: {
            //         styles: [{
            //             color: 'blue',
            //             opacity: 0.7,
            //             weight: 5
            //         }]
            //     },
            //     createMarker: function(i, waypoint, n) {
            //         const marker = L.marker(waypoint.latLng, {
            //             draggable: true,
            //             bounceOnAdd: false,
            //             bounceOnAddOptions: {
            //                 duration: 1000,
            //                 height: 800,
            //                 function() {
            //                     (bindPopup(myPopup).openOn(map))
            //                 }
            //             },
            //             icon: L.icon({
            //                 iconUrl: iconUrl,
            //                 iconSize: [40, 40],
            //                 iconAnchor: [20, 40],
            //                 popupAnchor: [0, -36]
            //             })
            //         });
            //         return marker;

            //     }

            // }).addTo(map);

        }
    </script>




</body>

</html>