
<?php
    include 'connect.php';
    $auditid = $_POST['Audit_ID'];
    $adminid = $_POST['Admin_ID'];
    $itemcode = $_POST['Item_Code'];
    $itemqty = $_POST['Item_Qty'];
    
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
        $q = "INSERT INTO routine_audit (Audit_ID, Admin_ID, Item_Code, Item_Quantity) 
            VALUES ('$au', '$ad', '$ic','$iq')";
        if(mysqli_query($con, $q)){
            echo('<script>alert("New audit successful")</script>');
            echo('<script>window.location.href = "index.php";</script>');
        } else {
            echo "ERROR: Could not able to execute $q. " . mysqli_error($con);
        }
    }
   
?>

