
<!DOCTYPE html>

<html lang="en">
    
<head>
    
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Gnome Applications | Demo</title>

    <script src="javascript/picturefill.js" async></script>

    <link type="text/css" rel="stylesheet" href="styles.css" media="all" /> 

    <script src="javascript//rem.js" type="text/javascript"></script>   <!--enables most browsers to support rem-->
</head>

<body class="demo"> 

        <a class="hideskipnav" href="#maincontent">Skip to main content</a>

<div id="wrapper">

    <?php include ("headerdemo.php"); ?>
    
    <main id="maincontent">
        <h1>Random Gnomes Quoting Science Fiction</h1>

        <button type="button" id="quoteBtn">press here to display random quote</button> 
        <div id="outerContainer">
            <div class="container"> 
            
                <form action = "">
                    <input type = "button" id="authorBtn" value = "Or Random quote by author"/>
                    <fieldset>
                        <select id = "selAuthor">
                        
                        </select>
                    </fieldset>
                    
                </form>

                <blockquote>
                    <h2 id="quote">Quote</h2>
                    <h2 id="quoteAuthor">Author</h2>
                </blockquote>
            </div>

            <div class="gnome">
                <p><img id="top" src="images/vectoredGnomeHat.png" alt=""></p>
                <p><img id="mid" src="images/vectoredGnomebody.png" alt=""></p>
                <p><img id="bottom" src="images/vectoredGnomebottom.png" alt=""></p>
            </div>
        </div>
    </main> 

    <?php include ("footer.php"); ?>

</div>
<script type="text/javascript" src='javascript/script.js'></script>
</body>

</html>   