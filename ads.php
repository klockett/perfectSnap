<!--Ken Lockett
     09/17/2016 -->
<?php
// call fruitget api
$fruitDay = file_get_contents("http://localhost:8888/SSL/week3/wk3homework2/fruitget.php");
// decode result and store for dom access at #fruit-ad
$fruitDay = json_decode($fruitDay)[0];
?>

<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>fruit</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<section id="add-fruit" class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Fruits</h1>
                <img src="image/fruit.png" alt="HTML5 Icon" style="width:428px;height:428px;">
            </div>

            <div class="col-xs-4 col-xs-push-1">
                <?php
                //store db username
                $user = 'root';
                //store db password
                $pass = 'root';
                //instantiate pdo object, passing credentials as well as setting host, dbname, and port number
                $dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

                //if request method is post
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    //hydrate variables with postdata
                    $fruitName = $_POST['fruit-name'];
                    $fruitColor = $_POST['fruit-color'];
                    $fruitImage = $_POST['fruit-image'];
                    //use pdo object to prepare an insert statement with params
                    $stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");
                    //bind those params to our variables containing postdata
                    $stmt->bindParam(':fruitname', $fruitName);
                    $stmt->bindParam(':fruitcolor', $fruitColor);
                    $stmt->bindParam(':fruitimage', $fruitImage);

                    //execute insertion
                    $stmt->execute();
                } //end request method conditional
                ?>
                <form class="form well clearfix" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="fruit-name">Fruit Name<sup>*</sup></label>
                        <input type="text" id="fruit-name" class="form-control" name="fruit-name" required>
                    </div>
                    <div class="form-group">
                        <label for="fruit-color">Fruit Color<sup>*</sup></label>
                        <input type="text" id="fruit-color" class="form-control" name="fruit-color" required>
                    </div>
                    <div class="form-group">
                        <label for="fruit-image">Fruit Image</label>
                        <input type="text" id="fruit-image" class="form-control" name="fruit-image" placeholder="http://example.com/image.jpg">
                    </div>
                    <button class="btn btn-primary pull-right" type="submit">Add Fruit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="manage-fruit">
    <div class="container">
        <div class="row">
            <div class="col-xs-4" id="fruit-ad">
                <div class="page-header">
                    <h3>Fruit of the Day</h3>
                </div>
                <h4><?= $fruitDay->fruitcolor; ?> <?= $fruitDay->fruitname; ?></h4>
                <img class="img-responsive" src="<?= $fruitDay->fruitimage; ?>">
            </div>
            <div class="col-xs-8">
                <div class="page-header">
                    <h3>All Fruit</h3>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Fruit ID</th>
                        <th>Fruit Name</th>
                        <th>Fruit Color</th>
                        <th>Image</th>
                        <th>Delete Fruit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    //use pdo object to prepare a select statement
                    $stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor, fruitimage FROM fruits;');
                    //execute selection
                    $stmt->execute();
                    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
                    //for each row returned
                    foreach($result as $row){
                        //echo out the id, name, color
                        $markup = '<tr>';
                        $markup .= '<td>'.$row['id'].'</td>';
                        $markup .= '<td>'.$row['fruitname'].'</td>';
                        $markup .= '<td>'.$row['fruitcolor'].'</td>';
                        $markup .= '<td>'.$row['fruitimage'].'</td>';
                        //last column contains a link to deletefruit.php passing the associated id as a url param
                        $markup .= '<td><a href="deletefruit.php?id='.$row['id'].'" class="btn btn-danger btn-sm btn-block">Delete</a></td>';
                        $markup .= '</tr>';
                        echo $markup;
                    } //end row for loop
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>