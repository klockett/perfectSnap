<!--Ken Lockett
     05/27/2017 -->
<?php
//
// 
// 
?>

<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="All about photography from head shots to modeling, action to sports and nature to family portraits here at Perfectsnap we do it all to perfection.">

    <title>Perfect Snap Photography</title>
        <link rel="icon" href="favicon.ico">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-100782370-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
<div class="jumbotron">
    <div class="container">
        <nav>
        <div class="row">
             <div class="navbar-header navbar-inverse bg-inverse">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="http://perfectsnap.net"><img src="image/logosm.png" alt="PerfectSnap"></a>
                            </div>
                            <div id="navbar" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-fnt">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    </div>

                <?php
                //store db username
                $user = 'klockett';
                //store db password
                $pass = 'Kintay1014';
                //instantiate pdo object, passing credentials as well as setting host, dbname, and port number
                $dbh = new PDO('mysql:host=localhost;dbname=perfectsnap;port=3306', $user, $pass);
                //if request method is post
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    //hydrate variables with postdata
                    $userName = $_POST['user-name'];
                    $userEmail = $_POST['user-email'];
                    //use pdo object to prepare an insert statement with params
                    $stmt = $dbh->prepare("INSERT INTO perfectsnap (username, useremail) VALUES (:username, :useremail);");
                    //bind those params to our variables containing postdata
                    $stmt->bindParam(':username', $userName);
                    $stmt->bindParam(':useremail', $userEmail);
                    //execute insertion
                    $stmt->execute();
                    if (isset($_POST['user-name'])) {

                        $name = "user-name";

                        echo "<script type='text/javascript'>alert('You have Signed-Up Successfully Thank you!')</script>";
                    }
                    else
                    {
                        echo "<script type='text/javascript'>alert('failed!')</script>";
                    }
                } //end request method conditional
                ?>

             <section class="form">
             <div class="row">
             <div class="container">
                <form class="form well clearfix" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                                            <h3>Sign-Up for future Promos</h3>

                        <label for="user-name">Name<sup>*</sup></label>
                        <input type="text" id="user-name" class="form-control" name="user-name" required>
                    </div>
                    <div class="form-group">
                        <label for="user-email">Email<sup>*</sup></label>
                        <input type="text" id="user-email" class="form-control" name="user-email" required>
                    </div>

                    <button class="btn btn-primary pull-right" type="submit">Submit</button>

                </form>
            </div>

</section>
 <section class="intro">
     <h1>Make a Statement without saying a Word</h1>
</section>
    </div>
<footer>
    <div class="container">


        <p class="text-muted"> Copyright© 2017 | All Rights Reserved by PerfectSnap | Contact:(800)-505-5511 &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp;
            <!--Twitter icon-->
            <a href="https://twitter.com" target="_blank"><img alt="" src="image/Twitter.png" style="height:50px; width:50px" /> </a>&nbsp; &nbsp;&nbsp;

            <!--Facebook icon-->
            <a href="https://www.facebook.com" target="_blank"><img alt="" src="image/facebook-logo.png" style="height:50px; width:50px" /> </a>&nbsp;
        </p>&nbsp; &nbsp;
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>