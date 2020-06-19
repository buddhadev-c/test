<?php
   session_start();
     include("db.php");
     if(isset($_POST['submit'])){
	 $vechileno = $_POST["vechileno"];
	$date = $_POST["date"];
	$startkimi = $_POST["startkimi"];
	$endimage= $_POST["endimage"];
	$oilqty = $_POST["oilqty"];
	$oilvalue = $_POST["oilvalue"];
	$parkinge = $_POST["parkinge"];
	$donatione = $_POST["donatione"];
	$repaire = $_POST["repaire"];
	$repairw = $_POST["repairw"];
	$spotentry = $_POST["spotentry"];
	$pbalance = $_POST["pbalance"];
	$stay = $_POST["stay"];
	$remarks = $_POST["remarks"];
	$specialnote = $_POST["specialnote"];
	$startimageup=$_FILES["startimageup"]["name"];
	$endkm=$_FILES["endkm"]["name"];
	$oilbill=$_FILES["oilbill"]["name"];
	$partsbill=$_FILES["partsbill"]["name"];
	$donationbill=$_FILES["donationbill"]["name"];
	$repair=$_FILES["repair"]["name"];
	$dir="photo/";
	move_uploaded_file($_FILES["startimageup"]["tmp_name"],"photo/".$_FILES["startimageup"]["name"]);
	move_uploaded_file($_FILES["endkm"]["tmp_name"],"photo/".$_FILES["endkm"]["name"]);
	move_uploaded_file($_FILES["oilbill"]["tmp_name"],"photo/".$_FILES["oilbill"]["name"]);
	move_uploaded_file($_FILES["partsbill"]["tmp_name"],"photo/".$_FILES["partsbill"]["name"]);
    move_uploaded_file($_FILES["donationbill"]["tmp_name"],"photo/".$_FILES["donationbill"]["name"]);
    move_uploaded_file($_FILES["repair"]["tmp_name"],"photo/".$_FILES["repair"]["name"]);
	echo $startimageup;echo $endkm;echo $oilbill;echo $partsbill;echo $donationbill;echo $repair;
   $sql="insert into cardetails(vechileno,date,startkimi,endimage,oilqty,oilvalue,parkinge,donatione,repaire,repairw,spotentry,pbalance,stay,remarks,specialnote,startimageup,endkm,oilbill,partsbill,donationbill,repair)values('$vechileno','$date','$startkimi','$endimage','$oilqty','$oilvalue','$parkinge','$donatione','$repaire','$repairw','$spotentry','$pbalance','$stay','$remarks','$specialnote','$startimageup','$endkm','$oilbill','$partsbill','$donationbill','$repair')";
  mysqli_query($con,$sql);
   echo "Upload successfully.";
						header("Location: carentry.php"); 
}
?>
</body>
</html>