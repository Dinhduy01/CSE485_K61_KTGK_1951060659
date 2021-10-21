<?php
    $id = $_GET['id'];
    
    include 'partials-front/connect.php';

  
    $sql = "delete from drugs where id ='$id'";

  
    $result = mysqli_query($conn,$sql);
    
    if($result> 0){
        header("Location:index.php");
    }else{
        echo "Lỗi!";
    }

    mysqli_close($conn);


?>