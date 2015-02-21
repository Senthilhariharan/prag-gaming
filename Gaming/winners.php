<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
	session_start();
error_reporting(0);
// Create connection
$path = "logos/";
$upload="/";
$n=15;
$z=0;
while($z < $n)
{
$teamid[$z]=" ";

$logo[$z]=" ";

$msg[$z] = " ";

$zip[$z] = " ";


$points[$z] = " ";
$member1[$z] = " ";
$member2[$z] = " ";
$member3[$z] = " ";
$publish[$z] = 0;
$z++;
}
$i=0;
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql1 = "SELECT points,Team,member1,member2,member3,published FROM upload ORDER BY points DESC";
$result1=$conn->query($sql1);


?>
<!DOCTYPE html>


<html lang="en">
<head>



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
  <title>Gaming Minifest</title>
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
	if($result1->num_rows > 0)
{
	
	while($row1 = $result1->fetch_assoc()){
		if($row1["published"] == 1){
		$points[$i] = $row1["points"];
		$teamid[$i] = $row1["Team"];
		$member1[$i] = $row1["member1"];
		$member2[$i] = $row1["member2"];
		$member3[$i] = $row1["member3"];
		}
		$i++;
	}
}
	?>
	<div class="col-md-3 panel panel-primary" style="position:absolute; margin-left:90px;float:left;margin-top:150px;">
   <div class="panel-heading">
      <h3 class="panel-title"><center>Winners</center></h3>
   </div>
   <div class="panel-body">
      <center><img src="logos/first.jpg" width="180" height="150"/></center>

      	<div id="container" style="width: 610px; height: 200px; float:left; margin-left: 10px;  margin-top: 10px; auto">
		<h3>Team Name:<?php echo $teamid[0];?></h3>
		
		<h4>Member 1:<?php echo $member1[0];?></h4>
				

		<h4>Member 2:<?php echo $member2[0];?></h4>
				
		<h4>Member 3:<?php echo $member3[0];?></h4>
		
		</div>

   </div>
</div>

<div class="col-md-3 panel panel-primary" style="position:absolute; margin-left:540px;float:left;margin-top:150px;">
   <div class="panel-heading">
      <h3 class="panel-title"><center>Runners-up 1</center></h3>
   </div>
   <div class="panel-body">
   <center><img src="logos/second.jpg" width="180" height="150"/></center>
      	<div id="container" style="width: 610px; height: 200px; float:left; margin-left: 10px;  margin-top: 10px; auto">
		
		<h3>Team Name:<?php echo $teamid[1];?></h3>
		<h4>Member 1:<?php echo $member1[1];?></h4>
		<h4>Member 2:<?php echo $member2[1];?></h4>
		<h4>Member 3:<?php echo $member3[1];?></h4>
		
		</div>

   </div>
</div>

<div class="col-md-3 panel panel-primary" style="margin-left:1000px; float:left; margin-top:150px;">
   <div class="panel-heading">
      <h3 class="panel-title"><center>Runners-up 2</center></h3>
   </div>
   <div class="panel-body">
      <center><img src="logos/third.jpg" width="180" height="150"/></center>
		
		<div id="container1" style="width: 650px; float:left; height: 200px; margin-right: 1px; margin-top: 10px;auto">
		<h3>Team Name: <?php echo $teamid[2];?></h3>
		<h4>Member 1:<?php echo $member1[2];?></h4>
		<h4>Member 2:<?php echo $member2[2];?></h4>
		<h4>Member 3:<?php echo $member3[2];?></h4>
		
		</div>

   </div>
</div>



   

</body>
</html>
