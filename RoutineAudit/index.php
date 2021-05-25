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
    <?php include 'connect.php';?>

    <nav>FKIS</nav>
    <div> 
        <button onclick="openDiv(theID = 'panelSearch')">Search</button>
        <button onclick="openDiv(theID = 'newAudit')">New</button>
        <button onclick="openDiv(theID = 'editAudit')">Edit</button>
        <br><br>
        <script>
            var theID;
            var theSearch;
            var theNew;
            var theEdit;
            window.onload = function(){
                loadPage();
            }
            function loadPage(){
                theSearch = document.getElementById('panelSearch');
                theNew = document.getElementById('newAudit');
                theEdit = document.getElementById('editAudit');
                theSearch.style.display = "none";
                theNew.style.display = "none";
                theEdit.style.display = "none";
            }
            
            function openDiv(theId){
                var x = document.getElementById(theID);
                switch(theID){
                    case 'panelSearch':
                        var y = theNew;
                        break;
                    case 'newAudit':
                        var y = theSearch;
                        break;
                    default :
                        break;
                }
                if (x.style.display === "none") {
                    x.style.display = "block";
                    y.style.display = "none";
                }
            }
        </script>
    </div>
    <div id="panelSearch">
        <div id="contentPanel">
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

                $query = mysqli_query($con, "SELECT * FROM routine_audit WHERE (`Audit_ID` LIKE '%$searchq%')") or die("No Search");
                $count = mysqli_num_rows($query);
                if($count == 0){
                    $output = 'No search result';
                }else{
                    while($row = mysqli_fetch_array($query)){
                        $auditid = $row['Audit_ID'];
                        $adminid = $row['Admin_ID'];
                        $itemcode = $row['Item_Code'];
                        $ItemQty = $row['Item_Quantity'];

                        $output .= '<tr> <td> <button>' .$auditid. '</button></td> <td>' .$adminid. '</td> <td>' .$itemcode. '</td> <td>' .$ItemQty.'</tr>';
                    }
                }
            }
            print '<table>';
            print '<tr> <th>Audit ID</th> <th>Admin ID</th> <th>Item Code</th> <th>Quantity</th> </tr>';
            print("$output");
            print '</table>';
        ?>
    </div>

    <div id="newAudit">
        <form action="" method="post">
            <input type="text" placeholder="User ID"> <br>
            <input type="text" placeholder="Audit ID"> <br>
            <input type="text" placeholder="Item ID"> <br>
            <input type="number" name="" id="" placeholder="Quantity">
        </form>
    </div>
    
    
</body>
</html>