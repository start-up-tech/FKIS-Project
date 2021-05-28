<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <nav><?php include '../styles/Sidebar.php'?>FKIS</nav>
  <center>
    <h1><b>Delete Order</b></h1>
        <div>
            <form action="" method="post">
                <table style="border: 5px solid black;margin:20px;padding:100px; width:auto; background-color: #33C0FF;">
                    <tr>
                        <th>Enter Order ID to delete</th>
                        <td><label for="Order_ID">Order ID:</label></td>
                        <td colspan="5"><input type="text" name="Order_ID"/></td>
                        <td colspan="5"><input type="submit" name="delete" value="Delete ID" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
<?php
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "fkisdb") or die(mysqli_error());
 
if(isset($_POST['delete']))
{
    $Order_ID = $_POST['Order_ID'];
 
$query = "DELETE FROM `new_order` WHERE Order_ID='$Order_ID' ";
$query_run = mysqli_query($link,$query);

if($query_run)
{
    echo "Records were deleted successfully.";
} else
{
    echo "ERROR: Could not able to execute.";
}
}
 
mysqli_close($link);
?>
<br><button onclick="location.href='ModelOrder.php'">View Latest List</button><br>