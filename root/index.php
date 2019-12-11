
<!DOCTYPE html>

<html lang="en">
    
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <!-- insures that browsers that don't support media queries don't just scale the desktop version -->

    <title>Gnome Applications | Home</title>

     <!-- enables support for many browsers for responsive images -->
     <script src="javascript/picturefill.js" async></script>

     <link rel="stylesheet" media="print" type="text/css" href="print.css" />   <!--styles for print-->
     <link rel="stylesheet" media="screen" type="text/css" href="styles.css" />  <!--styles for screen-->
 
     <script src="javascript//rem.js" type="text/javascript"></script>   <!--enables most browsers to support rem-->
    
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
    <?php include ("headerhome.php"); ?>

    <main id="maincontent">

        <h1>Our Company</h1>

        <!--div used to group the main content so it can be styled as a unit-->
        <div>
                <p>I've spent the majority of my working life in the remote places of the world exploring many of the wonders nature has to offer. As such much of that time was spent without the use of modern technology, particularly technologies that rely on the connectivity of the world wide web and the internet. When sleeping in a tent in the rain 180 days a year finally lost some of it's luster a few years ago, it became apparent to me that there was a whole other new world out there just waiting to be explored.</p>
    
                <p>This realization, put me on a path of studying Geographic Information Systems (GIS) at Selkirk College which expanded on my previous education in Geography, while allowing me the opportunity to expand my knowledge of technology. Now in my fourth year of the Bachelors of GIS, I jumped at the opportunity to expand that knowledge further by fulfilling my electives criteria by enrolling in the Web Development Program, also through Selkirk College.</p> 
                    
                <p>It's amazing to be applying our new skills, just 2 months into the program to develop real world working applications. Even better, I was able to include my somewhat odd obsession with Gnomes to boot!</p>
                <a href="https://www.youtube.com/watch?v=hfVljkOCxmY" data-lity="The Wisdom of the Gnomes"><img src="images/wisdomOfGnomes.jpg" alt="Opening frame of 1980's show The Wisdom of the Gnomes"></a>
            </div>
    </main>

    <aside> 

            <p><img src="images/biopic_lg.jpg" 
                    alt="A real life Gnome playing ukulele in the Alaskan backcountry with icebergs floating in the background" /></p>

        <!--div used to group the main content so it can be styled as a unit-->
        <div>
            <h1>What people are saying...</h1>
    
                <p><q>
                    I absolutely love disney characters. Gnome Applications was able to customize my app so that a random disney character appeared offering some of their wisdom or humour. What fun!
                </q></p>
    
                <p>-Bob Smith</p>
        </div>
           
        </aside>

        <?php include ("footer.php"); ?>

</div>  <!--wrapper ends-->
<script type="text/javascript" src='javascript/script.js'></script>
</body>

</html>   