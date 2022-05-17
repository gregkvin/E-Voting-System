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

<link rel="stylesheet" href="asset/w3.css">
<style>
    @font-face {font-family: circular-std; src: url('asset/CircularStd-Black.otf'); } 
    @font-face {font-family: circular-std-book; src: url('asset/CircularStd-Book.otf'); } 
     @font-face {font-family: samsung-reg; src: url('asset/SamsungReg.ttf')}
        @font-face {font-family: frontage; src: url('asset/Frontage-3D.otf')}
body {
  background-image:url(asset/white.jpg);
}
    .voting-title{
        font-family: circular-std;
        font-size: 800%
    }
    .candidate-name{
        font-family: samsung-reg;
        font-size: 250%;
        
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
        font-family: circular-std-book;
        font-weight: 100;
    }
    
        h6{
        position: fixed;
        top:200px;
        left:580px;
        font-family: frontage;
        font-size:200%;
        
    }

</style>
            
</head>
<body>

 
<div class="w3-center w3-container w3-row w3-padding-64 ">
    <h6 class=w3-padding-very-small></h6>

<?php
$sql = "SELECT * FROM candidate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["cid"]. " - Name: " . $row["name"]. " " . $row["photo"]. "<br>";
		switch ($row['cid']) {
			case 1 :
				$color = 'w3-pale-purple';
				break;
			case 2 :
				$color = 'w3-pale-purple';
				break;
			case 3 :
				$color = 'w3-pale-purple';
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
		
		echo "<div class='w3-third ".$color." center' style='width: 30%'>";
		echo "<a href='#' onclick=document.getElementById('id0".$row['cid']."').style.display='block'>";
		echo "<img src='img/".$row['photo']."' alt='candidate".$row['cid']."' style='width:50%' class='w3-hover-shadow w3-circle w3-margin-top'></a><br>";
    	echo "<a class ='candidate-name'>".$row['name']."</a><br>";
    	echo "<a class = 'text-candidate'>CANDIDATE NO.	 ".$row['cid']."</a><br>";
        echo "<a class = 'description-text'>".$row['description']."</a><br>";
		echo "<a href='savevote.php?choice=".$row['cid']."'><button class='w3-white w3-button w3-round-xlarge w3-margin-bottom w3-margin-top'>VOTE</button></a>";
		echo "</div>";
?>
<div id="id0<?php echo $row['cid']; ?>" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <span onclick="document.getElementById('id0<?php echo $row['cid']; ?>').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
      </div>
      <div class="w3-section">
        <h2><?php echo $row['name']; ?></h2>
		<h4><?php echo $row['description']; ?></h4>
      </div>
	  <div class="w3-container w3-light-grey w3-padding">
		<button class="w3-button w3-right w3-white w3-border" onclick="document.getElementById('id0<?php echo $row['cid']; ?>').style.display='none'">Close</button>
          
  </div>
  </div>
</div>
    
<?php	
    }
} else {
    echo "0 results";
}
?>
    
</div>
</body>
</html>
