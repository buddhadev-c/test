<?php
session_start();
include("db.php");
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<title>Carentry|</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
$sql="SELECT * FROM payment";
    $q=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($q)){

$pd+=$row["payment"];
?>
<?php } ?>

<?php
$sql="SELECT * FROM stay";
    $q=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($q)){

$h=$row["homestay"];
$o=$row["outstay"];
?>
<?php } ?>

	<form class="login" action="carsave.php" method="POST" name="login" enctype="multipart/form-data">
    <h1 class="login-title">Gita| Van Details</h1><h1 class="login-title"><a href="view.php">View Details</a></h1>
	<input type="text" class="login-input" placeholder="vechileno" name="vechileno" >
    <input type="text" class="login-input" name="date" value="<?php echo $date;?>"  readonly="" >
	<label for="fileupload"> Start kimi image upload</label>
	 <input type="file" name="startimageup">
	<input type="text" class="login-input" name="startkimi" placeholder="Start Kimi">
	<label for="fileupload"> End kimi image upload</label>
	<input type="file"  name="endkm">
	<input type="text" class="login-input" name="endimage" placeholder="End Km">
	<label for="fileupload"> Oil bill image upload</label>
	<input type="file" class="login-input" name="oilbill" placeholder="Oil">
	<input type="text" class="login-input" name="oilqty" placeholder="Oil Qty">
	<input type="text" class="login-input" name="oilvalue" placeholder="Oil Value">
	<label for="fileupload">Parts Bill image upload</label>
		<input type="file" class="login-input" name="partsbill" placeholder="Parking">
		<input type="text" class="login-input" name="parkinge" placeholder="parkinge">
		<label for="fileupload"> Donation Bill image upload</label>
		<input type="file" class="login-input" name="donationbill" placeholder="donation">
		<input type="text" class="login-input" name="donatione" placeholder="donatione">
		<label for="fileupload"> Repair image upload</label>
		<input type="file" class="login-input" name="repair" placeholder="repair">
		<input type="text" class="login-input" name="repaire" placeholder="repaire">
		<input type="text" class="login-input" name="repairw" placeholder="repair value">
		<input type="text" class="login-input" name="spotentry" placeholder="spot entry">
		<input type="text" class="login-input" name="pbalance" value="<?php echo $pd;?>">
		<label for="cars">Stay</label>

<select name="stay" id="stay">
<option value="">Select Stay</option>
  <option value="<?php echo $h;?>">D/D Home</option>
  <option value="<?php echo $o;?>">Out Station</option>
  
</select>
		<input type="text" class="login-input" name="remarks" placeholder="remarks">
		<input type="text" class="login-input" name="specialnote" placeholder="special note">
		
    <input type="submit" value="Submit" name="submit" class="login-button">
  
  </form>
  

</body>
</html>