<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
	session_start();

// Create connection
$path = "logos/";
$upload="/";
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
$logo[0]=" ";
$logo[1]=" ";
$logo[2]=" ";
$logo[3]=" ";
$logo[4]=" ";
$logo[5]=" ";
$logo[6]=" ";
$logo[7]=" ";
$logo[8]=" ";
$logo[9]=" ";
$msg[0] = " ";
$msg[1] = " ";
$msg[2] = " ";
$msg[3] = " ";
$msg[4] = " ";
$msg[5] = " ";
$msg[6] = " ";
$msg[7] = " ";
$msg[8] = " ";
$msg[9] = " ";
$zip[0] = " ";
$zip[1] = " ";
$zip[2] = " ";
$zip[3] = " ";
$zip[4] = " ";
$zip[5] = " ";
$zip[6] = " ";
$zip[7] = " ";
$zip[8] = " ";
$zip[9] = " ";

$i=0;
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT Team,logo,comment,zip FROM upload";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $teamid[$i] = $row["Team"];
		$logo[$i] = $row["logo"];
		$msg[$i] = $row["comment"];
		$zip[$i] = $row["zip"];
		$i++;
    }
}
?>
<!DOCTYPE html>


<html lang="en">
<head>

        <link href="css/modal.css" rel="stylesheet" type="text/css" />
        <link href="css/modal.css" rel="stylesheet" type="text/css" />

<style>
.productbox {   
   background-color:#ffffff;
	padding:5px;
	margin-bottom:10px;
	margin-left:10px;
	border:3px solid #676765;
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
#maindiv{
	
text-align: center;	
}
image{
	width:"300";
	height:"250";
}
</style>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logos/pragyan.jpg">

    <title>Gaming Minifest</title>

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
          <a class="navbar-brand" href="form2.php">Gaming Minifest</a>
		  <a class="navbar-brand" href="winners.php">Winners</a>
		  <a class="navbar-brand navbar-right" href="register.php">Register</a>

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
		<center>					   
<div style="padding-left:150px" id="maindiv">
<div class="col-md-3 column productbox" id="mya">
<center><img src="<?php echo $path.$logo[0];?>" width="300" height="250"></center>
<div class="producttitle"><?php echo $teamid[0]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#info" id="infopop1" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>

<!-- popup form #1 -->
        <a href="#x" class="overlay" id="info"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[0];?>" width="300" height="250" >
            		
					
			<h2><?php echo $teamid[0]; ?></h2>
			<h4><?php echo $msg[0]; ?></h4>
			
			<div class="pull-right"><a href="<?php echo $zip[0];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>
            <a class="close" href="#close"></a>
        </div>
		
		
<div class="col-md-3 column productbox" id="myb" >
<center>    <img src="<?php echo $path.$logo[1];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[1]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info2" id="infopop2" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #2 -->
        <a href="#x" class="overlay" id="info2"></a>
        <div class="popup">
		
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[1];?>" width="300" height="250">
            
			<h2><?php echo $teamid[1]; ?></h2>
			<h4><?php echo $msg[1]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[1];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="myc">
 <center>   <img src="<?php echo $path.$logo[2];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[2]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info3" id="infopop3" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #3 -->
        <a href="#x" class="overlay" id="info3"></a>
        <div class="popup">
		
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[2];?>" width="300" height="250">
		    
			<h2><?php echo $teamid[2]; ?></h2>
            <h4><?php echo $msg[2]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[2];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="myd">
 <center>   <img src="<?php echo $path.$logo[3];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[3]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info4" id="infopop4" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #4 -->
        <a href="#x" class="overlay" id="info4"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[3];?>" width="300" height="250">
            
			
			<h2><?php echo $teamid[3]; ?></h2>
			<h4><?php echo $msg[3]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[3];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>

<div class="col-md-3 column productbox" id="mye">
<center><img src="<?php echo $path.$logo[4];?>" width="300" height="250"></center>
<div class="producttitle"><?php echo $teamid[4]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#info5" id="infopop5" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #5 -->
        <a href="#x" class="overlay" id="info5"></a>
        <div class="popup">
		
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[4];?>" width="300" height="250">
            
			<h2><?php echo $teamid[4]; ?></h2>
			<h4><?php echo $msg[4]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[4];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>

<div class="col-md-3 column productbox" id="myf">
<center>    <img src="<?php echo $path.$logo[5];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[5]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info6" id="infopop6" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #6 -->
        <a href="#x" class="overlay" id="info6"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[5];?>" width="300" height="250">
        
			<h2><?php echo $teamid[5]; ?></h2>
			<h4><?php echo $msg[5]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[5];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="myg">
 <center>   <img src="<?php echo $path.$logo[6];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[6]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info7" id="infopop7" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #7 -->
        <a href="#x" class="overlay" id="info7"></a>
        <div class="popup">
		<?php echo $teamid[6]; ?>
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[6];?>" width="300" height="250">
            
	     	<h2><?php echo $teamid[6]; ?></h2>
           	<h4><?php echo $msg[6]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[6];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="myh">
<center>    <img src="<?php echo $path.$logo[7];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[7]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info8" id="infopop8" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #8 -->
        <a href="#x" class="overlay" id="info8"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[7];?>" width="300" height="250">
            
			<h2><?php echo $teamid[7]; ?></h2>
			<h4><?php echo $msg[7]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[7];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="myi">
<center><img src="<?php echo $path.$logo[8];?>" width="300" height="250"></center>
<div class="producttitle"><?php echo $teamid[8]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#info9" id="infopop9" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #9 -->
        <a href="#x" class="overlay" id="info9"></a>
        <div class="popup">
		
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[8];?>" width="300" height="250">
    
			<h2><?php echo $teamid[8]; ?></h2>
			<h4><?php echo $msg[8]; ?></h4>

			<div class="pull-right"><a href="<?php echo $zip[8];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="myj">
    <center><img src="<?php echo $path.$logo[9];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[9]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info10" id="infopop10" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext"></div></div>
</div>
<!-- popup form #10 -->
        <a href="#x" class="overlay" id="info10"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <img src="<?php echo $path.$logo[9];?>" width="300" height="250">
			<h2><?php echo $teamid[9]; ?></h2>
			<h4><?php echo $msg[9]; ?></h4>
            
						<div class="pull-right"><a href="<?php echo $zip[9];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
		</div></center>
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
