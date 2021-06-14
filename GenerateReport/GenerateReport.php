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
            <form action="ReportController.php" method="post">
                <table style="border: 3px solid maroon;margin:10px;padding:50px; width:auto;">
                    <tr>
                        <td><label for="Report_ID">Report ID:</label></td>
                        <td colspan="5"><input type="text" name="Report_ID" required/></td>
                    </tr>
                    <tr>
                        <td><label for="Report_Date">Report Date:</label></td>
                        <td colspan="5"><input type="date" name="Report_Date" required/></td>
                    </tr>
                    <tr>
                        <td><label for="Approved_Booking">Approved Booking:</label></td>
                        <td colspan="5"><input type="text" name="Approved_Booking" required/></td>
                    </tr>
                    <tr>
                        <td><label for="Audit_ID">Audit ID:</label></td>
                        <td colspan="5"><input type="text" name="Audit_ID" required/></td>
                    </tr>
                    <tr>
                        <td><label for="Order_ID">Order ID:</label></td>
                        <td colspan="5"><input type="text" name="Order_ID" required/></td>
                   </tr>
                   <tr>
                        <td>
                            <br><input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>