<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christine's Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

    <header>
        

        <img src="images/php.jpg" alt="logo" width="75" height="75"/>

   
        
<div id="innder-header">

    <nav>

    <ul>
            <li><a href="Switch.php">Home</a></li>
            <li><a href="Troubleshoot.php">Troubleshoot</a></li>
            <li><a href="Calculator.php">Calculator</a></li>
            <li><a href="Email.php">Email</a></li>
            <li><a href="Database.php">Database</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
         </ul>

    </nav>   
    </header>
    
</div> <!--end inner-header-->
    

 

<div id="wrapper">

<div id="hero">
    
    <div id="h1-header">
    <h1>Christine's IT 261 Portal</h1>
    
    </div> <!--end h1-header-->

    <div id="images">
        <img src="images/Me.jpg" alt="picforsite" width="250" height="325"/>
    </div><!--end images-->

    <div id="paragraph-header">
    <p>Hello! I started Seattle Central College in 2020 and I am looking forward to getting my degree in Web Development. I am getting comfortable using HTML, CSS, SQL, and Python, but I still have a lot to learn. I am excited to learn more about PHP and JavaScript. <br>
        I was working as a case manager for 4 years but, a couple of years ago, I decided I was ready to make a change in my life and take on a new challenge. I became interested in web development and database administration when assisting my organization with developing their database. </p>
    </div> <!--end paragraph-header-->

      

</div><!--end hero-->

<main>

    <div id = "mamppages">
<img src="images/mamppage.jpg" alt="mamppage" width="680" height="375"/>
<img src="images/test_mamp3.jpg" alt="mamppage2" width="680" height="375"/>

    </div><!--end mamppages-->

</main>

<aside>
   
    <h3>Weekly Exercises</h3>
    <h4>Week 2</h4>
        <ul>
        <li><a href="weeks/week2/var.php">Var.php</a></li>
        <li><a href="weeks/week2/currency-logic.php">Currency-Logic.php.php</a></li>
        <li><a href="weeks/week2/currency.php">Currency.php</a></li>
        <li><a href="weeks/week2/heredoc.php">Heredoc.php</a></li>
        </ul>
    <h4>Week 3</h4>
        <ul>
        <li><a href="weeks/week3/arrays.php">Arrays.php</a></li>
        <li><a href="weeks/week3/if-else.php">If-Else.php</a></li>    
        <li><a href="weeks/week3/date.php">Date.php</a></li>
    </ul>
</aside>
</div> <!---end wrapper-->

    <footer>
        <div id="inner-footer">
<ul>
    <li>Copyright &copy;
        <?php echo date('Y') ; ?>
    </li>
    <li>All Rights Reserved</li>
    <li><a href="../index.php">Web Design by Christine</a></li>
    <li><a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2Fchristine-it-261-portal.herokuapp.com%2F">HTML</a></li>
    <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fchristine-it-261-portal.herokuapp.com%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS</a></li>
</ul>
</div> <!--end inner-footer-->
    </footer>

</body>
</html>