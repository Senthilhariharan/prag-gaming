<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
	session_start();

// Create connection
$teamid[0]=" ";
$teamid[1]=" ";
$teamid[2]=" ";
$teamid[3]=" ";
$teamid[4]=" ";
$teamid[5]=" ";
$teamid[6]=" ";
$teamid[7]=" ";
$teamid[8]=" ";
$teamid[9]=" ";
$i=0;
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT Team FROM upload";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $teamid[$i] = $row["Team"];
		$i++;
    }
}
?>
<!DOCTYPE html>


<html lang="en">
<head>


<style>
.productbox {   
   background-color:#ffffff;
	padding:10px;
	margin-bottom:10px;
	-webkit-box-shadow: 0 8px 6px -6px  #999;
	   -moz-box-shadow: 0 8px 6px -6px  #999;
	        box-shadow: 0 8px 6px -6px #999;
}

.producttitle {
    font-weight:bold;
	padding:5px 0 5px 0;
}

.productprice {
	border-top:1px solid #dadada;
	padding-top:5px;
}

.pricetext {
	font-weight:bold;
	font-size:1.4em;
}
</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body id="hey">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
           
		  <form class="navbar-form navbar-right" action="authenticate.php" method="POST" role="form">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
             <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	</br>
	</br>
	</br>
	</br>
<?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>
							   
<div style="padding:30px">
<div class="col-md-2 column productbox" id="mya">
<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
<div class="producttitle"><?php echo $teamid[0]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>


<div class="col-md-2 column productbox" id="myb">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[1]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox" id="myc">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[2]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox" id="myd">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[3]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>

<div class="col-md-2 column productbox" id="mye">
<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
<div class="producttitle"><?php echo $teamid[4]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>


<div class="col-md-2 column productbox" id="myf">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[5]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox" id="myg">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[6]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>
<div class="col-md-2 column productbox" id="myh">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[7]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>

<div class="col-md-2 column productbox" id="myi">
<img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
<div class="producttitle"><?php echo $teamid[8]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>


<div class="col-md-2 column productbox" id="myj">
    <img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive">
    <div class="producttitle"><?php echo $teamid[9]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">£8.95</div></div>
</div>

<script>


//php_var = <?php echo json_encode($teamid[0]) ?>;
function load() {
	var php_var1= <?php echo json_encode($teamid[0])?>;
		var php_var2= <?php echo json_encode($teamid[1])?>;

			var php_var3= <?php echo json_encode($teamid[2])?>;
		var php_var4= <?php echo json_encode($teamid[3])?>;
		var php_var5= <?php echo json_encode($teamid[4])?>;
		var php_var6= <?php echo json_encode($teamid[5])?>;

			var php_var7= <?php echo json_encode($teamid[6])?>;
		var php_var8= <?php echo json_encode($teamid[7])?>;
		var php_var9= <?php echo json_encode($teamid[8])?>;
		var php_var10= <?php echo json_encode($teamid[9])?>;

			

if(php_var1 == " ")
    document.getElementById("mya").style.display = 'none';
if(php_var2 == " ")
    document.getElementById("myb").style.display = 'none';
if(php_var3 == " ")
    document.getElementById("myc").style.display = 'none';
if(php_var4 == " ")
    document.getElementById("myd").style.display = 'none';

if(php_var5 == " ")
    document.getElementById("mye").style.display = 'none';
if(php_var6 == " ")
    document.getElementById("myf").style.display = 'none';
if(php_var7 == " ")
    document.getElementById("myg").style.display = 'none';
if(php_var8 == " ")
    document.getElementById("myh").style.display = 'none';


if(php_var9 == " ")
    document.getElementById("myi").style.display = 'none';
if(php_var10 == " ")
    document.getElementById("myj").style.display = 'none';

}
window.onLoad=load();
    

</script>
</body>
</html>
