<?php
    $name = $_POST['Name'];
    $type = $_POST['type'];
    $barcode = $_POST['barcode'];
    $dose = $_POST['dose'];
    $code = $_POST['code'];
    $cost_price = $_POST['cost_price'];
    $sell_price = $_POST['sell_price'];
    $exp = $_POST['exp'];
    $company = $_POST['company'];
    $production_date = $_POST['production_date'];
    $expiration_date = $_POST['expiration_date'];
    $place = $_POST['place'];
    $quantity = $_POST['quantity'];

    include 'partials-front/connect.php';

   
    $sql = "INSERT INTO drugs(name, type, barcode, dose, code, cost_price, selling_price, 
    expiry, company_name,production_date, expiration_date,place, quantity) 
    VALUES ('$name',' $type',' $barcode','$dose','$code','$cost_price',' $sell_price',
    '$exp ','$company','$production_date','$expiration_date','$place','$quantity')";


    $result = mysqli_query($conn,$sql);
   
    if($result > 0){
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }


  
    mysqli_close($conn);


?>