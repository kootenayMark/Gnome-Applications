
<!DOCTYPE html>

<html lang="en">
    
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />   <!-- insures that browsers that don't support media queries don't just scale the desktop version -->

    <title>Gnome Applications | About</title>

    <!-- enables support for many browsers for responsive images -->
    <script src="javascript/picturefill.js" async></script>

    <link rel="stylesheet" media="print" type="text/css" href="print.css" />   <!--styles for print-->
    <link rel="stylesheet" media="screen" type="text/css" href="styles.css" />  <!--styles for screen-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <link href="lity-2.4.0/lity-2.4.0/dist/lity.css" rel="stylesheet">

    <script src="javascript//rem.js" type="text/javascript"></script>   <!--enables most browsers to support rem-->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
    <script src="lity-2.4.0/lity-2.4.0/vendor/jquery.js"></script>
    <script src="lity-2.4.0/lity-2.4.0/dist/lity.js"></script>

</head>

<!-- 
created by: Mark Trueman
created on: 2019-09-27
created for: Nelson Gnome Works>
-->
 

<body>

<!--allows main navigation to be skipped for accessibility-->
<a class="hideskipnav" href="#maincontent">Skip to main content</a>

    <!--begin wrapper-->

<div id="wrapper">
    
        <?php include ("headerabout.php"); ?>

    <main id="maincontent">

        <h1>About</h1>
            
        <!--div used to group the main content so it can be styled as a unit--> 
        <div>
            <p>We here at Gnome Applications are obsessed with all things Gnome. We also spent most of our youth and much of adult lives reading and enjoying the Science fiction greats. Over the years, we've found much wisdom in their writings and words. We've created this whimsical app to share some of that collected wisdom. It's so easy to use, that if you can click a button with your mouse, you can use our app!</p>

            <p>The Gnomes Quoting Science Fiction App, is, at it's core, a randomizer. It randomizes the colour of each Gnomes pants, tunic, and hat by generating a completely random hexadecimal colour for each item of clothing. This means that it selects 3 of over 16 million colours each time you click! At the same time as the app is producing a unique Gnome, that gnome is also selecting a random quote from one of 5 brilliant science fiction/fantasy writers. The app is also equipped with the option to select a specific author, and then have your unique Gnome deliver the authors randomized wisdom, as the greatest wisdom comes unexpectedly...</p> 
                
            <p>Not into Gnomes? Don't think science fiction holds any pearls of wisdom? No problem. We can customize your app to your oun personal tastes by substituting you list of quotes for ours and your preferred delivery character. We're excited to see what ideas everyone comes up with!</p>
        </div>

            

    </main>
    <!-- uses leaflet library ti create an interactive map with a simple popup and marker -->

    <aside id="about"> 
        <!-- container for map (blank image included as a workaround for lightbox due to the container having no size defined until it's instantiated) -->
        <div id="mapid"><img src="images/mapBkg.png" alt="blank"></div> 

        <button onclick="mapContainer()">Enlarge Map</button>

        <script> 
            // sets boundaries and initial zoom for map
            var mymap = L.map('mapid').setView([49.49755, -117.28882], 14);

            // creates base map using tiles
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken:'pk.eyJ1IjoibWFya3RydWVtYW4iLCJhIjoiY2p0bnV1MWxrNGJlNDQzbnUxcDlwaWYyNiJ9.CPtO9PwR_nwH1FWzKdQzhQ'
            }).addTo(mymap);

            // creates marker and adds to map
            var marker = L.marker([49.506868, -117.268473]).addTo(mymap);
            // creates popup and binds it to the marker
            marker.bindPopup("<b>Selkirk College</b><br>Home of The Web Development Program and at least one Techie Gnome.").openPopup();

        </script>
        
     
        <!--div used to group the main content so it can be styled as a unit-->
        <div>
            <h1>What people are saying...</h1>

                <p><q>I had no idea what fun having daily wisdom doled out to me by a new Gnome could be! I look forward to receiving my wisdom as I sip my morning coffee every day.</q></p>

                <p>-Braea Nill</p>
        </div>
       
    </aside>

    <?php include ("footer.php"); ?>

</div>  <!--wrapper ends-->

<script type="text/javascript" src='javascript/script.js'></script>
</body>

</html>   