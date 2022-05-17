<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "osis";

// Create connection
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="asset/w3.css">
<link rel="stylesheet" href="asset/w3.css">
<style>
    @font-face {font-family: circular-std; src: url('asset/CircularStd-Black.otf'); } 
    @font-face {font-family: circular-std-book; src: url('asset/CircularStd-Book.otf'); }
    @font-face {font-family: samsung; src: url('asset/Samsung.ttf')}
body {
  background-image:url(asset/Digital_Artwork_White_Pattern_110862_1920x10801.png);
}

    .candidate-name{
        font-family: circular-std;
        font-size: 300%;
        
    }
    .text-candidate{
        font-family: circular-std;
        font-size: 100%;
    }
    .center {
        display: block;
        margin-left: 1.6%;
        margin-right: 1.6%;
        width: 50%;
}

    .description-text{
        font-family: samsung;
        font-weight: 100;
		font-size: 500%;
    }
    

</style>
</head>
<body>
    
    <image src="asset/elections.gif" width="200" height="120"></image>
    
 
<div class="w3-center w3-container w3-row w3-padding-128 ">

<?php
$sql = "SELECT * FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["cid"]. " - Name: " . $row["name"]. " " . $row["photo"]. "<br>";
		switch ($row['cid']) {
			case 1 :
				$color = 'w3-light-gray';
				break;
			case 2 :
				$color = 'w3-light-gray';
				break;
			case 3 :
				$color = 'w3-light-gray';
				break;
			case 4 :
				$color = 'w3-pale-green';
				break;
			case 5 :
				$color = 'w3-khaki';
				break;
			default :
				$color = 'w3-sand';
				
		}
		
		echo "<div class='w3-third w3-card-4 ".$color." center w3-padding-16' style='width: 30%'>";
		echo "<img src='img/".$row['nickname']."' alt='nick".$row['cid']."' style='width:80%' class='w3-circle w3-margin-top'><br>";
        echo "<h1 class = 'description-text'>".$row['total']."</h1><br>";

		echo "</div>";	
    }
} else {
    echo "0 results";
}
?>
</div>
    
    
<div class="w3-center w3-container w3-row w3-padding-64 ">
<TABLE width=80% align=center>
<TR>
    <TD ALIGN=CENTER><a href="reveal.php" class="btn btn-info btn-lg w3-light-grey"> Results </a></TD>
</TR>
</TABLE>
<br>
    </div>

<meta http-equiv="refresh" content="1"> 

</body>
</html>
