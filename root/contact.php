
<!DOCTYPE html>

<html lang="en">
    
<head>

    <meta  charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />    <!-- insures that browsers that don't support media queries don't just scale the desktop version -->

    <title>Gnome Applications | Contact</title>

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

<body class="contactBody">

    <!--allows main navigation to be skipped for accessibility-->
    <a class="hideskipnav" href="#maincontent">Skip to main content</a>

    <!--begin wrapper-->

<div id="wrapper">

    <?php include ("headercontact.php"); ?>
    
       <main id="contact">
        <h1>Contact Us</h1>
        
        <p>Please contact us for updates, new products, and any questions you might have. Gnome are known for being both friendly and helpful.</p>

        <form action="contactform.php" method="post">
            Your name<br>
            <input type="text" name="cf_name" /><br>
            Your e-mail<br>
            <input type="text" name="cf_email" /><br>
            Message<br>
            <textarea name="cf_message" rows="10" cols="25">Leave your message here.</textarea><br>
            <input type="submit" value="Send">
            <input type="reset" value="Clear">
        </form> 
    </main>

    <aside> 

        <div id="animatedGnome">
            <p id="gnomeImage"></p>
            <p id="animate" onmouseover="animateScript()", onmouseout="stopAnimate()">Mouse Over Me! I'm a Gnome!</p>
        </div>
    
    </aside>
    <?php include ("footer.php"); ?>

</div>  <!--wrapper ends-->
<script type="text/javascript" src='javascript/script.js'></script>
</body>

</html>   