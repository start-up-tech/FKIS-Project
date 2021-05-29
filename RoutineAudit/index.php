<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>
<body>
    <?php include 'connect.php';?>
    <nav><?php include '../styles/Sidebar.php'?>FKIS</nav>

    <div> 
        <button onclick="openDiv(theID = 'panelSearch')">Search</button>
        <button onclick="openDiv(theID = 'newAudit')">New</button>
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
                }else{
                    x.style.display = "none";
                    y.style.display = "block";
                }
            }
            function editAudit(auditid,adminid,itemcode,itemqty)
            {
                theEdit.style.display = "block";
                theTable.style.display = "none";
                document.getElementById("au").value = auditid;
                document.getElementById("ad").value = adminid;
                document.getElementById("ic").value = itemcode;
                document.getElementById("iq").value = itemqty;
            }
        </script>
    </div>
    <form id="panelSearch" action="index.php" method="POST">
        <input type="text" name="search" id="" placeholder="Audit ID">
        <input type="submit" value="Search">
    </form>
    <form id="newAudit" action="newAudit.php" method="POST">
        New Audit <br>
        <input type="text"   placeholder="Audit ID" name="Audit_ID">  <br>
        <input type="text"   placeholder="User ID"  name="Admin_ID">  <br>
        <input type="text"   placeholder="Item Code"  name="Item_Code"> <br>
        <input type="number" placeholder="Quantity" name="Item_Quantity">  <br>
        <input type="submit" value="Submit">
    </form>
    <form id="editAudit" action="editAudit.php" method="POST">
        Edit Audit <br>
        <input type="text"   placeholder="Audit ID"  name="Audit_ID"  id="au">  <br>
        <input type="text"   placeholder="User ID"   name="Admin_ID"  id="ad"> <br>
        <input type="text"   placeholder="Item Code" name="Item_Code" id="ic"> <br>
        <input type="number" placeholder="Quantity"  name="Item_Quantity"  id="iq">  <br>
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
                print '<table id="theTable">';
                print '<tr> <th>Audit ID</th> <th>Admin ID</th> <th>Item Code</th> <th>Quantity</th> <th>Edit</th></tr>';
                while($row = mysqli_fetch_array($query)){
                    $auditid = $row['Audit_ID'];
                    $adminid = $row['Admin_ID'];
                    $itemcode = $row['Item_Code'];
                    $itemqty = $row['Item_Quantity'];

                    //WAIT//$output .= '<tr> <td> <button>' .$auditid. '</button></td> <td>' .$adminid. '</td> <td>' .$itemcode. '</td> <td>' .$ItemQty.'<td>Edit</td></tr>';
                    $output = '<tr>
                        <td>'.$auditid.'</td>
                        <td>'.$adminid.'</td>
                        <td>'.$itemcode.'</td>
                        <td>'.$itemqty.'</td>
                        <td><button onClick="editAudit('.$auditid.','.$adminid.','.$itemcode.','.$itemqty.')">Edit</button></td>
                        </tr>';
                    print $output;
                }
                print '</table>';
            }
        }
        //WAIT//print '<table>';
        //WAIT//print '<tr> <th>Audit ID</th> <th>Admin ID</th> <th>Item Code</th> <th>Quantity</th> <th></th></tr>';
        //WAIT//print("$output");
        //WAIT//print '</table>';
    ?>
</body>
</html>