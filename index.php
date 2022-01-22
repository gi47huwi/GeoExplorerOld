<?php
    include_once 'header.php';
?>

<body>
        
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
    
        
        <script src="script/access_token.js"></script>
        <script src="script/Main.js"></script>
    </body>

<?php
include_once 'footer.php';
?>