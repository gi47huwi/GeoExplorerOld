


//TODO: writing method for route name input

function getRouteName(){

    return null;
};

//TODO: load route if name is already there
function compareToExisting(){
    return null;
};

//Functions for input Menue

function openInputMenue(coord){
    console.log('Lng:', coord.lng, 'Lat:', coord.lat);
    document.getElementById("inputTypes").style.visibility = "visible";
    document.getElementById("Coordinates").innerText ='Coordinates:\nLng: '+ coord.lng.toString() + '\nLat: '+ coord.lat.toString();
    
    
};

//Main Map function
window.addEventListener('load', function () {
    
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/light-v10',
        center: [10.9027636,49.8988135],
        zoom: 12
    });

    map.addControl(
        new mapboxgl.GeolocateControl({
        positionOptions: {
        enableHighAccuracy: true
        },
        // When active the map will receive updates to the device's location as it changes.
        trackUserLocation: true,
        // Draw an arrow next to the location dot to indicate which direction the device is heading.
        showUserHeading: true
        })
    );

    const layerList = document.getElementById('menu');
    const inputs = layerList.getElementsByTagName('input');

    for (const input of inputs) {
        input.onclick = (layer) => {
            const layerId = layer.target.id;
            map.setStyle('mapbox://styles/mapbox/' + layerId);
        };
    };
    var marker = new mapboxgl.Marker();

    function add_marker (event) {
        var coordinates = event.lngLat;
        
        marker.setLngLat(coordinates).addTo(map);
        openInputMenue(coordinates);
        
    }
    map.on('contextmenu', add_marker);


  });




