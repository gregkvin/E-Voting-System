<?php
$server="localhost";
$user="root";
$pass="";
$db="osis";

// Create connection
$conn = new mysqli($server, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM candidate";
$result = $conn->query($sql);

?>
<script type="text/javascript">
window.onload function () {
    <?php
    $cand = -1;
    while ($row = $result->fetch_assoc()) {
    if ($cand <= $row['total']){
        $cand = $row['total'];
        $candname = $row['name'];
        $candimg = $row['photo'];
    }
    }
    ?>
}
</script>
<!DOCTYPE HTML>
<html>
<head>
<style>
    @font-face {font-family: circular-std; src: url('asset/CircularStd-Black.otf');} 
        @font-face {font-family: circular-std-book; src: url('asset/CircularStd-Book.otf');} 
            @font-face {font-family: samsung; src: url('asset/Samsung.ttf')}
                @font-face {font-family: samsung-reg; src: url('asset/SamsungReg.ttf')}
    @font-face {font-family: frontage; src: url('asset/Frontage-3D.otf')}
    @font-face {font-family: cal; src: url('asset/calendar note tfb.ttf')}
    @font-face {font-family: kg-happy; src: url('asset/KGHAPPYSolid.ttf')}
body {
    background-image:url(asset/abstract.jpg);
	overflow: hidden;
}

.congrats {
	position: absolute;
	text-align: center;
	margin:auto;
	left: 347.5;
	right:0;
    top:250;
    font-size: 150%;
	font-family:'frontage';
}
    
    .title {
	position: absolute;
	text-align: center;
	margin:auto;
	left: 350;
	right: 0;
    top:250;
    font-size: 350%;
	font-family: 'kg-happy';
}
        .ch {
	position: absolute;
	text-align: center;
	margin:auto;
	left: 360;
	right: 0;
    top:400;
    font-size: 150%;
	font-family: 'samsung-reg';
}
    .image3{
 margin: 2px;
  position:absolute;
  left:5%;
  top:27.5%;
  width: 20px;
    }
    
</style>
<div class="congrats">
	<h1>Congratulations</h1>
    </div>
    
<div class="image3">
    <?php echo "<img src= 'img/".$candimg."'style='width:1500%'>"; ?>
    </div>

    <div class='title'>
        <h2><?php echo $candname; ?></h2>
    </div>


    <div class="ch">
    <h3 style= 'font-size:150%'>- ur • new • student-council • president! -</h3>
</div>
<img src="https://bit.ly/20qKWK0" style="display:none">
</head>
</html>