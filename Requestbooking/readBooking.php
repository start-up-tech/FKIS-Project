<html>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include("control.php");

$query = "SELECT * FROM booking";
$result = mysqli_query($conn,$query); 

if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){	

      $staffid=$row ["Staff_ID"];
      $item=$row ["Item_Code"]; 
      $qty=$row ["Item_Quantity"]; 
	  ?>
	  
	  Staff id: <?php echo $staffid; ?><br>
	  Item:    <?php echo $item; ?><br>
	  Quantity:  <?php echo $qty; ?><br>
	<?php
    }
} else {
    echo "0 results";

}
?>
	 
</body>
</html>
