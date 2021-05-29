<?php 
    include 'connect.php';
    $auditid = $_POST['Audit_ID'];
    $adminid = $_POST['Admin_ID'];
    $itemcode = $_POST['Item_Code'];
    $itemqty = $_POST['Item_Quantity'];
    
    if(empty($auditid)){
        echo('<script>alert("AUDIT ID REQUIRED")</script>');
        echo('<script>window.location.href = "index.php";</script>');
    }else{$au = $auditid;}
       
    if(empty($adminid))
    {
        echo('<script>alert("ADMIN ID REQUIRED")</script>');
        echo('<script>window.location.href = "index.php";</script>');
    }else{$ad = $adminid;}
    
    if(empty($itemcode))
    {
        echo('<script>alert("ITEM aCODE REQUIRED")</script>');
        echo('<script>window.location.href = "index.php";</script>');
    }else{$ic = $itemcode;}

    if(empty($itemqty))
    {
        echo('<script>alert("ITEM QUANTITY REQUIRED")</script>');
        echo('<script>window.location.href = "index.php";</script>');
    }else{$iq = $itemqty;}

    if(count(array_filter($_POST))==count($_POST)){
        $q = "UPDATE routine_audit SET Audit_ID='$au', Admin_ID='$ad',Item_Code='$ic',Item_Quantity='$iq' WHERE Audit_ID='$au'";
        if(mysqli_query($con, $q)){
            echo('<script>alert("Audit updated successfully")</script>');
            echo('<script>window.location.href = "index.php";</script>');
        } else {
            echo "ERROR: Could not able to execute $q. " . mysqli_error($con);
        }
    }


?>
