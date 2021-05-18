<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Report</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
    
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fkisdb";
        
        $con = mysqli_connect($servername, $username, $password, $dbname);

        if(mysqli_connect_errno()){
            echo "Failed to connect to database";
            exit();
        }
        
    ?>

    <center>
    <nav>GENERATE REPORT</nav><br>
    <form action="ReportController.php" method="get">
     Report ID: <input type="text" name="Report_ID"><br><br>
     Report Date: <input type="date" name="Report_Date"><br><br>
     Approval Booking: <input type="radio" id="Approve" name="Approval_Booking" value="Approve"><label for="Approve">Approve</label>
     <input type="radio" id="Reject" name="Approval_Booking" value="Reject"><label for="Reject">Reject</label><br><br>
     Order ID: <input type="text" name="Order_ID"><br><br>
     Audit ID: <input type="text" name="Audit_ID"><br><br>
     <input type="submit">
     </form>
    </center>

    


</body>
</html>
