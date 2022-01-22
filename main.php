<?php
    include_once 'header.php';
?>

<div id="inputTypes" name="inputType">
            <form>
                <div id="Coordinates"></div><br>

                <label for="PointNumber"> Nummer der Station: </label><br>
                <input type="number" name="PointNumber" id="PointNumber"><br>


                <label for="Textdaten"> Textdaten: </label><br>
                <input type="file" name="Textdaten" id="Textdaten"><br>
                
                <input type="textarea" name="Text"><br>
                <input type="reset"><br>
                <input type="submit"><br>
                
            </form>
            
        </div>


        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">


        <div id="map"></div>
        <div id="menu">
            <input id="satellite-v9" type="radio" name="rtoggle" value="satellite" >
            <label for="satellite-v9">satellite</label>
            <input id="light-v10" type="radio" name="rtoggle" value="light" checked="checked">
            <label for="light-v10">light</label>
            <input id="dark-v10" type="radio" name="rtoggle" value="dark">
            <label for="dark-v10">dark</label>
            <input id="streets-v11" type="radio" name="rtoggle" value="streets">
            <label for="streets-v11">streets</label>
            <input id="outdoors-v11" type="radio" name="rtoggle" value="outdoors">
            <label for="outdoors-v11">outdoors</label>
        </div>
    
        
        <script src="input/script/access_token.js"></script>
        <script src="input/script/Main.js"></script>


<?php
include_once 'footer.php';
?>