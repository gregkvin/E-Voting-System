<?php
$server="localhost";
$user="root";
$pass="";
$db="test";

// Create connection
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$vote = $_GET['choice'];
$sql = "INSERT INTO vote (vote) VALUES ('$vote')";
$result = $conn->query($sql);

$sql = "UPDATE `candidate` SET `total`=`total`+1 WHERE `cid`='$vote'";
$result = $conn->query($sql);

?>

<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/w3.css">

<title>Vote</title>
<style type=text/css>
    @font-face {font-family: circular-std; src: url('asset/CircularStd-Black.otf'); } 
        @font-face {font-family: circular-std-book; src: url('asset/CircularStd-Book.otf'); }
        @font-face {font-family: frontage; src: url('asset/Frontage-3D.otf')}
body{
  background-image:url(asset/white.jpg);
    
} 
h1 {
  font-family: circular Std;
  font-size: 200px;
  color: black;
  text-align: left;
  position: absolute;
  left: 0;
  top: 5%;
  width: 100%;
}

h2 {
  font-family: frontage;
  font-size: 30px;
  color: black;
  text-align: center;
    position: absolute;
    top: 30%;
  width: 100%;
  -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
  -webkit-animation-duration: 15s; /* Safari 4.0 - 8.0 */
}
    
h3.bold {
  font-family: circular Std;
  font-size: 15px;
  color: black;
  font-weight: bold;
  text-align: center;
  position: absolute;
  left: 25%;
  top:90%;
  width: 50%;
  animation-name: font;
  animation-duration: 15s;

}
    }
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
    }
    
    td{
        font-family: circular-std-book;
    }
   
    
</style>
    </head>
<body>
    <h2 ALIGN center>NOTED. THANKS!</h2><br>
    <TABLE width=80% align=center>
    <TR>
        <TD ALIGN=CENTER><a href="inputvoting.php" class="btn btn-info btn-lg w3-light-grey"><span class="glyphicon glyphicon-backward"></span> Back</a></TD>
        </TR>
    </TABLE>
    </body>
    
    
 
</html>
    
