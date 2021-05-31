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
    <h1><b>Inform New Order</b></h1>
        <div>
            <form action="OrderController.php" method="post">
                <table style="border: 5px solid black;margin:20px;padding:100px; width:auto; background-color: #33C0FF;">
                    <tr>
                        <td><label for="Order_ID">Order ID:</label></td>
                        <td colspan="5"><input type="text" name="Order_ID"/></td>
                    </tr>
                    <tr>
                        <td><label for="Admin_ID">Admin ID:</label></td>
                        <td colspan="5"><input type="text" name="Admin_ID"/></td>
                    </tr>
                    <tr>
                        <td><label for="Item_Code">Item Code:</label></td>
                        <td colspan="5"><input type="text" name="Item_Code"/></td>
                    </tr>
                    <tr>
                        <td><label for="Item_Quantity">Item Quantity:</label></td>
                        <td colspan="5"><input type="text" name="Item_Quantity"/></td>
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