<?php
include('partials-front/header.php');
?>
<main>
<div class="container">
    <h2 class="heading " style="color:green">Thông tin cơ bản của thuốc</h2>     
    <div class="col">
    <a href="add_drugs.php" class="btn btn-success"><i class="fas fa-plus"></i> Thêm Loại Thuốc</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên thuốc</th>
                <th scope="col">Loại thuốc</th>             
                <th scope="col">Giá bán</th>
                <th scope="col">Trạng thái HSD</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Xóa</th>
                <th scope="col">Sửa</th>

            </tr>
        </thead>
        <tbody>
            
                <?php
                 
                
                
                    $sql = "SELECT * FROM drugs";
                    $result = mysqli_query($conn,$sql); 
               
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['type'].'</td>';
                            echo '<td>'.$row['selling_price'].'</td>';
                            echo '<td>'.$row['expiry'].'</td>';
                            echo '<td>'.$row['quantity'].'</td>';
                            echo '<td><a href="details_drugs.php?id='. $id.'">Chi tiết</a></td>';
                            echo '<td><a href="delete_drug.php?id='. $id.'"><i class="fas fa-trash-alt"></i></a></td>';
                            echo '<td><a href="update_drugs.php?id='. $id.'"><i class="fas fa-pen"></i></a></td>';
                            echo '</tr>';
                            
                        }
                    }
                    
                ?>
                
            
            </tbody>
    </table>
</div>
</main>
<?php
include('partials-front/footer.php');
?>