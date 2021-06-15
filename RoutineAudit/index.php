<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/audit.css">
</head>
<body>
    <?php include 'connect.php';?>
    <nav><?php include '../styles/sidebaradmin.php'?>FK Inventory System</nav>

    <div> 
        <button onclick="openDiv(theID = 'panelSearch')">Search</button>
        <button onclick="openDiv(theID = 'newAudit')">New</button>
        <br><br>
        <script type="text/javascript" src="./audit.js"></script>
    </div>
    <form id="panelSearch" action="index.php" method="POST">
        <input type="text" name="search" id="" placeholder="Audit ID">
        <input type="submit" value="Search">
    </form>
    <form id="newAudit" action="newAuditController.php" method="POST">
        <h3>New Audit</h3> <br>
        <input type="text"   placeholder="Audit ID" name="Audit_ID">  <br>
        <input type="text"   placeholder="User ID"  name="Admin_ID">  <br>
        <input type="text"   placeholder="Item Code"  name="Item_Code"> <br>
        <input type="number" placeholder="Quantity" name="Item_Quantity">  <br>
        <input type="submit" value="Submit">
    </form>
    <?php
        $output='';
        if(isset($_POST['search'])){
            $searchq = $_POST['search'];
            //$searchq = preg_replace
                
            $query = mysqli_query($con, "SELECT * FROM routine_audit WHERE (`Audit_ID` LIKE '%$searchq%')") or die("No Search");
            $count = mysqli_num_rows($query);
            if($count == 0){
                $output = 'No search result';
            }else{
                print '<div> <h3>Search results</h3>
                        <table id="theTable" 
                            style="margin-left:auto;
                            margin-right:auto; 
                            border-left: 5px #f7f7f7 solid;
                            border-right: 5px #f7f7f7 solid;
                            border-bottom: 5px #f7f7f7 solid;
                            background-color:#F2F2F2;">';
                print '<tr> <th>Audit ID</th> <th>Admin ID</th> <th>Item Code</th> <th>Quantity</th> </tr>';
                while($row = mysqli_fetch_array($query)){
                    $auditid = $row['Audit_ID'];
                    $adminid = $row['Admin_ID'];
                    $itemcode = $row['Item_Code'];
                    $itemqty = $row['Item_Quantity'];

                    print '<tr>
                        <td>'.$auditid.'</td>
                        <td>'.$adminid.'</td>
                        <td>'.$itemcode.'</td>
                        <td>'.$itemqty.'</td>
                        <td><button 
                            style="
                                border: none; 
                                border-radius: 12px;
                                background-color: #1090d7; 
                                padding: 5px 15px 5px 15px;
                                margin:5px 5px 5px 5px;
                                " 
                            onClick="editAudit('.$auditid.')">Edit</button></td>
                        </tr>';
                }
                print '</table></div>';
            }
        }
    ?>
    <form id="editAudit" action="editAuditController.php" method="POST">
        <script>
            function editAudit(theAudit)
            {
                theEdit.style.display = "block";
                theTable.style.display = "none";
                document.getElementById("au").innerHTML = "<h3>Edit Audit</h3> <br>Audit ID:"+theAudit;
                document.getElementById("aud").value = theAudit;
                document.title = "Edit Audit";
            
            }
        </script>
        <p id="au"></p>
        <p>note: only input the value that you wish to edit </p>
        <input type = "hidden" id="aud" name = "Audit_ID"/>
        <input type="text"   placeholder="Admin ID"  name="Admin_ID"> <br>
        <input type="text"   placeholder="Item Code" name="Item_Code"> <br>
        <input type="number" placeholder="Quantity"  name="Item_Quantity">  <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>