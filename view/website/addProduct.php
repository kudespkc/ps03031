<?php include '../view/website/headerad.php'; ?>
<?php 
    if(!isset($_SESSION['cus_to_mer'])){
    header("Location:".$_SERVER['SCRIPT_NAME']."?action=login");
}?>
<style>
     body{background-image:url("../view/website/images/bg.jpg");background-repeat: no-repeat;}    
</style>  
<div class="container">
    <h2>Thêm sản phẩm</h2>
    <form action="?action=addproducts" method="post" enctype='multipart/form-data' style="color:khaki;">
        <div class="form-group"">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="name" name="txtName">
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh:</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="form-group">
            <label for="description">Nội dung:</label>
            <input type="text" class="form-control" id="description" name="txtDes">
        </div>
        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="text" class="form-control" id="price" name="txtPrice">
        </div>
        <button type="submit" class="btn btn-success" value="submit">Thêm sản phẩm</button>
    </form>
</div>
