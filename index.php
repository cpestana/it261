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
   
     <div id="inner-header">
     <a href="index.php">
         <div id="logoimg">
     <img src="images/php_logo.png" alt="logo" width="75" height="75"/>
        </div> <!--end logoimg-->
     </a>
         </div> <!--end inner-header-->
   
        <nav>

            <ul>
            <li><a href="website/daily.php">Switch</a></li>
            <li><a href="adder.php">Troubleshoot</a></li>
            <li><a href="calculator.php">Calculator</a></li>
            <li><a href="website/contact.php">Contact</a></li>
            <li><a href="Database.php">Database</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            </ul>

        </nav>   

    </header>
    

    

    <div id="wrapper">

    <div id="hero">

    <div id="heroRight">
    <img id="images" src="images/Me.jpg" alt="picforsite" width="225" height="300"/>
    </div><!--end heroRight-->

    <div id="heroLeft">
    <h1>Christine's IT 261 Portal</h1>

    <p>Hello! I started Seattle Central College in 2020 and I am looking 
    forward to getting my degree in Web Development. I am getting comfortable
    using HTML, CSS, SQL, and Python, but I still have a lot to learn. I am excited
    to learn more about PHP and JavaScript. <br>
    I was working as a case manager for 4 years but, a couple of years ago, I decided 
    I was ready to make a change in my life and take on a new challenge. I became 
    interested in web development and database administration when assisting my
    organization with developing their database. </p>
    </div><!--end heroLeft-->

   
    
    
    
    </div><!--end hero-->


 <main>
    <h2>MAMP Portal</h2>
 <img src="images/mamppage.jpg" alt="mamppage" width="680" height="375"/>
    <h2>PHP Displaying Errors</h2>
 <img src="images/test_mamp3.jpg" alt="mamppage2" width="680" height="375"/>
 </main>

    <aside>
   
        <h3>Weekly Class Exercises</h3>
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
        <li><a href="weeks/week3/index.php">Index.php</a></li>
        <li><a href="weeks/week3/for-loop.php">For-Loop.php</a></li>
        <li><a href="weeks/week3/switch.php">Switch.php</a></li>
        </ul>
        <h4>Week 4</h4>
        <ul>
        <li><a href="weeks/week4/form-get.php">Form-Get.php</a></li>
        <li><a href="weeks/week4/form1.php">Form1.php</a></li>
        <li><a href="weeks/week4/form2.php">Form2.php</a></li>
        <li><a href="weeks/week4/form3.php">Form3.php</a></li>
        <li><a href="weeks/week4/celcius.php">Celcius.php</a></li>
        </ul>
        <h4>Week 5</h4>
        <ul>
        <li><a href="weeks/week5/currency1.php">Curreny1.php</a></li>
        <li><a href="weeks/week5/currency2.php">Curreny2.php</a></li>
        <li><a href="weeks/week5/null.php">Null.php</a></li>
        </ul>
        <h4>Week 6</h4>
        <ul>
        <li><a href="weeks/week6/form.php">Form.php</a></li>
        <li><a href="weeks/week6/form2.php">Form2.php</a></li>
        <li><a href="weeks/week6/functions.php">Functions.php</a></li>
        <li><a href="weeks/week6/thanx.php">Thanx.php</a></li>
        </ul>
        <h4>Week 7</h4>
        <li><a href="weeks/week7/form3.php.php">Form3.php</a></li>
        <li><a href="weeks/week7/random.php">Random.php</a></li>
        <ul>
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
                <li><a href="https://github.com/cpestana/it261/">Github</a></li>
            </ul>
        </div> <!--end inner-footer-->
    </footer>
    

</body>
</html>