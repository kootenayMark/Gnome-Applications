
<!DOCTYPE html>

<html lang="en">
    
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <!-- insures that browsers that don't support media queries don't just scale the desktop version -->

    <title>Gnome Applications | Gallery</title>

<!-- enables support for many browsers for responsive images -->
<script src="javascript/picturefill.js" async></script>

<link rel="stylesheet" media="print" type="text/css" href="print.css" />   <!--styles for print-->
<link rel="stylesheet" media="screen" type="text/css" href="styles.css" />  <!--styles for screen-->
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
<link href="lity-2.4.0/lity-2.4.0/dist/lity.css" rel="stylesheet">

<script src="javascript//rem.js" type="text/javascript"></script>   <!--enables most browsers to support rem-->
<script src="lity-2.4.0/lity-2.4.0/vendor/jquery.js"></script>
<script src="lity-2.4.0/lity-2.4.0/dist/lity.js"></script>

</head>

<!-- 
created by: Mark Trueman
created on: 2019-09-27
created for: Nelson Gnome Works>
-->

<!--allows the gallery page to have unique styles applied to it-->
<body id="gallery">

    <!--allows main navigation to be skipped for accessibility-->
    <a class="hideskipnav" href="#maincontent">Skip to main content</a>

    <!--begin wrapper-->

<div id="wrapper">

        <?php include ("headergallery.php"); ?>
    
    <main id="maincontent">

        <h1>Gallery</h1>
        <div class="gallery">
        <a href="images/GnomeFork.jpg" data-lity="First Gnome Pearl of Wisdom" ><img src="images/GnomeFork_sm.jpg" alt="If you come across a fork in the road take it."></a>
                <a href="images/gnomesPassport.jpg" data-lity="Second Gnome Pearl of Wisdom"><img src="images/gnomesPassport_sm.jpg" alt="Don't think of it as losing your passport. Think of it as a chance to start a new life in a totally different country."></a>
                <a href="images/gnomeMemory.jpg" data-lity="Third Gnome Pearl of Wisdom"><img src="images/gnomeMemory_sm.jpg" alt="A stroll down memory lane is super boring if you don't fill it with memories first."></a>
                <a href="images/gnomeWisdom.jpg" data-lity="Fourth Gnome Pearl of Wisdom"><img src="images/gnomeWisdom_sm.jpg" alt="You learn a lot by walking in someone else's shoes."></a>
                <a href="images/gnomeAbout.jpg" data-lity="Just a Gnome in the Grass"><img src="images/gnomeAbout_sm.jpg" alt="A Gnome in the Grass"></a>
        </div>          
    </main>
    
    <?php include ("footer.php"); ?>

</div>  <!--wrapper ends-->
<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="javascript/jquery-3.4.1.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="magnific-popup/dist/jquery.magnific-popup.js"></script>
<script type="text/javascript" src='javascript/script.js'></script>
</body>

</html>   