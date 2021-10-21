<?php
include('partials-front/header.php');
?>
    <main class="container">
        <h2 style="color:green">Thêm thông tin thuốc</h2>
        <form action="process-add-drug.php" method="post">
            <div class="form-group row">
                <label for="Name" class="col-sm-2 col-form-label">Tên thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="Name" name="Name" >
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_type" class="col-sm-2 col-form-label">Loại thuốc</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="type" name="type">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_barcode" class="col-sm-2 col-form-label">Mã vạch</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="barcode" name="barcode">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_dose" class="col-sm-2 col-form-label">Liều lương</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="dose" name="dose">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_code" class="col-sm-2 col-form-label">Mã</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="code" name="code">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_cost_price" class="col-sm-2 col-form-label">Giá nhập</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cost_price" name="cost_price">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_sell" class="col-sm-2 col-form-label">Giá bán</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="sell_price" name="sell_price">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_HSD" class="col-sm-2 col-form-label">Trạng thái HSD</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="exp" name="exp">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_com" class="col-sm-2 col-form-label">Công ty</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="company" name="company">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_NSX" class="col-sm-2 col-form-label">Ngày sản xuất</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="production_date" name="production_date">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_NHH" class="col-sm-2 col-form-label">Ngày hết hạn</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" id="expiration_date" name="expiration_date">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_place" class="col-sm-2 col-form-label">Nới sản xuất</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="place" name="place">
                </div>
            </div>
            <div class="form-group row">
                <label for="drug_quantity" class="col-sm-2 col-form-label">Số lượng</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="quantity" name="quantity">
                </div>
            </div>
          

            <div class="form-group row">
                <label for="empMobile" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </form>
    </main>
    
    <?php
include('partials-front/footer.php');
?>