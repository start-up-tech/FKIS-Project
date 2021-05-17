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
        echo "Connection Success"
        
        //Let's just say below is a forbidden move
        //mysql_connect($servername, $username, $password) or die("Error connecting to database: ".mysql_error());
	    //mysql_select_db("fkisdb") or die(mysql_error()); 
    ?>

    <nav>FKIS</nav>
    <div id="loginPanel">
        <form action="index.php" method="POST">
            <input type="text" name="search" id="" placeholder="Audit ID">
            <input type="submit" value="Search">
        </form>
    </div>

    <?php
        $output='';
        if(isset($_POST['search'])){
            $searchq = $_POST['search'];
            //$searchq = preg_replace

            $query = mysqli_query($con, "SELECT * FROM routineaudit WHERE (`Audit_ID` LIKE '%$searchq%')") or die("No Search");
            $count = mysqli_num_rows($query);
            if($count == 0){
                $output = 'No search result';
            }else{
                while($row = mysqli_fetch_array($query)){
                    $auditid = $row['Audit_ID'];
                    $adminid = $row['Admin_ID'];
                    $itemcode = $row['Item_Code'];
                    $ItemQty = $row['Item_Quantity'];

                    $output .= '<tr> <td>' .$auditid. '</td> <td>' .$adminid. '</td> <td>' .$itemcode. '</td> <td>' .$ItemQty.'</tr>';
                }
            }
        }
        print '<table>';
        print '<tr> <th>Audit ID</th> <th>Admin ID</th> <th>Item Code</th> <th>Quantity</th> </tr>';
        print("$output");
        print '</table>';
    ?>
    
</body>
</html>