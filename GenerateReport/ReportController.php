<?php
	$link = mysqli_connect("localhost", "root") or die(mysqli_connect_error());

	mysqli_select_db($link, "fkisdb") or die(mysqli_error());
    
    $Report_ID = $_POST['Report_ID'];
    $Report_Date = $_POST['Report_Date'];
    $Audit_ID = $_POST['Audit_ID'];
    $Order_ID = $_POST['Order_ID'];



    $query = "insert into `report` values('$Report_ID', '$Report_Date', '$Audit_ID' , '$Order_ID')" or die(mysqli_error());
    $result = mysqli_query($link, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Report</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>
  <center>
    <h1><b>Generate Report</b></h1>
         <div>
            <table style="width:30%; border: 3px solid maroon;" border="1">
                <tr>
                    <td><label for="Report_ID">Report ID:</label></td>
                    <td colspan="5"><?php echo $Report_ID ?></td>
                </tr>
                <tr>
                    <td><label for="Report_Date">Report Date:</label></td>
                    <td colspan="5"><?php echo $Report_Date ?></td>
                </tr>
                <tr>
                    <td><label for="Audit_ID">Audit ID:</label></td>
                    <td colspan="5"><?php echo $Audit_ID ?></td>
                </tr>
                <tr>
                    <td><label for="Order_ID">Order ID:</label></td>
                    <td colspan="5"><?php echo $Order_ID ?></td>
                </tr>
 
            </table><br>
              <br><button onclick="location.href='GenerateReportInterface.php'">Add Report</button><button onclick="location.href='DisplayReportInterface.php'">Display Report</button><br><br>
            <?php
            if($result) {
                echo '<script language="javascript">';
                echo 'alert("Data inserted")';
                echo '</script>';
			}
		    else {
			    die("Insert failed. Report_ID already exist.");
            }
            mysqli_close($link);
            ?>
        </div>


    </center>
</body>
</html>

