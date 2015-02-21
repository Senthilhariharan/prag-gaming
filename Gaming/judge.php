<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	
						echo nl2br("\n");
						echo nl2br("\n");
	$no = $_SESSION['sess_name'];
    if(!isset($_SESSION['sess_username']) && $role!="judge"){
      header('Location: form2.php?err=2');
    }
?>
<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
	session_start();
$n=15;
$z=0;
$a=0;
// Create connection
$path = "logos/";
$upload="/";
while($z < $n)
{
$teamid[$z]=" ";
$teamid2[$z]=" ";
$logo[$z]=" ";
$msg[$z] = " ";
$zip[$z] = " ";
$score[$z]=" ";
$time[$z] =" ";
$z++;
}
$i=0;
$j=0;
if($no == "judge1")
{
	$pt="points1";
}
else if($no == "judge2")
{
	$pt="points2";
}
else
{
	$pt="points3";
}
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT Team,logo,comment,zip,".$pt.",time FROM upload";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $teamid[$i] = $row["Team"];
		$teamid2[$i] = $row["Team"];
		$logo[$i] = $row["logo"];
		$msg[$i] = $row["comment"];
		$zip[$i] = $row["zip"];
		$score[$i] = $row["".$pt.""];
		$time[$i] = $row[time];
		$i++;
    }
}

if(isset($_POST["submits1"])){

						$points1 = $_POST["score1"];
						if($score[0] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points1' where Team = '$teamid[0]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits2"])){

						$points2 = $_POST["score2"];
						
						if($score[1] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points2' where Team = '$teamid[1]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits3"])){

						$points3 = $_POST["score3"];
						if($score[2] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points3' where Team = '$teamid[2]'" ;
						
								mysqli_query($conn, $sql);
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits4"])){

						$points4 = $_POST["score4"];
						if($score[3] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points4' where Team = '$teamid[3]'" ;
						mysqli_query($conn, $sql);
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
														

								
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						}
if(isset($_POST["submits5"])){

						$points5 = $_POST["score5"];
						if($score[4] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points5' where Team = '$teamid[4]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits6"])){

						$points6 = $_POST["score6"];
						if($score[5] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points6' where Team = '$teamid[5]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits7"])){

						$points7 = $_POST["score7"];
						if($score[6] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points7' where Team = '$teamid[6]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits8"])){

						$points8 = $_POST["score8"];
						if($score[7] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points8' where Team = '$teamid[7]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits9"])){

						$points9 = $_POST["score9"];
						if($score[8] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points9' where Team = '$teamid[8]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits10"])){

						$points10 = $_POST["score10"];
						if($score[9] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points10' where Team = '$teamid[9]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits11"])){

						$points11 = $_POST["score11"];
						if($score[10] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points11' where Team = '$teamid[10]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits12"])){

						$points12 = $_POST["score12"];
						if($score[11] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points12' where Team = '$teamid[11]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits13"])){

						$points13 = $_POST["score13"];
						if($score[12] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points13' where Team = '$teamid[12]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits14"])){

						$points14 = $_POST["score14"];
						if($score[13] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points14' where Team = '$teamid[13]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["submits15"])){

						$points15 = $_POST["score15"];
						if($score[14] == "0"){
						$sql = "UPDATE upload SET ".$pt."
						= '$points15' where Team = '$teamid[14]'" ;
						echo "<script type=\"text/javascript\">
									window.alert(\"Score awarded\");
								</script>";
						}
						else
						{
							echo "<script type=\"text/javascript\">
									window.alert(\"Score already Awarded for this team\");
								</script>";
						}
						
						mysqli_query($conn, $sql);
						}
if(isset($_POST["publishresults"])){
						
						while($j<10)
						{
						$sql = "UPDATE upload SET published
						= '1' where Team = '$teamid[$j]'" ;
						
						mysqli_query($conn, $sql);
						$j++;
						}
						echo nl2br("\n");	
						echo nl2br("\n");
						echo nl2br("\n");
						echo nl2br("\n");

						echo "Results published";
						}
?>
<!DOCTYPE html>
<html lang="en">

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
<head>
  <link href="css/modal.css" rel="stylesheet" type="text/css" />
        <link href="css/modal.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" href="logos/pragyan.jpg">

    <title>Gaming Minifest</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="form2.php">Gaming Minifest</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container homepage">
      <div class="row">
         <div class="col-md-3"></div>
            <div class="col-md-6 welcome-page">
              <h2>This is Admin area.</h2>
            </div>
          <div class="col-md-3"></div>
        </div>
    </div>    
		<center>					   
<div style="padding-left:150px" id="maindiv">
<div class="col-md-3 column productbox" id="my[0]">
<center><img src="<?php echo $path.$logo[0];?>" width="300" height="250"></center>
<div class="producttitle"><?php echo $teamid[0]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#info" id="infopop1" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[0];?></div></div>
</div>

<!-- popup form #1 -->
        <a href="#x" class="overlay" id="info"></a>
        <div class="popup">
           
            <img src="<?php echo $path.$logo[0];?>" width="300" height="250" >
            		
					
			<h2><?php echo $teamid[0]; ?></h2>
			<h4>Submitted at: <?php echo $time[0]; ?></h4>
			</br>
			<h4><?php echo $msg[0]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score1" name="score1" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits1" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[0];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>
			
					
			<a class="close" href="#close"></a>
        </div>
		
		
<div class="col-md-3 column productbox" id="my[1]" >
<center>    <img src="<?php echo $path.$logo[1];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[1]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info2" id="infopop2" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[1];?></div></div>
</div>

<!-- popup form #2 -->
        <a href="#x" class="overlay" id="info2"></a>
        <div class="popup">
		
            
            <img src="<?php echo $path.$logo[1];?>" width="300" height="250">
            
			<h2><?php echo $teamid[1]; ?></h2>
			<h4>Submitted at: <?php echo $time[1]; ?></h4>
			</br>
			<h4><?php echo $msg[1]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2"  style="width:100px">          
					<input type="text" class="form-control" id="score2" name="score2" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits2" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[1];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[2]">
 <center>   <img src="<?php echo $path.$logo[2];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[2]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info3" id="infopop3" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[2];?></div></div>
</div>

<!-- popup form #3 -->
        <a href="#x" class="overlay" id="info3"></a>
        <div class="popup">
		
            
            <img src="<?php echo $path.$logo[2];?>" width="300" height="250">
		    
			<h2><?php echo $teamid[2]; ?></h2>
            <h4>Submitted at: <?php echo $time[2]; ?></h4>
			</br>
			<h4><?php echo $msg[2]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score3" name="score3" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits3" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[2];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[3]">
 <center>   <img src="<?php echo $path.$logo[3];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[3]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info4" id="infopop4" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[3];?></div></div>
</div>

<!-- popup form #4 -->
        <a href="#x" class="overlay" id="info4"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[3];?>" width="300" height="250">
            
			
			<h2><?php echo $teamid[3]; ?></h2>
			<h4>Submitted at: <?php echo $time[3]; ?></h4>
			</br>
			<h4><?php echo $msg[3]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score4" name="score4" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits4" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[3];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>

<div class="col-md-3 column productbox" id="my[4]">
<center><img src="<?php echo $path.$logo[4];?>" width="300" height="250"></center>
<div class="producttitle"><?php echo $teamid[4]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#info5" id="infopop5" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[4];?></div></div>
</div>

<!-- popup form #5 -->
        <a href="#x" class="overlay" id="info5"></a>
        <div class="popup">
		
            
            <img src="<?php echo $path.$logo[4];?>" width="300" height="250">
            
			<h2><?php echo $teamid[4]; ?></h2>
			<h4>Submitted at: <?php echo $time[4]; ?></h4>
			</br>
			<h4><?php echo $msg[4]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px" >          
					<input type="text" class="form-control" id="score5" name="score5" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits5" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[4];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>

<div class="col-md-3 column productbox" id="my[5]">
<center>    <img src="<?php echo $path.$logo[5];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[5]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info6" id="infopop6" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[5];?></div></div>
</div>
<!-- popup form #6 -->
        <a href="#x" class="overlay" id="info6"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[5];?>" width="300" height="250">
        
			<h2><?php echo $teamid[5]; ?></h2>
			<h4>Submitted at: <?php echo $time[5]; ?></h4>
			</br>
			<h4><?php echo $msg[5]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px" >          
					<input type="text" class="form-control" id="score6" name="score6" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits6" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[5];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[6]">
 <center>   <img src="<?php echo $path.$logo[6];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[6]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info7" id="infopop7" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[6];?></div></div>
</div>
<!-- popup form #7 -->
        <a href="#x" class="overlay" id="info7"></a>
        <div class="popup">
		<?php echo $teamid[6]; ?>
            
            <img src="<?php echo $path.$logo[6];?>" width="300" height="250">
            
	     	<h2><?php echo $teamid[6]; ?></h2>
           	<h4>Submitted at: <?php echo $time[6]; ?></h4>
			</br>
			<h4><?php echo $msg[6]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px" >          
					<input type="text" class="form-control" id="score7" name="score7" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits7" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[6];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[7]">
<center>    <img src="<?php echo $path.$logo[7];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[7]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info8" id="infopop8" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[7];?></div></div>
</div>
<!-- popup form #8 -->
        <a href="#x" class="overlay" id="info8"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[7];?>" width="300" height="250">
            
			<h2><?php echo $teamid[7]; ?></h2>
			<h4>Submitted at: <?php echo $time[7]; ?></h4>
			</br>
			<h4><?php echo $msg[7]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score8" name="score8" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits8" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[7];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[8]">
<center><img src="<?php echo $path.$logo[8];?>" width="300" height="250"></center>
<div class="producttitle"><?php echo $teamid[8]; ?></div>
<div class="productprice"><div class="pull-right"><a href="#info9" id="infopop9" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[8];?></div></div>
</div>
<!-- popup form #9 -->
        <a href="#x" class="overlay" id="info9"></a>
        <div class="popup">
		
            
            <img src="<?php echo $path.$logo[8];?>" width="300" height="250">
    
			<h2><?php echo $teamid[8]; ?></h2>
			<h4>Submitted at: <?php echo $time[8]; ?></h4>
			</br>
			<h4><?php echo $msg[8]; ?></h4>
			<form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score9" name="score9" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits9" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[8];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[9]">
    <center><img src="<?php echo $path.$logo[9];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[9]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info10" id="infopop10" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[9];?></div></div>
</div>
<!-- popup form #10 -->
        <a href="#x" class="overlay" id="info10"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[9];?>" width="300" height="250">
			<h2><?php echo $teamid[9]; ?></h2>
			<h4>Submitted at: <?php echo $time[9]; ?></h4>
			</br>
			<h4><?php echo $msg[9]; ?></h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score10" name="score10" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits10" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[9];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[10]">
    <center><img src="<?php echo $path.$logo[10];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[10]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info11" id="infopop11" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[10];?></div></div>
</div>
<!-- popup form #11 -->
        <a href="#x" class="overlay" id="info11"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[10];?>" width="300" height="250">
			<h2><?php echo $teamid[10]; ?></h2>
			<h4>Submitted at: <?php echo $time[10]; ?></h4>
			</br>
			<h4><?php echo $msg[10]; ?></h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score11" name="score11" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits11" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[10];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[11]">
    <center><img src="<?php echo $path.$logo[11];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[11]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info12" id="infopop12" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[11];?></div></div>
</div>
<!-- popup form #12-->
        <a href="#x" class="overlay" id="info12"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[11];?>" width="300" height="250">
			<h2><?php echo $teamid[11]; ?></h2>
			<h4>Submitted at: <?php echo $time[11]; ?></h4>
			</br>
			<h4><?php echo $msg[11]; ?></h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score12" name="score12" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits12" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[11];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[12]">
    <center><img src="<?php echo $path.$logo[12];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[12]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info13" id="infopop13" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[12];?></div></div>
</div>
<!-- popup form #13 -->
        <a href="#x" class="overlay" id="info13"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[12];?>" width="300" height="250">
			<h2><?php echo $teamid[12]; ?></h2>
			<h4>Submitted at: <?php echo $time[12]; ?></h4>
			</br>
			<h4><?php echo $msg[12]; ?></h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score13" name="score13" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits13" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[12];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[13]">
    <center><img src="<?php echo $path.$logo[13];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[13]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info14" id="infopop14" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[13];?></div></div>
</div>
<!-- popup form #14 -->
        <a href="#x" class="overlay" id="info14"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[13];?>" width="300" height="250">
			<h2><?php echo $teamid[13]; ?></h2>
			<h4>Submitted at: <?php echo $time[13]; ?></h4>
			</br>
			<h4><?php echo $msg[13]; ?></h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score14" name="score14" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits14" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[13];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
<div class="col-md-3 column productbox" id="my[14]">
    <center><img src="<?php echo $path.$logo[14];?>" width="300" height="250"></center>
    <div class="producttitle"><?php echo $teamid[14]; ?></div>
    <div class="productprice"><div class="pull-right"><a href="#info15" id="infopop15" class="btn btn-danger btn-sm" role="button">INFO</a></div><div class="pricetext">Score:<?php echo $score[14];?></div></div>
</div>
<!-- popup form #15 -->
        <a href="#x" class="overlay" id="info15"></a>
        <div class="popup">
            
            <img src="<?php echo $path.$logo[14];?>" width="300" height="250">
			<h2><?php echo $teamid[14]; ?></h2>
			<h4>Submitted at: <?php echo $time[14]; ?></h4>
			</br>
			<h4><?php echo $msg[14]; ?></h4>
            <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			<div class="col-sm-2" style="width:100px">          
					<input type="text" class="form-control" id="score15" name="score15" placeholder="Scores">
					</div>
			<div class="col-sm-10">
			<button type="submit" name="submits15" class="btn btn-success">Submit Scores</button>
			</div>			
			</form>
			<div class="pull-right"><a href="<?php echo $zip[14];?>" download id="button1" class="btn btn-success btn-sm" role="button">Download</a></div>

            <a class="close" href="#close"></a>
        </div>
		</div></center>
		<!-- <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form">
			
			<div class="col-sm-11" style="padding-bottom:150px; margin-left:650px; Margin-top:50px;">
			<button type="submit" name="publishresults" class="btn btn-success">     Pusblish Result     </button>
			</div>			
			</form>
		-->

<script>


function load() {
	var num = 15;
	var inc=0;
	
	
	var php_var=<?php echo json_encode($teamid2)?>;
	
	

	
		
while(inc < num){
if(php_var[inc] == " ")
    document.getElementById("my["+inc+"]").style.display = 'none';
inc++;
}


}

window.onLoad=load();
    

</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	</br>
	</br>
	</br>
    </body>
</html>
