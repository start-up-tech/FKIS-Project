<?php 
    include 'connect.php';
    $auditid = $_POST['Audit_ID'];
    $adminid = $_POST['Admin_ID'];
    $itemcode = $_POST['Item_Code'];
    $itemqty = $_POST['Item_Quantity'];
    
    if(empty($adminid)==false)
    {
        $ad = $adminid;
        $q = "UPDATE routine_audit SET Admin_ID='$ad' WHERE Audit_ID='$auditid'";
        if(mysqli_query($con, $q)){
            echo('<script>alert("Audit updated successfully")</script>');
            echo('<script>window.location.href = "index.php";</script>');
        } else {
            echo "ERROR: Could not able to execute $q. " . mysqli_error($con);
        }
    }
    
    if(empty($itemcode)==false)
    {
        $ic = $itemcode;
        $q = "UPDATE routine_audit SET Item_Code='$ic' WHERE Audit_ID='$auditid'";
        if(mysqli_query($con, $q)){
            echo('<script>alert("Audit updated successfully")</script>');
            echo('<script>window.location.href = "index.php";</script>');
        } else {
            echo "ERROR: Could not able to execute $q. " . mysqli_error($con);
        }
    }

    if(empty($itemqty)==false)
    {
        $iq = $itemqty;
        $q = "UPDATE routine_audit SET Item_Quantity='$iq' WHERE Audit_ID LIKE '%$auditid%'";
        if(mysqli_query($con, $q)){
            echo('<script>alert("Audit updated successfully")</script>');
            echo('<script>window.location.href = "index.php";</script>');
        } else {
            echo "ERROR: Could not able to execute $q. " . mysqli_error($con);
        }
    }
?>

