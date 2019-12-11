
<!DOCTYPE html>

<html lang="en">
    
<head>
    
    <title>Home Page Header</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="styles.css" media="all" /> 
    
</head>

<body>
<footer>

<p>Follow Us</p>

<nav id="social">
    <ul>
        <li><a href="https://www.facebook.com/pages/category/Musical-Instrument-Store/Nelson-Gnome-Works-1551597621804619/"><img src="images/f_logo_RGB-Blue_58_sm.png" alt="facebook link"></a></li>
        <li><a href="https://twitter.com/KootenayMark"><img src="images/Twitter_Logo_Blue_sm.png" alt="twitter link"></a></li>
        <li><a href="https://www.linkedin.com/in/mark-trueman-8a58927a"><img src="images/In-2C-59px-R_sm.png" alt="linkedin link"></a></li>
        <li><a href="https://github.com/kootenayMark"><img src="images/GitHub-Mark-120px-plus_sm.png" alt="github link"></a></li>
    </ul>
</nav>

<p id="copywrite"><small>&copy;Mark Trueman 2019</small></p>

<p id="datetime"></p>

    <script>
        function showTime(){
            var dt = new Date();
            document.getElementById("datetime").innerHTML = dt.toLocaleString();
        }
        showTime();
        setInterval(showTime, 1000);
    </script>
    
</footer>

</body>

</html>   