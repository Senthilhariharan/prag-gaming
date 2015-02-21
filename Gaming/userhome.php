<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
	$name = $_SESSION['sess_username'];
    if(!isset($_SESSION['sess_username']) && $role!="user"){
      header('Location: form1.php?err=2');
    }
?>
<?php


Error_reporting(0);
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
       if ('.' === $file || '..' === $file) continue;
       if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
       else unlink("$dir/$file");
   }
   
   rmdir($dir);
}

if($_FILES["zip_file"]["name"]) {
	$filename = $_FILES["zip_file"]["name"];
	$source = $_FILES["zip_file"]["tmp_name"];
	$type = $_FILES["zip_file"]["type"];
	
	$name = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "The file you are trying to upload is not a .zip file. Please try again.";
	}

  /* PHP current path */
  $path = dirname(__FILE__).'/';  // absolute path to the directory where zipper.php is in
  $filenoext = basename ($filename, '.zip');  // absolute path to the directory where zipper.php is in (lowercase)
  $filenoext = basename ($filenoext, '.ZIP');  // absolute path to the directory where zipper.php is in (when uppercase)
    
  $targetdir = $path . $filenoext; // target directory
  $targetzip = $path . $filename; // target zip file
  
  /* create directory if not exists', otherwise overwrite */
  /* target directory is same as filename without extension */
  
  if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
 
     
 // mkdir($targetdir, 0777);
  
  
  /* here it is really happening */
	

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
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
  <script>
  function validateForm() {
    var x = document.forms["form"]["Team"].value;
	var mem1 = document.forms["form"]["member1"].value;
	var logo = document.forms["form"]["fileToUpload"].value;
	var comment = document.forms["form"]["comment"].value;
	var game = document.forms["form"]["zip_file"].value;
    if (x == null || x == "") {
        alert("Team Name must be filled out");
        return false;
    }
	if (mem1 == null || mem1 == "" ){
		alert("Please enter the names of the members");
		return false;
    }
	if(logo == null || logo ==""){
		alert("Please upload a logo");
				return false;

	}
	if(comment == null || comment == ""){
		alert("Please give a game description");
				return false;

		
	}
	if( game == null || game==""){
		alert("Please upload the game file (.zip)")
				return false;

	}
}
	
	
  </script>
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
			<?php
$target_dir = "logos/";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
	

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$found=0;

if(isset($_POST["submit"])){
$team = mysqli_real_escape_string($conn, $_POST["Team"]);
	$member1 = mysqli_real_escape_string($conn, $_POST["member1"]);
	$member2 = mysqli_real_escape_string($conn, $_POST["member2"]);
	$member3 = mysqli_real_escape_string($conn, $_POST["member3"]);
	$platform = $_POST["platform"];
	$comment = $_POST["comment"];
	$logo = $_FILES["fileToUpload"]["name"];
	$file = $_FILES["zip_file"]["name"];
	
	$sql1 = "SELECT Team FROM upload WHERE Team = '$team'";
	$result1=$conn->query($sql1);
	if($result1->num_rows == 0)
	{
	
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			if(move_uploaded_file($source, $targetzip)) {
		$zip = new ZipArchive();
		$x = $zip->open($targetzip);  // open the zip file to extract
		//if ($x === true) {
			//$zip->extractTo($targetdir); // place in the directory with same name  
			//$zip->close();
	
			unlink($targetzip);
		//}
		$message = "Your .zip file was uploaded and unpacked.";
	} else {	
		$message = "There was a problem with the upload. Please try again.";
	}
		$sql = "INSERT INTO upload (Team, member1, member2, member3,platform,comment,zip,logo,uploaded)
		VALUES ('$team','$member1' ,'$member2' ,'$member3','$platform','$comment','$file','$logo','$name')";
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
		
    }
}


if (mysqli_query($conn, $sql)) {
    echo "Form Submitted Successfully";
} else {
     echo "Form Not Submitted";
}
	}	
	else{
		echo "You have already submitted your game";
	}
}
mysqli_close($conn);
?>
    </br>
	</br>
	</br>
	</br>
	<h2>Game Upload</h2>
	<form class="form-horizontal" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()" name ="form" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Team">Team:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Team" name="Team" placeholder="Enter your Team name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="member1">Member1</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="member1" name="member1" placeholder="Enter the name ">
      </div> 
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="member2">Member2</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="member2" name="member2" placeholder="Enter the name ">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="member3">Member3</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="member3" name="member3" placeholder="Enter the name ">
    </div>
    </div>
	<div class="form-group"> 
		<div >
		<Label>GameLogo (less than 5MB)</Label>
			<div class="file" class="control-label col-sm-10">
          	  <center><label><input type="file" name="fileToUpload" id="fileToUpload" placeholder="GAME LOGO"/></label></center>

			</div>
		</div>

    </div>
    <div class="form-group">   
		<label class="control-label col-sm-2" for="platform">Platform</label>
	    <div class="col-sm-10">
        <div class="radio">
		
					<label><input type="radio" name="platform" value="0">Windows</label>
		            <label><input type="radio" name="platform" value="1">Android</label>
					<label><input type="radio" name="platform" value="2">Web</label>
		
		 </div>
		</div>
		</div>
	  </br>
	  </br>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="Desc">Game Description</label>
      <div class="col-sm-10">          
	  
        <textarea name='comment' id='comment' placeholder = "Game description"></textarea>
      </div>
    </div>
	  </br>
	  </br>
	<div class="form-group">   
	
		<div class="col-sm-offset-2 col-sm-8">
		<label>Game File ( .zip format )</label>	
	<div class="file">
          	  <label><input type="file" name="zip_file" id="zip_file" placeholder="Game"/></label>

			</div>
		</div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
  	
            </div>
          <div class="col-md-3"></div>
        </div>
    </div>    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

</html>
